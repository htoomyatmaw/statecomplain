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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'TemplateController@index')->name('/');

Route::get('/login','LoginController@index')->name('authlogin');

Route::post('/login','LoginController@userAuthentication')->name('auth.login');

Route::get('/logout', 'LoginController@logout')->name('auth.logout');

Route::get('/register','RegisterController@index')->name('authregister');

Route::post('/store_register','RegisterController@store')->name('storeregister');



Route::group(['prefix'=> 'admindashboard','namespace'=>'backend', 'middleware' =>'isAdmin'], function(){
    Route::get('/','AdminController@index')->name('admin.dashboard');
});

Route::get('/user','frontend\UserController@index')->name('user.dashboard');




