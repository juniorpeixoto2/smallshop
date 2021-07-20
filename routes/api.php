<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\CategoriesApiController;
use App\Http\Controllers\Api\MaterialsApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('status', [AuthApiController::class, 'status']);
Route::post('auth/token', [AuthApiController::class, 'auth']);

Route::group([
    'prefix' => 'v1',
    'middleware' => ['auth:sanctum']
], function () {
    Route::get('me', [AuthApiController::class, 'me']);
    Route::post('auth/logout', [AuthCompanyController::class, 'auth']);

    Route::post('categories', [CategoriesApiController::class, 'index']);
    Route::post('categories/store', [CategoriesApiController::class, 'store']);
    Route::post('categories/update/{id}', [CategoriesApiController::class, 'update']);
    Route::post('categories/{id}', [CategoriesApiController::class, 'edit']);

    Route::post('materials', [MaterialsApiController::class, 'index']);
    Route::post('materials/store', [MaterialsApiController::class, 'store']);
    Route::post('materials/update/{id}', [MaterialsApiController::class, 'update']);
    Route::post('materials/{id}', [MaterialsApiController::class, 'edit']);
});
