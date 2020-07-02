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
Route::get('admin_viewal', 'Pagecontroller@admin_viewal')->name('admin_viewal');
Route::get('admin_addprof', 'Pagecontroller@admin_addprof')->name('admin_addprof');


//Forms Post routes 
Route::post('formaddal', 'PageController@admin_addalumno');
Route::post('formsearchal', 'PageController@admin_searchal');

Route::post('formaddprofesor', 'PageController@admin_addprofesor');