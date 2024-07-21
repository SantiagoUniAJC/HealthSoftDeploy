<?php

namespace App\Livewire\Admin\Agenda;

use Livewire\Component;
use App\Models\Cita;
use Livewire\WithPagination;

class AgendaCitasPendientes extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        $citas = Cita::whereHas('paciente', function ($query) {
            $query->where('nombres', 'like', '%' . $this->search . '%');
        })
            // mostrar solo las citas pendientes en estado cancelada o no asistio y con fecha menor a la actual
            ->where('estado', 'Cancelada')
            ->orWhere('estado', 'No asistio')
            ->where('fecha_inicio', '<', now())
            ->orderBy('fecha_inicio', 'asc')
            ->paginate(10);

        return view('livewire.admin.agenda.agenda-citas-pendientes', compact('citas'));
    }
}
