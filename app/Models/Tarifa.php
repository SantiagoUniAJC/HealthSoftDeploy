<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'tipo',
        'nombre',
        'precio',
        'descuento',
        'estado',
        'cliente_id',
        'user_id',
        'ciudad_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ordenesDeServicio()
    {
        return $this->belongsToMany(OrdenDeServicio::class, 'orden_de_servicio_tarifas', 'tarifa_id', 'orden_de_servicio_id');
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class);
    }
}
