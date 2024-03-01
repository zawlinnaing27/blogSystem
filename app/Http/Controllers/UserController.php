<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class UserController extends Controller
{
   public function __invoke()
   {
        $blogs = Blog::with('author')->get();
            // dd($blogs);
        return view('blogs',[
            'blogs' => $blogs,
        ]);
   }


}
