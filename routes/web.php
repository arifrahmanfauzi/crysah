<?php


Auth::routes();

Route::get('/', function () {
    return view('landing');
});
Route::get('/test', function(){
    return view('test');
});

Route::get('/login2', function () {
    return view('auth.login2');
});

Route::get('/deposit', function () {
    return view('transaction.deposit');
});
Route::get('/home', 'HomeController@index')->name('home');
