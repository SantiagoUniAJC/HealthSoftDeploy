<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use App\Models\HC\HabitosExtralaborales as HCHabitosExtralaborales;
use App\Models\Paciente;
use Livewire\Component;

class HabitosExtralaborales extends Component
{
    public $paciente;
    public $cita;

    // Habitos Extralaborales
    public $tabaco;
    public $cantidad_tabaco;
    public $tiempo_fumando;
    public $tiempo_suspension;
    public $licor;
    public $tiempo_tomando;
    public $frecuencia;
    public $actividad_deportiva;
    public $tipo_deporte;
    public $frecuencia_actividad_deportiva;
    public $sustancias_psicoactivas;
    public $tipo_sustancia;
    public $frecuencia_sustancias_psicoactivas;
    public $observaciones_habitos_extralaborales;


    public function render()
    {
        return view('livewire.admin.historia-clinica.habitos-extralaborales');
    }

    public function mount(Paciente $paciente, Cita $cita)
    {
        $paciente = $this->paciente;
        $cita = $this->cita;
    }

    public function guardarHabitosExtralaborales()
    {
        $paciente = $this->paciente;
        $cita = $this->cita;

        $this->validate([
            'tabaco' => 'required',
            'cantidad_tabaco' => 'required',
            'tiempo_fumando' => 'required',
            'tiempo_suspension' => 'required',
            'licor' => 'required',
            'tiempo_tomando' => 'required',
            'frecuencia' => 'required',
            'actividad_deportiva' => 'required',
            'tipo_deporte' => 'required',
            'frecuencia_actividad_deportiva' => 'required',
            'sustancias_psicoactivas' => 'required',
            'tipo_sustancia' => 'required',
            'frecuencia_sustancias_psicoactivas' => 'required',
            'observaciones_habitos_extralaborales' => 'required',
        ]);

        $habitosPersonales = new HCHabitosExtralaborales([
            'tabaco' => $this->tabaco,
            'cantidad_tabaco' => $this->cantidad_tabaco,
            'tiempo_fumando' => $this->tiempo_fumando,
            'tiempo_suspension' => $this->tiempo_suspension,
            'licor' => $this->licor,
            'tiempo_tomando' => $this->tiempo_tomando,
            'frecuencia' => $this->frecuencia,
            'actividad_deportiva' => $this->actividad_deportiva,
            'tipo_deporte' => $this->tipo_deporte,
            'frecuencia_actividad_deportiva' => $this->frecuencia_actividad_deportiva,
            'sustancias_psicoactivas' => $this->sustancias_psicoactivas,
            'tipo_sustancia' => $this->tipo_sustancia,
            'frecuencia_sustancias_psicoactivas' => $this->frecuencia_sustancias_psicoactivas,
            'observaciones_habitos_extralaborales' => $this->observaciones_habitos_extralaborales,
            'paciente_id' => $paciente->id
        ]);

        $habitosPersonales->save();

        return redirect()->route('admin.historiasclinicas.revision-por-sistemas', ['paciente_id' => $paciente->id, 'cita_id'=>$cita->id])->with('success', 'Habitos Extralaborales guardados con éxito');
    }
}
