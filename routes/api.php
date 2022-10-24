<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
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

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/', function () {
        return 'Hello World';
    });

    Route::post('logout', [AuthController::class, 'logout']);

    Route::prefix('brands')->controller(BrandController::class)->group(function () {
        Route::get('/', 'getAll');
        Route::get('/paginated', 'getPaginated');
        Route::get('/{id}', 'getOne');
        Route::post('/', 'create');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'delete');
    });
});

