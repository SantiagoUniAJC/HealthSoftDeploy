<?php

namespace App\Livewire\Admin\NotasMedicas;

use App\Models\NotasMedicas;
use Livewire\Component;
use Livewire\WithPagination;

class NotasMedicasIndex extends Component
{
    use WithPagination;
    public $search;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['cerrarNotaMedica'];

    public function render()
    {
        $search = $this->search;

        $notasMedicas = NotasMedicas::where(function ($query) use ($search) {
            if ($search) {
                $query->whereHas('paciente', function ($query2) use ($search) {
                    $query2->where('nombres', 'like', '%' . $search . '%')
                        ->orWhere('numero_identificacion', 'like', '%' . $search . '%');
                });
            }
        })
        ->whereIn('estado', ['pendiente', 'en proceso'])
        ->orderBy('created_at', 'desc')
        ->paginate(7);

        return view('livewire.admin.notas-medicas.notas-medicas-index', compact('notasMedicas'));
    }

    public function cerrarNotaMedica($notamedicaId)
    {
        $notamedica = NotasMedicas::find($notamedicaId);
        $notamedica->update([
            'estado' => 'cerrada'
        ]);
    }
}
