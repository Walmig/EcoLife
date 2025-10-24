<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Bmi;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $latestBmi = Bmi::where('user_id', $user->id)
                        ->latest()
                        ->first(); // pega o último registro

        return view('perfil', compact('user', 'latestBmi'));
    }
}
