<?php

namespace App\Livewire\Admin\OrdenDeServicio;

use App\Models\OrdenDeServicio;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['cerrarOrden'];

    public function render()
    {
        $search = $this->search;

        $ordenservicios = OrdenDeServicio::where('estado', '!=', 'Finalizado')
            ->where(function ($query) use ($search) {
                if ($search) {
                    $query->whereHas('paciente', function ($query2) use ($search) {
                        $query2->where('nombres', 'like', '%' . $search . '%')
                            ->orWhere('numero_identificacion', 'like', '%' . $search . '%');
                    });
                }
            })
            ->orderBy('created_at', 'desc')
            ->paginate(7);

        return view('livewire.admin.orden-de-servicio.index', compact('ordenservicios'));
    }

    public function cerrarOrden($ordenservicioId)
    {
        $ordendeservicio = OrdenDeServicio::find($ordenservicioId);

        if ($ordendeservicio) {
            $ordendeservicio->estado = 'Finalizado';
            $ordendeservicio->save();
        } else {
            session()->flash('danger', 'No se pudo encontrar la orden de servicio');
        }
    }
}
