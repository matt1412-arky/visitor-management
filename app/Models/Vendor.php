<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Vendor extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'vendors';
    protected $guarded = ['id'];
    protected $hidden = [
        // 'password'
    ];



    // load lazy eager loading
}
