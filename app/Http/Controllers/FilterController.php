<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function __invoke(Request $request)
    {
        $categoryId = $request->input('categoryId');

        $userId = $request->get('userId');

       $blogs = Blog::with('author','category');
       if($categoryId){
        $blogs ->whereHas('category', function ($query) use ( $categoryId) {
            $query->where('id', $categoryId);
        });
       }else{
            $blogs ->whereHas('author', function ($query) use ( $userId) {
                $query->where('id', $userId);
            });
       }

       $blogs = $blogs ->paginate(3)
       ->withQueryString();

    // dd($filters);
    return view('blogs',[
        'blogs'=> $blogs,
        'categories' => Category::all(),
    ]);

    }
}
