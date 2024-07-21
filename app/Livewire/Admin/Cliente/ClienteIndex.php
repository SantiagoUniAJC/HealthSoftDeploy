<?php

namespace App\Livewire\Admin\Cliente;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\ClienteTarifaCiudad;
use App\Models\User;
use Livewire\WithPagination;

class ClienteIndex extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['desactivarCliente'];

    public function render()
    {
        $users = User::all();
        $clientes = cliente::with('tarifas', 'ciudad')
            ->where(function ($query) {
                $query->where('nombre_comercial', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('nit', 'LIKE', '%' . $this->search . '%');
            })
            ->where('estado', '=', 'activo')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('livewire.admin.cliente.cliente-index', compact('clientes'));
    }

    public function desactivarCliente($clienteId)
    {
        $cliente = cliente::find($clienteId);

        if ($cliente) {
            $cliente->estado = 'inactivo';
            $cliente->save();
        } else {
            session()->flash('danger', 'No se pudo encontrar la cliente');
        }
    }
}
