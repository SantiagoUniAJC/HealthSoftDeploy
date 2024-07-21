<?php

namespace App\Livewire\Admin\OrdenDeServicio;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\ConceptoMedico;
use App\Models\OrdenDeServicio;
use App\Models\Paciente;
use App\Models\PrestadorDeSalud;
use App\Models\Tarifa;

class OrdenDeServicioCreate extends Component
{
    public $search;

    public $clientes;
    public $prestadorServicio;
    public $tarifas;

    public $open = false;

    public $tipo_evaluacion;
    public $enfasis;
    public $medio_venta;
    public $prestador_de_salud_id;
    public $paciente_id;
    public $cliente_id;
    public $user;
    public $estado = 'Pendiente Agendar';

    public $pacientes = [];

    public $clienteSeleccionado;
    public $tarifasSeleccionadas = [];

    public function render()
    {
        return view('livewire.admin.orden-de-servicio.orden-de-servicio-create');
    }

    public function mount()
    {
        $this->clientes = Cliente::all();
        $this->prestadorServicio = PrestadorDeSalud::all();
    }

    public function openModal()
    {
        $cliente = Cliente::find($this->cliente_id);
        $this->clienteSeleccionado = $cliente;
        $this->tarifas = Tarifa::where('cliente_id', $this->cliente_id)->get();
        $this->open = true;
    }

    public function searchPaciente()
    {
        if ($this->search) {
            $this->pacientes = Paciente::where(function ($query) {
                $query->where('nombres', 'LIKE', '%' . $this->search . '%')
                    ->orWhere('numero_identificacion', 'LIKE', '%' . $this->search . '%');
            })->get();
        } else {
            $this->pacientes = [];
        }
    }

    public function crearOrdenDeServicio()
    {
        $paciente_id = $this->paciente_id;

        $this->validate([
            'tipo_evaluacion' => 'required',
            'enfasis' => 'required',
            'medio_venta' => 'required',
            'prestador_de_salud_id' => 'required',
            'paciente_id' => 'required',
            'cliente_id' => 'required',
            'tarifasSeleccionadas' => 'required|array|min:1',
        ]);

        // Verificar si ya existe una orden de servicio pendiente o en proceso para este paciente
        $ordenExistente = OrdenDeServicio::where('paciente_id', $this->paciente_id)
            ->whereIn('estado', ['Pendiente Agendar', 'En proceso'])
            ->exists();

        if ($ordenExistente) {
            return redirect()->route('admin.ordendeservicios.index')->with('danger', 'Ya existe una orden de servicio pendiente o en proceso para este paciente');
        }

        $ordenDeServicio = OrdenDeServicio::create(array(
            // 'orden_numero' => 'HSEQ-' . date('Ymd') . '-' . rand(1, 999999),
            'orden_numero' => 'HSEQ-' . date('Ymd') . '-' . rand(1, 999999),
            'tipo_evaluacion' => $this->tipo_evaluacion,
            'enfasis' => $this->enfasis,
            'medio_venta' => $this->medio_venta,
            'prestador_de_salud_id' => $this->prestador_de_salud_id,
            //'usuario_solicita' => $this->user = User::findOrFail(auth()->user()->id),
            'usuario_solicita' => auth()->user()->id,
            'paciente_id' => $this->paciente_id,
            'cliente_id' => $this->cliente_id,
            'estado' => $this->estado,
        ));

        foreach ($this->tarifasSeleccionadas as $tarifaId => $isSelected) {
            if ($isSelected) {
                $tarifa = Tarifa::find($tarifaId);
                if ($tarifa) {
                    // Crear una instancia de la relación pivot
                    $ordenDeServicio->tarifas()->attach($tarifaId);
                }
            }
        }

        $this->reset();

        // Crear un concepto médico en estado 'abierto' para la orden de servicio creada
        ConceptoMedico::create([
            'estado' => 'abierto',
            'paciente_id' => $paciente_id,
            'orden_de_servicio_id' => $ordenDeServicio->id,
        ]);

        return redirect()->route('admin.ordendeservicios.index')->with('success', 'Orden de Servicio creada con éxito');
    }
}
