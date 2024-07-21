<?php

namespace App\Livewire\Admin\Cliente;

use Livewire\Component;
use App\Models\User;
use App\Models\Cliente;

class ClienteCreate extends Component
{
    public $clientes, $users;

    public $nit, $razon_social, $fecha_inicio_relacion_comercial, $nombre_comercial, $asesor_comercial_asignado, $actividad_economica, $tipo_regimen_iva, $departamento, $responsabilidad_fiscal, $ciudad, $direccion, $telefono_contacto1, $telefono_contacto2, $email;

    public function render()
    {
        return view('livewire.admin.cliente.cliente-create');
    }

    public function mount()
    {
        $this->clientes = Cliente::all();
        $this->users = User::all();
    }

    public function crearCliente()
    {
        $this->validate([
            'nit' => 'required|unique:clientes',
            'razon_social' => 'required',
            'fecha_inicio_relacion_comercial' => 'required',
            'nombre_comercial' => 'required',
            'asesor_comercial_asignado' => 'required',
            'actividad_economica' => 'required',
            'tipo_regimen_iva' => 'required',
            'departamento' => 'required',
            'responsabilidad_fiscal' => 'required',
            'ciudad' => 'required',
            'direccion' => 'required',
            'telefono_contacto1' => 'required',
            'telefono_contacto2' => 'required',
            'email' => 'required|unique:clientes|email',
        ]);

        $cliente = new Cliente([
            'nit' => $this->nit,
            'razon_social' => $this->razon_social,
            'fecha_inicio_relacion_comercial' => $this->fecha_inicio_relacion_comercial,
            'nombre_comercial' => $this->nombre_comercial,
            'asesor_comercial_asignado' => $this->asesor_comercial_asignado,
            'actividad_economica' => $this->actividad_economica,
            'tipo_regimen_iva' => $this->tipo_regimen_iva,
            'departamento' => $this->departamento,
            'responsabilidad_fiscal' => $this->responsabilidad_fiscal,
            'ciudad' => $this->ciudad,
            'direccion' => $this->direccion,
            'telefono_contacto1' => $this->telefono_contacto1,
            'telefono_contacto2' => $this->telefono_contacto2,
            'email' => $this->email,
        ]);

        $cliente->save();

        return redirect()->route('admin.cliente.clientes.index')->with('success', 'Cliente creado exitosamente');

    }
}
