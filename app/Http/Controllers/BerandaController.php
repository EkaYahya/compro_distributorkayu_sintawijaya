<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BerandaController extends Controller
{
    public function index()
    {
        // Ambil beberapa blog terbaru
        $blogs = Blog::orderBy('tanggal', 'desc')->take(3)->get();
        
        // Lalu passing ke view 'front.index'
        return view('front.index', compact('blogs'));
    }
}
