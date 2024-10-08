<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nit',
        'razon_social',
        'fecha_inicio_relacion_comercial',
        'nombre_comercial',
        'asesor_comercial_asignado',
        'actividad_economica',
        'tipo_regimen_iva',
        'departamento',
        'responsabilidad_fiscal',
        'ciudad',
        'direccion',
        'telefono_contacto1',
        'telefono_contacto2',
        'email',
    ];

    public function tarifas()
    {
        return $this->hasMany(Tarifa::class);
    }

    public function ordenesDeServicio()
    {
        return $this->hasMany(OrdenDeServicio::class);
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
}
