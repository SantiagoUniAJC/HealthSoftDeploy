<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriaClinica extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'user_id',
        'cita_id',
        'estado'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }
}
