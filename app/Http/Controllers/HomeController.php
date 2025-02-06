<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Gallery;
use App\Models\Blog;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::with(['brand', 'model'])->get();
        $mostPickedCars = Car::where('most_picked', true)
            ->with('facilities.facility')
            ->orderBy('most_picked', 'desc')
            ->take(3)
            ->get(); // Untuk Fetch Data Mobil Terpopuler dengan relasi fasilitas
        $galleries = Gallery::all();
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        return view('index', compact('cars', 'mostPickedCars', 'galleries', 'settings'));
    }
}
