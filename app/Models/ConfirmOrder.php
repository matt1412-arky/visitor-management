<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmOrder extends Model
{
    use HasFactory;

    public function karyawan()
    {
        $this->belongsTo(KaryawanGA::class);
    }

    public function paket_menu()
    {
    }
}
