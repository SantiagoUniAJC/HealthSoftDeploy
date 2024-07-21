<?php

namespace App\Livewire\Admin\Agenda;

use Livewire\Component;
use App\Models\Cita;
use Carbon\Carbon;

class AgendaEdit extends Component
{
    public $cita;
    public $fecha_inicio;

    public function render()
    {
        return view('livewire.admin.agenda.agenda-edit');
    }

    public function mount(Cita $cita)
    {
        $this->cita = $cita;
    }

    public function reprogramarCita()
    {
        $cita_id = $this->cita->id;

        $this->validate([
            'fecha_inicio' => 'required',
        ]);

        $fecha_inicio = Carbon::parse($this->fecha_inicio);
        $fecha_fin = $fecha_inicio->addMinutes(14);
        $paciente_id = $this->cita->paciente_id;

        // Validación de existencia en la BBDD
        $existe_agenda = Cita::where(function ($query) use ($fecha_inicio, $fecha_fin) {
            $query->whereBetween('fecha_inicio', [$fecha_inicio, $fecha_fin])
                ->orWhereBetween('fecha_fin', [$fecha_inicio, $fecha_fin])
                ->orWhere(function ($query) use ($fecha_inicio, $fecha_fin) {
                    $query->where('fecha_inicio', '<', $fecha_inicio)
                        ->where('fecha_fin', '>', $fecha_fin);
                });
        })
            ->exists();

        // Verificar si el paciente tiene una cita activa actualmente
        $cita_activa = Cita::where('paciente_id', $paciente_id)
            ->where('fecha_fin', '>', Carbon::now())
            ->exists();

        // Verificar si existe una agenda en el horario seleccionado
        if ($existe_agenda) {
            return redirect()->route('admin.agendas.edit', $cita_id)->with('danger', 'Ya existe una cita programada en ese horario.');
        }

        // Si la cita ya ha pasado, permitir una nueva cita independientemente
        if (!$cita_activa && Carbon::parse($fecha_inicio)->isPast()) {
            $cita_activa = true;
        }

        $this->cita->update([
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'estado' => 'Agendada',
        ]);

        return redirect()->route('admin.agendas.index')->with('warning', 'La cita se ha reprogramado correctamente');
    }
}
