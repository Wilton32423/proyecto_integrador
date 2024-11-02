<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function login()
    {
        return view('Login');
    }

    public function IniSesion(Request $request)
{
    // Validar la información del formulario
    $request->validate([
        'DNI' => 'required',
        'password' => 'required',
    ]);

    // Intentar encontrar al usuario por el DNI
    $usuario = Usuario::where('DNI', $request->DNI)->first();

    // Verificar si el usuario existe
    if (!$usuario) {
        return back()->withErrors([
            'DNI' => 'El DNI ingresado no existe.',
        ]);
    }

    // Verificar si la contraseña es correcta
    if (!password_verify($request->password, $usuario->password)) {
        return back()->withErrors([
            'password' => 'La contraseña proporcionada es incorrecta.',
        ]);
    }

    // Si las credenciales son correctas
    session(['idUsuario' => $usuario->idUsuario]); // Guardar el ID del usuario en la sesión
    return redirect()->route('anuncios'); // Redirigir a anuncios
}

}
