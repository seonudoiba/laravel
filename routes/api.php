<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Illuminate\Http\JsonResponse;

Route::get('/', function (Request $request) {
    return new JsonResponse(
        [
            'data' => "Hello App"
        ]
    );
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::patch('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
