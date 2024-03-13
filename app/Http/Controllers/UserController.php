<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;


class UserController extends Controller
{
   public function __invoke(Request $request){
    $categoryId = $request->input('categoryId');
    $currentCategory = null;
    if ($categoryId) {
        $currentCategory = Category::find($categoryId);
    }

        $blogs = Blog::latest()
                ->when(request('search'),function($query,$search) {
                    $query->where('title','LIKE','%'.$search.'%')
                    ->orwhere('body', 'LIKE','%'.$search.'%');
                })
                ->when(request('categoryId')?? false , function($query,$categoryId) {
                    $query->whereHas('category', function ($query) use ( $categoryId) {
                        $query->where('id', $categoryId);
                    });
                })
                ->when(request('userId')?? false, function($query,$userId){
                    $query->whereHas('author', function ($query) use ( $userId) {
                        $query->where('id', $userId);
                    });
                })
                ->with('author','category')
                ->paginate(3)
                ->withQueryString();

        return view('blogs',[
            'blogs' => $blogs,
            'categories' => Category::all(),
            'currentCategory'=>$currentCategory
        ]);
   }


}
