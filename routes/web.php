<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CartController;

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

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login',[SessionController::class, 'index'])->name('index');
Route::get('sesi',[SessionController::class, 'index']);
Route::POST('/sesi/login',[SessionController::class, 'login'])->name('sesi.login');
Route::get('/sesi/logout',[SessionController::class, 'logout'])->name('sesi.logout');

Route::resource('cart', CartController::class);