<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class KaryawanGA extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'karyawan_ga';
    protected $primaryKey = 'NIK';

    protected $fillable = [
        'NIK',
        'name',
        'email',
        'devisi',
        'jabatan',
        'password',
        'role_id'
    ];

     protected $hidden = [
         'password',
     ];

    protected function password(): Attribute
    {
        return new Attribute(
            set: fn ($value) => $value === '' ? bcrypt('12345678') : bcrypt($value)
        );
    }
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
