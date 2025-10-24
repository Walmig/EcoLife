<?php

namespace App\Http\Controllers;

use App\Models\Bmi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'bmi' => 'required|numeric',
            'category' => 'required|string|max:255',
            'message' => 'required|string',
            'tip' => 'required|string',
        ]);

        Bmi::create([
            'user_id' => Auth::id(),
            'bmi' => $request->bmi,
            'category' => $request->category,
            'message' => $request->message,
            'tip' => $request->tip,
        ]);

        return response()->json(['success' => true]);
    }
}
