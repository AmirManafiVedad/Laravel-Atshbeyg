<?php

namespace App\Http\Controllers\Frontend\Post;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostCommentController extends Controller
{
        public function storeComment(Request $request,$id){
            $comment=new Comment();
            $comment->description=$request->input('description');
            $comment->status= 0;
            $comment->user_id=Auth::id();
            $comment->post_id=$id;
            $comment->save();
            $post=Post::find($id);
            Session::flash('addComment','نظر شما با موفقیت ثبت شد و در انتظار تایید مدیران گرفت .');
            return redirect('home/post/'.$post->slug);
        }
    public function replay(Request $request){
            $post = $request->input('post_id');
        $parent = $request->input('parent_id');
        $comment=new Comment();
        $comment->description=$request->input('description');

        $comment->status= 0;
        $comment->user_id=Auth::id();
        $comment->post_id=$post;
        $comment->parent_id=$parent;
        $comment->save();
        $post=Post::find($post);
        Session::flash('addComment','نظر شما با موفقیت ثبت شد و در انتظار تایید مدیران گرفت .');
        return redirect('home/post/'.$post->slug);
    }


}
