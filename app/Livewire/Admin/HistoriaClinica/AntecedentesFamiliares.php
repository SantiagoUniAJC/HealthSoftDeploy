<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HC\AntecedenteFamiliar;
use Livewire\Component;
use App\Models\Paciente;

class AntecedentesFamiliares extends Component
{
    public $paciente;
    public $cita;

     // Antecedentes familiares
     public $diabetes;
     public $hipertension;
     public $accidente_cardiovascular;
     public $cancer;
     public $epilepsia;
     public $enfermedad_mental;
     public $alergias;
     public $enfermedad_respiratoria;
     public $otros_antedecentes_familiares;
     public $antedecentes_familiares_observaciones;
 
     // Antecedentes personales
     public $cefalea;
     public $diabetes_personal;
     public $epilepsia_personal;
     public $enfermedad_visual;
     public $hepatitis;
     public $cancer_personal;
     public $hernias;
     public $enfermedad_oidos;
     public $varices;
     public $enfermedad_respiratoria_personal;
     public $enfermedad_gastrointestinal;
     public $enfermedad_cardiaca;
     public $dermatitis;
     public $enfermedad_renal;
     public $hipertension_personal;
     public $alergias_personal;
     public $enfermedad_tiroides;
     public $enfermedad_osteomuscular;
     public $enfermedad_psiquiatrica;
     public $traumaticos;
     public $cirugias;
     public $covid_19_personal;
     public $otros_enfermedades_personales;
     public $antedecentes_personales_observaciones;

    public function render()
    {
        return view('livewire.admin.historia-clinica.antecedentes-familiares');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;
    }

    public function guardarAntecFamiliarPersonal()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            // Antecedentes familiares
            'diabetes' => 'required',
            'hipertension' => 'required',
            'accidente_cardiovascular' => 'required',
            'cancer' => 'required',
            'epilepsia' => 'required',
            'enfermedad_mental' => 'required',
            'alergias' => 'required',
            'enfermedad_respiratoria' => 'required',
            'otros_antedecentes_familiares' => 'required',
            'antedecentes_familiares_observaciones' => 'required',
            // Antecedentes personales
            'cefalea' => 'required',
            'diabetes_personal' => 'required',
            'epilepsia_personal' => 'required',
            'enfermedad_visual' => 'required',
            'hepatitis' => 'required',
            'cancer_personal' => 'required',
            'hernias' => 'required',
            'enfermedad_oidos' => 'required',
            'varices' => 'required',
            'enfermedad_respiratoria_personal' => 'required',
            'enfermedad_gastrointestinal' => 'required',
            'enfermedad_cardiaca' => 'required',
            'dermatitis' => 'required',
            'enfermedad_renal' => 'required',
            'hipertension_personal' => 'required',
            'alergias_personal' => 'required',
            'enfermedad_tiroides' => 'required',
            'enfermedad_osteomuscular' => 'required',
            'enfermedad_psiquiatrica' => 'required',
            'traumaticos' => 'required',
            'cirugias' => 'required',
            'covid_19_personal' => 'required',
            'otros_enfermedades_personales' => 'required',
            'antedecentes_personales_observaciones' => 'required',
        ]);

        $antecedentesFamiliares = new AntecedenteFamiliar([
            // Antecedentes familiares
            'diabetes' => $this->diabetes,
            'hipertension' => $this->hipertension,
            'accidente_cardiovascular' => $this->accidente_cardiovascular,
            'cancer' => $this->cancer,
            'epilepsia' => $this->epilepsia,
            'enfermedad_mental' => $this->enfermedad_mental,
            'alergias' => $this->alergias,
            'enfermedad_respiratoria' => $this->enfermedad_respiratoria,
            'otros_antedecentes_familiares' => $this->otros_antedecentes_familiares,
            'antedecentes_familiares_observaciones' => $this->antedecentes_familiares_observaciones,

            // Antecedentes personales
            'cefalea' => $this->cefalea,
            'diabetes_personal' => $this->diabetes_personal,
            'epilepsia_personal' => $this->epilepsia_personal,
            'enfermedad_visual' => $this->enfermedad_visual,
            'hepatitis' => $this->hepatitis,
            'cancer_personal' => $this->cancer_personal,
            'hernias' => $this->hernias,
            'enfermedad_oidos' => $this->enfermedad_oidos,
            'varices' => $this->varices,
            'enfermedad_respiratoria_personal' => $this->enfermedad_respiratoria_personal,
            'enfermedad_gastrointestinal' => $this->enfermedad_gastrointestinal,
            'enfermedad_cardiaca' => $this->enfermedad_cardiaca,
            'dermatitis' => $this->dermatitis,
            'enfermedad_renal' => $this->enfermedad_renal,
            'hipertension_personal' => $this->hipertension_personal,
            'alergias_personal' => $this->alergias_personal,
            'enfermedad_tiroides' => $this->enfermedad_tiroides,
            'enfermedad_osteomuscular' => $this->enfermedad_osteomuscular,
            'enfermedad_psiquiatrica' => $this->enfermedad_psiquiatrica,
            'traumaticos' => $this->traumaticos,
            'cirugias' => $this->cirugias,
            'covid_19_personal' => $this->covid_19_personal,
            'otros_enfermedades_personales' => $this->otros_enfermedades_personales,
            'antedecentes_personales_observaciones' => $this->antedecentes_personales_observaciones,
            'paciente_id' => $paciente->id,
        ]);

        $antecedentesFamiliares->save();

        return redirect()->route('admin.historiasclinicas.antecedentes-personales', ['paciente_id' => $paciente->id, 'cita_id' => $cita->id])->with('success', 'Antecedentes familiares y personales guardados correctamente');
    }
}
