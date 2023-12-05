<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
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



// Login Middleware
Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [AuthController::class, 'View'])->name('Login');
    Route::post('/APL', [AuthController::class, 'Login'])->name('APL');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'Logout']);
    Route::get('/home', [AdminController::class, 'Data'])->name('Data');
    Route::get('/detail/{id}', [AdminController::class, 'Detail'])->name('Detail');
});


// Form Function
Route::get('/', [FormController::class, 'View'])->name('Form');
Route::post('/store/data', [FormController::class, 'FormStore'])->name('FormStore');
