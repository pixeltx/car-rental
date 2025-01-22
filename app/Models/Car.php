<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'car_name',
        'brand_id',
        'model_id',
        'car_plate',
        'image',
        'transmission',
        'engine_capacity',
        'seat_capacity',
        'price',
        'description',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($car) {
            if ($car->image) {
                Storage::disk('public')->delete($car->image);
            }
        });

        static::updating(function ($car) {
            if ($car->isDirty('image')) {
                $oldImage = $car->getOriginal('image');
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class);
    }
}
