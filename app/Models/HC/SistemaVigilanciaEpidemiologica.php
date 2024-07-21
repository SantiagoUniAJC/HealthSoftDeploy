<?php

namespace App\Models\HC;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class SistemaVigilanciaEpidemiologica extends Model
{
    use HasFactory;

    protected $fillable = [
        'visual',
        'auditivo',
        'quimico',
        'respiratorio',
        'cardiovascular',
        'psicosocial',
        'biomecanico',
        'biologico',
        'trabajo_alto_riesgo',
        'arl',
        'audiologia',
        'cardiologia',
        'cirugia_general',
        'dermatologia',
        'endrocrinologia',
        'eps',
        'eps_fisiatria',
        'eps_fisioterapia',
        'eps_gastroenterologia',
        'eps_ginecologia',
        'eps_infectologia',
        'eps_medicina_general',
        'eps_medicina_interna',
        'eps_medicina_laboral',
        'eps_nefrologia',
        'eps_neurologia',
        'eps_nutricio_dietetica',
        'eps_odontologia',
        'eps_oftalmologia',
        'eps_optometria',
        'eps_ortopedia',
        'eps_ortoptica',
        'eps_otorrinolaringologia',
        'eps_psicologia',
        'eps_psiquiatria',
        'eps_urología',
        'otras_remisiones',
        'motivos_remisiones',
        'paciente_id',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
