<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EditVisitor extends Model
{
    protected $table = 'visitors'; // Nama tabel yang sesuai

    protected $fillable = [
        'name',
        'email',
        'phone',
        'invitation_from',
        'visitation_purpose',
        'visit_date',
        'arrival_time',
        // Tambahkan kolom lain yang ingin Anda edit
    ];
}
