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
//?? 4) tutto il sass va importanto in app.scss; mentre il css va linkato nel markup
//?? 5) gli url nel css vanno immaginati nel public, immaginalo montato alla fine
//TODO occhio ai suggerimenti nei percorsi css 
//?? 6) anche asset parte da public


Route::get('/', function () {
    return view('welcome');
});