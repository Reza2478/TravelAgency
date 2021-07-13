<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Tour\TourController;
use App\Http\Controllers\Tour\TourdetailController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserAuthController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('tour', [TourController::class, 'index']);
Route::get('tourdetail/{id}', [TourdetailController::class, 'index']);
Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/{id}', [AdminController::class, 'delete']);
Route::get('user', [UserAuthController::class, 'index']);





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
