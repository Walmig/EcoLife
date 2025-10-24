<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BmiController;

/*
|--------------------------------------------------------------------------
| Rotas públicas (qualquer usuário pode acessar)
|--------------------------------------------------------------------------
*/
Route::get('/', fn () => view('index'))->name('home');
Route::get('/blog', fn () => view('blog'))->name('blog');
Route::get('/calculadora', fn () => view('calculadora'))->name('calculadora');
Route::get('/receitas', fn () => view('receitas'))->name('receitas');
Route::get('/termos', fn () => view('termos'))->name('termos');

Route::get('/plantio', function () {
    return view('plantio');
});

Route::get('/infantil', function () {
    return view('infantil');
});

/*
|--------------------------------------------------------------------------
| Registro de usuários
|--------------------------------------------------------------------------
*/
Route::get('/register', [RegisterController::class, 'create'])->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

/*
|--------------------------------------------------------------------------
| Login/Logout
|--------------------------------------------------------------------------
*/
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Rotas protegidas (só para usuários autenticados)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/bmi/save', [BmiController::class, 'store'])->middleware('auth');

});
