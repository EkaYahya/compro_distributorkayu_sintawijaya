<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class ShowBlogController extends Controller
{
    public function index()
    {
        $data = Blog::latest()->paginate(10);
        return view('front.blog', compact('data'));
    }
    public function read($slug)
    {
        $recent = Blog::orderBy('created_at', 'asc')->paginate(5);

        // Pakai firstOrFail() agar jika slug tidak ditemukan, otomatis 404
        $data = Blog::where('slug', $slug)->firstOrFail();
        
        // Gunakan satu return
        return view('front.read', compact('data', 'recent'));
    }

}