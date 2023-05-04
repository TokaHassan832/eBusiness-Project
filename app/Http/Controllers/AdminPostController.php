<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view('admin.posts.index',['posts'=>$posts]);
    }

    public function create(){
        $categories=PostCategory::all();
        return view('admin.posts.create',['categories'=>$categories]);
    }

    public function edit($id){
        $categories=PostCategory::all();
        $post=Post::findorfail($id);
        return view('admin.posts.edit',['post'=>$post,'categories'=>$categories]);
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'id'=>['required','integer',Rule::unique('posts','id')],
            'title'=>['required','string'],
            'excerpt'=>['required','string'],
            'body'=>['required','string'],
            'category'=>'required'
        ]);

        $attributes['user_id']= auth()->user()->id;
         if ($request->hasFile('image')){
             $attributes['image'] = $request->file('image')->store('images','public');
         }

         Post::create($attributes);
        return redirect()->route('admin.index')->with('message','Post created successfully!');
    }

    public function update(Request $request , $id){
            $post=Post::findorfail($id);
            $attributes = $request->validate([
            'id'=>['required','integer',Rule::unique('posts','id')->ignore($post)],
            'title'=>['required','string'],
            'excerpt'=>['required','string'],
            'body'=>['required','string'],
            'category'=>'required'
        ]);

        if ($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('images', 'public');
        }

        Post::update($attributes);
        return redirect()->route('admin.index')->with('message','Post updated successfully!');

    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('admin.index')->with('message','Post deleted successfully!');
    }
}
