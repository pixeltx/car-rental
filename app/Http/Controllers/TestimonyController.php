<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimony;

class TestimonyController extends Controller
{
    public function index()
    {
        $testimonies = Testimony::all();
        return view('testimoni', compact('testimonies'));
    }
}
