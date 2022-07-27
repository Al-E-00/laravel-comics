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


Route::get('/', function() {
    $comics = config("comics");

    return view('comics.index', compact("comics"));
})->name("comics");


Route::get("/comics/{id}", function($id) {
    /* The config method allows your application to get 
    or set values in all files that are in the config directory. */

    $comics = config("comics");

    /* The array_filter() function filters the values of an array 
    using a callback function. This function passes each value of 
    the input array to the callback function.  If the callback function 
    returns true, the current value from input is returned into the result 
    array. Array keys are preserved.*/



    $foundComics = array_filter($comics, function ($comic) use($id) {
        return $comic["id"] === ((int) $id);
    });

    $keys = array_keys($foundComics)[0];

    $comic = $foundComics[$keys];

    return view("comics.show", compact("comic"));
});