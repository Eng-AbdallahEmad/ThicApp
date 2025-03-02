<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->get('/user', function () {
    return response()->json([
        'name' => 'John Doe',
        'email' => 'Admin1@gmail.com',
    ]);
});