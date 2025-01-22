<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimony extends Model
{
    use HasFactory;

    protected $fillable = ['image'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($testimony) {
            if ($testimony->image) {
                Storage::disk('public')->delete($testimony->image);
            }
        });

        static::updating(function ($testimony) {
            if ($testimony->isDirty('image')) {
                $oldImage = $testimony->getOriginal('image');
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
