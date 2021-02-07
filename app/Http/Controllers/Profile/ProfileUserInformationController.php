<?php

namespace App\Http\Controllers\Profile;

use App\City;
use App\Photo;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProfileUserInformationController extends Controller
{
    public function getAllCities($ProvinceId){
        $cities = City::where('province_id',$ProvinceId)->get();
        $response=[
            'cities' => $cities
        ];
        return response()->json($response,200);
    }
    public function editInformation(Request $request,$id){
        $user = User::find($id);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->work = $request->input('work');
        $user->education = $request->input('education');
        $user->email_profile = $request->input('email_profile');
        $user->father_name = $request->input('father_name');
        $user->phone = $request->input('phone');
        $user->years = $request->input('years');
        $user->month = $request->input('month');
        $user->day = $request->input('day');
////
//        $user->a = $request->input('a');
//        $user->b = $request->input('b');
//        $user->c = $request->input('c');
//        $user->d = $request->input('d');
////
//        $user->a = $request->input('a');
//        $user->b = $request->input('b');
//        $user->c = $request->input('c');
//        $user->d = $request->input('d');

        $user->honors = $request->input('honors');
        $user->about_me = $request->input('about_me');

//        if ($file = $request->file('photo_id')){
//            $name = time(). $file->getClientOriginalName();
//            $file ->move('Image/Profileusers' , $name);
//            $photo = new Photo();
//            $photo->name = $file->getClientOriginalName();
//            $photo->path = $name ;
//            $photo->user_id = $id;
//            $photo->category = 'کاربر ها';
//            $photo->save();
//            $user->photo_id =$photo->id;
//        }
        $user->save();
        Session::flash('updateUser' , 'اطلاعات شما با موفقیت ویرایش شد .');
        return back();
    }
}
