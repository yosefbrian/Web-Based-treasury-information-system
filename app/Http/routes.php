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

Route::get('/peraturanpd', 'PeraturanController@getDatapd');
Route::post('/peraturanpd','PeraturanController@storepd');
Route::get('/peraturanpd/{id}/delete', 'PeraturanController@deletepd');

Route::get('/peraturanbp', 'PeraturanController@getDatabp');
Route::post('/peraturanbp','PeraturanController@storebp');
Route::get('/peraturanbp/{id}/delete', 'PeraturanController@deletebp');

Route::get('/peraturantukin', 'PeraturanController@getDatatukin');
Route::post('/peraturantukin','PeraturanController@storetukin');
Route::get('/peraturantukin/{id}/delete', 'PeraturanController@deletetukin');

Route::get('/peraturanpbj', 'PeraturanController@getDatapbj');
Route::post('/peraturanpbj','PeraturanController@storepbj');
Route::get('/peraturanpbj/{id}/delete', 'PeraturanController@deletepbj');

Route::get('/peraturan', 'PeraturanController@getData');
Route::post('/peraturan','PeraturanController@store');
Route::get('/peraturan/{id}/delete', 'PeraturanController@delete');

Route::get('/profil','ProfilController@getData');

//DIARY
Route::get('/diary', 'DiaryController@index');
Route::get('diarynewpost','DiaryController@create');
Route::post('diarynewpost','DiaryController@store');
Route::get('diaryedit/{slug}','DiaryController@edit');
Route::post('diaryupdate','DiaryController@update');
Route::get('diarydelete/{id}','DiaryController@destroy');
Route::get('/diary/{slug}',['as' => 'diary', 'uses' => 'DiaryController@show'])->where('slug', '[A-Za-z0-9-_]+');

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

	Route::get('/editprofil/{id}', 'ProfilController@edit');
	Route::post('/editprofil/{id}', 'ProfilController@update');
	Route::get('/', 'AdminController@admin');

	Route::post('/spd','SPDController@create');

	Route::get('/listspd/{id}/delete', 'SPDController@delete');


	Route::get('/spd','SPDController@getData');
	Route::get('/listspd','SPDController@spdlist');
	Route::get('/spdcenter/{id}','SPDController@edit');
	Route::get('/listspd/{id}/ubah','SPDController@ubah');
	Route::post('/listspd/{id}/ubah','SPDController@update');
	
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

