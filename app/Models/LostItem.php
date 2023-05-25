<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LostItem extends Model
{
    use HasFactory;

    protected $fillable = ['item_name', 'item_image', 'status', 'visitor_id', 'karyawan_id'];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class, 'visitor_id');
    }

    public function karyawan()
    {
        return $this->belongsTo(KaryawanGA::class, 'karyawan_id');
    }
}
