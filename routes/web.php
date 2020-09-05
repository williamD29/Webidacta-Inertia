<?php

use Inertia\Inertia;
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
    return Inertia::render('Dashboard');
})->middleware('auth');

Route::get('/students', function () {
    return Inertia::render('Students');
})->middleware('auth');

Route::get('/settings', function () {
    return Inertia::render('Settings');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
