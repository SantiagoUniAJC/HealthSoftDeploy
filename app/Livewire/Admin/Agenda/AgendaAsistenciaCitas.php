<?php

namespace App\Livewire\Admin\Agenda;

use App\Models\Cita;
use Livewire\Component;
use Livewire\WithPagination;

class AgendaAsistenciaCitas extends Component
{

    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['confirmarCita', 'cancelarCita'];

    public function render()
    {
        $citas = Cita::whereHas('paciente', function ($query) {
            $query->where('nombres', 'like', '%' . $this->search . '%');
        })
            ->orderBy('fecha_inicio', 'asc')
            ->where('fecha_inicio', '>=', now())
            ->paginate(10);

        return view('livewire.admin.agenda.agenda-asistencia-citas', compact('citas'));
    }

    public function confirmarCita($citaId)
    {
        $cita = Cita::find($citaId);
        $cita->estado = 'Asistio';
        $cita->save();

        session()->flash('success', 'Cita confirmada exitosamente.');
    }

    public function cancelarCita($citaId)
    {
        $cita = Cita::find($citaId);
        if ($cita->estado == 'Cancelada') {
            session()->flash->with('danger', 'La cita ya se encuentra cancelada');
        }
        $cita->estado = 'Cancelada';
        $cita->save();
        session()->flash('success', 'Cita cancelada exitosamente.');
    }
}
