<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackMenu extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function karyawan()
    {
        $this->hasMany(KaryawanGA::class);
    }
}
