<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArchivosAdjuntos;
use Illuminate\Http\Request;
use App\Models\Paciente;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PacienteController extends Controller
{
    public $paciente;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pacientes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pacientes.create');
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
    public function show(String $id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('admin.pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.edit', compact('paciente'));
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

    public function  contarPacientes()
    {
        $contarPacientes = Paciente::count();

        return $contarPacientes;
    }

    public function consentimientoInformado(String $id)
    {
        $paciente = Paciente::findOrFail($id);
        $now = Carbon::now()->format('d F Y');

        $data = [
            'paciente' => $paciente,
            'now' => $now,
        ];

        $pdf = PDF::loadView('admin.pacientes.consentimiento-informado', $data);

        return Response::make($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename=consentimiento-informado.pdf'
        ]);
    }

    public function crearfirmaPacientes(String $id)
    {
        $paciente = Paciente::findOrFail($id);

        if ($paciente->path_firma) {

            return redirect('pacientes')->with('danger', 'El paciente ya tiene una firma guardada, si desea cambiarla, por favor elimine la firma actual y vuelva a intentarlo.');
        }

        return view('admin.pacientes.firma-pacientes', compact('paciente'));
    }

    public function guardarfirmaPacientes(Request $request, $paciente_id)
    {
        // validaciones
        $request->validate([
            'firma' => 'required'
        ]);

        $paciente = Paciente::find($paciente_id);

        if (!$paciente) {
            return redirect()->back()->with('error', 'Paciente no encontrado');
        }

        if ($request->has('firma')) {
            // Obtener la cadena base64 de la firma
            $firmaBase64 = $request->input('firma');

            // Decodificar la cadena base64 y obtener los datos de la imagen
            list($tipo, $datos) = explode(',', $firmaBase64);

            // Obtener la extensión del archivo
            $extension = explode('/', $tipo)[1];

            // Generar un nombre único para el archivo
            $nombreArchivo = $paciente->nombres . '-' . $paciente->apellidos . '-' . time() . '.' . $extension;
            // Eliminar el texto "base64" del nombre del archivo
            $nombreArchivo = str_replace(';base64', '', $nombreArchivo);

            // Guardar la imagen en el servidor
            Storage::disk('public')->put('images/firmas/pacientes/' . $nombreArchivo, base64_decode($datos));

            // Obtener la ruta de la imagen guardada
            $path_imagen_guardada = storage_path('app/public/images/firmas/pacientes/' . $nombreArchivo);

            // Mover la imagen a la carpeta de firmas
            File::move($path_imagen_guardada, public_path('images/firmas/pacientes/' . $nombreArchivo));

            // Guardar la ruta del archivo en la base de datos
            $paciente->path_firma = 'images/firmas/pacientes/' . $nombreArchivo;
            $paciente->save();

            return redirect()->route('admin.paciente.pacientes.show', $paciente->id)->with('success', 'Firma guardada correctamente');
        } else {
            return redirect('pacientes')->with('error', 'No se ha podido guardar la firma');
        }
    }

    public function crearfotoPacientes(String $id)
    {
        $paciente = Paciente::findOrFail($id);

        return "Definir Hardware para implementar logica de captura de imagen";

        // return view('admin.pacientes.foto-pacientes', compact('paciente'));
    }

    public function crearhuellaPacientes(String $id)
    {
        $paciente = Paciente::findOrFail($id);

        return "Definir Hardware para implementar logica de captura de la huella";

        // return view('admin.pacientes.huella-pacientes', compact('paciente'));
    }

    public function adjuntarDocumentos(Request $request, $paciente_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);

        $request->validate([
            'adjuntar' => 'required|file|mimes:pdf|max:2048',
            'paciente_id' => 'required'
        ]);

        $archivo = $request->file('adjuntar');

        $nombreArchivo = date('Y-m-d') . '_' . $archivo->getClientOriginalName();

        // validar si el archivo ya existe antes de guardarlo
        if (file_exists(public_path('images/documentos/pacientes/' . $nombreArchivo))) {
            return redirect()->back()->with('danger', 'El archivo ya existe.');
        }
        $archivo->move(public_path('images/documentos/pacientes'), $nombreArchivo);
        $rutaArchivo = 'images/documentos/pacientes/' . $nombreArchivo;

        $documento = new ArchivosAdjuntos();
        $documento->nombre = $nombreArchivo;
        $documento->ruta = $rutaArchivo;
        $documento->paciente_id = $paciente->id;
        $documento->save();

        return redirect()->route('admin.paciente.pacientes.show', $paciente->id)->with('success', 'Documento adjuntado correctamente.');
    }

    public function descargarDocumento(String $id)
    {
        $documento = ArchivosAdjuntos::findOrFail($id);

        $ruta = public_path($documento->ruta);

        return response()->file($ruta);
    }
}
