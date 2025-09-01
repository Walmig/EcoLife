<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', fn()=> view('blog'));
Route::get('/calculadora', fn()=> view('calculadora'));
// Route::get('/login', fn()=> view('login'));
// Route::get('/perfil', fn()=> view('perfil'));
Route::get('/termos', fn()=> view('termos'));

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index'])
     ->middleware('auth'); // só usuários logados