<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\OrdenDeServicio;
use App\Models\Paciente;
use App\Models\Cita;
use Livewire\Component;

class HistoriaClinicaCreate extends Component
{
    public $paciente;
    public $cita;

    public $orden_numero;
    public $tipo_examen;
    public $enfasis;
    public $cliente_solicita;
    public $cargo_a_desempeñar;
    public $ciudad_residencia; 

    public $paciente_id;
    public $nombres;
    public $apellidos;
    public $tipo_identificacion;
    public $numero_identificacion;
    public $genero;
    public $fecha_de_nacimiento;


    public function render()
    {
        return view('livewire.admin.historia-clinica.historia-clinica-create');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;

        $ordenDeServicio = OrdenDeServicio::where('paciente_id', $this->paciente->id)->first();
        if (!$ordenDeServicio) {
            return redirect()->route('admin.ordendeservicios.index')->with('danger', 'El paciente no tiene una orden de servicio Pendiente o en Proceso');
        }

        $this->paciente->ordenDeServicio = $ordenDeServicio;
        $this->orden_numero = $ordenDeServicio->orden_numero;
        $this->tipo_examen = $ordenDeServicio->tipo_evaluacion;
        $this->enfasis = $ordenDeServicio->enfasis;

        $this->cliente_solicita = $ordenDeServicio->cliente->razon_social;
        $this->cargo_a_desempeñar = $ordenDeServicio->paciente->cargo_a_desempeñar;
        $this->ciudad_residencia = $ordenDeServicio->paciente->ciudad_residencia;
        $this->nombres = $ordenDeServicio->paciente->nombres;
        $this->apellidos = $ordenDeServicio->paciente->apellidos;
        $this->tipo_identificacion = $ordenDeServicio->paciente->tipo_identificacion;
        $this->numero_identificacion = number_format($ordenDeServicio->paciente->numero_identificacion, 0, ',', '.');
        $this->genero = $ordenDeServicio->paciente->genero;
        $this->fecha_de_nacimiento = $ordenDeServicio->paciente->fecha_de_nacimiento;

    }

    public function nextPage($pacienteId, $citaId)
    {
        return redirect()->route('admin.historias-clinicas.info-laboral-actual', [
            'paciente_id' => $pacienteId,
            'cita_id' => $citaId
        ]);
    }
}
