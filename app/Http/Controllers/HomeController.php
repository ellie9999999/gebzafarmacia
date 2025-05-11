<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Mostrar la vista de login
    public function showLoginForm()
    {
        return view('home');
    }

    // Lógica para el login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Intentar el login con las credenciales proporcionadas
        if (Auth::attempt($credentials)) {
            // Redirigir al home o a la página que desees
            return redirect()->intended('/');
        }

        // Si las credenciales no son válidas, vuelve a mostrar el login con error
        return back()->withErrors([
            'email' => 'Las credenciales no son válidas.',
        ]);
    }

    // Método para la página principal después de login
    public function index()
    {
        return view('app'); // Asegúrate de que esta vista exista
    }

    // Lógica para cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/home');
    }
}
