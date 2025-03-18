<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table ='stock';

    protected $fillable = [
        'title',
        'image',
        'rating',
        'reviews',
        'old_price',
        'new_price',
        'discount'
    ];
}
