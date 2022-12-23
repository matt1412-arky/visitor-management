<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderMenu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'order_menus';

    public function karyawan()
    {
        return $this->belongsTo(KaryawanGA::class, 'NIK_Karyawan', '');
    }

    public function paket_menu(): HasOne
    {
        // return $this->belongsTo(PaketMenu::class);
        return $this->hasOne(PaketMenu::class, 'id', 'id_paket_menu');
    }
}
