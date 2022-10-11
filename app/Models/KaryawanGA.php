<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class KaryawanGA extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'karyawan_ga';
    protected $primaryKey = 'NIK';

    protected $fillable = [
        'name',
        'email',
        'devisi',
        'jabatan',
        'role_id'
    ];
    protected $hidden = [
        'password',
    ];
    protected $append = [
        'role_id',
        'created_at',
        'updated_at',
    ];

    protected function setAttributeRoleId($value)
    {
        $this->attributes['role_id'] = $value;
    }
}
