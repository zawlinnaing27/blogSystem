<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;

class BlogDetailController extends Controller
{
    public function index(Blog $blog)
    {
        $blogs = Blog::with('author','category')->get();
    $randomBlogs = Blog::with('author','category')->inRandomOrder()->take(3)->get();

        return view('blogdetail',[

            'blog' => $blog,
        'randomBlogs' => $randomBlogs,

        ]);
    }

    public function subscriptionHandler(Blog $blog) {

            if(User::find(auth()->id())->isSubscribed($blog)){
                $blog->unSubscribe();
            }else{
                $blog->Subscribe();
            }

         return back();


    }





}
