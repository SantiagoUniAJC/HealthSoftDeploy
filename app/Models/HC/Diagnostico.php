<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Diagnostico extends Model
{
    use HasFactory;

    protected $fillable = [
        'diagnostico_principal',
        'CIE10',
        'descripcion_cie10',
        'recomendaciones_medicas',
        'recomendaciones_laborales_x_meses',
        'recomendacion1',
        'recomendacion2',
        'recomendacion3',
        'recomendacion4',
        'recomendacion5',
        'recomendacion6',
        'recomendacion7',
        'recomendacion8',
        'recomendacion9',
        'recomendacion10',
        'recomendacion11',
        'recomendacion12',
        'recomendacion13',
        'recomendacion14',
        'paciente_id',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
