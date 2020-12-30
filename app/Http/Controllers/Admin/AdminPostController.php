<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\CreatePost;
use App\Http\Requests\EditPost;
use App\Post;
use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Support\Facades\Session;

class AdminPostController extends Controller
{
    public function indexPosts(){
        $post = Post::with('user','photo','categories')->paginate(20);
        $count = Post::count();
        return view('panel-admin.posts.postall',[
            'post' => $post,
            'count' => $count
        ]);
    }
    public function createPost(){
        $categories = Category::pluck('title' , 'id');
        return view('panel-admin.posts.createpost',compact('categories'));
    }

    public function storePost(CreatePost $request){
        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->desc = $request->input('desc');
        if ($request->input('slug')){
            $slug = make_slug($request->input('slug'));
            $post->slug = str_replace(" ","-",$slug);

        }else{
            $slug = make_slug($request->input('title'));
            $post->slug = str_replace(" ","-",$slug);
        }
        $post->meta_description = $request->input('meta_description');
        $post->meta_key_words = $request->input('meta_kay_words');
        $post->user_id = auth()->id();
            $file = $request->file('photo_id');
            $name = time(). $file->getClientOriginalName();
            $file ->move('Image/PostImage' , $name);
            $photo = new Photo() ;
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name ;
        $photo->category = 'پست ها';
        $photo->save();
            $post->photo_id = $photo->id;
        $post->save();
        $post->categories()->attach($request->input('categories'));

        Session::flash('createPost' , 'پست با موفقیت ثبت شد .');
        return redirect('admin/posts/postall');

    }
    public function editPost($id){
        $post = Post::find($id);
        $categories = Category::pluck('title' , 'id');
        return view('panel-admin/posts/editpost' , compact('post' , 'categories'));
    }
    public function updatePost(EditPost $request , $id){
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->desc = $request->input('desc');
        if ($request->input('slug')){
            $slug = make_slug($request->input('slug'));
            $post->slug = str_replace(" ","&",$slug);
        }else{
            $slug = make_slug($request->input('title'));
            $post->slug = str_replace(" ","&",$slug);
        }
        $post->meta_description = $request->input('meta_description');
        $post->meta_key_words = $request->input('meta_kay_words');
        if (!is_null($request->file('photo_id'))){
            $file = $request->file('photo_id');
            $name = time(). $file->getClientOriginalName();
            $file ->move('Image/PostImage' , $name);
            $photo = new Photo() ;
            $photo->name = $file->getClientOriginalName();
            $photo->path = $name ;
            $photo->category = 'پست ها';
            $photo->save();
            $post->photo_id = $photo->id;
        }
        $post->save();
        $post->categories()->detach();
        $post->categories()->attach($request->input('categories'));

        Session::flash('editPost' , 'پست با موفقیت ویرایش شد .');
        return redirect('admin/posts/postall');
    }
    public function destoryPost($id){
        $post = Post::find($id);
        $photo = Photo::find($post->photo_id);
        unlink(public_path('Image/PostImage/'.$post->photo->path));
        $post->delete();
        $photo->delete();
        Session::flash('deletePost' , 'پست با موفقیت حذف شد .');
        return redirect('admin/posts/postall');
    }
}
