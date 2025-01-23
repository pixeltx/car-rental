<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::with(['brand', 'model'])->get();
        $galleries = Gallery::all();
        return view('index', compact('cars', 'galleries'));
    }
}
