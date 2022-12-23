<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrderMenu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function karyawan(): HasOne
    {
        return $this->hasOne(KaryawanGA::class);
    }

    public function paket_menu(): HasOne
    {
        // return $this->belongsTo(PaketMenu::class);
        return $this->hasOne(PaketMenu::class);
    }
}
