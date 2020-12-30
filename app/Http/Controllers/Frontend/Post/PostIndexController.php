<?php

namespace App\Http\Controllers\Frontend\Post;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostIndexController extends Controller
{
    public function indexPost($slug){
        $uid=Auth::id();
        $post = Post::with('categories','user','photo')->where('slug', $slug)->first();
        $id = $post->id;

        $isLiked = DB::table('post_user')->where('user_id', $uid)
            ->where('post_id',$id)->count();

        $isScore=DB::table('post_reletive')->where('user_id',$uid)
            ->where('post_id',$id)->count();

        return view('frontend.post.post-index.post' , compact('post' , 'isLiked', 'isScore'));
    }

    public function storeLikes($id){
        $userid = Auth::id();
        $postid = Post::find($id);

        $isLiked = DB::table('post_user')->where('user_id', $userid)
            ->where('post_id',$id)->count();
        if ($isLiked){
            $likespost = Post::find($id)->like;
            $like = $likespost-1;
            Post::where('id', $id)->update([
                'like' => $like
            ]);
            $setLiked = DB::table('post_user')->where('user_id', $userid)
                ->where('post_id',$id)->delete();
        }
        else{
            $likespost = Post::find($id)->like;
            $like = $likespost+1;
            Post::where('id', $id)->update([
                'like' => $like
            ]);
            $usermodel= User::find($userid);
            $usermodel->postlikes()->attach($postid);
        }
        return redirect()->back();
    }
    public function storeScore(Request $request , $id){
        dd($request->all());
        $userid = Auth::id();
        $postid = Post::find($id);
        $usermodel= User::find($userid);
        $usermodel->postlikes()->attach($postid);
    }
    public function search(Request $request){
        $query = $request['title'];
        $searchtitle=Post::with('photo','categories','user')->where('title','like',"%".$query."%")->get();
        return view('frontend/post/post-search',compact('searchtitle','query'));
}
}
