<?php

namespace App\Livewire\Admin\Especialista;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Especialista;
use Illuminate\Support\Facades\Storage;

class EspecialistaCreate extends Component
{
    use WithFileUploads;

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
    public $path_firma;

    public function render()
    {
        return view('livewire.admin.especialista.especialista-create');
    }

    public function createEspecialista()
    {
        $this->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'tipo_identificacion' => 'required',
            'numero_identificacion' => 'required',
            'genero' => 'required',
            'fecha_de_nacimiento' => 'required',
            'path_fotografia' => 'nullable|image|max:2048',
            'direccion_residencia' => 'required',
            'telefono_contacto1' => 'required',
            'telefono_contacto2' => 'nullable',
            'email' => 'required',
            'especialidad_medica' => 'required',
            'registro_medico' => 'required',
            'fecha_inicio_labor' => 'required',
            'experiencia' => 'required',
            'certificaciones' => 'required', 
        ]);

        $path = null;

        if ($this->path_fotografia) {
            $path = $this->path_fotografia->store('public/especialistas');
        }
    
        $url_path = $path ? Storage::url($path) : null;

        Especialista::create([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'tipo_identificacion' => $this->tipo_identificacion,
            'numero_identificacion' => $this->numero_identificacion,
            'genero' => $this->genero,
            'fecha_de_nacimiento' => $this->fecha_de_nacimiento,
            'path_fotografia' => $url_path,
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

        $this->reset();

        return redirect()->route('admin.especialista.especialistas.index')->with('success', 'Especialista creado exitosamente');
    }
}
