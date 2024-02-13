<?php

use Illuminate\Support\Facades\Route;

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
    $comics = config('comics');
    return view('home', compact('comics'));
});

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/comics/{param}', function($id) {
    $comics = ('comics');
    
	return view('detail_products', compact('pasta', 'menu'));
})->name('comics');

