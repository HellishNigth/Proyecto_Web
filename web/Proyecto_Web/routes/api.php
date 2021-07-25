<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProducFaltController;
use App\Http\Controllers\ProvProducsController;
use App\Http\Controllers\EmpleadosController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("tipproduc/get", [ProductosController::class, "getTipProducs"]);
Route::get("producfalt/get", [ProducFaltController::class, "getTipProducFalts"]);
Route::get("producprov/get", [ProvProducsController::class, "getProducProv"]);
Route::get("puesto/get", [EmpleadosController::class, "getPuesto"]);