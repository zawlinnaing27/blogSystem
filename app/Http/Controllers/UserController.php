<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;


class UserController extends Controller
{
   public function __invoke(Request $request)
   {



        $blogs = Blog::with('author','category')
        ->paginate(3)
        ->withQueryString();
            // dd($blogs);
        return view('blogs',[
            'blogs' => $blogs,
            'categories' => Category::all(),
        ]);
   }


}
