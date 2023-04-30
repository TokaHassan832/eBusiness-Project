<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::latest()->paginate(5);
        $recentPosts = Post::latest()->take(4)->get();
        $categories=PostCategory::all();
        $tags=Tag::all();
        return view('posts.index',['posts'=>$posts,'categories'=>$categories,'tags'=>$tags,'recentPosts'=>$recentPosts]);
    }

    public function show($id){
        $post=Post::findorfail($id);
        $recentPosts = Post::latest()->take(4)->get();
        $categories=PostCategory::all();
        $tags=Tag::all();
        return view('posts.show',['post'=>$post,'categories'=>$categories,'tags'=>$tags,'recentPosts'=>$recentPosts]);
    }
}
