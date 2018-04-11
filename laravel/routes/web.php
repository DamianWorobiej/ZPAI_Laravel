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
})->name('logged_home');

Route::get('/kontakt', function() {
	return view('contact');
})->name('contact');

Route::get('/page/{parametr}', function($parametr) {
	echo('Pai - strona testowa z parametrem: '. $parametr);
});

Route::get('/widok', function() {
	return view('widok1');
});

Route::get('/wyglad', function() {
	return view('layout');
});

Route::get('/kategoria/{id}', 'CategoriesController@show')->where('id', '[0-9]+')->name('items');

Route::get('/car', function(){
	return view('carousel_test');
});

Route::get('/par', function() {
	return view('parallax_test');
});

Route::get('/acc', function() {
	return view('accordion_test');
});

Route::get('/crud', function() {
	return view('CRUD');
})->name('crud');
