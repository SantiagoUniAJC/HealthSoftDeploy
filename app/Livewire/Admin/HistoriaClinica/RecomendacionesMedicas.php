<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HistoriaClinica;
use App\Models\OrdenDeServicio;
use App\Models\Paciente;
use App\Models\ConceptoMedico;
use App\Models\RecomendacionesMedicas as ModelsRecomendacionesMedicas;
use Livewire\Component;
use App\Models\User;

class RecomendacionesMedicas extends Component
{
    public $paciente;
    public $user;
    public $ordenServicio;
    public $cita;

    // Recomendaciones médicas
    public $manejo_en_eps;
    public $control_tension;
    public $control_cardiaco;
    public $control_visual;
    public $cambio_lentes;
    public $control_auditivo;
    public $limpieza_conducto_auditivo;
    public $control_odontologico;
    public $medias_compresion_baja;
    public $medias_compresion_media;
    public $citologia_anual;
    public $planificacion_familiar;
    public $mamografia;

    // Recommendationes Laborales
    public $reportar_accidentes;
    public $cumplir_normas_seguridad;
    public $utilizar_EPI;
    public $higiene_postural;
    public $pausas_activas;
    public $uso_correccion_visual;
    public $protocolo_covid19;

    public $otras_recomendaciones_medico_laborales;

    // Notas médicas
    public $notas_medicas;

    public function render()
    {
        return view('livewire.admin.historia-clinica.recomendaciones-medicas');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;
        $user = User::findOrFail(auth()->user()->id);
        $this->user = $user;
    }

    public function guardarRecomendacionesMedicas()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            'otras_recomendaciones_medico_laborales' => 'required',
        ]);

        $manejo_en_eps = $this->manejo_en_eps ? 'manejo_en_eps' : 'Sin Recomendacion';
        $control_tension = $this->control_tension ? 'control_tension' : 'Sin Recomendacion';
        $control_cardiaco = $this->control_cardiaco ? 'control_cardiaco' : 'Sin Recomendacion';
        $control_visual = $this->control_visual ? 'control_visual' : 'Sin Recomendacion';
        $cambio_lentes = $this->cambio_lentes ? 'cambio_lentes' : 'Sin Recomendacion';
        $control_auditivo = $this->control_auditivo ? 'control_auditivo' : 'Sin Recomendacion';
        $limpieza_conducto_auditivo = $this->limpieza_conducto_auditivo ? 'limpieza_conducto_auditivo' : 'Sin Recomendacion';
        $control_odontologico = $this->control_odontologico ? 'control_odontologico' : 'Sin Recomendacion';
        $medias_compresion_baja = $this->medias_compresion_baja ? 'medias_compresion_baja' : 'Sin Recomendacion';
        $medias_compresion_media = $this->medias_compresion_media ? 'medias_compresion_media' : 'Sin Recomendacion';
        $citologia_anual = $this->citologia_anual ? 'citologia_anual' : 'Sin Recomendacion';
        $planificacion_familiar = $this->planificacion_familiar ? 'planificacion_familiar' : 'Sin Recomendacion';
        $mamografia = $this->mamografia ? 'mamografia' : 'Sin Recomendacion';

        // Recomendaciones Laborales
        $reportar_accidentes = $this->reportar_accidentes ? 'reportar_accidentes' : 'Sin Recomendacion';
        $cumplir_normas_seguridad = $this->cumplir_normas_seguridad ? 'cumplir_normas_seguridad' : 'Sin Recomendacion';
        $utilizar_EPI = $this->utilizar_EPI ? 'utilizar_EPI' : 'Sin Recomendacion';
        $higiene_postural = $this->higiene_postural ? 'higiene_postural' : 'Sin Recomendacion';
        $pausas_activas = $this->pausas_activas ? 'pausas_activas' : 'Sin Recomendacion';
        $uso_correccion_visual = $this->uso_correccion_visual ? 'uso_correccion_visual' : 'Sin Recomendacion';
        $protocolo_covid19 = $this->protocolo_covid19 ? 'protocolo_covid19' : 'Sin Recomendacion';

        // notas medicas
        $notas_medicas = $this->notas_medicas ? 'notas_medicas' : 'Sin Recomendacion';

        $recomendacionesMedicas = new ModelsRecomendacionesMedicas([
            'recomedacion_medica_1' => $manejo_en_eps,
            'recomedacion_medica_2' => $control_tension,
            'recomedacion_medica_3' => $control_cardiaco,
            'recomedacion_medica_4' => $control_visual,
            'recomedacion_medica_5' => $cambio_lentes,
            'recomedacion_medica_6' => $control_auditivo,
            'recomedacion_medica_7' => $limpieza_conducto_auditivo,
            'recomedacion_medica_8' => $control_odontologico,
            'recomedacion_medica_9' => $medias_compresion_baja,
            'recomedacion_medica_10' => $medias_compresion_media,
            'recomedacion_medica_11' => $citologia_anual,
            'recomedacion_medica_12' => $planificacion_familiar,
            'recomedacion_medica_13' => $mamografia,
            // Recomendaciones Laborales
            'recomendacion_laboral_1' => $reportar_accidentes,
            'recomendacion_laboral_2' => $cumplir_normas_seguridad,
            'recomendacion_laboral_3' => $utilizar_EPI,
            'recomendacion_laboral_4' => $higiene_postural,
            'recomendacion_laboral_5' => $pausas_activas,
            'recomendacion_laboral_6' => $uso_correccion_visual,
            'recomendacion_laboral_7' => $protocolo_covid19,
            'otras_recomendaciones_medico_laborales' => $this->otras_recomendaciones_medico_laborales,
            'paciente_id' => $paciente->id,
        ]);

        $recomendacionesMedicas->save();

        // verificar si existe una historia clinica para la cita actual.
        $historia_clinica = HistoriaClinica::where('paciente_id', $paciente->id)->where('cita_id', $cita->id)->first();

        if ($historia_clinica) {
            return redirect()->route('admin.historias-clinicas.index')->with('danger', 'Ya existe una historia clínica para la cita actual.');
        }

        HistoriaClinica::create([
            'paciente_id' => $this->paciente->id,
            'user_id' => $this->user->id,
            'cita_id' => $this->cita->id,
        ]);

        $orden_de_servicio = OrdenDeServicio::where('paciente_id', $this->paciente->id)->first();
        // cambiar estado de la orden de servicio de En Proceso a Finalizado
        OrdenDeServicio::where('id', $orden_de_servicio->id)->update([
            'estado' => 'Finalizado',
        ]);

        // cambiar estado de concepto medico de Abierto a en proceso
        $concepto_medico = ConceptoMedico::where('paciente_id', $this->paciente->id)->first();
        ConceptoMedico::where('paciente_id', $this->paciente->id);
        $concepto_medico->estado = 'en proceso';
        $concepto_medico->save();

        // si se selecciono la opcion de checkbox de solicitar notas medicas, redirigir a la vista de notas medicas
        if ($notas_medicas == 'notas_medicas') {
            return redirect()->route('admin.notas-medicas.create', $this->paciente->id)->with('success', 'Historia clínica guardada con éxito.');
        }

        return redirect()->route('admin.historias-clinicas.index')->with('success', 'Historia clínica guardada con éxito.');
    }
}
