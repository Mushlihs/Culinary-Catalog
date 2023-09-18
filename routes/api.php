<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiController;
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

Route::get('', [ApiController::class,"Culinary_getall"]);
Route::get('get/{id}', [ApiController::class,"Culinary_get_id"]);

Route::prefix('auth')->group(function () {
    Route::post('register', [ApiAuthController::class,'register']);
    Route::post('login', [ApiAuthController::class,'login']);
    Route::post('logout', [ApiAuthController::class,'logout'])->middleware("auth:sanctum");
});

Route::middleware(['auth:sanctum'])->group(function () {

    Route::middleware('auth.author')->group(function () {
        Route::post('add', [ApiController::class,'Culinary_add']);
        Route::post('edit/{id}', [ApiController::class,'Culinary_edit']);
        Route::post('delete/{id}', [ApiController::class,'Culinary_delete']);
    });
});
