<?php

namespace App\Livewire\Admin\Paciente;

use App\Models\Paciente;
use Livewire\Component;

class PacienteShow extends Component
{
    public $paciente;

    public function render()
    {
        return view('livewire.admin.paciente.paciente-show');
    }

    public function mount(Paciente $paciente_id)
    {
        $paciente = Paciente::findOrFail($paciente_id);
    }
}
