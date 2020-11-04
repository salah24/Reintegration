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
Route::get('listes','App\Http\Controllers\ReintegrationController@listes')->name('listes');
Route::get('liste_bac','App\Http\Controllers\ReintegrationController@liste_bac')->name('liste_bac');
Route::get('liste_diplom','App\Http\Controllers\ReintegrationController@liste_diplom')->name('liste_diplom');

Route::get('delete_bac/{id}','App\Http\Controllers\ReintegrationController@destroy_bac' )->name('destroy_bac');
Route::get('delete_diplom/{id}','App\Http\Controllers\ReintegrationController@destroy_diplom' )->name('destroy_diplom');
Route::get('delete_reintegration/{id}','App\Http\Controllers\ReintegrationController@destroy_reintegration' )->name('destroy_reintegration');



Route::get('pdf', 'App\Http\Controllers\PDFController@generatepdf')->name('pdf');










