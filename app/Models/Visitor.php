<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Visitor extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'visitors';
    protected $guard = 'visitor';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'invitation_from',
        'visitation_purpose',
        'visit_date',
        'arrival_time',
        'role_id',
    ];
    protected $hidden = [
        'password',
        'role_id'
    ];
    protected $appends = [
        'role_id'
    ];

    public function visit()
    {
        return $this->hasMany(Visit::class, 'id_visitor');
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class, 'id_visitor');
    }
}
