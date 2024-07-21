<?php

namespace App\Rules;

use App\Models\Tarifa;
use Illuminate\Contracts\Validation\Rule;

class UniqueTarifaPorCiudad implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    protected $cliente_id;
    protected $ciudad_id;

    public function __construct($cliente_id, $ciudad_id)
    {
        $this->cliente_id = $cliente_id;
        $this->ciudad_id  = $ciudad_id;
    }

    public function passes($attribute, $value)
    {
        // Verificar si ya existe un tarifario con el mismo tipo de examen en la misma ciudad
        $exists = Tarifa::where('cliente_id', $this->cliente_id)
            ->where('ciudad_id', $this->ciudad_id)
            ->where('nombre', $value)
            ->exists();

        return !$exists;
    }

    public function message()
    {
        return 'El examen con este código y nombre ya existe en la ciudad especificada.';
    }
}
