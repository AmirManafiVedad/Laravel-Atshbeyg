<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Http\Controllers\Controller;

class AdminMediaController extends Controller
{

//    Index Media

    public function indexMedia(){
        $medias=Photo::with('user')->paginate(20);
        return view('panel-admin/media/mediaall', compact('medias'));
    }
    public function indexMediaUserProfile()
    {
        $medias=Photo::with('user')->where('category','=','کاربر ها')->paginate(20);
        return view('panel-admin/media/mediauserprofile',compact('medias'));
    }
    public function indexMediaPost()
    {
        $medias=Photo::with('user')->where('category','=','پست ها')->paginate(20);
        return view('panel-admin/media/mediaposts',compact('medias'));
    }
    public function indexMediacategories()
    {
        $medias=Photo::with('user')->where('category','=','دسته بندی ها')->paginate(20);
        return view('panel-admin/media/mediacategories',compact('medias'));
    }


    public function createMedia(){
        return view('panel-admin/media/createmedia');
    }
    public function storeMedia(){

    }
}
