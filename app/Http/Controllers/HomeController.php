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
        $galleries = Gallery::all();
        $blogs = Blog::all();
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        return view('index', compact('cars', 'galleries', 'blogs', 'settings'));
    }
}
