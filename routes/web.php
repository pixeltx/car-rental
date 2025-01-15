<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rentController;

Route::get('/', function () {
    return view('index');
});

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

Route::get('/home', [rentController::class, 'home'])->name('home');
Route::get('/rent', [rentController::class, 'rent'])->name('rent');
Route::get('/aboutus', [rentController::class, 'aboutus'])->name('aboutus');
Route::get('/testimoni', [rentController::class, 'testimoni'])->name('testimoni');
Route::get('/information', [rentController::class, 'information'])->name('information');

require __DIR__.'/auth.php';
