<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PUBLICController;

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

Route::get('/abc', [App\Http\Controllers\PUBLICController::class,'form']);
Route::get('/table', [App\Http\Controllers\PUBLICController::class,'table']);
Route::POST('/insert', [App\Http\Controllers\PUBLICController::class,'insertdata']);
Route::get('/show', [App\Http\Controllers\PUBLICController::class,'showdata']);
Route::get('/edit/{id}', [App\Http\Controllers\PUBLICController::class,'editdata']);
Route::get('/update', [App\Http\Controllers\PUBLICController::class,'update']);
Route::get('/delete/{id}', [App\Http\Controllers\PUBLICController::class,'delete']);