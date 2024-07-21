<?php

namespace App\Models;

use App\Models\HC\ExamenFisico;
use App\Models\HC\InfoLaboralActual;
use App\Models\HC\MotivoConsulta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'tipo_identificacion',
        'numero_identificacion',
        'genero',
        'fecha_de_nacimiento',
        'tipo_sangre',
        'factor_rh',
        'grupo_etnico',
        'nivel_estudio',
        'estado_civil',
        'path_fotografia',
        'departamento_residencia',
        'ciudad_residencia',
        'direccion_residencia',
        'estrato',
        'zona_residencial',
        'comuna',
        'telefono',
        'email',
        'eps',
        'arl',
        'afp',
        'cargo_a_desempeñar',
        'acompañante',
        'path_firma',
        'estado',
        'observaciones',
        'paciente_id',
    ];

    public function archivosAdjuntos()
    {
        return $this->hasMany(ArchivosAdjuntos::class);
    }

    public function notasMedicas()
    {
        return $this->hasMany(NotasMedicas::class);
    }

    public function informacionLaboral()
    {
        return $this->hasMany(InfoLaboralActual::class);
    }

    public function motivoConsulta()
    {
        return $this->hasMany(MotivoConsulta::class);
    }

    public function examenFisico()
    {
        return $this->hasMany(ExamenFisico::class);
    }
}
