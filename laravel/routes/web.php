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
	$title = "Główna";
    return view('welcome', compact('title'));
})->name('logged_home');

Route::get('/kontakt', function() {
	$title = "Kontakt";
	return view('contact', compact('title'));
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

Route::get('/kategoria/{id}', 'CategoriesController@index')->where('id', '[0-9]+')->name('items');

Route::get('/car', function(){
	$title = "Test karuzeli";
	return view('carousel_test', compact('title'));
});

Route::get('/par', function() {
	$title = "Test Parallax Scrolling";
	return view('parallax_test', compact('title'));
});

Route::get('/acc', function() {
	$title = "Test Akordeonu";
	return view('accordion_test', compact('title'));
});


//Route::get('/crud', 'CRUDController@index')->name('crud');

Route::get('/lb', function() {
	$title = "Lightbox test 1";
	return view('lb', compact('title'));
});

Route::get('/lb2', function() {
	$title = "Lightbox test 2";
	return view('lb2', compact('title'));
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('login');
//Route::get('/home', function() {
//	
//	return view('home');
//})->name('login');

Route::get('/register', 'HomeController@register')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/crud/test', 'CRUDController@test');
//
//Route::get('/crud/create', 'CRUDController@create');
//
//Route::get('/crud/{id}/edit', 'CRUDController@edit');
//
//Route::get('/crud/{id}/destroy', 'CRUDController@destroy');


Route::resource('crud','CRUDController');

Route::get('/uga', function(){
    return "uga";

})->name('crud.destroy');

Route::get('/nav', function(){
    return view('nav');
})->name('navTest');

Route::get('/nav2', function(){
    return view('nav2');
})->name('navTest2');