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
Route::prefix('admin')->group(function (){
    Route::get('/', function () {
        return view('admin.pages.home.index');
    })->name('admin.home');

    Route::get('login', function () {
        return view('admin.auth.login');
    })->name('admin.login');

    Route::prefix('lowongan')->group(function(){
        Route::get('/', function(){
            return view('admin.pages.lowongan.index');
        })->name('lowongan.index');
    });
    
});
