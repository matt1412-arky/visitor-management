<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $table = 'links';
    protected $guarded = ['id'];


    public function visitor()
    {
        return $this->belongsTo(Visitor::class, 'id_visitor');
    }
    public function karyawan_ga()
    {
        return $this->belongsTo(KaryawanGA::class, 'id_karyawan');
    }
}
