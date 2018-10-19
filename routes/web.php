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
Route::get('/', [
    'uses' => 'BlogController@index',
    'as' => 'blog'   
]);

Route::get('/blog/{post}',[
    'uses' => 'BlogController@show',
    'as' => 'blog.show' 
]);


Route::get('/category/{category}',[
    'uses' => 'BlogController@category',
    'as' => 'category' 
]);


Route::get('/author/{author}',[
    'uses' => 'BlogController@author',
    'as' => 'author' 
]);





Auth::routes();

Route::get('/home', 'Backend\HomeController@index');

Route::resource('/backend/backendblog', 'Backend\BackendblogController');


Route::resource('/backend/backendblog', 'Backend\BackendblogController', [
    'names' => [
         'index' => 'backend.backendblog.index',
         'store' => 'backend.backendblog.store',
         'create' => 'backend.backendblog.create',
         'edit'  =>  'backend.backendblog.edit',
         'destroy' => 'backend.backendblog.destroy',
         'update'  => 'backend.backendblog.update',
    ]
]);


Route::put('/backend/backendblog/restore/{blog}', [
    'uses' => 'Backend\BackendBlogController@restore',
    'as'   => 'backend.backendblog.restore'
]);

Route::delete('/backend/backendblog/force-destroy/{blog}', [
    'uses' => 'Backend\BackendBlogController@forceDestroy',
    'as'   => 'backend.backendblog.force-destroy'
]);

Route::resource('/backend/categories', 'Backend\CategoryController', [
    'names'  => [
        'index'  =>  'backend.categories.index',
        'create' =>  'backend.categories.create',
        'edit'   =>  'backend.categories.edit',
        'destroy'=>  'backend.categories.destroy',
        'store'  =>  'backend.categories.store',
        'update' =>  'backend.categories.update',


    ]
]);

Route::resource('/backend/users', 'Backend\UserController', [
    'names'  => [
        'index'  =>  'backend.users.index',
        'create' =>  'backend.users.create',
        'edit'   =>  'backend.users.edit',
        'destroy'=>  'backend.users.destroy',
        'store'  =>  'backend.users.store',
        'update' =>  'backend.users.update',


    ]
]);

Route::get('/backend/users/confirm/{users}', [
    'uses' => 'Backend\UserController@confirm',
    'as' => 'backend.users.confirm'
]);