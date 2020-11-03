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
Route::get('/message', function () {
    return view('message');
})->name('message');
Route::get('/print1', function () {
    return view('print1');
})->name('print1');
Route::get('/diplome', function () {
    return view('diplome');
})->name('diplome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('dammandes','App\Http\Controllers\ReintegrationController@index')->name('demmandes');
Route::post('/demmandes/store','App\Http\Controllers\ReintegrationController@store')->name('reintegration.store');
Route::get('/reintegrat','App\Http\Controllers\ReintegrationController@allReintegration')->name('allReintegration');
Route::get('/print','App\Http\Controllers\ReintegrationController@userId')->name('print');
Route::get('/bac','App\Http\Controllers\ReintegrationController@bac')->name('bac');
Route::post('/store','App\Http\Controllers\BacController@store')->name('bac.store');
Route::post('/diplome','App\Http\Controllers\DiplomeController@store')->name('diplome.store');





