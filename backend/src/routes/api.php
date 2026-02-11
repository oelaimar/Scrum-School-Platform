<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json([
        "message" => "API is working!"
    ]);
});

Route::get('/user', [UserController::class, 'index']);
