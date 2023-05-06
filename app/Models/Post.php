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
        if ($filters['search'] ?? false){
            $query->where('title' , 'like' , '%'.request('search').'%')
                ->orwhere('excerpt' , 'like' , '%'.request('search').'%')
                ->orwhere('body' , 'like' , '%'.request('search').'%');
        }
    }


    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function category(){
        return $this->belongsTo(PostCategory::class,'category_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
