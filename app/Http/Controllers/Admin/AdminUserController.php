<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUser;
use App\Http\Requests\EditUser;
use App\Role;
use App\User;
use App\Photo;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminUserController extends Controller
{

//    index show users

    public function usersAll(){
        $users=User::wherehas('roles',function ($query){
            $query->where('name','=','کاربر عادی');
            $query->orwhere('name','=','کاربر ویژه');
        })->paginate(20);
        $userscount=User::wherehas('roles',function ($query){
            $query->where('name','=','کاربر عادی');
            $query->orwhere('name','=','کاربر ویژه');
        })->count();

        return view('panel-admin.users.usersall',compact('users' , 'userscount'));
    }

    public function usersNormal(){
        $users = User::whereHas('roles', function($q) {
            $q->where('name','=', 'کاربر عادی');
        })->paginate(20);

        $userscount = User::count();

        return view('panel-admin.users.usersnormal',compact('users' , 'userscount'));
    }

    public function usersVIP(){
        $users = User::whereHas('roles' , function ($q){
            $q->where('name','=','کاربر ویژه');
        })->paginate(20);
        $userscount = User::whereHas('roles', function($q) {
            $q->where('name','=', 'کاربر ویژه');
        })->count();
        return view('panel-admin.users.usersVIP',compact('users' , 'userscount'));
    }

    public function manager(){
        $users = User::whereHas('roles' , function ($q){
            $q -> where('name','=','مدیر');
            $q -> orWhere('name','=','مدیر ارشد');
        })->paginate(20);
        $userscount = User::whereHas('roles' , function ($q){
            $q -> where('name','=','مدیر');
            $q -> orWhere('name','=','مدیر ارشد');
        })->count();

        return view('panel-admin.users.manager', compact('users' , 'userscount'));
    }

//    create user

    public function createUser(){
        $roles = Role::pluck('name' , 'id');
        return view('panel-admin.users.create-user' , compact('roles'));

    }

    public function storeUser(CreateUser $request){
        $user = new User();
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->created_by = auth()->id();
        $user->save();

        if ($file = $request->file('photo_id')){
            $name = time(). $file->getClientOriginalName();
            $file ->move('Image/Profileuser' , $name);
            $photo = new Photo() ;
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name ;
            $photo->user_id = $user->id;
            $photo->category = 'کاربر ها';
            $photo->save();
            $user->photo_id = $photo->id;
        }
        $user->save();
        $user->roles()->attach($request->input('roles'));
        Session::flash('createUser' , 'کابر با موفقیت ثبت شد .');
        return redirect(url('admin/users/usersall'));

    }

//  update users
//
//
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role:: pluck('name' , 'id');
        return view('panel-admin/users/edituser' , compact('user' , 'roles'));
    }
    public function update(EditUser $request , $id){
        $user = User::findOrFail($id);
        if ($file = $request->file('photo_id')){
            $name = time(). $file->getClientOriginalName();
            $file ->move('Image/Profileusers' , $name);
            $photo = new Photo();
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name ;
            $photo->user_id = Auth::id();
            $photo->category = 'کاربر ها';
            $photo->save();
            $user->photo_id =$photo->id;
        }
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        if (trim($request->input('password') != "")){
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();
        $user->roles()->sync($request->input('roles'));

        Session::flash('updateUser' , 'کابر با موفقیت ویرایش شد .');
        return redirect(url('admin/users/usersall'));
    }

//    delete users

    public function destory ($id){
        $user = User::with('photo')->find($id);
        $photo = Photo::find($user->photo_id);
        unlink(public_path('Image/Profileuser/'.$user->photo->path));
        $user->delete();
        $photo->delete();
        Session::flash('deleteUser' , 'کابر با موفقیت حذف شد .');
        return redirect('admin/users/usersall');
    }

}
