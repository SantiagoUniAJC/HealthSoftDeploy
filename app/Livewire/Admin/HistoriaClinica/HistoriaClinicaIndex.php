<?php

namespace App\Livewire\Admin\HistoriaClinica;

use App\Models\Cita;
use Livewire\Component;
use App\Models\HistoriaClinica;
use Livewire\WithPagination;

class HistoriaClinicaIndex extends Component
{
    use WithPagination;
    public $search;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['desactivarHistoriaClinica'];

    public function render()
    {
        $search = $this->search;

        $citas = Cita::all();
        $historiasClinicas = HistoriaClinica::where(function ($query) use ($search) {
            if ($search) {
                $query->whereHas('paciente', function ($query2) use ($search) {
                    $query2->where('nombres', 'like', '%' . $search . '%')
                        ->orWhere('numero_identificacion', 'like', '%' . $search . '%');
                });
            }
        })->where('estado', '=', 'activo')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.historia-clinica.historia-clinica-index', compact('historiasClinicas', 'citas'));
    }

    public function desactivarHistoriaClinica($historiaId)
    {
        $historia = HistoriaClinica::find($historiaId);

        if ($historia) {
            $historia->estado = 'inactivo';
            $historia->save();

        } else {
            session()->flash('danger', 'No se pudo encontrar la paciente');
        }
    }
}
