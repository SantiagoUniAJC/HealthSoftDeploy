<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\OrdenDeServicio;
use Carbon\Carbon;


class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todas_citas = Cita::all();
        $citas = [];

        foreach ($todas_citas as $evento) {

            $url = route('admin.historias-clinicas.create', ['paciente_id' => $evento->paciente->id, 'cita_id' => $evento->id]);
            $url_disable = true;
            // Verificar si la cita ya paso
            if ($evento->fecha_fin < Carbon::now()) {
                $url_disable = false;
            }

            $citas[] = [
                'title' => $evento->paciente->nombres . ' ' . $evento->paciente->apellidos,
                'subject' => $evento->nombre_examen,
                'start' => $evento->fecha_inicio,
                'end' => $evento->fecha_fin,
                'url' => $url_disable ? $url : '',
            ];
        }

        return view('admin.agendas.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_inicio' => 'required',
        ]);

        $nombre_examen = $request->input('nombre_examen');
        $tipo_examen = $request->input('tipo_examen_modal');
        $fecha_inicio = Carbon::parse($request->input('fecha_inicio'))->toDateTimeString();
        $fecha_fin = Carbon::parse($fecha_inicio)->addMinutes(14)->toDateTimeString();
        $paciente_id = $request->input('paciente_id');
        $especislista_id = $request->input('especialista_id');
        $observaciones = $request->input('observaciones');

        // Validación de existencia en la BBDD
        $existe_agenda = Cita::where(function ($query) use ($fecha_inicio, $fecha_fin) {
            $query->whereBetween('fecha_inicio', [$fecha_inicio, $fecha_fin])
                ->orWhereBetween('fecha_fin', [$fecha_inicio, $fecha_fin])
                ->orWhere(function ($query) use ($fecha_inicio, $fecha_fin) {
                    $query->where('fecha_inicio', '<', $fecha_inicio)
                        ->where('fecha_fin', '>', $fecha_fin);
                });
        })
            ->exists();

        // Verificar si el paciente tiene una cita activa actualmente
        $cita_activa = Cita::where('paciente_id', $paciente_id)
            ->where('fecha_fin', '>', Carbon::now())
            ->exists();

        // Verificar si existe una agenda en el horario seleccionado
        if ($existe_agenda) {
            return back()->withInput()->with('danger', 'Ya existe una cita programada en ese horario.');
        }

        // Si la cita ya ha pasado, permitir una nueva cita independientemente
        if (!$cita_activa && Carbon::parse($fecha_inicio)->isPast()) {
            $cita_activa = true;
        }

        if ($cita_activa) {
            return back()->withInput()->with('danger', 'No se puede programar otra cita mientras el paciente tenga una cita activa.');
        }

        // Crear la cita
        Cita::create([
            'nombre_examen' => $nombre_examen,
            'tipo_examen' => $tipo_examen,
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'paciente_id' => $paciente_id,
            'especialista_id' => $especislista_id,
            'observaciones' => $observaciones,
        ]);

        //Al crear la cita la orden de servicio cambia de estado Pendiente Agendar a En Proceso
        $ordendeservicio = OrdenDeServicio::where('paciente_id', $paciente_id)->first();
        if ($ordendeservicio) {
            $ordendeservicio->estado = 'En Proceso';
            $ordendeservicio->save();
        }
        return redirect()->route('admin.agendas.index')->with('success', 'Cita creada exitosamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cita = Cita::findOrFail($id);
        return view('admin.agendas.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Muestra la vista de asistencia de citas
     */
    public function asistenciaCitas()
    {
        return view('admin.agendas.asistencia-citas');
    }

    /**
     * Muestra la vista de citas pendientes
     */
    public function citasPendientes()
    {
        return view('admin.agendas.citas-pendientes');
    }
}
