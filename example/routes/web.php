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

Route::get('/name', function() {
    return "Nika";
});

Route::get('/surname', function() {
    return "Gasashvili";
}); 

Route::get('/age', function() {
    return "19";
});

Route::get('/hobby', function() {
    return "Singing/playing";
});

Route::get('/favartist', function() {
    return "Kendrick Lamar";
});

Route::any('/info', function() {
    return view ('info');
});
