<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_on_card',
        'card_number',
        'expiration_date',
        'cvv',
        'subtotal',
        'total',
        'shipping',
    ];

}
