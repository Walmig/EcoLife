<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
      public function showLoginForm()
    {
        return view('login'); // sua view de login
    }

    // Processar login
    public function login(Request $request)
    {
        // Validação
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|min:6',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->senha, // Laravel espera 'password'
        ];

        // Autenticação
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Login bem-sucedido
            $request->session()->regenerate();
            return redirect()->intended('/'); // redireciona pro dashboard ou outra página
        }

        // Falha no login
        return back()->withErrors([
            'email' => 'E-mail ou senha incorretos.',
        ])->onlyInput('email');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); // volta para a página de login
    }
}
