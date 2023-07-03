<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_visitor',
        'id_karyawan',
        'item_name',
        'item_image',
        'status',
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class, 'visitor_id');
    }

    public function karyawan()
    {
        return $this->belongsTo(KaryawanGA::class, 'karyawan_id');
    }
}
