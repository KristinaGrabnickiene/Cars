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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cars', 'CarsController@index')->name('cars.index'); 

Route::get("/cars/{id}", "CarsController@show")->name('cars.show');

Route::get("/edit/{id}", "CarsController@edit") ->name('cars.edit');

Route::post("/update", "CarsController@update") ->name('cars.update');

Route::get("/delete/{id}", "CarsController@delete") ->name('cars.delete');

Route::get('/create', 'CarsController@save')->name('cars.create'); 

Route::post('/store', 'CarsController@store')->name('cars.store'); 