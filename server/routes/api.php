<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\TableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::put('personas/state/{id}', [PersonController::class, "changeState"]);
Route::get('personas/op', [PersonController::class, "listUserOp"]);
Route::resource('personas', PersonController::class);

Route::put('tablas/state/{id}', [TableController::class, "changeState"]);
Route::resource('tablas', TableController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
