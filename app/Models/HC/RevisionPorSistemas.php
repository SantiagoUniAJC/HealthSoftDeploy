<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class RevisionPorSistemas extends Model
{
    use HasFactory;

    protected $fillable = [
        'visual',
        'auditivo',
        'cardiaco',
        'respiratorio',
        'gastrointestinal',
        'genitourinario',
        'endocrino',
        'osteomuscular',
        'psicologico',
        'nervioso',
        'vascular',
        'piel_faneras',
        'observaciones_revision_sistemas',
        // Cuestionario Trabajos de Alto Riesgo
        'fobia_a_alturas',
        'alteraciones_de_coordinacion',
        'enfermedades_respiratorias',
        'enfermedades_cardiovasculares',
        'consumo_de_bebidas_alcoholicas_con_alta_frecuencia',
        'consumo_actual_de_medicamentos',
        'cuales_medicamentos',
        'enfermedades_mentales_o_neurologicas',
        'cuales_enfermedades_mentales',
        'alteraciones_de_equilibrio',
        'claustrofobia',
        'tolera_uso_de_proteccion_respiratoria',
        'enfermedades_coagulacion_sanguínea',
        'enfermedades_metabolicas',
        'consumo_sustancias_psicoactivas',
        'cuales_sustancias',
        'obs_cuestionario_trabajos_alto_riesgo',
        'paciente_id'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
