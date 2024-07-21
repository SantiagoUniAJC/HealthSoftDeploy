<?php

namespace App\Livewire\Admin\Envios;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Livewire\WithFileUploads;

class FormModificarApp extends Component
{
    use WithFileUploads;
    public $nombres;
    public $descripcion;
    public $imagen;

    public function render()
    {
        return view('livewire.admin.envios.form-modificar-app');
    }

    public function formularioModificacionApp()
    {
        $this->validate([
            'nombres' => 'required',
            'descripcion' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        Mail::raw($this->descripcion, function ($message) {
            $message->from('health.software1@gmail.com', 'HSEQ S.A.S.');
            $message->to('duk000@hotmail.com');
            $message->subject('Mensaje enviado por ' . $this->nombres . ' desde Health Software');

            if ($this->imagen) {
                $message->attach($this->imagen->getRealPath(), [
                    'as' => $this->imagen->getClientOriginalName(),
                    'mime' => $this->imagen->getClientMimeType(),
                ]);
                return redirect()->route('admin.envio.form-modificar-app')->with('success', 'Correo enviado correctamente');
            } else {
                return redirect()->route('admin.envio.form-modificar-app')->with('danger', 'No se ha podido enviar el correo');
            }
        });

        $this->imagen = null;
    }
}
