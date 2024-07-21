<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_examen',
        'tipo_examen',
        'fecha_inicio',
        'fecha_fin',
        'paciente_id',
        'especialista_id',
        'observaciones',
        'estado',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function especialista()
    {
        return $this->belongsTo(Especialista::class);
    }
}
