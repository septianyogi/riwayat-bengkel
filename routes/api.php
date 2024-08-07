<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
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

Route::get('/service', [ServiceController::class, 'show']);

Route::get('/service/{plat}', [ServiceController::class , 'searchplat']);

Route::post('/service/store', [ServiceController::class, 'store']);

Route::get('/service/latestAdd', [ServiceController::class, 'latestAdd']);