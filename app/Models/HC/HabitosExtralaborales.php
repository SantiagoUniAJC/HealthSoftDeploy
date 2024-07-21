<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class HabitosExtralaborales extends Model
{
    use HasFactory;

    protected $fillable = [
        'tabaco',
        'cantidad_tabaco',
        'tiempo_fumando',
        'tiempo_suspension',
        'licor',
        'tiempo_tomando',
        'frecuencia',
        'actividad_deportiva',
        'tipo_deporte',
        'frecuencia_actividad_deportiva',
        'sustancias_psicoactivas',
        'tipo_sustancia',
        'frecuencia_sustancias_psicoactivas',
        'observaciones_habitos_extralaborales',
        'paciente_id'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
