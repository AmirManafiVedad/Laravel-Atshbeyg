<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminCommentController extends Controller
{
    public function indexComment(){
        $comments=Comment::with('user')->orderBy('created_at','desc')->paginate(30);
        return view('panel-admin.comments.commentsall',compact('comments'));
    }
    public function requestComment(){
        $comments=Comment::with('user')->where('status',0)->orderBy('created_at','desc')->paginate(30);
            return view('panel-admin.comments.request-comment',compact('comments'));
    }
    public function approveComment($id){
        if (Comment::find($id)->status == 0){
            $comment=Comment::find($id);
            $comment->status= 1;
            $comment->save();
            Session::flash('approvedComment' , 'کامنت با موفقیت منتشر شد .');
        }
        else {
            $comment=Comment::find($id);
            $comment->status= 0;
            $comment->save();
            Session::flash('rejectedComment' , 'کامنت با موفقیت غیر فعال شد .');
        }
        return redirect('admin/comments/commentsall');

    }
    public function destoryComment($id){
        $comment=Comment::find($id);
        $comment->delete();
        Session::flash('deleteComment' , 'کامنت با موفقیت حذف شد .');
        return redirect('admin.comments.commentsall');
    }
}
