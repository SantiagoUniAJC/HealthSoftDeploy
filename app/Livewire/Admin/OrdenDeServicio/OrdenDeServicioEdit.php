<?php

namespace App\Livewire\Admin\OrdenDeServicio;

use App\Models\OrdenDeServicio;
use App\Models\PrestadorDeSalud;
use App\Models\Tarifa;
use Livewire\Component;

class OrdenDeServicioEdit extends Component
{
    public $ordendeservicio;
    public $tipo_evaluacion;
    public $enfasis;

    public $prestador_de_salud_id;
    public $tarifasDisponibles;
    public $tarifasSeleccionadas;

    public function render()
    {   
        $prestadorDeSalud = PrestadorDeSalud::all();
        return view('livewire.admin.orden-de-servicio.orden-de-servicio-edit', compact('prestadorDeSalud'));
    }

    public function mount(OrdenDeServicio $ordendeservicio)
    {
        $this->ordendeservicio = $ordendeservicio;

        $this->tipo_evaluacion = $ordendeservicio->tipo_evaluacion;
        $this->enfasis = $ordendeservicio->enfasis;
        $this->prestador_de_salud_id = $ordendeservicio->prestador_de_salud_id;

        // Obtener todas las tarifas disponibles para este cliente
        $this->tarifasDisponibles = Tarifa::where('cliente_id', $ordendeservicio->cliente_id)->get();

         // Obtener las tarifas seleccionadas asociadas a la orden de servicio
        // $this->tarifasSeleccionadas = $ordendeservicio->tarifas->pluck('id')->toArray();
    }

    public function updateOrdenServicio()
    {
        $this->validate([
            'tipo_evaluacion' => 'required',
            'enfasis' => 'required',
            'prestador_de_salud_id' => 'required',
            // 'tarifasSeleccionadas' => 'required|array|min:1',
        ]);

        if ($this->ordendeservicio->estado == 'Pendiente Agendar' || $this->ordendeservicio->estado == 'En Proceso') {


            $this->ordendeservicio->update([
                'tipo_evaluacion' => $this->tipo_evaluacion,
                'enfasis' => $this->enfasis,
                'prestador_de_salud_id' => $this->prestador_de_salud_id,
            ]);

            // $this->ordendeservicio->tarifas()->sync($this->tarifasSeleccionadas);

            return redirect()->route('admin.ordendeservicios.index')->with('success', 'Orden de Servicio actualizada con éxito');
        } else {

            return redirect()->route('admin.ordendeservicios.index')->with('danger', 'No se puede actualizar una orden de servicio que no esté en estado Pendiente o En Proceso');
        }
    }
}
