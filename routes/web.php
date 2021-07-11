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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/jokes', [App\Http\Controllers\JokeController::class, 'index'])->name('jokes');
Route::get('/jokes/create', [App\Http\Controllers\JokeController::class, 'create'])->name('jokes.create');
Route::post('/jokes/store', [App\Http\Controllers\JokeController::class, 'store'])->name('jokes.store');
