<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'usuario' => 'required',
            'contraseña' => 'required',
        ]);

        if ($credentials['usuario'] === 'admin' && $credentials['contraseña'] === 'admin') {
            return redirect()->intended('administrar');
        }

        return back()->withErrors([
            'usuario' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
}
