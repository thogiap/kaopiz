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

use App\Http\Middleware\redirectLogin;

Route::get('/', function () {
    return view('welcome');

});

Route::get('login', 'LoginController@getLogin')->name('getLogin')->middleware('redirectLogin');
Route::post('login', 'LoginController@postLogin');

Route::get('listuser', function (){
    return view('logined');
})->middleware('checkLogin')->name('listUser');

//Route::get('year', function (){
//    return view('year');
//});

Route::get('shows', 'LoginController@shows')->name('shows');
Route::post('isLeapYear', 'LoginController@isLeapYear')->name('isLeapYear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
