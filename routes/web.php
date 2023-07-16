<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EIController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticelsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('admin')->name('admin.')->middleware('auth','check_type')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('articles',ArticelsController::class);
});
Route::get('/',[EIController::class,'index'])->name('indexpage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('check_type')->name('home');

