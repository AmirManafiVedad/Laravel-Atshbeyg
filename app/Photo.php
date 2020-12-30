<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable=['name' , 'path' , 'user_id'];
    protected $uploadProfile = '/Image/Profileuser/';
    protected $uploadpost = '/Image/postimage/';

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function post(){
        return $this->hasMany(Post::class);
    }
    public function category(){
        return $this->hasMany(Category::class);
    }
}
