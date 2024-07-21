<?php

namespace App\Livewire\Admin\Cliente;

use App\Models\Cliente;
use Livewire\Component;

class ClienteEdit extends Component
{
    public $cliente;
    public $nit;
    public $razon_social;
    public $nombre_comercial;
    public $fecha_inicio_relacion_comercial;
    public $asesor_comercial_asignado;
    public $actividad_economica;
    public $tipo_regimen_iva;
    public $responsabilidad_fiscal;
    public $departamento;
    public $ciudad;
    public $direccion;
    public $telefono_contacto1;
    public $telefono_contacto2;
    public $email;

    public function render()
    {
        return view('livewire.admin.cliente.cliente-edit');
    }

    public function mount(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->nit = $cliente->nit;
        $this->razon_social = $cliente->razon_social;
        $this->nombre_comercial = $cliente->nombre_comercial;
        $this->fecha_inicio_relacion_comercial = $cliente->fecha_inicio_relacion_comercial;
        $this->asesor_comercial_asignado = $cliente->asesor_comercial_asignado;
        $this->actividad_economica = $cliente->actividad_economica;
        $this->tipo_regimen_iva = $cliente->tipo_regimen_iva;
        $this->responsabilidad_fiscal = $cliente->responsabilidad_fiscal;
        $this->departamento = $cliente->departamento;
        $this->ciudad = $cliente->ciudad;
        $this->direccion = $cliente->direccion;
        $this->telefono_contacto1 = $cliente->telefono_contacto1;
        $this->telefono_contacto2 = $cliente->telefono_contacto2;
        $this->email = $cliente->email;
    }

    public function editarCliente()
    {
        $this->cliente->update([
            'nit' => $this->nit,
            'razon_social' => $this->razon_social,
            'nombre_comercial' => $this->nombre_comercial,
            'fecha_inicio_relacion_comercial' => $this->fecha_inicio_relacion_comercial,
            'asesor_comercial_asignado' => $this->asesor_comercial_asignado,
            'actividad_economica' => $this->actividad_economica,
            'tipo_regimen_iva' => $this->tipo_regimen_iva,
            'responsabilidad_fiscal' => $this->responsabilidad_fiscal,
            'departamento' => $this->departamento,
            'ciudad' => $this->ciudad,
            'direccion' => $this->direccion,
            'telefono_contacto1' => $this->telefono_contacto1,
            'telefono_contacto2' => $this->telefono_contacto2,
            'email' => $this->email,
        ]);

        $this->reset();

        return redirect()->route('admin.cliente.clientes.index')->with('warning', 'El Cliente se ha actualizado correctamente');
    }
}
