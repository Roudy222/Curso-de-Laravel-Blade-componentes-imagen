<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */
/* Route::view('/','welcome')->name('welcome'); */
Route::view('/','index')->name('index');
Route::view('/about','about')->name('about');
Route::view('/services/example','services')->name('services');
Route::view('/contacto','contacto')->name('contacto');