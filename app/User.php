<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    public function photo(){
        return $this->belongsTo(Photo::class);
    }
    public function isAdmin(){
        foreach ($this->roles as $role ){
            if($role->name == 'مدیر ارشد' || $role->name == 'مدیر'){
                return true;
            }
        }
        return false;
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function postlikes(){
        return $this->belongsToMany(Post::class);
    }
    public function commments(){
        return $this->hasMany(Comment::class);
    }
}
