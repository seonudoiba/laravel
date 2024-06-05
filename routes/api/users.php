<?php


use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Illuminate\Http\JsonResponse;

//Route::middleware('auth')->prefix('users')->group(function () {
//    Route::get('/', [UserController::class, 'index']);
//    Route::get('/{user}', [UserController::class, 'show']);
//    Route::post('/', [UserController::class, 'store']);
//    Route::patch('/{user}', [UserController::class, 'update']);
//    Route::delete('/{user}', [UserController::class, 'destroy']);
//});

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::post('/users', [UserController::class, 'store']);
    Route::patch('/users/{user}', [UserController::class, 'update']);
    Route::delete('/users/{user}', [UserController::class, 'destroy']);


