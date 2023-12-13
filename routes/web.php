<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'index'])->name('index');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/login', [AuthController::class, 'session'])->name('session');

Route::post('/register', [AuthController::class, 'store'])->name('store');

Route::get('/register', [AuthController::class, 'register'])->name('register');