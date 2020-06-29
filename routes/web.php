<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


//Auth routes
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


//Views get routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin_addalumno', 'Pagecontroller@admin_addal')->name('admin_addalumno');



//Forms Post routes 
Route::post('formaddal', 'PageController@admin_addalumno');
