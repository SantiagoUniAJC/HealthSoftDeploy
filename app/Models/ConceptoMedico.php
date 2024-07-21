<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConceptoMedico extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'especialista_id',
        'orden_de_servicio_id',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function especialista()
    {
        return $this->belongsTo(Especialista::class);
    }

    public function ordenDeServicio()
    {
        return $this->belongsTo(OrdenDeServicio::class);
    }
}
