<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class PruebasNeurologicas extends Model
{
    use HasFactory;

    protected $fillable = [
        'pares_craneales',
        'observaciones_pares_craneales',
        'nervios_motores',
        'observaciones_nervios_motores',
        'nervios_sensitivos',
        'observaciones_nervios_sensitivos',
        'reflejos',
        'observaciones_reflejos',
        'coordinacion',
        'observaciones_coordinacion',
        'equilibrio',
        'observaciones_equilibrio',

        // Pruebas Osteomuscular
        'columna_vertebral',
        'observaciones_columna_vertebral',
        'extremidades_superiores',
        'observaciones_extremidades_superiores',
        'extremidades_inferiores',
        'observaciones_extremidades_inferiores',

        // Pruebas Específicas
        'prueba_phalen',
        'prueba_tinel',
        'schober',
        'prueba_lassegue',
        'prueba_wells',
        'prueba_yocum',
        'prueba_jobe',
        'prueba_patte',
        'prueba_gerber',

        // Pruebas Específicas Riesgo Cardiovascular
        'test_de_framingham',
        'colesterol_total',
        'colesterol_hdl',
        'diabetes_mellitus',
        'tension_arterial_pruebas_especificas',
        'probabilidad_evento_cardiovascular_10_anos',
        'test_de_ruffler_dickson',
        'pulsaciones_en_reposo',
        'pulsaciones_terminado_ejercicio',
        'valoraciones',

        // Pruebas Especiales Trabajos de Alto Riesgo
        'Romberg',
        'Romberg_sensibilizado',
        'indices_de_baraby',
        'unterberger',
        'babinsky_weil',
        'prueba_de_finger_nose',
        'prueba_de_talon_rodilla',
        'prueba_de_miller_fisher',
        'observaciones_pruebas_especiales',

        'paciente_id',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
