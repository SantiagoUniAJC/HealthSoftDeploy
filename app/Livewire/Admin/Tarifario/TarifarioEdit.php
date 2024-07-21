<?php

namespace App\Livewire\Admin\Tarifario;

use Livewire\Component;
use App\Models\Cliente;

class TarifarioEdit extends Component
{
    public $cliente;
    public $tarifa;
    public $precio;
    public $descuento;

    public function render()
    {
        $user = auth()->user();
        return view('livewire.admin.tarifario.tarifario-edit', compact('user'));
    }

    public function mount(Cliente $cliente, $tarifa)
    {
        $this->cliente = $cliente;
        $this->tarifa = $tarifa;
        $this->precio = $tarifa->precio;
        $this->descuento = $tarifa->descuento;
    }

    public function updateTarifa()
    {
        $tarifa = $this->tarifa;
        $this->tarifa->update([
            'precio' => $this->precio,
            'descuento' => $this->descuento,

        ]);

        $this->reset();

        return redirect()->route('admin.tarifarios.show', $tarifa->id)->with('warning', 'Tarifa modificada exitosamente');
    }
}
