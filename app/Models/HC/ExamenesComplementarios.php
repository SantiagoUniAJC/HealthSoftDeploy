<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class ExamenesComplementarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_examen',
        'fecha_examen',
        'interpretacion_medica',
        'observaciones_examen',
        'resultado_de_laboratorios',
        'vacunas_aplicadas',
        'paciente_id',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
