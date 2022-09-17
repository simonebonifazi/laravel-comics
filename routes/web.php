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
    return view('comics.index', compact('comics'));
})->name('comics.index');

//comic
//! adottiamo index poichè non c'è id nell'arry comics, altrimmenti sempre tramite id
Route::get('/comics/{index}', function ($index) {

    $comics = config('comics');
    //?? controlli temporanei, poi li farà il db
    if(!is_numeric($index) || $index < 0 || $index >= count($comics)) abort(404);
        $comic = $comics[$index];
    return view('comics.show', compact('comic'));
})->name('comics.show');

//characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

//movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

//tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

//games
Route::get('/games', function () {
    return view('games');
})->name('games');

//collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

//videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

//fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

//news
Route::get('/news', function () {
    return view('news');
})->name('news');

//shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');