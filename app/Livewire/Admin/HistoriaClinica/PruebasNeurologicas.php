<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HC\PruebasNeurologicas as HCPruebasNeurologicas;
use App\Models\Paciente;
use Livewire\Component;

class PruebasNeurologicas extends Component
{
    public $paciente;
    public $cita;

     // Pruebas Neurologicas
     public $pares_craneales;
     public $observaciones_pares_craneales;
     public $nervios_motores;
     public $observaciones_nervios_motores;
     public $nervios_sensitivos;
     public $observaciones_nervios_sensitivos;
     public $reflejos;
     public $observaciones_reflejos;
     public $coordinacion;
     public $observaciones_coordinacion;
     public $equilibrio;
     public $observaciones_equilibrio;
 
     // Pruebas Osteomuscular
     public $columna_vertebral;
     public $observaciones_columna_vertebral;
     public $extremidades_superiores;
     public $observaciones_extremidades_superiores;
     public $extremidades_inferiores;
     public $observaciones_extremidades_inferiores;
 
     // Pruebas Específicas
     public $prueba_phalen;
     public $prueba_tinel;
     public $schober;
     public $prueba_lassegue;
     public $prueba_wells;
     public $prueba_yocum;
     public $prueba_jobe;
     public $prueba_patte;
     public $prueba_gerber;
 
     // Pruebas Específicas Riesgo Cardiovascular
 
     public $test_de_framingham;
     public $colesterol_total;
     public $colesterol_hdl;
     public $diabetes_mellitus;
     public $tension_arterial_pruebas_especificas;
     public $probabilidad_evento_cardiovascular_10_anos;
     public $test_de_ruffler_dickson;
     public $pulsaciones_en_reposo;
     public $pulsaciones_terminado_ejercicio;
     public $valoraciones;
 
     // Pruebas Especiales Trabajos de Alto Riesgo
     public $romberg;
     public $romberg_sensibilizado;
     public $indices_de_baraby;
     public $unterberger;
     public $babinsky_weil;
     public $prueba_de_finger_nose;
     public $prueba_de_talon_rodilla;
     public $prueba_de_miller_fisher;
     public $observaciones_pruebas_especiales;

    public function render()
    {
        return view('livewire.admin.historia-clinica.pruebas-neurologicas');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;
    }

    public function guardarPruebasNeurologicas()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            'pares_craneales' => 'required',
            'observaciones_pares_craneales' => 'nullable',
            'nervios_motores' => 'required',
            'observaciones_nervios_motores' => 'nullable',
            'nervios_sensitivos' => 'required',
            'observaciones_nervios_sensitivos' => 'nullable',
            'reflejos' => 'required',
            'observaciones_reflejos' => 'nullable',
            'coordinacion' => 'required',
            'observaciones_coordinacion' => 'nullable',
            'equilibrio' => 'required',
            'observaciones_equilibrio' => 'nullable',
            // Pruebas Osteomuscular
            'columna_vertebral' => 'required',
            'observaciones_columna_vertebral' => 'nullable',
            'extremidades_superiores' => 'required',
            'observaciones_extremidades_superiores' => 'nullable',
            'extremidades_inferiores' => 'required',
            'observaciones_extremidades_inferiores' => 'nullable',
            // Pruebas Específicas
            'prueba_phalen' => 'nullable',
            'prueba_tinel' => 'nullable',
            'schober' => 'nullable',
            'prueba_lassegue' => 'nullable',
            'prueba_wells' => 'nullable',
            'prueba_yocum' => 'nullable',
            'prueba_jobe' => 'nullable',
            'prueba_patte' => 'nullable',
            'prueba_gerber' => 'nullable',
            // Pruebas Específicas Riesgo Cardiovascular
            'test_de_framingham' => 'nullable',
            'colesterol_total' => 'nullable',
            'colesterol_hdl' => 'nullable',
            'diabetes_mellitus' => 'nullable',
            'tension_arterial_pruebas_especificas' => 'nullable',
            'probabilidad_evento_cardiovascular_10_anos' => 'nullable',
            'test_de_ruffler_dickson' => 'nullable',
            'pulsaciones_en_reposo' => 'nullable',
            'pulsaciones_terminado_ejercicio' => 'nullable',
            'valoraciones' => 'nullable',
            // Pruebas Especiales Trabajos de Alto Riesgo
            'romberg' => 'required',
            'romberg_sensibilizado' => 'required',
            'indices_de_baraby' => 'required',
            'unterberger' => 'required',
            'babinsky_weil' => 'required',
            'prueba_de_finger_nose' => 'required',
            'prueba_de_talon_rodilla' => 'required',
            'prueba_de_miller_fisher' => 'required',
            'observaciones_pruebas_especiales' => 'nullable',
        ]);

        $pruebasNeurologicas = new HCPruebasNeurologicas([
            'pares_craneales' => $this->pares_craneales,
            'observaciones_pares_craneales' => $this->observaciones_pares_craneales,
            'nervios_motores' => $this->nervios_motores,
            'observaciones_nervios_motores' => $this->observaciones_nervios_motores,
            'nervios_sensitivos' => $this->nervios_sensitivos,
            'observaciones_nervios_sensitivos' => $this->observaciones_nervios_sensitivos,
            'reflejos' => $this->reflejos,
            'observaciones_reflejos' => $this->observaciones_reflejos,
            'coordinacion' => $this->coordinacion,
            'observaciones_coordinacion' => $this->observaciones_coordinacion,
            'equilibrio' => $this->equilibrio,
            'observaciones_equilibrio' => $this->observaciones_equilibrio,
            'columna_vertebral' => $this->columna_vertebral,
            'observaciones_columna_vertebral' => $this->observaciones_columna_vertebral,
            'extremidades_superiores' => $this->extremidades_superiores,
            'observaciones_extremidades_superiores' => $this->observaciones_extremidades_superiores,
            'extremidades_inferiores' => $this->extremidades_inferiores,
            'observaciones_extremidades_inferiores' => $this->observaciones_extremidades_inferiores,
            'prueba_phalen' => $this->prueba_phalen,
            'prueba_tinel' => $this->prueba_tinel,
            'schober' => $this->schober,
            'prueba_lassegue' => $this->prueba_lassegue,
            'prueba_wells' => $this->prueba_wells,
            'prueba_yocum' => $this->prueba_yocum,
            'prueba_jobe' => $this->prueba_jobe,
            'prueba_patte' => $this->prueba_patte,
            'prueba_gerber' => $this->prueba_gerber,
            'test_de_framingham' => $this->test_de_framingham,
            'colesterol_total' => $this->colesterol_total,
            'colesterol_hdl' => $this->colesterol_hdl,
            'diabetes_mellitus' => $this->diabetes_mellitus,
            'tension_arterial_pruebas_especificas' => $this->tension_arterial_pruebas_especificas,
            'probabilidad_evento_cardiovascular_10_anos' => $this->probabilidad_evento_cardiovascular_10_anos,
            'test_de_ruffler_dickson' => $this->test_de_ruffler_dickson,
            'pulsaciones_en_reposo' => $this->pulsaciones_en_reposo,
            'pulsaciones_terminado_ejercicio' => $this->pulsaciones_terminado_ejercicio,
            'valoraciones' => $this->valoraciones,
            'romberg' => $this->romberg,
            'romberg_sensibilizado' => $this->romberg_sensibilizado,
            'indices_de_baraby' => $this->indices_de_baraby,
            'unterberger' => $this->unterberger,
            'babinsky_weil' => $this->babinsky_weil,
            'prueba_de_finger_nose' => $this->prueba_de_finger_nose,
            'prueba_de_talon_rodilla' => $this->prueba_de_talon_rodilla,
            'prueba_de_miller_fisher' => $this->prueba_de_miller_fisher,
            'observaciones_pruebas_especiales' => $this->observaciones_pruebas_especiales,
            'paciente_id' => $paciente->id,
        ]);

        $pruebasNeurologicas->save();

        return redirect()->route('admin.historiasclinicas.examenes-complementarios', ['paciente_id' => $paciente->id, 'cita_id'=>$cita->id])->with('success', 'Pruebas Neurologicas guardadas correctamente');
    }
}
