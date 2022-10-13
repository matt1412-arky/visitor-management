<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Visitor extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'visitors';
    protected $fillable = [
        'name',
        // 'email',
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
        // 'role_id'
    ];
    protected $with = [
        'link'
    ];
    protected $hidden = [
        'password',
        'role_id'
    ];
    protected $appends = [
        'role_id'
    ];
    protected function setAttributeRoleId()
    {
        $this->attributes['role_id'] = 6;
    }
    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class, 'link_visitor_id');
    }
}
