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
        // Tambahkan kolom lain yang ingin Anda edit
    ];
}
