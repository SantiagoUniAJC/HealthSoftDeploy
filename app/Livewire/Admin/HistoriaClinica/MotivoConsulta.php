<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HC\MotivoConsulta as HCMotivoConsulta;
use Livewire\Component;
use App\Models\Paciente;

class MotivoConsulta extends Component
{
    public $paciente;
    public $cita;

    public $motivo_consulta;
    public $descripcion_consulta;
    public $estado_actual_de_salud;
    public $restricciones_medicas_vigentes;
    public $descripcion_estado_actual_de_salud;
    public $empresa_anterior;
    public $cargo_anterior;
    public $tiempo_laborado;
    public $factores_riesgo;
    public $uso_epp;
    public $motivo_retiro;
    public $fecha_retiro;
    public $accidentes_laborales;
    public $accidentes_laborales_empresa_anterior;
    public $accidentes_laborales_empresa_actual;
    public $fecha_accidente_laboral;
    public $empresa_accidente_laboral;
    public $descripcion_accidente_laboral;
    public $fue_calificada_e_indemnizada;
    public $secuelas;
    public $descripcion_secuelas;


    public function render()
    {
        return view('livewire.admin.historia-clinica.motivo-consulta');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;
    }

    public function guardarMotivoConsulta()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            'motivo_consulta' => 'required',
            'descripcion_consulta' => 'required',
            'estado_actual_de_salud' => 'required',
            'restricciones_medicas_vigentes' => 'required',
            'descripcion_estado_actual_de_salud' => 'required',
            'empresa_anterior' => 'nullable',
            'cargo_anterior' => 'nullable',
            'tiempo_laborado' => 'nullable',
            'factores_riesgo' => 'nullable',
            'uso_epp' => 'nullable',
            'motivo_retiro' => 'nullable',
            'fecha_retiro' => 'nullable',
            'accidentes_laborales' => 'nullable',
            'accidentes_laborales_empresa_anterior' => 'nullable',
            'accidentes_laborales_empresa_actual' => 'nullable',
            'fecha_accidente_laboral' => 'nullable',
            'empresa_accidente_laboral' => 'nullable',
            'descripcion_accidente_laboral' => 'nullable',
            'fue_calificada_e_indemnizada' => 'required',
            'secuelas' => 'nullable',
            'descripcion_secuelas' => 'nullable',
        ]);

        $motivoConsulta = new HCMotivoConsulta([
            'motivo_consulta' => $this->motivo_consulta,
            'descripcion_consulta' => $this->descripcion_consulta,
            'estado_actual_de_salud' => $this->estado_actual_de_salud,
            'restricciones_medicas_vigentes' => $this->restricciones_medicas_vigentes,
            'descripcion_estado_actual_de_salud' => $this->descripcion_estado_actual_de_salud,
            'empresa_anterior' => $this->empresa_anterior,
            'cargo_anterior' => $this->cargo_anterior,
            'tiempo_laborado' => $this->tiempo_laborado,
            'factores_riesgo' => $this->factores_riesgo,
            'uso_epp' => $this->uso_epp,
            'motivo_retiro' => $this->motivo_retiro,
            'fecha_retiro' => $this->fecha_retiro,
            'accidentes_laborales' => $this->accidentes_laborales,
            'accidentes_laborales_empresa_anterior' => $this->accidentes_laborales_empresa_anterior,
            'accidentes_laborales_empresa_actual' => $this->accidentes_laborales_empresa_actual,
            'fecha_accidente_laboral' => $this->fecha_accidente_laboral,
            'empresa_accidente_laboral' => $this->empresa_accidente_laboral,
            'descripcion_accidente_laboral' => $this->descripcion_accidente_laboral,
            'fue_calificada_e_indemnizada' => $this->fue_calificada_e_indemnizada,
            'secuelas' => $this->secuelas,
            'descripcion_secuelas' => $this->descripcion_secuelas,
            'paciente_id' => $paciente->id,
        ]);

        $motivoConsulta->save();

        return redirect()->route('admin.historiasclinicas.antecedentes-familiares', ['paciente_id' => $paciente->id, 'cita_id' => $cita->id])->with('success', 'El motivo de consulta se guardo con exito');
    }
}
