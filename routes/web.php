<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Tour\TourController;
use App\Http\Controllers\Tour\TourchosenController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('tourdetail/{id}', [TourdetailController::class, 'index']);
    Route::get('admin', [AdminController::class, 'index']);
    Route::get('admin/{id}/deletetour', [AdminController::class, 'deletetour']);
    Route::get('admin/{id}/deleteuser', [AdminController::class, 'deleteuser']);
    Route::get('user', [UserAuthController::class, 'index']);
    Route::post('user/edit', [UserAuthController::class, 'edit_interest']);
    Route::get('user/{id}/buy', [TourdetailController::class, 'buy']);
    Route::get('user/{id}/cancel', [UserAuthController::class, 'cancel']);
    Route::get('addtour', [AdminController::class, 'show']);
    Route::post('addtour/insert', [AdminController::class, 'insert']);
    Route::post('admin/addtimeline', [AdminController::class, 'addtimeline']);
    Route::post('admin/edit', [AdminController::class, 'edit']);
});
Route::get('tour', [TourController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::post('tourchosen', [TourchosenController::class, 'index']);

Auth::routes();

