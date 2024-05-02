<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

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

       //mail
       $subscribers = $blog->subscribers->filter(fn ($subscriber) => $subscriber->id != auth()->id());
   $subscribers->each(function ($subscriber) use ($blog){
     Mail::to($subscriber->email)->send(new SubscriberMail($blog));
    });
    // return redirect('blog-detail,'.$blog->id);
    return redirect()->back();

    }


    }

