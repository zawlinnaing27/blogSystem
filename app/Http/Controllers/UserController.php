<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function __invoke()
   {
        $blogs = Blog::all();

        return view('blogs',[
            'blogs' => $blogs,
        ]);
   }


}
