<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Setting;

class MainInformationController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        $settings = Setting::all()->pluck('value', 'key')->toArray();
        return view('main-information', compact('faqs', 'settings'));
    }
}
