<?php

namespace App\Http\Controllers\Profile;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexProfileUserController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index(){
        $uid=Auth::id();

        $posts = Post::with('categories')->where('user_id',$uid)->get();
        return view('profile.indexprofile',compact('posts'));
    }

    public function editeInformation(Request $request){
        dd($request);
    }
}
