<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Especialista;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class EspecialistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.especialistas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.especialistas.create');
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
        $especialista = Especialista::findOrFail($id);

        // Verificar si el especialista tiene una firma guardada
        $tiene_firma = $especialista->path_firma ? true : false;

        return view('admin.especialistas.show', compact('especialista', 'tiene_firma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $especialista = Especialista::findOrFail($id);
        return view('admin.especialistas.edit', compact('especialista'));
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

    public function  contarEspecialistas()
    {
        $contarEspecialistas = Especialista::count();

        return $contarEspecialistas;
    }

    public function crearfirmaEspecialista(String $id)
    {
        $especialista = Especialista::findOrFail($id);

        if ($especialista->path_firma) {

            return redirect('especialista')->with('danger', 'El especialista ya tiene una firma guardada, si desea cambiarla, por favor elimine la firma actual y vuelva a intentarlo.');
        }

        return view('admin.especialistas.firma-especialista', compact('especialista'));
    }

    public function guardarfirmaEspecialista(Request $request, $especialista_id)
    {
        // validaciones
        $request->validate([
            'firma' => 'required'
        ]);

        $especialista = Especialista::find($especialista_id);

        if (!$especialista) {
            return redirect()->back()->with('error', 'Especialista no encontrado');
        }
        
        if ($request->has('firma')) {
            // Obtener la cadena base64 de la firma
            $firmaBase64 = $request->input('firma');

            // Decodificar la cadena base64 y obtener los datos de la imagen
            list($tipo, $datos) = explode(',', $firmaBase64);

            // Obtener la extensión del archivo
            $extension = explode('/', $tipo)[1];

            // Generar un nombre único para el archivo
            $nombreArchivo = $especialista->nombres . '-' . $especialista->apellidos . '-' . time() . '.' . $extension;
            
            // Eliminar el texto "base64" del nombre del archivo
            $nombreArchivo = str_replace(';base64', '', $nombreArchivo);
            
            // Guardar la imagen en el servidor
            Storage::disk('public')->put('images/firmas/especialistas/' . $nombreArchivo, base64_decode($datos));

            // Obtener la ruta de la imagen guardada
            $path_imagen_guardada = storage_path('app/public/images/firmas/especialistas/' . $nombreArchivo);

            // Mover la imagen a la carpeta de firmas
            File::move($path_imagen_guardada, public_path('images/firmas/especialistas/' . $nombreArchivo));

            // Guardar la ruta del archivo en la base de datos
            $especialista->path_firma = 'images/firmas/especialistas/' . $nombreArchivo;
            // dd($especialista->path_firma);
            $especialista->save();

            return redirect()->route('admin.especialista.especialistas.show', $especialista->id)->with('success', 'Firma guardada correctamente');
        } else {
            return redirect('especialistas')->with('error', 'No se ha podido guardar la firma');
        }
    }
}
