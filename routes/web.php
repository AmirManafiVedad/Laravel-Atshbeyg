<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/homee', 'HomeController@index')->name('home');

/*        Home            */

Route::get('/home','Frontend\FrontendHomeController@indexHome');




/*       Frontend PostIndex     */

Route::get('home/post/{slug}', 'Frontend\Post\PostIndexController@indexPost');
Route::post('home/post/{id}/like', 'Frontend\Post\PostIndexController@storeLikes');
Route::post('home/post/{id}/score', 'Frontend\Post\PostIndexController@storeScore');

Route::get('post/search','Frontend\Post\PostIndexController@search');

/*          Comments       */

Route::post('home/post/comment/{id}','Frontend\Post\PostCommentController@storeComment');


/*    Panel Admin User     */

Route::group(['middleware' => 'admin'] , function (){

    Route::get('admin/users/usersall','Admin\AdminUserController@usersAll');
    Route::get('admin/users/usersnormal','Admin\AdminUserController@usersNormal');
    Route::get('admin/users/usersVIP','Admin\AdminUserController@usersVIP');
    Route::get('admin/users/manager','Admin\AdminUserController@manager');
    Route::get('admin/users/create-user','Admin\AdminUserController@createUser');
    Route::post('admin/users/create-user','Admin\AdminUserController@storeUser');
    Route::get('admin/users/edituser/{id}','Admin\AdminUserController@edit');
    Route::put('admin/users/edituser/{id}','Admin\AdminUserController@update');
    Route::delete('admin/users/{id}','Admin\AdminUserController@destory');

//    resours posts

    Route::get('admin/posts/postall','Admin\AdminPostController@indexPosts');
    Route::get('admin/posts/createpost','Admin\AdminPostController@createPost');
    Route::post('admin/posts/createpost','Admin\AdminPostController@storePost');
    Route::get('admin/posts/editpost/{id}','Admin\AdminPostController@editPost');
    Route::put('admin/posts/editpost/{id}','Admin\AdminPostController@updatePost');
    Route::delete('admin/posts/{id}','Admin\AdminPostController@destoryPost');

//    resours posts

    Route::get('admin/categories','Admin\AdminCategoryController@indexCategories');
    Route::get('admin/categories/createcategories','Admin\AdminCategoryController@createCategories');
    Route::post('admin/categories/createcategories','Admin\AdminCategoryController@storeCategories');
    Route::get('admin/categories/editcategories/{id}','Admin\AdminCategoryController@editCategories');
    Route::put('admin/categories/editcategories/{id}','Admin\AdminCategoryController@updateCategories');
    Route::delete('admin/categories/{id}','Admin\AdminCategoryController@destoryCategories');

//    resours media

    Route::get('admin/media/mediaall','Admin\AdminMediaController@indexMedia');
    Route::get('admin/media/mediauserprofile','Admin\AdminMediaController@indexMediaUserProfile');
    Route::get('admin/media/mediaposts','Admin\AdminMediaController@indexMediaPost');
    Route::get('admin/media/mediacategories','Admin\AdminMediaController@indexMediacategories');
    Route::get('admin/media/createmedia','Admin\AdminMediaController@createMedia');
    Route::post('admin/media/createmedia','Admin\AdminMediaController@storeMedia');
    Route::delete('admin/media/mediaall/{id}','Admin\AdminMediaController@destoryMedia');

//    Resours Comments

    Route::get('admin/comments/requestcomment','Admin\AdminCommentController@requestComment');
    Route::get('admin/comments/commentsall','Admin\AdminCommentController@indexComment');
    Route::delete('admin/comments/commentsall/{id}','Admin\AdminCommentController@destoryComment');
    Route::post('admin/comments/commentsall/{id}','Admin\AdminCommentController@approveComment');
    Route::get('admin/comments/commentpending/{id}','Admin\AdminCommentController@commentPending');
//    Route::get('admin/media/mediaposts','Admin\AdminMediaController@indexMediaPost');
//    Route::get('admin/media/createmedia','Admin\AdminMediaController@createMedia');
//    Route::post('admin/media/createmedia','Admin\AdminMediaController@storeMedia');
//    Route::delete('admin/media/mediaall/{id}','Admin\AdminMediaController@destoryMedia');

});
