<?php

namespace App\Livewire\Admin\Especialista;

use Livewire\Component;
use App\Models\Especialista;
use Livewire\WithPagination;

class EspecialistaIndex extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['desactivarEspecialista'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $especialistas = Especialista::where(function ($query) {
            $query->where('nombres', 'LIKE', '%' . $this->search . '%')
                ->orWhere('especialidad_medica', 'LIKE', '%' . $this->search . '%');
        })
            ->where('estado', '=', 'activo')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('livewire.admin.especialista.especialista-index', compact('especialistas'));
    }

    public function desactivarEspecialista($especialistaId)
    {
        $especialista = Especialista::find($especialistaId);

        if ($especialista) {
            $especialista->estado = 'inactivo';
            $especialista->save();
        } else {
            session()->flash('danger', 'No se pudo encontrar los especialistas');
        }
    }
}
