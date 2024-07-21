<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConceptoMedico;
use App\Models\HistoriaClinica;
use App\Models\PrestadorDeSalud;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

class ConceptoMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.conceptosmedicos.index');
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
        //
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
        //
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
     * Mostrar los conceptos médicos Abiertos
     */

    public function conceptosAbiertos()
    {
        return view('admin.conceptosmedicos.conceptos-abiertos');
    }


    /**
     * Crear un documento PDF con la información del concepto médico.
     */

    public function certificadoMedicoPDF(string $id)
    {

        $now = Carbon::now();
        $concepto = ConceptoMedico::find($id);
        $edad = Carbon::parse($concepto->paciente->fecha_de_nacimiento)->age;

        $data = [
           
            'now' => $now,
            'concepto' => $concepto,
            'edad' => $edad,

        ];

        $pdf = PDF::loadView('admin.conceptosmedicos.certificado-medico-pdf', $data);

        return Response::make($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename=consentimiento-informado.pdf'
        ]);
    }
}
