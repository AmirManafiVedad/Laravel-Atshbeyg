<?php

namespace App\Http\Controllers\Frontend;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendHomeController extends Controller
{
    public function indexHome(Request $request){
        if($request['sort'] == 'desc') {
            $posts = Post::with('user','photo','categories')->orderBy('created_at','desc')->get();
        }elseif($request['sort'] == 'asc'){
            $posts = Post::with('user', 'photo', 'categories')->orderBy('created_at', 'asc')->get();
        }elseif ($request['sort'] == 'like'){
            $posts = Post::with('user','photo','categories')->orderBy('like','desc')->get();
        } elseif ($request['sort'] == 'comment'){

        }elseif ($request['sort'] == 'point'){

        } else {
            $posts = Post::with('user','photo','categories')->orderBy('created_at','desc')->get();

        }
        return view('frontend/home',[
            'posts'=>$posts,
        ]);
    }

}
