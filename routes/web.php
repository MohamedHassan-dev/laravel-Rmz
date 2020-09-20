<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/category/create','App\Http\Controllers\categoryController@create' )->name('category.create');

Route::middleware(['auth:sanctum', 'verified'])->post('/category/store','App\Http\Controllers\categoryController@store' )->name('category.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/category/index','App\Http\Controllers\categoryController@index' )->name('category.index');



Route::middleware(['auth:sanctum', 'verified'])->get('/category/edit/{id}','App\Http\Controllers\categoryController@edit' )->name('category.edit');


Route::middleware(['auth:sanctum', 'verified'])->get('/category/delete/{id}','App\Http\Controllers\categoryController@destroy' )->name('category.delete');