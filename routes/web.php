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

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('get_all_users');
Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'get'])->name('get_one_user');
Route::get('/store-user', [\App\Http\Controllers\UserController::class, 'showForm'])->name('show_form');
Route::post('/store-user', [\App\Http\Controllers\UserController::class, 'store'])->name('create_user');
Route::get('/resume/{id}', [\App\Http\Controllers\PdfGeneratorController::class, 'index'])->name('get_pdf');
