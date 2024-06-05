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

require __DIR__.'/api/users.php';
require __DIR__.'/api/posts.php';


