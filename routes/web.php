<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\rentController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MainInformationController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/order', function () {
    return view('order');
})->middleware(['auth', 'verified'])->name('order');

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/rent', [rentController::class, 'index'])->name('rent');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/testimoni', [TestimonyController::class, 'index'])->name('testimoni');

Route::get('/information', [MainInformationController::class, 'index'])->name('information');

// Route::get('/car-detail', function () {return view('car-detail');})->name('car-detail');
Route::get('/car-detail/{id}', [CarController::class, 'show'])->name('car-detail');

// Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// Route::get('/blog-detail/{id}', [BlogController::class, 'show'])->name('blog-detail');

require __DIR__.'/auth.php';
