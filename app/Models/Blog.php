<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($blog) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('image')) {
                $oldImage = $blog->getOriginal('image');
                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
