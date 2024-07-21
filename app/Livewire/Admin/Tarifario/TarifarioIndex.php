<?php

namespace App\Livewire\Admin\Tarifario;

use Livewire\Component;
use App\Models\Tarifa;
use App\Models\Cliente;
use Livewire\WithPagination;

class TarifarioIndex extends Component
{
    use WithPagination;
    public $search;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $tarifas = Tarifa::where(function ($query) {
            $query->where('codigo', 'LIKE', '%' . $this->search . '%');
        });

        $clientes = Cliente::withCount('tarifas')->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.admin.tarifario.tarifario-index', compact('tarifas', 'clientes'));
    }
}
