<?php

namespace App\Livewire\Admin\ConceptoMedico;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ConceptoMedico;

class ConceptoAbierto extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $search = $this->search;

        $conceptomedico = ConceptoMedico::where(function ($query) use ($search) {
            if ($search) {
                $query->whereHas('paciente', function ($query2) use ($search) {
                    $query2->where('nombres', 'like', '%' . $search . '%')
                        ->orWhere('numero_identificacion', 'like', '%' . $search . '%');
                });
            }
        })
        ->where('estado', 'abierto')
        ->orderBy('created_at', 'desc')
        ->paginate(7);

        return view('livewire.admin.concepto-medico.concepto-abierto', compact('conceptomedico'));
    }
}
