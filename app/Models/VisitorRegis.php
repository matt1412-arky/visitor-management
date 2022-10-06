<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorRegis extends Model
{
    use HasFactory;
    protected $table = 'visitor_register';
    protected $fillable = [
        'user_id',
        'fullname',
        'phone',
        'invitation_from',
        'visitation_purpose',
        'transportation_used',
        'file_doc',
        'picture',
        'time_visit'
    ];
}
