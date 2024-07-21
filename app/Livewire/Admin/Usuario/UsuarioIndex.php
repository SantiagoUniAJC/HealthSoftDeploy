<?php

namespace App\Livewire\Admin\Usuario;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsuarioIndex extends Component
{
    use WithPagination;
    public $search;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['disable'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::with('roles')
        ->where('estado', '=', 'activo') // Solo usuarios activos
        ->where(function ($query) {
            $query->where('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('email', 'LIKE', '%' . $this->search . '%');
        })
        ->OrderBy('created_at', 'desc')
        ->paginate(5);

        return view('livewire.admin.usuario.usuario-index', compact('users'));
    }

    // Función para desactivar un usuario
    public function disable($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->estado = 'inactivo';
            $user->save();
        } else {
            session()->flash('danger', 'No se pudo encontrar al usuario');
        }
    }
}
