<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class ExamenFisico extends Model
{
    use HasFactory;

    protected $fillable = [
        'peso',
        'talla',
        'dominancia',
        'imc',
        'perimetro_abdominal',
        'riesgo_perimetro_abdominal',
        'tension_arterial',
        'riegos_tension_arterial',
        'frecuencia_respiratoria',
        'frecuencia_cardiaca',
        'temperatura',
        'aspecto_general',
        'agudeza_visual_TCL',
        'agudeza_visual_TSP',
        'agudeza_visual_ojo_derecho',
        'agudeza_visual_ojo_izquierdo',
        'cabeza',
        'observaciones_cabeza',
        'ojos',
        'observaciones_ojos',
        'nariz',
        'observaciones_nariz',
        'oidos',
        'observaciones_oidos',
        'boca',
        'observaciones_boca',
        'faringe',
        'observaciones_faringe',
        'cuello',
        'observaciones_cuello',
        'torax',
        'observaciones_torax',
        'corazon',
        'observaciones_corazon',
        'pulmones',
        'observaciones_pulmones',
        'abdomen',
        'observaciones_abdomen',
        'genitales_externos',
        'observaciones_genitales_externos',
        'vascular',
        'observaciones_vascular',
        'piel_y_faneras',
        'observaciones_piel_y_faneras',
        'neurologico',
        'observaciones_neurologico',
        'paciente_id'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
