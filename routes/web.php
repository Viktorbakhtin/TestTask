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
    return view('welcome');
});

Route::get('1', function () {
    return view('zadanie1');
});

Route::get('2', function () {
    return view('zadanie2');
});

Route::get('3', function () {
    return view('zadanie3');
});

Route::get('4', function () {
    return view('zadanie4');
});

Route::get('5', function () {
    return view('zadanie5');
});

Route::get('6', function () {
    return view('zadanie6');
});

Route::get('7', function () {
    return view('zadanie7');
});

Route::get('8', function () {
    return view('zadanie8');
});

Route::get('9', function () {
    return view('zadanie9');
});

Route::get('mysql', function () {
    return view('mysql');
});


Route::get('sidebar', function () {
    return view('sidebar');
});


Route::get('/dbcreate', function()
{
    $exitCode = Artisan::call('db:seed', ['--class' => 'DatabaseSeeder']);
});