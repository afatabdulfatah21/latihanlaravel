<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontEndController@index')->name('index');




Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
    Route::get('/login', 'FrontEndController@getLogin');
    Route::get('/dashboard', 'HomeController@index')->name('indexDashboard');

    Route::get('/category', 'CategoryController@getIndex')->name('indexCategory');  
    Route::get('/category/create', 'CategoryController@getCreate')->name('createCategory');
    Route::post('/category/store', 'CategoryController@postStore')->name('storeCategory');
    Route::get('/category/edit/{id}', 'CategoryController@getEdit')->name('editCategory');
    Route::post('/category/update/{id}', 'CategoryController@postUpdate')->name('updateCategory');
    Route::get('/category/delete/{id}', 'CategoryController@getDelete')->name('deleteCategory');
    
    Route::get('/tag', 'TagController@getIndex')->name('indexTag');
    Route::get('/tag/create', 'TagController@getCreate')->name('createTag');
    Route::post('/tag/store', 'TagController@postStore')->name('storeTag');
    Route::get('/tag/edit/{id}', 'TagController@getEdit')->name('editTag');
    Route::post('/tag/update/{id}', 'TagController@postUpdate')->name('updateTag');
    Route::get('/tag/delete/{id}', 'TagController@getDelete')->name('deleteTag');

    Route::get('/user', 'UserController@getIndex')->name('indexUser');
    Route::get('/user/create', 'UserController@getCreate')->name('createUser');
    Route::post('/user/store', 'UserController@postStore')->name('storeUser');
    Route::get('/user/edit/{id}', 'UserController@getEdit')->name('editUser');
    Route::post('/user/update/{id}', 'UserController@postUpdate')->name('updateUser');
    Route::get('/user/delete/{id}', 'UserController@getDelete')->name('deleteUser');


    Route::get('/post', 'PostController@getIndex')->name('indexPost');
    Route::get('/post/create', 'PostController@getCreate')->name('createPost');
    Route::post('/post/store', 'PostController@postStore')->name('storePost');
    Route::get('/post/edit/{id}', 'PostController@getEdit')->name('editPost');
    Route::post('/post/update/{id}', 'PostController@postUpdate')->name('updatePost');
    Route::get('/post/trash/{id}', 'PostController@getTrash')->name('trashPost');
    Route::get('/post/trashed', 'PostController@getTrashed')->name('trashedPost');
    Route::get('/post/restore/{id}', 'PostController@getRestore')->name('restorePost');
    Route::get('/post/delete/{id}', 'PostController@getDelete')->name('deletePost');


});




Auth::routes();


