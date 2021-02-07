<?php

namespace App\Http\Controllers\Frontend\Post;

use App\Comment;
use App\Events\PostViewEvent;
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
        $post = Post::where('slug',$slug)->first();
        event(new PostViewEvent($post));
        $post_id = $post->id;
        $comments = Comment::with('user','replies')->where('post_id',$post_id)->where('status',1)->get();
        $isLiked = DB::table('post_user')->where('user_id', $uid)
            ->where('post_id',$post_id)->count();

        $isScore=DB::table('post_user_point')->where('post_id',$post_id)->count();
        $score_1=DB::table('post_user_point')->where('post_id',$post_id)->where('point',1)->count();
        $score_2=DB::table('post_user_point')->where('post_id',$post_id)->where('point',2)->count();
        $score_3=DB::table('post_user_point')->where('post_id',$post_id)->where('point',3)->count();
        $score_4=DB::table('post_user_point')->where('post_id',$post_id)->where('point',4)->count();
        $score_5=DB::table('post_user_point')->where('post_id',$post_id)->where('point',5)->count();
        $avgScore=DB::table('post_user_point')->where('post_id',$post_id)->avg('point');
        return view('frontend.post.post-index.post' , compact('comments' ,'post', 'isLiked', 'isScore','avgScore',
            'score_1','score_2','score_3','score_4','score_5'));
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
        $userid = Auth::id();
        $ispoint=DB::table('post_user_point')->where('user_id',$userid)
        ->where('post_id',$id)->count();
        if ($ispoint){
            DB::table('post_user_point')->where('user_id',$userid)
                ->where('post_id',$id)->update([
                    'point'=>$request->input('point_score')
            ]);
            return back();
        }else{
            $point_post= Post::find($id);
            $point_post->points()->attach($userid, ['point' => $request->input('point_score')]);
            return back();
        }


    }
    public function search(Request $request){
        $query = $request['title'];
        $searchtitle=Post::with('photo','categories','user')->where('title','like',"%".$query."%")->get();
        return view('frontend/post/post-search',compact('searchtitle','query'));
}
}
