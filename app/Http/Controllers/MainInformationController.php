<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class MainInformationController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('main-information', compact('faqs'));
    }
}
