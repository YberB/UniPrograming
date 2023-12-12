<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'code',
        'email',
        'fechaN',
        'rol',
        'password'
        
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'fechaN' => 'date',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}
