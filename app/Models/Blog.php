<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'intro',
        'body',
        'user_id',
    ];

    public function author(){
       return $this->hasOne(User::class,'id', 'user_id');
    }

}
