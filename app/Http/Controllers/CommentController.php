<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post){
         request()->validate([
             'name'=> 'required|string',
             'email'=>'required|email',
             'body'=>'required'
        ]);

         $post->comments()->create([
             'user_id'=>request()->user()->id,
             'body'=>request('body')
         ]);

         return back();



    }
}
