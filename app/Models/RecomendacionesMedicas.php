<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecomendacionesMedicas extends Model
{
    use HasFactory;

    protected $fillable = [
        'recomedacion_medica_1',
        'recomedacion_medica_2',
        'recomedacion_medica_3',
        'recomedacion_medica_4',
        'recomedacion_medica_5',
        'recomedacion_medica_6',
        'recomedacion_medica_7',
        'recomedacion_medica_8',
        'recomedacion_medica_9',
        'recomedacion_medica_10',
        'recomedacion_medica_11',
        'recomedacion_medica_12',
        'recomedacion_medica_13',
        // Recomendaciones Laborales
        'recomendacion_laboral_1',
        'recomendacion_laboral_2',
        'recomendacion_laboral_3',
        'recomendacion_laboral_4',
        'recomendacion_laboral_5',
        'recomendacion_laboral_6',
        'recomendacion_laboral_7',
        'otras_recomendaciones_medico_laborales',
        'paciente_id'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
