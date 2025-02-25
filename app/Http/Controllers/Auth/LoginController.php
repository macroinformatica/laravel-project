<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ✅ IMPORTANTE: Añadir esta línea

class LoginController extends Controller
{
    // Mostrar la vista de login
    public function showLoginForm()
    {
        return view('admin.pages.login'); // Asegúrate de que la vista esté en esta ruta
    }

    // Procesar el login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Las credenciales ingresadas son incorrectas']);
    }

    // Cerrar sesión
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
