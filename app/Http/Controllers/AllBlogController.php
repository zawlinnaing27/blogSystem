<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class AllBlogController extends Controller
{
   public function __invoke(Request $request){

    $blogs = Blog::when(request('search'),function($query,$search) {
                 $query->where('title','LIKE','%'.$search.'%');
              })
              ->when(request('search'),function($query,$search) {
                  $query->where('body','LIKE','%'.$search.'%');
              })
            ->with('author','category')
            ->paginate(3)
            ->withQueryString();
    return view('allBlogs',[
        'blogs' => $blogs,
        'categories' => Category::all(),

    ]);
   }
}
