<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Tarifa;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Response;


class TarifarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.tarifarios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(String $id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('admin.tarifarios.create', compact('cliente'));
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
        $cliente = Cliente::findOrFail($id);
        $tarifas = Tarifa::where('cliente_id', $id)->get();
        return view('admin.tarifarios.show', compact('cliente', 'tarifas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tarifa = Tarifa::findOrFail($id);
        return view('admin.tarifarios.edit', compact('tarifa'));
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
    public function generatePDF(String $id)
    {
        $cliente = cliente::findOrFail($id);
        $tarifas = Tarifa::where('cliente_id', $id)->get();
        $tarifa = Tarifa::where('cliente_id', $id)->with('user')->first();

        $subtotal = 0;
        $descuento = 0;
        $iva = 0;
        $total = 0;

        foreach ($tarifas as $tarifa) {
            $valordescuento = $tarifa->descuento / 100;
            $subtotal += $tarifa->precio;
            $descuento += $tarifa->precio * $valordescuento;
        }

        $total = $subtotal - $descuento;


        $data = [
            'title' => 'Tarifario de Cliente',
            'date' => date('m/d/Y'),
            'cliente' => $cliente,
            'tarifas' => $tarifas,
            'tarifa' => $tarifa,
            'subtotal' => $subtotal,
            'descuento' => $descuento,
            'iva' => $iva,
            'total' => $total,
        ];

        $pdf = PDF::loadView('admin.tarifarios.pdf', $data);

        // Para descargar el archivo PDF
        // return $pdf->download('tarifario.pdf');

        return Response::make($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename=tarifario.pdf'
        ]);
    }
}
