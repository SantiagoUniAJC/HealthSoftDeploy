<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class InfoLaboralActual extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_de_trabajo',
        'descripcion_del_cargo',
        'turno_de_trabajo',
        'rango_salarial',
        'fecha_ingreso',
        'factores_de_riesgo_para_el_cargo',
        'tipo_factor_de_riesgo_id',
        'propiedades_factor_de_riesgo_id',
        'exposicion_a_factores_de_riesgo',
        'tipos_factores_de_riesgo',
        'uso_de_epp',
        'paciente_id',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
