<?php

namespace App\Livewire\Admin\Formatos;

use Livewire\Component;
use App\Models\Formato;

class FormatosDownload extends Component
{
    public function render()
    {
        return view('livewire.admin.formatos.formatos-download');
    }

    public $formatos;

    public function mount()
    {
        $this->formatos = Formato::all();
    }
}
