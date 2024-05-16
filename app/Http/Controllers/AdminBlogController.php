<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminBlogController extends Controller
{
    public function creat()  {

        return view('blogs.create',[
            'categories'=> Category::all()
        ]);
}
    public function store( Request $request){
        $data = request()->validate([
          "title" => ["required"],
          "category_id" => ["required",Rule::exists('categories','id')],
          "slug" => ["required", Rule::unique('blogs', 'slug')],
          "intro" => ["required"],
          "body" => ["required"],
          'thumbnail' => ['required', 'image']
         ]);

         Blog::create([
          "title" => $data['title'],
          "category_id" => $data['category_id'],
          "slug" => $data['slug'],
          "intro" => $data['intro'],
          "body" => $data['body'],
          'user_id' => Auth()->user()->id,
          'thumbnail'=>request()->file('thumbnail')->store('thumbnail'),
         ]);

         return redirect('/')->with('success', 'Post Create Successful');
  }
}
