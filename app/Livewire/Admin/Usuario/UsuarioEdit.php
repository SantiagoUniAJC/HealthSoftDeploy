<?php

namespace App\Livewire\Admin\Usuario;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UsuarioEdit extends Component
{
    public $user;
    public $roles;
    public $selectedRoles = [];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->selectedRoles = $this->user->roles->pluck('id')->toArray();
    }

    public function updateRoles()
    {
        $this->user->roles()->detach(); // Elimina todos los roles del usuario (para evitar duplicados
        $this->user->roles()->attach($this->selectedRoles);

        return redirect()->route('admin.users.index')->with('success', 'Los roles se actualizaron con éxito');
    }

    public function render()
    {
        $this->roles = Role::all();
        return view('livewire.admin.usuario.usuario-edit');
    }
}
