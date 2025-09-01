<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
use HasFactory, Notifiable;

    protected $fillable = [
        'nome',      // seu campo de nome
        'email',
        'senha',     // seu campo de senha
        'objetivo',
    ];

    protected $hidden = [
        'senha',     // esconde senha ao serializar
        'remember_token',
    ];

    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    // Sobrescreve campo de senha usado no Auth
    public function getAuthPassword()
    {
        return $this->senha;
    }
}
