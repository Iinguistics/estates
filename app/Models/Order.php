<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // when saving to db this turns orders into json, 
    // when getting this data from the db it turns to an array
    protected $casts = [
        'order' => 'array'
    ];
}
