<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table ='stock';

    public $incrementing = false;
    protected $keyType = 'int';
 
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'rating',
        'reviews',
        'old_price',
        'new_price',
        'discount'
    ];
}
