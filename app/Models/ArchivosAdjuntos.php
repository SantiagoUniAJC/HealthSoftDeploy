<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivosAdjuntos extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'nombre',
        'ruta'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
