<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'tipo_identificacion',
        'numero_identificacion',
        'genero',
        'fecha_de_nacimiento',
        'path_fotografia',
        'direccion_residencia',
        'telefono_contacto1',
        'telefono_contacto2',
        'email',
        'especialidad_medica',
        'registro_medico',
        'fecha_inicio_labor',
        'experiencia',
        'certificaciones',
        'estado',
    ];
}
