<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
     public function create()
    {
        return view('register'); // sua view de cadastro
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'senha'     => 'required|min:6|confirmed',
            'objetivo'  => 'nullable|string|max:255',
        ]);

        $user = User::create([
            'nome'     => $request->nome,
            'email'    => $request->email,
            'senha'    => bcrypt($request->senha),
            'objetivo' => $request->objetivo,
        ]);

        return redirect('/login')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
