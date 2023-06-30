<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function scopeFilter($query , array $filters){
        $query->when($filters['search'] ?? false, fn($query,$search)=>
            $query->where('title' , 'like' , '%'.request('search').'%')
                ->orwhere('excerpt' , 'like' , '%'.request('search').'%')
                ->orwhere('body' , 'like' , '%'.request('search').'%'));


        $query->when($filters['category'] ?? false , fn($query,$category) =>
            $query
                ->whereExists(fn($query)=>
                    $query->from('post_categories')
                        ->whereColumn('post_categories.id','posts.postCategory_id')
                        ->where('post_categories.slug',$category))

            );


        $query->when($filters['tag'] ?? false, function ($query, $tag) {
            $query->whereExists(function ($query) use ($tag) {
                $query->from('post_tag')
                    ->join('tags', 'post_tag.tag_id', '=', 'tags.id')
                    ->whereColumn('post_tag.post_id', 'posts.id')
                    ->where('tags.id', $tag);
            });
        });


    }


    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function category(){
        return $this->belongsTo(PostCategory::class,'postCategory_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
