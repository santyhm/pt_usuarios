<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->active) {
                // Usuario activo, redireccionar a la ruta deseada después del login
                return redirect()->intended('/administration');
            } else {
                // Usuario inactivo, cerrar sesión y mostrar un mensaje de error
                Auth::logout();
                return back()->withErrors(['error' => true]);
            }
        }

        // Autenticación fallida
        return back()->withErrors(['error' => true]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
