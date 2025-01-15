<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'car_name',
        'car_model',
        'car_plate',
        'seat_capacity',
        'price',
    ];
}
