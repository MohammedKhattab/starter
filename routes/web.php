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
Auth::routes(['verify' => true]);

Route::get('/home','HomeController@index')->name('home')->middleware('verified');

Route::get('/',function(){
   return 'Home';
});


//
//
//
//
//Route::get('/', function () {
//    $data = ['name'=>'Ali','age'=>23,'gender'=>'mail'];
//    return view('auth/register',compact('data'));
//});
//
//Route::get('/show_number/{id}', function ($id) {
//    return $id;
//})->name('number');
//
//route::get('/show_string',function (){
//    return "welcome";
//})->name('string');
//
//
//Route::namespace('Front')->group(function (){
//    Route::get('users','UserController@showUsers');
//});
//
//Route::group(['prefix'=>'s','middleware'=>'auth'],function (){
//    Route::get('/',function (){
//        return 'userssssssss';
//    });
//});
//
//Route::group(['namespace'=>'Admin'],function(){
//    Route::get('second','AdminController@Delete');
//});
//
//
//Route::group(['namespace'=>'Admin'], function(){
//    route::get('insert','AdminController@Insert');
//    route::get('delete','AdminController@Delete');
//    route::get('update','AdminController@Update');
//    route::get('modify','AdminController@Modify');
//});
//
//
//Route::get('login',function (){
//    return "Sorry must be login";
//})->name('login');
//
//Route::resource('news','NewsController');
//
//Route::get('index','NewsController@getIndex');
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
