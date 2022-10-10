<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkVisitor extends Model
{
    use HasFactory;
    protected $table = 'link_visitors';
    protected $fillable = [
        'user_id',
        'token',
        'status'
    ];
    protected $with = [
        'user'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
