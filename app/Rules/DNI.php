<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DNI implements Rule
{
    public function passes($attribute, $value)
    {
        // Lógica para validar el DNI (ejemplo: longitud de 8 caracteres y solo números)
        return preg_match('/^\d{8}$/', $value);
    }

    public function message()
    {
        return 'El :attribute debe ser un DNI válido de 8 dígitos.';
    }
}
