<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudads';

    protected $fillable = [
        'nombre_ciudad',
    ];

    public function tarifas()
    {
        return $this->hasMany(Tarifa::class);
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
