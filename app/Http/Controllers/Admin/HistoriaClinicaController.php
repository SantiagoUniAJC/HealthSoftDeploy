<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Cita;
use App\Models\HistoriaClinica;
use App\Models\OrdenDeServicio;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Response;

class HistoriaClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.historiasclinicas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.create', compact('paciente', 'cita'));
    }

    public function infoLaboralActual(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.info-laboral-actual', compact('paciente', 'cita'));
    }

    public function motivoConsulta(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.motivo-consulta', compact('paciente', 'cita'));
    }

    public function antecedentesFamiliares(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.antecedentes-familiares', compact('paciente', 'cita'));
    }

    public function antecedentesPersonales(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.antecedentes-personales', compact('paciente', 'cita'));
    }

    public function habitosExtralaborales(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.habitos-extralaborales', compact('paciente', 'cita'));
    }

    public function revisionPorSistemas(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.revision-por-sistemas', compact('paciente', 'cita'));
    }

    public function examenFisico(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.examen-fisico', compact('paciente', 'cita'));
    }

    public function pruebasNeurologicas(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.pruebas-neurologicas', compact('paciente', 'cita'));
    }

    public function examenesComplementarios(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.examenes-complementarios', compact('paciente', 'cita'));
    }

    public function diagnostico(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.diagnostico', compact('paciente', 'cita'));
    }

    public function sistemaVigilanciaEpidemiologica(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.sistema-vigilancia-epidemiologica', compact('paciente', 'cita'));
    }

    public function recomendacionesMedicas(String $paciente_id, String $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $cita = Cita::find($cita_id);
        
        return view('admin.historiasclinicas.recomendaciones-medicas', compact('paciente', 'cita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $paciente_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $paciente_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $paciente_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $paciente_id)
    {
        //
    }

    /**
     * Genera un PDF con la información de la historia clínica.
     */

     public function generatePDF(string $paciente_id, string $cita_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
        $historiaClinica = HistoriaClinica::where('paciente_id', $paciente->id)->first();
        $ordenServicio = OrdenDeServicio::where('paciente_id', $paciente->id)->first();
    
        $now = Carbon::now()->format('d F Y');
        $edad = Carbon::parse($paciente->fecha_de_nacimiento)->age;

        if (!$historiaClinica) {

            return redirect('historiasclinicas')->with('danger', 'El Paciente aun no tiene historia clínica generada.');
        } else {
            $data = [
                'paciente' => $paciente,
                'ordenServicio' => $ordenServicio,
                'historiaClinica' => $historiaClinica,
                'now' => $now,
                'edad' => $edad,
            ];

            $pdf = PDF::loadView('admin.historiasclinicas.pdf', $data);

            return Response::make($pdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename=historiaClinica.pdf'
            ]);
        }
    }
}
