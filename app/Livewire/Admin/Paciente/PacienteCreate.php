<?php

namespace App\Livewire\Admin\Paciente;

use Livewire\Component;
use App\Models\Paciente;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;

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

    public $token;
    public $pais;
    public $departamentos;
    public $ciudades;

    public function render()
    {
        return view('livewire.admin.paciente.paciente-create');
    }

    public function mount()
    {
        # API UNIVERSAL TUTORIAL PARA OBTENER PAIS.
        $response = Http::withHeaders([
            "Accept" => "application/json",
            "api-token" => "lYAIKDRoIwa4woWVxDEPLrgUHE7S-d5AlFO-wO2ZD2RqCnucdvb9d-F12AaSh_iV2v4",
            "user-email" => "health.software1@gmail.com"
        ])->get('https://www.universal-tutorial.com/api/getaccesstoken');

        $this->token = $response->json('auth_token');

        $pais = Http::withHeaders([
            "Authorization" => "Bearer " . $this->token,
            "Accept" => "application/json",
        ])->get('https://www.universal-tutorial.com/api/countries/');

        $this->pais = $pais->json('46');

        $this->cargarDepartamentos();
    }

    public function cargarDepartamentos()
    {
        $departamentos = Http::withHeaders([
            "Authorization" => "Bearer " . $this->token,
            "Accept" => "application/json",
        ])->get('https://www.universal-tutorial.com/api/states/Colombia');

        $this->departamentos = $departamentos->json();

        $this->ciudades = [];
    }

    public function getCiudades()
    {
        $this->departamento_residencia;

        $ciudades = Http::withHeaders([
            "Authorization" => "Bearer " . $this->token,
            "Accept" => "application/json",
        ])->get('https://www.universal-tutorial.com/api/cities/' . $this->departamento_residencia);

        $this->ciudades = $ciudades->json();
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
            'comuna' => 'nullable',
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
            'factor_rh' => $this->factor_rh,
            'grupo_etnico' => $this->grupo_etnico,
            'nivel_estudio' => $this->nivel_estudio,
            'estado_civil' => $this->estado_civil,
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
