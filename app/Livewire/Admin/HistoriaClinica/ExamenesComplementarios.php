<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HC\ExamenesComplementarios as HCExamenesComplementarios;
use App\Models\Paciente;
use Livewire\Component;

class ExamenesComplementarios extends Component
{
    public $paciente;
    public $cita;
    public $examen = [];

    public $examenesSeleccionados = [];
    public $mostrarTablaExamenes = false;

    public $nombre_examen;
    public $fecha_examen;
    public $interpretacion_medica;
    public $observaciones_examen;
    public $resultado_de_laboratorios;
    public $vacunas_aplicadas;

    public function render()
    {
        return view('livewire.admin.historia-clinica.examenes-complementarios');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $this->paciente = $paciente;
        $this->cita = $cita;
    }

    public function agregarExamenComplementario()
    {
        $this->validate([
            'nombre_examen' => 'required',
            'fecha_examen' => 'required',
            'interpretacion_medica' => 'required',
            'observaciones_examen' => 'required',
            'resultado_de_laboratorios' => 'required',
            'vacunas_aplicadas' => 'required',
        ]);

        if ($this->nombre_examen && $this->fecha_examen && $this->interpretacion_medica && $this->observaciones_examen && $this->resultado_de_laboratorios && $this->vacunas_aplicadas !== null) {

            $examen = [
                'nombre_examen' => $this->nombre_examen,
                'fecha_examen' => $this->fecha_examen,
                'interpretacion_medica' => $this->interpretacion_medica,
                'observaciones_examen' => $this->observaciones_examen,
                'resultado_de_laboratorios' => $this->resultado_de_laboratorios,
                'vacunas_aplicadas' => $this->vacunas_aplicadas,
            ];
            $this->examenesSeleccionados[] = $examen;

            $this->reset(['nombre_examen', 'fecha_examen', 'interpretacion_medica', 'observaciones_examen', 'resultado_de_laboratorios', 'vacunas_aplicadas']);

            $this->mostrarTablaExamenes = true;
        }
    }

    public function quitarExamen($examen)
    {
        unset($this->examenesSeleccionados[$examen]);
    }

    public function guardarExamenesComplementarios()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            'examenesSeleccionados.*.nombre_examen' => 'required',
            'examenesSeleccionados.*.fecha_examen' => 'required',
            'examenesSeleccionados.*.interpretacion_medica' => 'required',
            'examenesSeleccionados.*.observaciones_examen' => 'required',
            'examenesSeleccionados.*.resultado_de_laboratorios' => 'required',
            'examenesSeleccionados.*.vacunas_aplicadas' => 'required',
        ]);

        foreach ($this->examenesSeleccionados as $examen) {
            $examenComplementario = new HCExamenesComplementarios([
                'nombre_examen' => $examen['nombre_examen'],
                'fecha_examen' => $examen['fecha_examen'],
                'interpretacion_medica' => $examen['interpretacion_medica'],
                'observaciones_examen' => $examen['observaciones_examen'],
                'resultado_de_laboratorios' => $examen['resultado_de_laboratorios'],
                'vacunas_aplicadas' => $examen['vacunas_aplicadas'],
                'paciente_id' => $paciente->id,
            ]);

            $examenComplementario->save();
        }

        

        return redirect()->route('admin.historiasclinicas.diagnostico', ['paciente_id' => $paciente->id, 'cita_id' => $cita->id])->with('success', 'Los examenes complementarios se han guardado correctamente');
    }
}
