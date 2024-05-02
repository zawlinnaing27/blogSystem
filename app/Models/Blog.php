<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


    public function author(){
       return $this->hasOne(User::class,'id', 'user_id');


    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function comments()  {
        return $this->hasMany(Comment::class);
}

public function subscribers(){
        return $this->belongsToMany(User::class);
}



public function unSubscribe(){
    $this->subscribers()->detach(auth()->id());
}
public function Subscribe(){
    $this->subscribers()->attach(auth()->id());
}
}
