<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MoviesController;
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
Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\MoviesController::class, 'index'])->name('home');
    Route::get('/create', [MoviesController::class, 'create'])->name('create');
    Route::post('/store', [MoviesController::class, 'store'])->name('store');
    Route::get('/data', [MoviesController::class, 'viewData'])->name('data');
    Route::get('/movies/{movies}/edit', [MoviesController::class, 'edit'])->name('edit');
    Route::put('/movies/{movies}/update', [MoviesController::class, 'update'])->name('update');
    Route::delete('/movies/{movies}', [MoviesController::class, 'destroy'])->name('delete');
});


Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('login', [LoginController::class, 'login'])->name('login');
