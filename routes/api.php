<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Public test route - ไม่ต้อง authentication
Route::get('/test', function () {
    return response()->json([
        'message' => 'API is working!',
        'timestamp' => now()->toDateTimeString(),
        'status' => 'success'
    ]);
});

// Protected route - ต้อง authentication
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
