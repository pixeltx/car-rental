<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class FacilityImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_facility_id',
        'image',
    ];

    public function carFacility()
    {
        return $this->belongsTo(CarFacility::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($facilityImage) {
            // Delete the image file from storage
            if ($facilityImage->image) {
                Storage::disk('public')->delete($facilityImage->image);
            }
        });

        static::updating(function ($facilityImage) {
            // Delete the old image file from storage if the image path is being updated
            if ($facilityImage->isDirty('image')) {
                $oldImagePath = $facilityImage->getOriginal('image');
                if ($oldImagePath) {
                    Storage::disk('public')->delete($oldImagePath);
                }
            }
        });
    }
}
