<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rentController extends Controller
{
    public function home(){
        return view('index');
    }
    public function rent(){
        return view('rent');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function testimoni(){
        return view('testimoni');
    }
    public function information(){
        return view('main-information');
    }
}
