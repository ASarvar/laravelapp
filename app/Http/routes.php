<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::auth();

// Route::group(['middleware'=>'admin'], function(){


Route::get('/search', 'HomeController@search');

// });
Route::group(['middleware'=>'editor'], function(){

Route::get('/editor', function (){
	return view('editor.index');
	});

	Route::resource('editor/users', 'EditorUsersController');

});
Route::group(['middleware'=>'admin'], function(){

	Route::get('/admin', function (){
	return view('admin.index');

});

	Route::resource('admin/users', 'AdminUsersController');

	Route::resource('admin/posts', 'AdminPostsController');
	
	Route::resource('admin/categories', 'AdminCategoriesController');

	Route::resource('books', 'BooksController');


});


