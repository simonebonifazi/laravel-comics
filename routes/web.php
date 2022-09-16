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

//!reminders
//?? 1) view parte da resources/views
//?? 2) i percorsi in view con la dot notations
//?? 3) aggiungere -> ('name') in pedice alla Route per usare l'helper route()
//?? 4) tutto il sass va importanto in app.scss; mentre il css va linkato nel markup OK
//?? 5) gli url nel css vanno immaginati nel public, immaginalo montato alla fine
//TODO occhio ai suggerimenti nei percorsi css 
//?? 6) anche asset parte da public

//home
Route::get('/', function () {

    $comics = config('comics');
    return view('mainnav.home', compact('comics'));
})->name('/');

//characters
Route::get('/characters', function () {
    return view('mainnav.characters');
})->name('characters');

//movies
Route::get('/movies', function () {
    return view('mainnav.movies');
})->name('movies');

//tv
Route::get('/tv', function () {
    return view('mainnav.tv');
})->name('tv');

//games
Route::get('/games', function () {
    return view('mainnav.games');
})->name('games');

//collectibles
Route::get('/collectibles', function () {
    return view('mainnav.collectibles');
})->name('collectibles');

//videos
Route::get('/videos', function () {
    return view('mainnav.videos');
})->name('videos');

//fans
Route::get('/fans', function () {
    return view('mainnav.fans');
})->name('fans');

//news
Route::get('/news', function () {
    return view('mainnav.news');
})->name('news');

//shop
Route::get('/shop', function () {
    return view('mainnav.shop');
})->name('shop');

//comic
Route::get('/comic', function () {

    $comics = config('comics');
    $comic = $comics[0];

    return view('comic', compact('comic'));
})->name('comic');