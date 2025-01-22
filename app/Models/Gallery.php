<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['image'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($gallery) {
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
        });

        static::updating(function ($gallery) {
            if ($gallery->isDirty('image')) {
                $oldImage = $gallery->getOriginal('image');
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
