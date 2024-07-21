<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HC\RevisionPorSistemas as HCRevisionPorSistemas;
use App\Models\Paciente;
use Livewire\Component;

class RevisionPorSistemas extends Component
{
    public $paciente;
    public $cita;

    // Revision por sistemas
    public $visual;
    public $auditivo;
    public $cardiaco;
    public $respiratorio;
    public $gastrointestinal;
    public $genitourinario;
    public $endocrino;
    public $osteomuscular;
    public $psicologico;
    public $nervioso;
    public $vascular;
    public $piel_faneras;
    public $observaciones_revision_sistemas;

    // Cuestionario de trabajo en altura
    public $fobia_a_alturas;
    public $alteraciones_de_coordinacion;
    public $enfermedades_respiratorias;
    public $enfermedades_cardiovasculares;
    public $consumo_actual_de_medicamentos;
    public $cuales_medicamentos;
    public $tolera_uso_de_proteccion_respiratoria;
    public $enfermedades_mentales_o_neurologicas;
    public $cuales_enfermedades_mentales;
    public $consumo_de_bebidas_alcoholicas_con_alta_frecuencia;
    public $alteraciones_de_equilibrio;
    public $claustrofobia;
    public $enfermedades_metabolicas;
    public $enfermedades_coagulacion_sanguínea;
    public $consumo_sustancias_psicoactivas;
    public $cuales_sustancias;
    public $obs_cuestionario_trabajos_alto_riesgo;

    public function render()
    {
        return view('livewire.admin.historia-clinica.revision-por-sistemas');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $paciente = $this->paciente;
        $cita = $this->cita;
    }
    

    public function guardarRevisionPorSistemas()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            'visual' => 'required',
            'auditivo' => 'required',
            'cardiaco' => 'required',
            'respiratorio' => 'required',
            'gastrointestinal' => 'required',
            'genitourinario' => 'required',
            'endocrino' => 'required',
            'osteomuscular' => 'required',
            'psicologico' => 'required',
            'nervioso' => 'required',
            'vascular' => 'required',
            'piel_faneras' => 'required',
            'observaciones_revision_sistemas' => 'required',
            // cuestionario de trabajo en altura
            'fobia_a_alturas' => 'required',
            'alteraciones_de_coordinacion' => 'required',
            'enfermedades_respiratorias' => 'required',
            'enfermedades_cardiovasculares' => 'required',
            'consumo_actual_de_medicamentos' => 'required',
            'cuales_medicamentos' => 'required_if:consumo_actual_de_medicamentos,Si||nullable',
            'tolera_uso_de_proteccion_respiratoria' => 'required',
            'enfermedades_mentales_o_neurologicas' => 'required',
            'cuales_enfermedades_mentales' => 'required_if:enfermedades_mentales_o_neurologicas,Si||nullable',
            'consumo_de_bebidas_alcoholicas_con_alta_frecuencia' => 'required',
            'alteraciones_de_equilibrio' => 'required',
            'claustrofobia' => 'required',
            'enfermedades_metabolicas' => 'required',
            'enfermedades_coagulacion_sanguínea' => 'required',
            'consumo_sustancias_psicoactivas' => 'required',
            'cuales_sustancias' => 'required_if:consumo_sustancias_psicoactivas,Si||nullable',
            'obs_cuestionario_trabajos_alto_riesgo' => 'nullable',
        ]);

        $revisionSistema = new HCRevisionPorSistemas([
            'visual' => $this->visual,
            'auditivo' => $this->auditivo,
            'cardiaco' => $this->cardiaco,
            'respiratorio' => $this->respiratorio,
            'gastrointestinal' => $this->gastrointestinal,
            'genitourinario' => $this->genitourinario,
            'endocrino' => $this->endocrino,
            'osteomuscular' => $this->osteomuscular,
            'psicologico' => $this->psicologico,
            'nervioso' => $this->nervioso,
            'vascular' => $this->vascular,
            'piel_faneras' => $this->piel_faneras,
            'observaciones_revision_sistemas' => $this->observaciones_revision_sistemas,
            'fobia_a_alturas' => $this->fobia_a_alturas,
            'alteraciones_de_coordinacion' => $this->alteraciones_de_coordinacion,
            'enfermedades_respiratorias' => $this->enfermedades_respiratorias,
            'enfermedades_cardiovasculares' => $this->enfermedades_cardiovasculares,
            'consumo_actual_de_medicamentos' => $this->consumo_actual_de_medicamentos,
            'cuales_medicamentos' => $this->cuales_medicamentos,
            'tolera_uso_de_proteccion_respiratoria' => $this->tolera_uso_de_proteccion_respiratoria,
            'enfermedades_mentales_o_neurologicas' => $this->enfermedades_mentales_o_neurologicas,
            'cuales_enfermedades_mentales' => $this->cuales_enfermedades_mentales,
            'consumo_de_bebidas_alcoholicas_con_alta_frecuencia' => $this->consumo_de_bebidas_alcoholicas_con_alta_frecuencia,
            'alteraciones_de_equilibrio' => $this->alteraciones_de_equilibrio,
            'claustrofobia' => $this->claustrofobia,
            'enfermedades_metabolicas' => $this->enfermedades_metabolicas,
            'enfermedades_coagulacion_sanguínea' => $this->enfermedades_coagulacion_sanguínea,
            'consumo_sustancias_psicoactivas' => $this->consumo_sustancias_psicoactivas,
            'cuales_sustancias' => $this->cuales_sustancias,
            'obs_cuestionario_trabajos_alto_riesgo' => $this->obs_cuestionario_trabajos_alto_riesgo,
            'paciente_id' => $paciente->id,
        ]);

        $revisionSistema->save();

         return redirect()->route('admin.historiasclinicas.examen-fisico', ['paciente_id' => $paciente->id, 'cita_id' => $cita->id])->with('success', 'Se ha guardado la revisión por sistemas correctamente');
    }
}
