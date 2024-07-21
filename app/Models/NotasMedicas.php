<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotasMedicas extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion', 'paciente_id', 'estado'];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
