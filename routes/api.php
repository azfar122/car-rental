<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/register", [AuthController::class,'register']);
Route::post("/login", [AuthController::class,'Login']);
Route::post("/add_review", [AuthController::class,'add_review']);
Route::get("/show_review", [AuthController::class,'show_review']);
Route::post("/book", [AuthController::class,'book']);
Route::get("/show_vehicle", [AuthController::class,'show_vehicle']);
Route::post("/sell_car", [AuthController::class,'sell_car']);
Route::post("/reset_pass_req", [AuthController::class,'resetPasswordRequest']);
Route::post("/reset_password", [AuthController::class,'resetPassword']);
Route::post("/update_profile", [AuthController::class,'updateProfile']);