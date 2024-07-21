<?php

namespace App\Livewire\Admin\Especialista;

use App\Models\Especialista;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class EspecialistaEdit extends Component
{
    use WithFileUploads;

    public $especialista;
    public $nombres;
    public $apellidos;
    public $tipo_identificacion;
    public $numero_identificacion;
    public $genero;
    public $fecha_de_nacimiento;
    public $path_fotografia;
    public $direccion_residencia;
    public $telefono_contacto1;
    public $telefono_contacto2;
    public $email;
    public $especialidad_medica;
    public $registro_medico;
    public $fecha_inicio_labor;
    public $experiencia;
    public $certificaciones;

    public function render()
    {
        return view('livewire.admin.especialista.especialista-edit');
    }

    public function mount(Especialista $especialista)
    {
        $this->especialista = $especialista;

        $this->especialista = $especialista;
        $this->nombres = $especialista->nombres;
        $this->apellidos = $especialista->apellidos;
        $this->tipo_identificacion = $especialista->tipo_identificacion;
        $this->genero = $especialista->genero;
        $this->fecha_de_nacimiento = $especialista->fecha_de_nacimiento;
        $this->path_fotografia = $especialista->path_fotografia;
        $this->numero_identificacion = $especialista->numero_identificacion;
        $this->direccion_residencia = $especialista->direccion_residencia;
        $this->telefono_contacto1 = $especialista->telefono_contacto1;
        $this->telefono_contacto2 = $especialista->telefono_contacto2;
        $this->email = $especialista->email;
        $this->especialidad_medica = $especialista->especialidad_medica;
        $this->registro_medico = $especialista->registro_medico;
        $this->fecha_inicio_labor = $especialista->fecha_inicio_labor;
        $this->experiencia = $especialista->experiencia;
        $this->certificaciones = $especialista->certificaciones;
    }

    public function editarEspecialista()
    {

        if ($this->path_fotografia instanceof \Illuminate\Http\UploadedFile && $this->path_fotografia != $this->especialista->path_fotografia) {
            $path = $this->path_fotografia->store('public/especialistas');
            $url_path = Storage::url($path);
            $this->especialista->update(['path_fotografia' => $url_path]);
        }else{
            $this->especialista->update(['path_fotografia' => $this->path_fotografia]);
        }

        //validar que el numero de identificacion no exista en la base de datos
        $especialista = Especialista::where('numero_identificacion', $this->numero_identificacion)->first();
        if ($especialista && $especialista->id != $this->especialista->id) {
            return redirect()->route('admin.especialista.especialistas.index')->with('danger', 'El número de identificación ya existe');
        }

        $this->especialista->update([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'tipo_identificacion' => $this->tipo_identificacion,
            'numero_identificacion' => $this->numero_identificacion,
            'genero' => $this->genero,
            'fecha_de_nacimiento' => $this->fecha_de_nacimiento,
            'direccion_residencia' => $this->direccion_residencia,
            'telefono_contacto1' => $this->telefono_contacto1,
            'telefono_contacto2' => $this->telefono_contacto2,
            'email' => $this->email,
            'especialidad_medica' => $this->especialidad_medica,
            'registro_medico' => $this->registro_medico,
            'fecha_inicio_labor' => $this->fecha_inicio_labor,
            'experiencia' => $this->experiencia,
            'certificaciones' => $this->certificaciones,
        ]);

        $this->especialista = Especialista::find($this->especialista->id);

        return redirect()->route('admin.especialista.especialistas.index')->with('warning', 'El especialista se ha actualizado correctamente');
    }
}
