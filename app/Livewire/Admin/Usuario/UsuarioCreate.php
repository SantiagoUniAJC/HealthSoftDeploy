<?php

namespace App\Livewire\Admin\Usuario;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioCreate extends Component
{
    public $name;
    public $cargo;
    public $telefono;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.admin.usuario.usuario-create');
    }

    public function createUser()
    {
        $this->validate([
            'name' => 'required',
            'cargo' => 'required',
            'telefono' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ], [
            'email.unique' => 'El correo electrónico ya está en uso.',
        ]);
        
        User::create([
            'name' => $this->name,
            'cargo' => $this->cargo,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        return redirect(route('admin.users.index'))->with('success', 'Usuario creado con éxito');
    }
}
