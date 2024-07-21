<?php

namespace App\Livewire\Admin\OrdenDeServicio;

use App\Models\Especialista;
use Livewire\Component;
use App\Models\OrdenDeServicio;

class OrdenDeServicioShow extends Component
{
    public $ordendeservicio;


    public function render()
    {   
        $especialistas = Especialista::all();
        return view('livewire.admin.orden-de-servicio.orden-de-servicio-show', compact('especialistas'));
    }

    public function mount(OrdenDeServicio $ordendeservicio)
    {
        $this->ordendeservicio = $ordendeservicio;


        return view('livewire.admin.orden-de-servicio.orden-de-servicio-show', compact('ordendeservicio'));
    }
}
