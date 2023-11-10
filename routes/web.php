<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TechnicalController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('technical', [TechnicalController::class, 'index'])->name('technical.index');
Route::get('register', [RegisterController::class, 'index'])->name('register.index');
