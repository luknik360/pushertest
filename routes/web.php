<?php

use App\Events\NewTask;

Route::get('/', function () {
    Event::fire(new NewTask(Auth::user()));
    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
