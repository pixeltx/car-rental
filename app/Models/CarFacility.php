<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CarFacility extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'facility_id',
        'icon',
        'description',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }

    public function images()
    {
        return $this->hasMany(FacilityImage::class);
    }
}
