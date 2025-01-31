<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blog', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        
        if (!$blog) {
            return redirect()->route('blog')->with('error', 'Blog not found.');
        }
    
        return view('blog-detail', compact('blog'));
    }
}
