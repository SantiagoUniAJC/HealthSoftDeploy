<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\Paciente;
use Livewire\Component;
use App\Models\HC\SistemaVigilanciaEpidemiologica as HCSistemaVigilanciaEpidemiologica;

class SistemaVigilanciaEpidemiologica extends Component
{
    public $paciente;
    public $cita;

    // Sistema de vigilancia epidemiológica
    public $visual;
    public $auditivo;
    public $quimico;
    public $respiratorio;
    public $cardiovascular;
    public $psicosocial;
    public $biomecanico;
    public $biologico;
    public $trabajo_alto_riesgo;

    // Remisiones
    public $arl;
    public $audiologia;
    public $cardiologia;
    public $cirugia_general;
    public $dermatologia;
    public $endrocrinologia;
    public $eps;
    public $eps_fisiatria;
    public $eps_fisioterapia;
    public $eps_gastroenterologia;
    public $eps_ginecologia;
    public $eps_infectologia;
    public $eps_medicina_general;
    public $eps_medicina_interna;
    public $eps_medicina_laboral;
    public $eps_nefrologia;
    public $eps_neurologia;
    public $eps_nutricion_dietetica;
    public $eps_odontologia;
    public $eps_oftalmologia;
    public $eps_optometria;
    public $eps_ortopedia;
    public $eps_ortoptica;
    public $eps_otorrinolaringologia;
    public $eps_psicologia;
    public $eps_psiquiatria;
    public $eps_urología;
    public $otras_remisiones;
    public $motivos_remisiones;

    public function render()
    {
        return view('livewire.admin.historia-clinica.sistema-vigilancia-epidemiologica');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;
    }

    public function guardarSysVigEpidemiologica()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        // $this->validate([
        //     'visual' => 'nullable',
        //     'auditivo' => 'nullable',
        //     'quimico' => 'nullable',
        //     'respiratorio' => 'nullable',
        //     'cardiovascular' => 'nullable',
        //     'psicosocial' => 'nullable',
        //     'biomecanico' => 'nullable',
        //     'biologico' => 'nullable',
        //     'trabajo_alto_riesgo' => 'nullable',

        //     // Remisiones
        //     'arl' => 'nullable',
        //     'audiologia' => 'nullable',
        //     'cardiologia' => 'nullable',
        //     'cirugia_general' => 'nullable',
        //     'dermatologia' => 'nullable',
        //     'endrocrinologia' => 'nullable',
        //     'eps' => 'nullable',
        //     'eps_fisiatria' => 'nullable',
        //     'eps_fisioterapia' => 'nullable',
        //     'eps_gastroenterologia' => 'nullable',
        //     'eps_ginecologia' => 'nullable',
        //     'eps_infectologia' => 'nullable',
        //     'eps_medicina_general' => 'nullable',
        //     'eps_medicina_interna' => 'nullable',
        //     'eps_medicina_laboral' => 'nullable',
        //     'eps_nefrologia' => 'nullable',
        //     'eps_neurologia' => 'nullable',
        //     'eps_nutricion_dietetica' => 'nullable',
        //     'eps_odontologia' => 'nullable',
        //     'eps_oftalmologia' => 'nullable',
        //     'eps_optometria' => 'nullable',
        //     'eps_ortopedia' => 'nullable',
        //     'eps_ortoptica' => 'nullable',
        //     'eps_otorrinolaringologia' => 'nullable',
        //     'eps_psicologia' => 'nullable',
        //     'eps_psiquiatria' => 'nullable',
        //     'eps_urología' => 'nullable',
        //     'otras_remisiones' => 'nullable',
        //     'motivos_remisiones' => 'nullable',


        // ]);

        $visual = $this->visual ? 'visual' : 'Ninguno';
        $auditivo = $this->auditivo ? 'auditivo' : 'Ninguno';
        $quimico = $this->quimico ? 'quimico' : 'Ninguno';
        $respiratorio = $this->respiratorio ? 'respiratorio' : 'Ninguno';
        $cardiovascular = $this->cardiovascular ? 'cardiovascular' : 'Ninguno';
        $psicosocial = $this->psicosocial ? 'psicosocial' : 'Ninguno';
        $biomecanico = $this->biomecanico ? 'biomecanico' : 'Ninguno';
        $biologico = $this->biologico ? 'biologico' : 'Ninguno';
        $trabajo_alto_riesgo = $this->trabajo_alto_riesgo ? 'trabajo_alto_riesgo' : 'Ninguno';

        // Remisiones
        $arl = $this->arl ? 'arl' : 'Ninguno';
        $audiologia = $this->audiologia ? 'audiologia' : 'Ninguno';
        $cardiologia = $this->cardiologia ? 'cardiologia' : 'Ninguno';
        $cirugia_general = $this->cirugia_general ? 'cirugia_general' : 'Ninguno';
        $dermatologia = $this->dermatologia ? 'dermatologia' : 'Ninguno';
        $endrocrinologia = $this->endrocrinologia ? 'endrocrinologia' : 'Ninguno';
        $eps = $this->eps ? 'eps' : 'Ninguno';
        $eps_fisiatria = $this->eps_fisiatria ? 'eps_fisiatria' : 'Ninguno';
        $eps_fisioterapia = $this->eps_fisioterapia ? 'eps_fisioterapia' : 'Ninguno';
        $eps_gastroenterologia = $this->eps_gastroenterologia ? 'eps_gastroenterologia' : 'Ninguno';
        $eps_ginecologia = $this->eps_ginecologia ? 'eps_ginecologia' : 'Ninguno';
        $eps_infectologia = $this->eps_infectologia ? 'eps_infectologia' : 'Ninguno';
        $eps_medicina_general = $this->eps_medicina_general ? 'eps_medicina_general' : 'Ninguno';
        $eps_medicina_interna = $this->eps_medicina_interna ? 'eps_medicina_interna' : 'Ninguno';
        $eps_medicina_laboral = $this->eps_medicina_laboral ? 'eps_medicina_laboral' : 'Ninguno';
        $eps_nefrologia = $this->eps_nefrologia ? 'eps_nefrologia' : 'Ninguno';
        $eps_neurologia = $this->eps_neurologia ? 'eps_neurologia' : 'Ninguno';
        $eps_nutricion_dietetica = $this->eps_nutricion_dietetica ? 'eps_nutricion_dietetica' : 'Ninguno';
        $eps_odontologia = $this->eps_odontologia ? 'eps_odontologia' : 'Ninguno';
        $eps_oftalmologia = $this->eps_oftalmologia ? 'eps_oftalmologia' : 'Ninguno';
        $eps_optometria = $this->eps_optometria ? 'eps_optometria' : 'Ninguno';
        $eps_ortopedia = $this->eps_ortopedia ? 'eps_ortopedia' : 'Ninguno';
        $eps_ortoptica = $this->eps_ortoptica ? 'eps_ortoptica' : 'Ninguno';
        $eps_otorrinolaringologia = $this->eps_otorrinolaringologia ? 'eps_otorrinolaringologia' : 'Ninguno';
        $eps_psicologia = $this->eps_psicologia ? 'eps_psicologia' : 'Ninguno';
        $eps_psiquiatria = $this->eps_psiquiatria ? 'eps_psiquiatria' : 'Ninguno';
        $eps_urología = $this->eps_urología ? 'eps_urología' : 'Ninguno';
        $otras_remisiones = $this->otras_remisiones ? 'otras_remisiones' : 'Ninguno';
        $motivos_remisiones = $this->motivos_remisiones ? 'motivos_remisiones' : 'Ninguno';

        $sistemaVE = new HCSistemaVigilanciaEpidemiologica([
            'visual' => $visual,
            'auditivo' => $auditivo,
            'quimico' => $quimico,
            'respiratorio' => $respiratorio,
            'cardiovascular' => $cardiovascular,
            'psicosocial' => $psicosocial,
            'biomecanico' => $biomecanico,
            'biologico' => $biologico,
            'trabajo_alto_riesgo' => $trabajo_alto_riesgo,
            'arl' => $arl,
            'audiologia' => $audiologia,
            'cardiologia' => $cardiologia,
            'cirugia_general' => $cirugia_general,
            'dermatologia' => $dermatologia,
            'endrocrinologia' => $endrocrinologia,
            'eps' => $eps,
            'eps_fisiatria' => $eps_fisiatria,
            'eps_fisioterapia' => $eps_fisioterapia,
            'eps_gastroenterologia' => $eps_gastroenterologia,
            'eps_ginecologia' => $eps_ginecologia,
            'eps_infectologia' => $eps_infectologia,
            'eps_medicina_general' => $eps_medicina_general,
            'eps_medicina_interna' => $eps_medicina_interna,
            'eps_medicina_laboral' => $eps_medicina_laboral,
            'eps_nefrologia' => $eps_nefrologia,
            'eps_neurologia' => $eps_neurologia,
            'eps_nutricion_dietetica' => $eps_nutricion_dietetica,
            'eps_odontologia' => $eps_odontologia,
            'eps_oftalmologia' => $eps_oftalmologia,
            'eps_optometria' => $eps_optometria,
            'eps_ortopedia' => $eps_ortopedia,
            'eps_ortoptica' => $eps_ortoptica,
            'eps_otorrinolaringologia' => $eps_otorrinolaringologia,
            'eps_psicologia' => $eps_psicologia,
            'eps_psiquiatria' => $eps_psiquiatria,
            'eps_urología' => $eps_urología,
            'otras_remisiones' => $otras_remisiones,
            'motivos_remisiones' => $motivos_remisiones,
            'paciente_id' => $paciente->id,
        ]);

        // $sistemaVE->save();

        return redirect()->route('admin.historiasclinicas.recomendaciones-medicas', ['paciente_id' => $paciente->id, 'cita_id'=>$cita->id])->with('success', 'Sistema de vigilancia epidemiológica guardado con éxito');
    }
}
