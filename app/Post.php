<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function userlikes()
    {
        return $this->belongsToMany(User::class);
    }

    public function userscore(){
        return $this->belongsToMany(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function points(){
        return $this->belongsToMany(PostUserPoint::class, 'post_user_point', 'post_id', 'user_id');
    }
}
