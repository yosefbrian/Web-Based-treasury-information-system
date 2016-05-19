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

// Route::get('/', function () {, 
//     return view('welcome');
// });

Route::auth();
Route::get('/', 'HomeController@index');
Route::post('uploada', 'ExportController@upload');
Route::get('uploada', array('uses' => 'ExportController@upload'));




Route::group(['middleware' => 'auth'], function() {

Route::get('/editprofil/{id}', 'ProfilController@edit');
	Route::post('/editprofil/{id}', 'ProfilController@update');

Route::get('/gantipassword', 'UserController@changepassword');
Route::post('/gantipassword/{id}', 'UserController@ganti');

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

Route::get('/spdcenter','SPDController@spduser');
Route::post('/spdcenter/{id}', 'SPDController@storespd');

Route::get('/lihatnota/{id}', 'SPDController@lihat');
Route::get('/lihatnota/{id}/delete', 'SPDController@deletenota');

//DIARY
Route::get('/diary', 'DiaryController@index');
Route::get('diarynewpost','DiaryController@create');
Route::post('diarynewpost','DiaryController@store');
Route::get('diaryedit/{slug}','DiaryController@edit');
Route::post('diaryupdate','DiaryController@update');
Route::get('diarydelete/{id}','DiaryController@destroy');
Route::get('/diary/{slug}',['as' => 'diary', 'uses' => 'DiaryController@show'])->where('slug', '[A-Za-z0-9-_]+');

});


Route::group(['prefix' => 'spd','middleware' => 'role:SPD'], function()
{


	Route::post('/create','RoleController@create');	
	Route::get('/registeri','RoleController@registeri');
	Route::get('/role/{id}','RoleController@role');
	Route::post('/assign/{id}','RoleController@assign');


	Route::get('/daftaruser','UserController@getData');
	Route::get('/daftaruser/cari','UserController@cari');
	Route::get('/editprofiluser/{id}', 'UserController@edit');
	Route::post('/editprofiluser/{id}', 'UserController@update');
	Route::resource('/daftaruser/employees','UserController');
    Route::get('/daftaruser/employees/{id}/delete', 'UserController@delete');
    Route::get('/gantipassworduser/{id}', 'UserController@changepassworduser');
	Route::post('/gantipassworduser/{id}', 'UserController@resetpassworduser');
	
	Route::get('/', 'AdminController@admin');
		


	Route::post('/spd','SPDController@create');
	Route::get('/listspd/{id}/delete', 'SPDController@delete');
	Route::post('/listcari', 'SPDController@cari');
	Route::post('/searchspd', 'SPDController@searchspd');
	Route::post('/spdsearch', 'SPDController@spdsearch');
	Route::get('/spd','SPDController@getData');
	Route::get('/listspd','SPDController@spdlist');
	Route::get('/spdcenter/{id}','SPDController@edit');
	Route::get('/listspd/{id}/ubah','SPDController@ubah');
	Route::post('/listspd/{id}/ubah','SPDController@update');
	Route::get('/listspd/export', array('uses' => 'SPDController@exportall'));
	Route::get('/listspd/export/{tanggal}', array('uses' => 'SPDController@exporttgl'));


	Route::get('/bp1','bpController@getData');
	Route::get('/bp2','bpController@getData');

	//BP1
	Route::post('/bp1/ubah/{id}', 'bpController@update');
	Route::get('/bp1/ubah/{id}','bpController@editdata');
	Route::get('bp1/show/{id}/delete', 'bpController@delete');
	Route::post('/bp1/edit/{id}', 'bpController@create1');
	Route::get('/bp1/edit/{id}','bpController@make');
	Route::get('/bp1/show','bpController@show');
	Route::post('/bp1cari', 'bpController@bp1cari');
	Route::post('/indexbpcari', 'bpController@indexbpcari');
	Route::post('/indexbpsearch', 'bpController@indexbpsearch');
	Route::post('/bp1search', 'bpController@bp1search');
	Route::get('/bp1/export', array('uses' => 'bpController@exportbp1all'));
	Route::get('/bp1/export/{tanggal}', array('uses' => 'bpController@exportbp1tgl'));

	//BP2a
	Route::get('/bp2a/edit/{id}','bpController@make2');
	Route::post('/bp2a/edit/{id}', 'bpController@create2');
	Route::get('/bp2a/show','bpController@show2');
	Route::get('bp2a/show/{id}/delete', 'bpController@delete2');
	Route::post('/bp2/ubah/{id}', 'bpController@update2');
	Route::get('/bp2/ubah/{id}','bpController@editdata2');
	Route::post('/bp2cari', 'bpController@bp2cari');
	Route::get('/bp2/export', array('uses' => 'bpController@exportbp2all'));
	Route::get('/bp2/export/{tanggal}', array('uses' => 'bpController@exportbp2tgl'));


});




Route::group(['prefix' => 'bp2','middleware' => 'role:bp2'], function()
{

	//SPD
	Route::get('/spd','SPDController@getData');
	Route::get('/listspd','SPDController@spdlist');

	//BP
	Route::get('/bp1','bpController@getData');
	Route::get('/bp2','bpController@getData');

	//BP1
	Route::post('/bp1/ubah/{id}', 'bpController@update');
	Route::get('/bp1/ubah/{id}','bpController@editdata');
	Route::get('bp1/show/{id}/delete', 'bpController@delete');
	Route::post('/bp1/edit/{id}', 'bpController@create1');
	Route::get('/bp1/edit/{id}','bpController@make');
	Route::get('/bp1/show','bpController@show');
	Route::post('/bp1cari', 'bpController@bp1cari');
	Route::post('/indexbpcari', 'bpController@indexbpcari');
	Route::post('/indexbpsearch', 'bpController@indexbpsearch');
	Route::post('/bp1search', 'bpController@bp1search');
	Route::get('/bp1/export', array('uses' => 'bpController@exportbp1all'));
	Route::get('/bp1/export/{tanggal}', array('uses' => 'bpController@exportbp1tgl'));

	//BP2a
	Route::get('/bp2a/edit/{id}','bpController@make2');
	Route::post('/bp2a/edit/{id}', 'bpController@create2');
	Route::get('/bp2a/show','bpController@show2');
	Route::get('bp2a/show/{id}/delete', 'bpController@delete2');
	Route::post('/bp2/ubah/{id}', 'bpController@update2');
	Route::get('/bp2/ubah/{id}','bpController@editdata2');
	Route::post('/bp2cari', 'bpController@bp2cari');
	Route::get('/bp2/export', array('uses' => 'bpController@exportbp2all'));
	Route::get('/bp2/export/{tanggal}', array('uses' => 'bpController@exportbp2tgl'));
	Route::post('/bp2search', 'bpController@bp2search');

	Route::get('/', 'HomeController@coba');
	
});









Route::group(['prefix' => 'bp','middleware' => 'role:BP'], function()
{


	Route::post('/spd','SPDController@create');
	Route::get('/listspd/{id}/delete', 'SPDController@delete');
	Route::post('/listcari', 'SPDController@cari');
	Route::post('/searchspd', 'SPDController@searchspd');
	Route::post('/spdsearch', 'SPDController@spdsearch');
	Route::get('/spd','SPDController@getData');
	Route::get('/listspd','SPDController@spdlist');
	Route::get('/spdcenter/{id}','SPDController@edit');
	Route::get('/listspd/{id}/ubah','SPDController@ubah');
	Route::post('/listspd/{id}/ubah','SPDController@update');
	Route::get('/listspd/export', array('uses' => 'SPDController@exportall'));
	Route::get('/listspd/export/{tanggal}', array('uses' => 'SPDController@exporttgl'));


	//BP
	Route::get('/bp1','bpController@getData');
	Route::get('/bp2','bpController@getData');

	//BP1
	Route::post('/bp1/ubah/{id}', 'bpController@update');
	Route::get('/bp1/ubah/{id}','bpController@editdata');
	Route::get('bp1/show/{id}/delete', 'bpController@delete');
	Route::post('/bp1/edit/{id}', 'bpController@create1');
	Route::get('/bp1/edit/{id}','bpController@make');
	Route::get('/bp1/show','bpController@show');
	Route::post('/bp1cari', 'bpController@bp1cari');
	Route::post('/indexbpcari', 'bpController@indexbpcari');
	Route::post('/indexbpsearch', 'bpController@indexbpsearch');

	Route::post('/bp1search', 'bpController@bp1search');

	Route::get('/bp1/export', array('uses' => 'bpController@exportbp1all'));
	Route::get('/bp1/export/{tanggal}', array('uses' => 'bpController@exportbp1tgl'));

	//BP2a
	Route::get('/bp2a/edit/{id}','bpController@make2');
	Route::post('/bp2a/edit/{id}', 'bpController@create2');
	Route::get('/bp2a/show','bpController@show2');
	Route::get('bp2a/show/{id}/delete', 'bpController@delete2');
	Route::post('/bp2/ubah/{id}', 'bpController@update2');
	Route::get('/bp2/ubah/{id}','bpController@editdata2');
	Route::post('/bp2cari', 'bpController@bp2cari');
	Route::get('/bp2/export', array('uses' => 'bpController@exportbp2all'));
	Route::get('/bp2/export/{tanggal}', array('uses' => 'bpController@exportbp2tgl'));
	Route::post('/bp2search', 'bpController@bp2search');

	Route::get('/', 'HomeController@coba');
	
});



Route::group(['prefix' => 'admin','middleware' => 'role:admin'], function()
{


	//Statisitik rangking
	Route::get('/rangking','rangkingdinasController@show');
	Route::post('/rangkingtahun', 'rangkingdinasController@rangkingtahun');



	//BP
	Route::get('/bp1','bpController@getData');
	Route::get('/bp2','bpController@getData');

	//BP1
	Route::post('/bp1/ubah/{id}', 'bpController@update');
	Route::get('/bp1/ubah/{id}','bpController@editdata');
	Route::get('bp1/show/{id}/delete', 'bpController@delete');
	Route::post('/bp1/edit/{id}', 'bpController@create1');
	Route::get('/bp1/edit/{id}','bpController@make');
	Route::get('/bp1/show','bpController@show');
	Route::post('/bp1cari', 'bpController@bp1cari');
	Route::post('/indexbpcari', 'bpController@indexbpcari');
	Route::post('/indexbpsearch', 'bpController@indexbpsearch');

	Route::post('/bp1search', 'bpController@bp1search');

	Route::get('/bp1/export', array('uses' => 'bpController@exportbp1all'));
	Route::get('/bp1/export/{tanggal}', array('uses' => 'bpController@exportbp1tgl'));

	//BP2a
	Route::get('/bp2a/edit/{id}','bpController@make2');
	Route::post('/bp2a/edit/{id}', 'bpController@create2');
	Route::get('/bp2a/show','bpController@show2');
	Route::get('bp2a/show/{id}/delete', 'bpController@delete2');
	Route::post('/bp2/ubah/{id}', 'bpController@update2');
	Route::get('/bp2/ubah/{id}','bpController@editdata2');
	Route::post('/bp2cari', 'bpController@bp2cari');
	Route::get('/bp2/export', array('uses' => 'bpController@exportbp2all'));
	Route::get('/bp2/export/{tanggal}', array('uses' => 'bpController@exportbp2tgl'));
	Route::post('/bp2search', 'bpController@bp2search');

	//statistik

	Route::get('/statistik/pengeluarantahun','statistikController@pengeluarantahun');
	Route::get('/statistik/pengeluaranbulan','statistikController@pengeluaranbulan');
	Route::post('/statistik/pengeluaranbulancari','statistikController@pengeluaranbulancari');
	Route::get('/statistik/transportasitahun','statistikController@transportasitahun');
	Route::get('/statistik/transportasibulan','statistikController@transportasibulan');
	Route::post('/statistik/transportasibulancari','statistikController@transportasibulancari');
	Route::get('/statistik/dprtahun','statistikController@dprtahun');
	Route::get('/statistik/dprbulan','statistikController@dprbulan');
	Route::post('/statistik/dprbulancari','statistikController@dprbulancari');
	Route::get('/statistik/akomodasitahun','statistikController@akomodasitahun');
	Route::get('/statistik/akomodasibulan','statistikController@akomodasibulan');
	Route::post('/statistik/akomodasibulancari','statistikController@akomodasibulancari');
	Route::get('/statistik/uhtahun','statistikController@uhtahun');
	Route::get('/statistik/uhbulan','statistikController@uhbulan');
	Route::post('/statistik/uhbulancari','statistikController@uhbulancari');
	Route::get('/statistik/angkutantahun','statistikController@angkutantahun');
	Route::get('/statistik/angkutanbulan','statistikController@angkutanbulan');
	Route::post('/statistik/angkutanbulancari','statistikController@angkutanbulancari');	



	Route::post('/create','RoleController@create');	
	Route::get('/registeri','RoleController@registeri');
	Route::get('/role/{id}','RoleController@role');
	Route::post('/assign/{id}','RoleController@assign');
	
	Route::get('/bikin','pemberitahuanController@create');
	Route::post('/bikin','pemberitahuanController@store');
	Route::get('/{id}/delete', 'pemberitahuanController@delete');


Route::post('/newslider','HomeController@stor');
Route::get('/slider','HomeController@cret');
Route::get('/slider/{id}/delete', 'HomeController@delete');


	//Daftar User
	Route::get('/daftaruser','UserController@getData');
	Route::get('/daftaruser/cari','UserController@cari');
	Route::get('/editprofiluser/{id}', 'UserController@edit');
	Route::post('/editprofiluser/{id}', 'UserController@update');
	Route::resource('/daftaruser/employees','UserController');
    Route::get('/daftaruser/employees/{id}/delete', 'UserController@delete');
    Route::get('/gantipassworduser/{id}', 'UserController@changepassworduser');
	Route::post('/gantipassworduser/{id}', 'UserController@resetpassworduser');
	
	Route::get('/', 'AdminController@admin');

	
	//spd
	Route::post('/spd','SPDController@create');
	Route::get('/listspd/{id}/delete', 'SPDController@delete');
	Route::post('/listcari', 'SPDController@cari');
	Route::post('/searchspd', 'SPDController@searchspd');
	Route::post('/spdsearch', 'SPDController@spdsearch');
	Route::get('/spd','SPDController@getData');
	Route::get('/listspd','SPDController@spdlist');
	Route::get('/spdcenter/{id}','SPDController@edit');
	Route::get('/listspd/{id}/ubah','SPDController@ubah');
	Route::post('/listspd/{id}/ubah','SPDController@update');
	Route::get('/listspd/export', array('uses' => 'SPDController@exportall'));
	Route::get('/listspd/export/{tanggal}', array('uses' => 'SPDController@exporttgl'));
	



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

