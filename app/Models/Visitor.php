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
        'age',
        'phone',
        'invitation_from',
        'visitation_purpose',
        'waktu_kunjungan',
        'transportasi_visitor',
        'plat_nomor',
        'picture',
        'file_surat',
        'no_darurat',
        'role_id',
        'password',
    ];
    protected $hidden = [
        'password',
        'role_id'
    ];
    protected $appends = [
        'role_id'
    ];

    public function picture(): Attribute
    {
        return new Attribute(
            get: fn ($value) => $value != '' ? asset('storage/app/pictures/' . $value, 1) : '',
            set: fn ($value) => $value != '' ? explode('/', $value)[1] : '',
        );
    }
}
