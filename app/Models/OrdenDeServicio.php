<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenDeServicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'orden_numero',
        'tipo_evaluacion',
        'enfasis',
        'medio_venta',
        'paciente_id',
        'cliente_id',
        'prestador_de_salud_id',
        'estado',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function prestadorDeSalud()
    {
        return $this->belongsTo(PrestadorDeSalud::class);
    }

    public function tarifas()
    {
        return $this->belongsToMany(Tarifa::class, 'orden_de_servicio_tarifas', 'orden_de_servicio_id', 'tarifa_id');
    }

    public function ordenDeServicioTarifas()
    {
        return $this->hasMany(OrdenDeServicioTarifa::class);
    }
}
