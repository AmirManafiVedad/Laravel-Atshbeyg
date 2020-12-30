<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\EditCategories;
use App\Photo;
use App\Http\Requests\CreateCategories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AdminCategoryController extends Controller
{
    public function indexCategories(){
        $categories=Category::paginate(20);
        $categoriescount=Category::count();
        return view('panel-admin/categories/categoriesall',compact('categories','categoriescount'));
    }

//    Create And Store Categories

    public function createCategories(){
        return view('panel-admin.categories.createcategories');
    }

    public function storeCategories(CreateCategories $request){
        $categories = new Category();
        $categories->title=$request->input('title');
        if ($request->input('slug')){
            $categories->slug = make_slug($request->input('slug'));
        }else{
            $categories->slug = make_slug($request->input('title'));
        }
        $categories->meta_description=$request->input('meta_description');
        $categories->meta_key_words=$request->input('meta_key_words');
        $categories->save();

//        photo and icon Categories

        $file = $request->file('photo_id');
        $name = time(). $file->getClientOriginalName();
        $file ->move('Image/Categories' , $name);
        $photo = new Photo() ;
        $photo->name = $file->getClientOriginalName();
        $photo->path = $name ;
        $photo->category = 'دسته بندی';
        $photo->save();
        $categories->photo_id = $photo->id;
        $categories->save();
        Session::flash('createCategories' , 'دسته بندی با موفقیت ثبت شد .');
        return redirect('admin/categories');
    }

//    Edit And Update Categories

    public function editCategories($id){
        $categories=Category::find($id);
        return view('panel-admin/categories/editcategories',compact('categories'));
    }

    public function updateCategories(EditCategories $request , $id){
        $categories = Category::find($id);
        $categories->title=$request->input('title');
        if ($request->input('slug')){
            $categories->slug = make_slug($request->input('slug'));
        }else{
            $categories->slug = make_slug($request->input('title'));
        }
        $categories->meta_description=$request->input('meta_description');
        $categories->meta_key_words=$request->input('meta_key_words');
        $categories->save();

        if (!is_null($request->file('photo_id'))){
            $file = $request->file('photo_id');
            $name = time(). $file->getClientOriginalName();
            $file ->move('Image/Categories' , $name);
            $photo = new Photo() ;
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name ;
            $photo->category = 'دسته بندی';
            $photo->save();
            $categories->photo_id = $photo->id;
        }
        $categories->save();
        Session::flash('updateCategories' , 'دسته بندی با موفقیت ویرایش شد .');
        return redirect('admin/categories');
    }

//    Delete Categories

    public function destoryCategories($id){
        $categories = Category::with('photo')->find($id);
        $photo = Photo::find($categories->photo_id);
        unlink(public_path('Image/Categories/'.$categories->photo->path));
        $categories->delete();
        $photo->delete();
        Session::flash('deleteCategories' , 'دسته بندی با موفقیت حذف شد .');
        return redirect('admin/categories');
    }
}
