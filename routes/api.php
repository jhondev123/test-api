<?php

use App\Http\Controllers\api\Api_A_Controller;
use App\Http\Controllers\api\Api_B_Controller;
use App\Http\Controllers\api\Api_C_Controller;
use App\Http\Controllers\api\Api_D_Controller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("api-a", Api_A_Controller::class);
Route::apiResource("api-b", Api_B_Controller::class);
Route::apiResource("api-c", Api_C_Controller::class);
Route::apiResource("api-d", Api_D_Controller::class);
