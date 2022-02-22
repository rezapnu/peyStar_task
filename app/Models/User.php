<?php

namespace App\Models;

use App\Traits\FormatDate;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'username',
        'password',
        'deleted'
    ];


    protected $hidden = [
        'password',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
