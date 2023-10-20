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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/roto_4A', function () {
    return view('roto_4A');
})->name('roto_4A');

Route::get('/roto_4B', function () {
    return view('roto_4B');
})->name('roto_4B');

Route::get('/roto_5A', function () {
    return view('roto_5A');
})->name('roto_5A');

Route::get('/roto_5B', function () {
    return view('roto_5B');
})->name('roto_5B');

Route::get('/rotoo_5C', function () {
    return view('roto_5C');
})->name('roto_5C');

Route::get('/roto_5D', function () {
    return view('roto_5D');
})->name('roto_5D');
