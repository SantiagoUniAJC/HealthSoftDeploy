<?php

namespace App\Livewire\Admin\Especialista;

use App\Models\Especialista;
use Livewire\Component;

class EspecialistaShow extends Component
{
    public $especialista;

    public function render()
    {
        return view('livewire.admin.especialista.especialista-show');
    }

    public function mount(Especialista $especialista)
    {
        $this->especialista = $especialista;
    }

}
