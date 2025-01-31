<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('car-detail', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::with('facilities')->findOrFail($id);
        
        if (!$car) {
            return redirect()->route('index')->with('error', 'Car not found.');
        }
    
        return view('car-detail', compact('car'));
    }
}
