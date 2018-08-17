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

// Route::get('/','TeamController@index')->middleware('checkAge');
Route::get('/','TeamController@index');

// Route::resource('test','TestController');

// Route::get('/welcome/{str}',function ($lang)
// {
// 	App::setlocale($lang);
// 	return view('welcome');
// });

// Route::post('diem',function(){return view('welcome')->with('message_success','Ngon ngay'); })->middleware('MyMiddle')->name('diem');

// Route::get('loi',function(){
//  echo "ban chua du diem";
// })->name('loi');  //->name la dinh danh cho route de controller su dung

// Route::get('nhapdiem',function(){
// 	return view('nhapdiem');
// })->name('nhapdiem');


// // View
// View::share('title','day la title');
// View::composer(['welcome','nhapdiem'],function($view){
// 	$view->with('composer','view composer');
// });


// //Cookie
// Route::get('getcookie','TestController@getcookie');
// Route::get('setcookie','TestController@setcookie');




Route::resource('team','TeamController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('test','TenController');
