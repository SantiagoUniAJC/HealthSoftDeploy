<?php

namespace App\Livewire\Admin\NotasMedicas;

use Livewire\Component;
use App\Models\Paciente;

class NotasMedicasCreate extends Component
{
    public $paciente;

    public $descripcion;

    public function render()
    {
        return view('livewire.admin.notas-medicas.notas-medicas-create');
    }

    public function mount(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }

    public function crearNotaMedica()
    {
        $paciente = $this->paciente;

        $this->validate([
            'descripcion' => 'required',
        ]);

        $paciente->notasMedicas()->create([
            'descripcion' => $this->descripcion,
            'paciente_id' => $paciente->id,
        ]);

        return redirect()->route('admin.historias-clinicas.index')->with('success', 'La nota médica se ha creado con éxito');

    }
}
