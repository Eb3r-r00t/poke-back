<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PokemonController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/', function () {
        return 'Hello World';
    });

    Route::post('logout', [AuthController::class, 'logout']);

    Route::prefix('pokemons')->controller(PokemonController::class)->group(function () {
        Route::get('/', 'getAll');
        Route::get('/{id}', 'getOne');
        Route::post('/', 'create');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'delete');
    });

    Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
        Route::get('/', 'dashboardData');
    });
});

