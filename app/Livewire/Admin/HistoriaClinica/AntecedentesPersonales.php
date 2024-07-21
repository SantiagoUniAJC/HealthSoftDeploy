<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HC\AntecedentesPersonales as HCAntecedentesPersonales;
use App\Models\Paciente;
use Livewire\Component;


class AntecedentesPersonales extends Component
{
    public $paciente;
    public $cita;

     // Antecedentes gineco-obstétricos
     public $gestas;
     public $partos;
     public $cesareas;
     public $nacidos_vivos;
     public $abortos;
     public $otros_antecedentes_ginecobstetricos;
     public $menarca;
     public $fecha_ultima_menstruacion;
     public $fecha_ultima_citologia;
     public $resultado_ultima_citologia;
     public $ciclos;
     public $planifica;
     public $hemoclasificacion_referido_por_usuario;
 
     // Antecedentes personales inmunológicos
     public $porta_carnet;
     public $antitetanica;
     public $antitetanica_fecha_ultima_dosis;
     public $antitetanica_esquema_completo;
     public $hepatitis_a;
     public $hepatitis_a_fecha_ultima_dosis;
     public $hepatitis_a_esquema_completo;
     public $hepatitis_b;
     public $hepatitis_b_fecha_ultima_dosis;
     public $hepatitis_b_esquema_completo;
     public $fiebre_amarilla;
     public $fiebre_amarilla_fecha_ultima_dosis;
     public $fiebre_amarilla_esquema_completo;
     public $influenza;
     public $influenza_fecha_ultima_dosis;
     public $influenza_esquema_completo;
     public $varicela;
     public $varicela_fecha_ultima_dosis;
     public $varicela_esquema_completo;
     public $meningococo;
     public $meningococo_fecha_ultima_dosis;
     public $meningococo_esquema_completo;
     public $virus_papiloma_humano;
     public $virus_papiloma_humano_fecha_ultima_dosis;
     public $virus_papiloma_humano_esquema_completo;
     public $covid_19;
     public $covid_19_fecha_ultima_dosis;
     public $covid_19_esquema_completo;
     public $otros;
     public $otros_fecha_ultima_dosis;
     public $otros_esquema_completo;

    public function render()
    {
        return view('livewire.admin.historia-clinica.antecedentes-personales');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

    }

    public function guardarAntecedentesPersonales()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $data = [
            'gestas' => $this->gestas,
            'partos' => $this->partos,
            'cesareas' => $this->cesareas,
            'nacidos_vivos' => $this->nacidos_vivos,
            'abortos' => $this->abortos,
            'otros_antecedentes_ginecobstetricos' => $this->otros_antecedentes_ginecobstetricos,
            'menarca' => $this->menarca,
            'fecha_ultima_menstruacion' => $this->fecha_ultima_menstruacion,
            'fecha_ultima_citologia' => $this->fecha_ultima_citologia,
            'resultado_ultima_citologia' => $this->resultado_ultima_citologia,
            'ciclos' => $this->ciclos,
            'planifica' => $this->planifica,
            'hemoclasificacion_referido_por_usuario' => $this->hemoclasificacion_referido_por_usuario,
            'porta_carnet' => $this->porta_carnet,
            'antitetanica' => $this->antitetanica,
            'antitetanica_fecha_ultima_dosis' => $this->antitetanica_fecha_ultima_dosis,
            'antitetanica_esquema_completo' => $this->antitetanica_esquema_completo,
            'hepatitis_a' => $this->hepatitis_a,
            'hepatitis_a_fecha_ultima_dosis' => $this->hepatitis_a_fecha_ultima_dosis,
            'hepatitis_a_esquema_completo' => $this->hepatitis_a_esquema_completo,
            'hepatitis_b' => $this->hepatitis_b,
            'hepatitis_b_fecha_ultima_dosis' => $this->hepatitis_b_fecha_ultima_dosis,
            'hepatitis_b_esquema_completo' => $this->hepatitis_b_esquema_completo,
            'fiebre_amarilla' => $this->fiebre_amarilla,
            'fiebre_amarilla_fecha_ultima_dosis' => $this->fiebre_amarilla_fecha_ultima_dosis,
            'fiebre_amarilla_esquema_completo' => $this->fiebre_amarilla_esquema_completo,
            'influenza' => $this->influenza,
            'influenza_fecha_ultima_dosis' => $this->influenza_fecha_ultima_dosis,
            'influenza_esquema_completo' => $this->influenza_esquema_completo,
            'varicela' => $this->varicela,
            'varicela_fecha_ultima_dosis' => $this->varicela_fecha_ultima_dosis,
            'varicela_esquema_completo' => $this->varicela_esquema_completo,
            'meningococo' => $this->meningococo,
            'meningococo_fecha_ultima_dosis' => $this->meningococo_fecha_ultima_dosis,
            'meningococo_esquema_completo' => $this->meningococo_esquema_completo,
            'virus_papiloma_humano' => $this->virus_papiloma_humano,
            'virus_papiloma_humano_fecha_ultima_dosis' => $this->virus_papiloma_humano_fecha_ultima_dosis,
            'virus_papiloma_humano_esquema_completo' => $this->virus_papiloma_humano_esquema_completo,
            'covid_19' => $this->covid_19,
            'covid_19_fecha_ultima_dosis' => $this->covid_19_fecha_ultima_dosis,
            'covid_19_esquema_completo' => $this->covid_19_esquema_completo,
            'otros' => $this->otros,
            'otros_fecha_ultima_dosis' => $this->otros_fecha_ultima_dosis,
            'otros_esquema_completo' => $this->otros_esquema_completo,
            'paciente_id' => $paciente->id,
        ];

         // Si el paciente es masculino, se establecen los valores "No aplica" para los campos relacionados con la historia ginecobstétrica.
         if ($this->paciente->genero == 'Masculino') {
            $noAplicaCampos = [
                'gestas',
                'partos',
                'cesareas',
                'nacidos_vivos',
                'abortos',
                'otros_antecedentes_ginecobstetricos',
                'menarca',
            ];
    
            foreach ($noAplicaCampos as $campo) {
                $data[$campo] = 0;
            }
        }

        // $this->validate([
        //     'gestas' => 'nullable',
        //     'partos' => 'nullable',
        //     'cesareas' => 'nullable',
        //     'nacidos_vivos' => 'nullable',
        //     'abortos' => 'nullable',
        //     'otros_antecedentes_ginecobstetricos' => 'nullable',
        //     'menarca' => 'nullable',
        //     'fecha_ultima_menstruacion' => 'nullable',
        //     'fecha_ultima_citologia' => 'nullable',
        //     'resultado_ultima_citologia' => 'nullable',
        //     'ciclos' => 'nullable',
        //     'planifica' => 'nullable',

        //     'hemoclasificacion_referido_por_usuario' => 'required',
        //     'porta_carnet' => 'required',
        //     'antitetanica' => 'required',
        //     'antitetanica_fecha_ultima_dosis' => 'nullable',
        //     'antitetanica_esquema_completo' => 'required',
        //     'hepatitis_a' => 'required',
        //     'hepatitis_a_fecha_ultima_dosis' => 'nullable',
        //     'hepatitis_a_esquema_completo' => 'required',
        //     'hepatitis_b' => 'required',
        //     'hepatitis_b_fecha_ultima_dosis' => 'nullable',
        //     'hepatitis_b_esquema_completo' => 'required',
        //     'fiebre_amarilla' => 'required',
        //     'fiebre_amarilla_fecha_ultima_dosis' => 'nullable',
        //     'fiebre_amarilla_esquema_completo' => 'required',
        //     'influenza' => 'required',
        //     'influenza_fecha_ultima_dosis' => 'nullable',
        //     'influenza_esquema_completo' => 'required',
        //     'varicela' => 'required',
        //     'varicela_fecha_ultima_dosis' => 'nullable',
        //     'varicela_esquema_completo' => 'required',
        //     'meningococo' => 'required',
        //     'meningococo_fecha_ultima_dosis' => 'nullable',
        //     'meningococo_esquema_completo' => 'required',
        //     'virus_papiloma_humano' => 'required',
        //     'virus_papiloma_humano_fecha_ultima_dosis' => 'nullable',
        //     'virus_papiloma_humano_esquema_completo' => 'required',
        //     'covid_19' => 'required',
        //     'covid_19_fecha_ultima_dosis' => 'nullable',
        //     'covid_19_esquema_completo' => 'required',
        //     'otros' => 'nullable',
        //     'otros_fecha_ultima_dosis' => 'nullable',
        //     'otros_esquema_completo' => 'nullable',
        // ]);

        $antecedentesPersonales = new HCAntecedentesPersonales($data);

        // $antecedentesPersonales->save();

        return redirect()->route('admin.historiasclinicas.habitos-extralaborales', ['paciente_id' => $paciente->id, 'cita_id' => $cita->id])->with('success', 'Antecedentes personales guardados con éxito');
    }

    
}
