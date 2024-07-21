<?php

namespace App\Livewire\Admin\Paciente;

use Livewire\Component;
use App\Models\Paciente;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PacienteCreate extends Component
{
    public $nombres;
    public $apellidos;
    public $tipo_identificacion;
    public $numero_identificacion;
    public $genero;
    public $fecha_de_nacimiento;
    public $tipo_sangre;
    public $factor_rh;
    public $grupo_etnico;
    public $nivel_estudio;
    public $estado_civil;
    public $path_fotografia;
    public $departamento_residencia;
    public $ciudad_residencia;
    public $direccion_residencia;
    public $estrato;
    public $zona_residencial;
    public $comuna;
    public $telefono;
    public $email;
    public $eps;
    public $arl;
    public $afp;
    public $acompañante;
    public $cargo_a_desempeñar;

    public function render()
    {
        return view('livewire.admin.paciente.paciente-create');
    }

    public function createPaciente()
    {
        $this->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'tipo_identificacion' => 'required',
            'numero_identificacion' => ['required', Rule::unique('pacientes', 'numero_identificacion')],
            'genero' => 'required',
            'fecha_de_nacimiento' => 'required',
            'tipo_sangre' => 'required',
            'factor_rh' => 'required',
            'grupo_etnico' => 'required',
            'nivel_estudio' => 'required',
            'estado_civil' => 'required',
            'path_fotografia' => 'nullable|image|max:2048',
            'departamento_residencia' => 'required',
            'ciudad_residencia' => 'required',
            'direccion_residencia' => 'required',
            'estrato' => 'required',
            'zona_residencial' => 'required',
            'comuna' => 'required',
            'telefono' => 'required',
            'email' => ['required', 'email', Rule::unique('pacientes', 'email')],
            'eps' => 'required',
            'arl' => 'required',
            'afp' => 'required',
            'acompañante' => 'required',
            'cargo_a_desempeñar' => 'required',
        ]);

        $path = null;

        if ($this->path_fotografia) {
            $path = $this->path_fotografia->store('public/pacientes');
        }
    
        $url_path = $path ? Storage::url($path) : null;

        Paciente::create([
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'tipo_identificacion' => $this->tipo_identificacion,
            'numero_identificacion' => $this->numero_identificacion,
            'genero' => $this->genero,
            'fecha_de_nacimiento' => $this->fecha_de_nacimiento,
            'tipo_sangre' => $this->tipo_sangre,
            'factor_rh' => $this-> factor_rh,
            'grupo_etnico' => $this-> grupo_etnico,
            'nivel_estudio' => $this-> nivel_estudio,
            'estado_civil' => $this-> estado_civil,
            'path_fotografia' => $url_path,
            'departamento_residencia' => $this->departamento_residencia,
            'ciudad_residencia' => $this->ciudad_residencia,
            'direccion_residencia' => $this->direccion_residencia,
            'estrato' => $this->estrato,
            'zona_residencial' => $this->zona_residencial,
            'comuna' => $this->comuna,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'eps' => $this->eps,
            'arl' => $this->arl,
            'afp' => $this->afp,
            'cargo_a_desempeñar' => $this->cargo_a_desempeñar,
            'acompañante' => $this->acompañante,
        ]);

        $this->reset();

        return redirect('admin/pacientes')->with('success', 'Paciente creado exitosamente');
    }
}
