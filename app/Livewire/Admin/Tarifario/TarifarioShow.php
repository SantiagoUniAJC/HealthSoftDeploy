<?php

namespace App\Livewire\Admin\Tarifario;

use App\Models\Cliente;
use App\Models\Tarifa;
use Livewire\Component;
use Livewire\WithPagination;

class TarifarioShow extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['destroy'];
    public $cliente;

    public function render()
    {
        $search = $this->search;

        $tarifas = Tarifa::where('cliente_id', $this->cliente->id)
            ->when($this->search, function ($query) use ($search) {
                $query->whereHas('ciudad', function ($query) use ($search) {
                    $query->where('nombre_ciudad', 'like', '%' . $search . '%');
                });
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('livewire.admin.tarifario.tarifario-show', compact('tarifas'));
    }

    public function mount(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function destroy($tarifaId)
    {
        $tarifa = Tarifa::find($tarifaId);
        $tarifa->delete();
    }
}
