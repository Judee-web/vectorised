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
    return view('welcome');
});

Route::get('/fci-2022', function () {
    return view('fci');
});

Route::get('/fci2-2022', function () {
    return view('fci2');
});

Route::get('/affiliate-marketing', function () {
    return view('affiliate');
});
