<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('/register', [RegisterController::class, 'store']);
Route::get('/users', [RegisterController::class, 'index']);
Route::get('/users/{id}', [RegisterController::class, 'show']);
Route::put('/updateput/{id}', [RegisterController::class, 'update']);
Route::patch('/updatepatch/{id}', [RegisterController::class, 'updatewithpatch']);
Route::delete('/delete/{id}', [RegisterController::class, 'delete']);
