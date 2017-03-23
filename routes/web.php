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


Route::get('articles/Profile/{username}' , function($username){
 	$user = 'App\User'::where('name', $username)->firstOrFail();
 	return View::make('articles/Profile')->with('user', $user);
 });

Auth::routes();


//Route::delete('articles/{id}','Articlecontroller@destroy');

Route::get('/home', 'HomeController@index');

Route::get('about','generic@about');

Route::get('articles/{id}/edit','Articlecontroller@edit'); 
/*
Route::get('articles','Articlecontroller@index');
Route::get('articles/{id}','Articlecontroller@show');
Route::get('articles/create','Articlecontroller@create');
Route::post('articles','Articlecontroller@store');
*/ 
Route::group(['middleware' => ['web']], function(){
		Route::resource('articles','Articlecontroller');
	});
//Route::resource('articles' , 'Articlecontroller');


 


