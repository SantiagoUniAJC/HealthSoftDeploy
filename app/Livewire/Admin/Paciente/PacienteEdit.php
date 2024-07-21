<?php

namespace App\Livewire\Admin\Paciente;

use Livewire\Component;
use App\Models\Paciente;
use Illuminate\Support\Facades\Storage;

class PacienteEdit extends Component
{
    public $paciente;

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
    public $path_fotografia;
    public $estado_civil;
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
    public $cargo_a_desempeñar;
    public $acompañante;

    public function mount(Paciente $paciente)
    {
        $this->paciente = $paciente;

        $this->nombres = $paciente->nombres;
        $this->apellidos = $paciente->apellidos;
        $this->tipo_identificacion = $paciente->tipo_identificacion;
        $this->numero_identificacion = $paciente->numero_identificacion;
        $this->genero = $paciente->genero;
        $this->fecha_de_nacimiento = $paciente->fecha_de_nacimiento;
        $this->tipo_sangre = $paciente->tipo_sangre;
        $this->factor_rh = $paciente->factor_rh;
        $this->grupo_etnico = $paciente->grupo_etnico;
        $this->nivel_estudio = $paciente->nivel_estudio;
        $this->estado_civil = $paciente->estado_civil;
        $this->departamento_residencia = $paciente->departamento_residencia;
        $this->ciudad_residencia = $paciente->ciudad_residencia;
        $this->direccion_residencia = $paciente->direccion_residencia;
        $this->estrato = $paciente->estrato;
        $this->zona_residencial = $paciente->zona_residencial;
        $this->comuna = $paciente->comuna;
        $this->telefono = $paciente->telefono;
        $this->email = $paciente->email;
        $this->eps = $paciente->eps;
        $this->arl = $paciente->arl;
        $this->afp = $paciente->afp;
        $this->cargo_a_desempeñar = $paciente->cargo_a_desempeñar;
        $this->acompañante = $paciente->acompañante;
    }

    public function render()
    {
        return view('livewire.admin.paciente.paciente-edit');
    }

    public function updatePaciente()
    {

        if ($this->path_fotografia) {
            $path = $this->path_fotografia->store('public/images/fotos/pacientes');
            $url_path = Storage::url($path);
            $this->paciente->update(['path_fotografia' => $url_path]);
        }

        $this->paciente->update([
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

        $this->paciente = Paciente::find($this->paciente->id);

        return redirect()->route('admin.paciente.pacientes.index')->with('warning', 'Paciente actualizado correctamente.');
    }
}
