<?php

namespace App\Livewire\Admin\Cliente;

use App\Models\Cliente;
use Carbon\Carbon;
use Livewire\Component;

class ClienteShow extends Component
{
    public Cliente $cliente;

    public function render()
    {
        return view('livewire.admin.cliente.cliente-show');
    }

    public function mount(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }
}