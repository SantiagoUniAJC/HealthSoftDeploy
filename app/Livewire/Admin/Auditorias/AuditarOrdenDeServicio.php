<?php

namespace App\Livewire\Admin\Auditorias;

use App\Models\OrdenDeServicio;
use Livewire\Component;
use Livewire\WithPagination;

class AuditarOrdenDeServicio extends Component
{
    use WithPagination;
    public $search;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $ordenservicios = OrdenDeServicio::whereHas('paciente', function ($query)
        {
            $query->where('nombres', 'LIKE', '%' . $this->search . '%')
                ->orWhere('numero_identificacion', 'LIKE', '%' . $this->search . '%');
        
        })
        ->where('estado', '=', 'Finalizado')
        ->paginate(7);

        return view('livewire.admin.auditorias.auditar-orden-de-servicio', compact('ordenservicios'));
    }
}
