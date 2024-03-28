<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Blog $blog)
    {
           request()->validate([
                'body'=>'required'
            ]);

     $comment=([
        'user_id'=>Auth::user()->id,
        'blog_id'=>$blog->id,
        'body'=>request('body')
       ]);

       Comment::create($comment);
       return redirect()->back()->with('success','comment has been success');
    }

    }

