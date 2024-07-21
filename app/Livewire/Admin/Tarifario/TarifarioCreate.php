<?php

namespace App\Livewire\Admin\Tarifario;

use App\Models\Ciudad;
use Livewire\Component;
use App\Models\Cliente;
use App\Models\Cup;
use App\Models\Tarifa;
use App\Rules\UniqueTarifaPorCiudad;

class TarifarioCreate extends Component
{
    public $cliente;
    public $examenes;
    public $user_id;
    public $ciudades;
    public $ciudad_id;

    public $codigo;
    public $tipo;
    public $nombre;
    public $precio;
    public $descuento = 0;
    public $cliente_id;
    public $tarifa;
    public $hayTarifas;

    public $mostrarTablaExamenes = false;
    public $examenesSeleccionados = [];

    // Variables para agregar todos los exámenes
    public $cups;
    public $selectedCups = [];
    public $precios = [];
    public $descuentos = [];
    public $ciudad_ids = [];
    public $todos = false;

    public $examenesActivos = [];

    private function actualizarclienteId()
    {
        $this->cliente_id = $this->cliente->id;
    }

    public function render()
    {
        $cups = Cup::all();
        $ciudades = Ciudad::all();
        return view('livewire.admin.tarifario.tarifario-create', compact('cups', 'ciudades'));
    }

    public function mount(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->cups = Cup::all();
        $this->examenes = Cup::all()->toArray();
        $this->ciudades = Ciudad::all();
        $this->user_id = auth()->user()->id;
    }

    public function rules()
    {
        return [
            'codigo' => 'required|string',
            'tipo' => 'required|string',
            'nombre' => [
                'required', 'string',
                new UniqueTarifaPorCiudad($this->cliente_id, $this->ciudad_id),
            ],
            'precio' => 'required|numeric',
            'descuento' => 'nullable|numeric',
            'cliente_id' => 'required|exists:clientes,id',
            'ciudad_id' => 'required|exists:ciudads,id',
            'user_id' => 'required|exists:users,id',
        ];
    }

    public function agregarExamen()
    {

        $this->actualizarclienteId();

        if ($this->codigo && $this->tipo && $this->nombre && $this->precio && $this->ciudad_id !== null) {
            $examen = [
                'nombre' => $this->nombre,
                'codigo' => $this->codigo,
                'tipo' => $this->tipo,
                'precio' => $this->precio,
                'descuento' => $this->descuento,
                'cliente_id' => $this->cliente_id,
                'user_id' => $this->user_id,
                'ciudad_id' => $this->ciudad_id,
            ];

            // Validar si el examen ya está en la lista
            foreach ($this->examenesSeleccionados as $examenSeleccionado) {
                if ($examenSeleccionado['codigo'] == $this->codigo && $examenSeleccionado['ciudad_id'] == $this->ciudad_id) {
                    // Examen ya existe en la lista, retornar sin agregar
                    $this->dispatch('examenDuplicado');
                    return;
                }
            }

            $this->examenesSeleccionados[] = $examen;

            $this->reset(['codigo', 'tipo', 'nombre', 'precio', 'descuento', 'ciudad_id']);

            $this->mostrarTablaExamenes = true;
        }
    }

    public function quitarExamen($index)
    {
        unset($this->examenesSeleccionados[$index]);
        $this->examenesSeleccionados = array_values($this->examenesSeleccionados);
    }

    public function agregarTodos()
    {
        $this->actualizarclienteId();

        // Lógica para inicializar los arrays si no están definidos
        $this->selectedCups = [];
        $this->precios = [];
        $this->descuentos = [];
        $this->ciudad_ids = [];

        // Agregar todos los CUPS a la lista
        foreach ($this->cups as $cup) {
            $this->selectedCups[$cup->id] = true;
            $this->precios[$cup->id] = null;
            $this->descuentos[$cup->id] = null;
            $this->ciudad_ids[$cup->id] = null;
        }

        $this->todos = true;
    }

    public function crearTarifaTodos()
    {
        $this->actualizarclienteId();

        $examenesActivos = [];

        foreach ($this->selectedCups as $cupId => $selected) {
            if ($selected) {
                $examenesActivos[] = [
                    'codigo' => $this->cups->find($cupId)->codigo,
                    'nombre' => $this->cups->find($cupId)->nombre,
                    'tipo' => $this->cups->find($cupId)->tipo ?? 'Sin tipo',
                    'precio' => $this->precios[$cupId],
                    'descuento' => $this->descuentos[$cupId] ?? 0,
                    'ciudad_id' => Ciudad::find($this->ciudad_ids[$cupId])->id ?? 'Sin ciudad'
                ];
            }
        }

        foreach ($examenesActivos as $examen) {

            $tarifa = new Tarifa();
            $tarifa->codigo = $examen['codigo'];
            $tarifa->nombre = $examen['nombre'];
            $tarifa->tipo = $examen['tipo'];
            $tarifa->precio = $examen['precio'];
            $tarifa->descuento = $examen['descuento'];
            $tarifa->ciudad_id = $examen['ciudad_id'];
            $tarifa->cliente_id = $this->cliente_id;
            $tarifa->user_id = $this->user_id;
            $tarifa->save();

        }

        $this->reset(['selectedCups', 'precios', 'descuentos', 'ciudad_ids', 'todos']);

        return redirect()->route('admin.tarifarios.index', $this->cliente)->with('success', '¡Tarifarios creados con éxito!');
    }

    public function crearTarifa()
    {
        $this->actualizarclienteId();        

        if (count($this->examenesSeleccionados) > 0) {

            foreach ($this->examenesSeleccionados as $examen) {

                $tarifa = new Tarifa($examen);
                $tarifa->save();
            }

            $this->reset(['examenesSeleccionados', 'codigo', 'tipo', 'nombre', 'precio', 'descuento']);

            return redirect()->route('admin.tarifarios.index', $this->cliente)->with('success', '¡Tarifarios creados con éxito!');

        } else {

            $this->validate();

            $tarifa = new Tarifa([
                'codigo' => $this->codigo,
                'tipo' => $this->tipo,
                'nombre' => $this->nombre,
                'precio' => $this->precio,
                'descuento' => $this->descuento,
                'cliente_id' => $this->cliente_id,
                'user_id' => $this->user_id,
                'ciudad_id' => $this->ciudad_id,
            ]);
            $tarifa->save();

            $this->reset(['examenes', 'codigo', 'tipo', 'nombre', 'precio', 'descuento', 'ciudad_id']);

            return redirect()->route('admin.tarifarios.index', $this->cliente)->with('success', '¡Tarifarios creados con éxito!');
        }
    }
}
