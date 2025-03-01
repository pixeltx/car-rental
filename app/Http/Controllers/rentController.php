<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class rentController extends Controller
{
    public function index()
    {
        $cars = Car::with(['brand', 'model'])->get();
        return view('rent', compact('cars'));
    }
}
