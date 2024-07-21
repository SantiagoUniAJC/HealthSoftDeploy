<?php

namespace App\Livewire\Admin\Paciente;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Paciente;

class PacienteIndex extends Component
{
    use WithPagination;
    public $search;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['desactivarPaciente'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $pacientes = Paciente::where(function ($query) {
            $query->where('nombres', 'LIKE', '%' . $this->search . '%')
                ->orWhere('numero_identificacion', 'LIKE', '%' . $this->search . '%');
        })
        ->where('estado', '=', 'activo')
        ->orderBy('created_at', 'desc')
        ->paginate(6);

        return view('livewire.admin.paciente.paciente-index', compact('pacientes'));
    }

    public function desactivarPaciente($pacienteId)
    {
        $paciente = Paciente::find($pacienteId);

        if ($paciente) {
            $paciente->estado = 'inactivo';
            $paciente->save();

        } else {
            session()->flash('danger', 'No se pudo encontrar la paciente');
        }
    }
}
