<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TechnicalController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('index',[RegisterController::class, 'index']);
Route::get('register',[RegisterController::class, 'registerAll']);
Route::get('show/{id}',[RegisterController::class, 'show']);
Route::post('register',[RegisterController::class, 'register']);
Route::delete('destroy/{id}',[RegisterController::class, 'destroy']);

Route::post('technical',[TechnicalController::class, 'technicalRegister']);