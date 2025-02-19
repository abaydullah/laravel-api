<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
Route::get('/posts', [PostController::class,'index']);
Route::post('/posts', [PostController::class,'store']);
Route::post('/register', [AuthController::class,'register']);
Route::get('/tasks', [TaskController::class,'index']);
Route::post('/tasks', [TaskController::class,'store']);
Route::patch('/tasks/{id}', [TaskController::class,'update']);
