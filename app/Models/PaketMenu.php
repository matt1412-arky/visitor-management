<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketMenu extends Model
{
    use HasFactory;
    protected $table = 'paket_menus';
    protected $fillable = [
        'nama_paket_menu',
        'minuman',
        'makanan',
        'jumlah',
        'cost',
        'picture'
    ];

    public function prop()
    {
    }
}
