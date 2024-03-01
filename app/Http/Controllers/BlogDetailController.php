<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function __invoke(Blog $blog)
    {
        $blogs = Blog::with('author')->get();
        return view('blogdetail',[
            'blogs'=> $blogs,
            'blog' => $blog,
        ]);
    }
}
