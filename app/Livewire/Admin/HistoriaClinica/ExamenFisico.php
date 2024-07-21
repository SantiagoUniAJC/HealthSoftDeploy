<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HC\ExamenFisico as HCExamenFisico;
use App\Models\Paciente;
use Livewire\Component;

class ExamenFisico extends Component
{
    public $paciente;
    public $cita;

     // Examen fisico
     public $peso;
     public $talla;
     public $dominancia;
     public $imc;
     public $perimetro_abdominal;
     public $riesgo_perimetro_abdominal;
     public $tension_arterial;
     public $riegos_tension_arterial;
     public $frecuencia_respiratoria;
     public $frecuencia_cardiaca;
     public $temperatura;
     public $aspecto_general;
     public $agudeza_visual_TCL;
     public $agudeza_visual_TSP;
     public $agudeza_visual_ojo_derecho;
     public $agudeza_visual_ojo_izquierdo;
 
     public $cabeza;
     public $observaciones_cabeza;
     public $ojos;
     public $observaciones_ojos;
     public $nariz;
     public $observaciones_nariz;
     public $oidos;
     public $observaciones_oidos;
     public $boca;
     public $observaciones_boca;
     public $faringe;
     public $observaciones_faringe;
     public $cuello;
     public $observaciones_cuello;
     public $torax;
     public $observaciones_torax;
     public $corazon;
     public $observaciones_corazon;
     public $pulmones;
     public $observaciones_pulmones;
     public $abdomen;
     public $observaciones_abdomen;
     public $genitales_externos;
     public $observaciones_genitales_externos;
     public $vascular;
     public $observaciones_vascular;
     public $piel_y_faneras;
     public $observaciones_piel_y_faneras;
     public $neurologico;
     public $observaciones_neurologico; 

    public function render()
    {
        return view('livewire.admin.historia-clinica.examen-fisico');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;
    }

    public function guardarExamenFisico()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            'peso' => 'required',
            'talla' => 'required',
            'dominancia' => 'required',
            'imc' => 'required',
            'perimetro_abdominal' => 'required',
            'riesgo_perimetro_abdominal' => 'required',
            'tension_arterial' => 'required',
            'riegos_tension_arterial' => 'required',
            'frecuencia_respiratoria' => 'required',
            'frecuencia_cardiaca' => 'required',
            'temperatura' => 'required',
            'aspecto_general' => 'required',
            'agudeza_visual_TCL' => 'required',
            'agudeza_visual_TSP' => 'required',
            'agudeza_visual_ojo_derecho' => 'required',
            'agudeza_visual_ojo_izquierdo' => 'required',
            'cabeza' => 'required',
            'observaciones_cabeza' => 'nullable',
            'ojos' => 'required',
            'observaciones_ojos' => 'nullable',
            'nariz' => 'required',
            'observaciones_nariz' => 'nullable',
            'oidos' => 'required',
            'observaciones_oidos' => 'nullable',
            'boca' => 'required',
            'observaciones_boca' => 'nullable',
            'faringe' => 'required',
            'observaciones_faringe' => 'nullable',
            'cuello' => 'required',
            'observaciones_cuello' => 'nullable',
            'torax' => 'required',
            'observaciones_torax' => 'nullable',
            'corazon' => 'required',
            'observaciones_corazon' => 'nullable',
            'pulmones' => 'required',
            'observaciones_pulmones' => 'nullable',
            'abdomen' => 'required',
            'observaciones_abdomen' => 'nullable',
            'genitales_externos' => 'required',
            'observaciones_genitales_externos' => 'nullable',
            'vascular' => 'required',
            'observaciones_vascular' => 'nullable',
            'piel_y_faneras' => 'required',
            'observaciones_piel_y_faneras' => 'nullable',
            'neurologico' => 'required',
            'observaciones_neurologico' => 'nullable',
        ]);

        $examenFisico = new HCExamenFisico([
            'peso' => $this->peso,
            'talla' => $this->talla,
            'dominancia' => $this->dominancia,
            'imc' => $this->imc,
            'perimetro_abdominal' => $this->perimetro_abdominal,
            'riesgo_perimetro_abdominal' => $this->riesgo_perimetro_abdominal,
            'tension_arterial' => $this->tension_arterial,
            'riegos_tension_arterial' => $this->riegos_tension_arterial,
            'frecuencia_respiratoria' => $this->frecuencia_respiratoria,
            'frecuencia_cardiaca' => $this->frecuencia_cardiaca,
            'temperatura' => $this->temperatura,
            'aspecto_general' => $this->aspecto_general,
            'agudeza_visual_TCL' => $this->agudeza_visual_TCL,
            'agudeza_visual_TSP' => $this->agudeza_visual_TSP,
            'agudeza_visual_ojo_derecho' => $this->agudeza_visual_ojo_derecho,
            'agudeza_visual_ojo_izquierdo' => $this->agudeza_visual_ojo_izquierdo,
            'cabeza' => $this->cabeza,
            'observaciones_cabeza' => $this->observaciones_cabeza,
            'ojos' => $this->ojos,
            'observaciones_ojos' => $this->observaciones_ojos,
            'nariz' => $this->nariz,
            'observaciones_nariz' => $this->observaciones_nariz,
            'oidos' => $this->oidos,
            'observaciones_oidos' => $this->observaciones_oidos,
            'boca' => $this->boca,
            'observaciones_boca' => $this->observaciones_boca,
            'faringe' => $this->faringe,
            'observaciones_faringe' => $this->observaciones_faringe,
            'cuello' => $this->cuello,
            'observaciones_cuello' => $this->observaciones_cuello,
            'torax' => $this->torax,
            'observaciones_torax' => $this->observaciones_torax,
            'corazon' => $this->corazon,
            'observaciones_corazon' => $this->observaciones_corazon,
            'pulmones' => $this->pulmones,
            'observaciones_pulmones' => $this->observaciones_pulmones,
            'abdomen' => $this->abdomen,
            'observaciones_abdomen' => $this->observaciones_abdomen,
            'genitales_externos' => $this->genitales_externos,
            'observaciones_genitales_externos' => $this->observaciones_genitales_externos,
            'vascular' => $this->vascular,
            'observaciones_vascular' => $this->observaciones_vascular,
            'piel_y_faneras' => $this->piel_y_faneras,
            'observaciones_piel_y_faneras' => $this->observaciones_piel_y_faneras,
            'neurologico' => $this->neurologico,
            'observaciones_neurologico' => $this->observaciones_neurologico,
            'paciente_id' => $paciente->id,
        ]);

        $examenFisico->save();

        return redirect()->route('admin.historiasclinicas.pruebas-neurologicas', ['paciente_id' => $paciente->id, 'cita_id'=>$cita->id])->with('success', 'Se ha guardado el examen fisico correctamente');
    }
}
