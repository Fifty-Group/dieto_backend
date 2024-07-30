<?php

use App\Http\Controllers\V1\Auth\AuthController;
use App\Http\Controllers\V1\MeasureCupController;
use App\Http\Controllers\V1\MeasureTypeController;
use App\Http\Controllers\V1\MenuController;
use App\Http\Controllers\V1\MenuSizeController;
use App\Http\Controllers\V1\MenuTypeController;
use App\Http\Controllers\V1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::group(['middleware' => 'api'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('/login', [AuthController::class, 'login']);
    });

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::group(['prefix' => 'auth'], function () {
            Route::post('/logout', [AuthController::class, 'logout']);
            Route::get('/me', [AuthController::class, 'me']);
        });
        Route::group(['prefix' => 'admin'], function () {
            Route::group(['prefix' => 'product'], function () {
                Route::get('/index', [ProductController::class, 'index']);
                Route::get('/show/{product}', [ProductController::class, 'show']);
                Route::post('/store', [ProductController::class, 'store']);
                Route::post('/update/{product}', [ProductController::class, 'update']);
                Route::delete('/delete/{product}', [ProductController::class, 'destroy']);
            });
            Route::group(['prefix' => 'menu-size'], function () {
                Route::get('/index', [MenuSizeController::class, 'index']);
            });
            Route::group(['prefix' => 'menu-type'], function () {
                Route::get('/index', [MenuTypeController::class, 'index']);
            });
            Route::group(['prefix' => 'menu'], function () {
                Route::post('/store', [MenuController::class, 'store']);
                Route::get('/index/{menuSize}', [MenuController::class, 'index']);
            });
            Route::group(['prefix' => 'menu-part'], function () {
                Route::delete('/delete/{menuPart}', [MenuController::class, 'destroy_menu_part']);
                Route::post('/store', [MenuController::class, 'store_menu_part']);
            });
        });
    });

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::group(['prefix' => 'auth'], function () {
            Route::post('/logout', [AuthController::class, 'logout']);
            Route::get('/me', [AuthController::class, 'me']);
        });
        Route::group(['prefix' => 'admin'], function () {
            Route::group(['prefix' => 'product'], function () {
                Route::get('/index', [ProductController::class, 'index']);
                Route::get('/show/{product}', [ProductController::class, 'show']);
                Route::post('/store', [ProductController::class, 'store']);
                Route::post('/update/{product}', [ProductController::class, 'update']);
                Route::delete('/delete/{product}', [ProductController::class, 'destroy']);
            });
            Route::group(['prefix' => 'menu-size'], function () {
                Route::get('/index', [MenuSizeController::class, 'index']);
            });
            Route::group(['prefix' => 'menu-type'], function () {
                Route::get('/index', [MenuTypeController::class, 'index']);
            });
        });
    });
    Route::group(['prefix' => 'measure-type'], function () {
        Route::get('/', [MeasureTypeController::class, 'index']);
    });
    Route::group(['prefix' => 'measure-cup'], function () {
        Route::get('/', [MeasureCupController::class, 'index']);
    });
    Route::group(['prefix' => 'menu-type'], function () {
        Route::get('/', [MeasureCupController::class, 'index']);
    });
});
