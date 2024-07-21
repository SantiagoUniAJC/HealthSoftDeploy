<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HC\InfoLaboralActual as HCInfoLaboralActual;
use App\Models\OrdenDeServicio;
use Livewire\Component;
use App\Models\Paciente;

class InfoLaboralActual extends Component
{
    public $paciente;
    public $cita;

    public $orden_de_servicio;
    public $cargo_a_desempeñar;
    public $area_de_trabajo;
    public $descripcion_del_cargo;
    public $turno_de_trabajo;
    public $rango_salarial;
    public $fecha_ingreso;
    public $factores_de_riesgo_para_el_cargo;
    public $exposicion_a_factores_de_riesgo;
    public $uso_de_epp = [];
    public $tipos_factores_de_riesgo = [];

    //exposicion_a_factores_de_riesgo_fisicos;
    public $factoresFisicos = [];
    public $calor;
    public $frio;
    public $iluminacion;
    public $radiaciones;
    public $ruido;
    public $vibracion;

    //exposicion_a_factores_de_riesgo_quimicos;
    public $factoresQuimicos = [];
    public $fibras;
    public $gases;
    public $humo;
    public $material_particulado;
    public $sustancias_quimicas;
    public $vapores;

    //uso_de_epp;
    public $casco;
    public $gafas;
    public $protectores_auditivos;
    public $protectores_respiratorios;
    public $guantes;
    public $botas;

    public function render()
    {
        return view('livewire.admin.historia-clinica.info-laboral-actual');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;
        $this->orden_de_servicio = OrdenDeServicio::where('paciente_id', $this->paciente->id)->first();

        $this->cargo_a_desempeñar = $this->orden_de_servicio->paciente->cargo_a_desempeñar;
    }

    public function previousPage()
    {
        return redirect()->route('admin.historias-clinicas.create', $this->paciente->id);
    }

    public function guardarFactoresFisicos()
    {
        $calor = $this->calor ? 'calor' : 'No aplica';
        $frio = $this->frio ? 'frio' : 'No aplica';
        $iluminacion = $this->iluminacion ? 'iluminacion' : 'No aplica';
        $radiaciones = $this->radiaciones ? 'radiaciones' : 'No aplica';
        $ruido = $this->ruido ? 'ruido' : 'No aplica';
        $vibracion = $this->vibracion ? 'vibracion' : 'No aplica';

        $this->calor = $calor;
        $this->frio = $frio;
        $this->iluminacion = $iluminacion;
        $this->radiaciones = $radiaciones;
        $this->ruido = $ruido;
        $this->vibracion = $vibracion;

        $this->factoresFisicos = [
            $this->calor, $this->frio, $this->iluminacion, $this->radiaciones, $this->ruido,
            $this->vibracion
        ];
    }

    public function guardarFactoresQuimicos()
    {
        $fibras = $this->fibras ? 'fibras' : 'No aplica';
        $gases = $this->gases ? 'gases' : 'No aplica';
        $humo = $this->humo ? 'humo' : 'No aplica';
        $material_particulado = $this->material_particulado ? 'material_particulado' : 'No aplica';
        $sustancias_quimicas = $this->sustancias_quimicas ? 'sustancias_quimicas' : 'No aplica';
        $vapores = $this->vapores ? 'vapores' : 'No aplica';

        $this->fibras = $fibras;
        $this->gases = $gases;
        $this->humo = $humo;
        $this->material_particulado = $material_particulado;
        $this->sustancias_quimicas = $sustancias_quimicas;
        $this->vapores = $vapores;

        $this->factoresQuimicos = [
            $this->fibras, $this->gases, $this->humo, $this->material_particulado, $this->sustancias_quimicas,
            $this->vapores
        ];
    }

    public function guardarInfoLaboralActual()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            'area_de_trabajo' => 'required',
            'descripcion_del_cargo' => 'required',
            'turno_de_trabajo' => 'required',
            'rango_salarial' => 'required',
            'fecha_ingreso' => 'nullable|date',
            'factores_de_riesgo_para_el_cargo' => 'required',
            'exposicion_a_factores_de_riesgo' => 'required',
        ]);

        $casco = $this->casco ? 'casco' : 'No aplica';
        $gafas = $this->gafas ? 'gafas' : 'No aplica';
        $protectores_auditivos = $this->protectores_auditivos ? 'protectores_auditivos' : 'No aplica';
        $protectores_respiratorios = $this->protectores_respiratorios ? 'protectores_respiratorios' : 'No aplica';
        $guantes = $this->guantes ? 'guantes' : 'No aplica';
        $botas = $this->botas ? 'botas' : 'No aplica';

        $this->casco = $casco;
        $this->gafas = $gafas;
        $this->protectores_auditivos = $protectores_auditivos;
        $this->protectores_respiratorios = $protectores_respiratorios;
        $this->guantes = $guantes;
        $this->botas = $botas;

        $this->uso_de_epp = [
            $this->casco, $this->gafas, $this->protectores_auditivos, $this->protectores_respiratorios, $this->guantes,
            $this->botas
        ];

        // Convertir los array a json
        $usoDeEPPJson = json_encode($this->uso_de_epp);

        if ($this->exposicion_a_factores_de_riesgo == 'Fisicos') {
            $tipos_factores_de_riesgo = json_encode($this->factoresFisicos);
        } else {
            $tipos_factores_de_riesgo = json_encode($this->factoresQuimicos);
        }

        $infoLaboral = new HCInfoLaboralActual([
            'paciente_id' => $this->paciente->id,
            'area_de_trabajo' => $this->area_de_trabajo,
            'descripcion_del_cargo' => $this->descripcion_del_cargo,
            'turno_de_trabajo' => $this->turno_de_trabajo,
            'rango_salarial' => $this->rango_salarial,
            'fecha_ingreso' => $this->fecha_ingreso,
            'factores_de_riesgo_para_el_cargo' => $this->factores_de_riesgo_para_el_cargo,
            'exposicion_a_factores_de_riesgo' => $this->exposicion_a_factores_de_riesgo,
            'tipos_factores_de_riesgo' => $tipos_factores_de_riesgo,
            'uso_de_epp' => $usoDeEPPJson,
        ]);

        $infoLaboral->save();

        return redirect()->route('admin.historias-clinicas.motivo-consulta', [ 'paciente_id'=> $paciente->id, 'cita_id'=>$cita->id ])->with('success', 'Información laboral actual guardada correctamente');
    }
}
