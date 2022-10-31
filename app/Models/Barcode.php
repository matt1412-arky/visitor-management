<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barcode extends Model
{
    use HasFactory;
    protected $table = 'barcodes';
    protected $guarded = ['id'];
    protected $with = ['link'];
    public function link(): HasMany
    {
        return $this->hasMany(Link::class, 'id', '');
    }
}
