<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Tour\TourController;
use App\Http\Controllers\Tour\TourchosenController;
use App\Http\Controllers\Tour\TourdetailController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;



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
    Route::get('addtimeline/{id}/deletetimeline', [AdminController::class, 'deletetimeline']);
    Route::get('user', [UserAuthController::class, 'index']);
    Route::post('user/edit', [UserAuthController::class, 'edit_interest']);
    Route::post('user/editinformation', [UserAuthController::class, 'edit_information']);
    Route::post('user/buy', [TourdetailController::class, 'buy']);
    Route::get('user/{id}/cancel', [UserAuthController::class, 'cancel']);
    Route::post('addtour/insert', [AdminController::class, 'insert']);
    Route::get('addtimeline/{id}', [AdminController::class, 'timeline']);
    Route::post('admin/addtimeline', [AdminController::class, 'addtimeline']);
    Route::post('admin/edit', [AdminController::class, 'edit']);
    Route::post('admin/editinfo', [AdminController::class, 'editinfo']);
    Route::post('addtimeline/edittimeline', [AdminController::class, 'edittimeline']);
    Route::get('tourchosen/{city}', [TourchosenController::class, 'search']);
});
Route::get('tour', [TourController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::post('tourchosen', [TourchosenController::class, 'index']);

Auth::routes();
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm']);
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


