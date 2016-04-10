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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::auth();
Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {

Route::get('/', 'PostController@index');

Route::get('/peraturan', 'PeraturanController@getData');
Route::post('/peraturan','PeraturanController@store');

Route::get('/peraturan/{id}/delete', 'PeraturanController@delete');

});


Route::group(['prefix' => 'bp','middleware' => 'role:BP'], function()
{


	Route::get('/', 'HomeController@coba');


	Route::get('new-post','PostController@create');
	
	// save new post
	Route::post('new-post','PostController@store');
	
	// edit post form
	Route::get('edit/{slug}','PostController@edit');
	
	// update post
	Route::post('update','PostController@update');
	
	// delete post
	Route::get('delete/{id}','PostController@destroy');
	
	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');
	
	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');
	
	
	// add comment
	Route::post('comment/add','CommentController@store');
	
	// delete comment
	Route::post('comment/delete/{id}','CommentController@distroy');

});


Route::group(['prefix' => 'admin','middleware' => 'role:admin'], function()
{


		Route::get('/bikin','pemberitahuanController@create');
	Route::post('/bikin','pemberitahuanController@store');
	Route::get('/{id}/delete', 'pemberitahuanController@delete');

	
	Route::get('/', 'HomeController@coba');


	Route::get('new-post','PostController@create');
	
	// save new post
	Route::post('new-post','PostController@store');
	
	// edit post form
	Route::get('edit/{slug}','PostController@edit');
	
	// update post
	Route::post('update','PostController@update');
	
	// delete post
	Route::get('delete/{id}','PostController@destroy');
	
	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');
	
	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');
	
	
	// add comment
	Route::post('comment/add','CommentController@store');
	
	// delete comment
	Route::post('comment/delete/{id}','CommentController@distroy');

	Route::post('uploadSPD', 'ExportController@uploadSPD');

	Route::get('uploadSPD', array('uses' => 'ExportController@uploadSPD'));

	Route::post('uploadBP', 'ExportController@uploadBP');

	Route::get('uploadBP', array('uses' => 'ExportController@uploadBP'));

   	Route::post('uploadTUKIN', 'ExportController@uploadTUKIN');

	Route::get('uploadTUKIN', array('uses' => 'ExportController@uploadTUKIN'));

   	Route::post('uploadPBJ', 'ExportController@uploadPBJ');

	Route::get('uploadPBJ', array('uses' => 'ExportController@uploadPBJ'));


});




Route::group(['prefix' => 'bp','middleware' => 'role:BP'], function(){



});

Route::group(['prefix' => 'spd','middleware' => 'role:SPD'], function(){


});

Route::group(['prefix' => 'klien','middleware' => 'role:klien'], function(){


});




//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');

// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');

