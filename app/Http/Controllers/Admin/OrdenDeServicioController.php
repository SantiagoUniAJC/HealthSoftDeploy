<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\OrdenDeServicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Carbon\Carbon;

class OrdenDeServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ordendeservicios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ordendeservicios.create');
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
    public function show(string $id)
    {
        $ordendeservicio = OrdenDeServicio::findOrFail($id);
        return view('admin.ordendeservicios.show', compact('ordendeservicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $ordendeservicio = OrdenDeServicio::findOrFail($id);
        return view('admin.ordendeservicios.edit', compact('ordendeservicio'));
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
     * Generate PDF
     */
    public function generatePDF(string $id)
    {
        $ordendeservicio = OrdenDeServicio::findOrFail($id);
        $citas = Cita::where('paciente_id', $ordendeservicio->paciente->id)->get();
        $user = auth()->user();
        $fechaNacimiento = Carbon::parse($ordendeservicio->paciente->fecha_de_nacimiento);
        $edad = $fechaNacimiento->age;;

        $data = [
            'title' => 'Tarifario de Cliente',
            'date' => date('m/d/Y'),
            'ordendeservicio' => $ordendeservicio,
            'user' => $user,
            'edad' => $edad,
            'citas' => $citas
        ];

        $pdf = FacadePdf::loadView('admin.ordendeservicios.generar-pdf', $data);

        return Response::make($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename=ordendeservicio.pdf'
        ]);
    }
}
