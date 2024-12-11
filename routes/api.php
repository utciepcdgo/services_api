<?php

use App\Http\Controllers\Api\MunicipalityController;
use App\Http\Controllers\Api\PostalCodeController;
use App\Http\Controllers\Api\StateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware('auth:sanctum')->group(function () {
    // States
    Route::get('/states', [StateController::class, 'index']);
    // Municipalities
    Route::get('/municipalities', [MunicipalityController::class, 'index']);
    Route::get('/municipalities/{state}', [MunicipalityController::class, 'getByState']);
    // Postal Codes
    Route::get('/postalcodes/{postalcode}', [PostalCodeController::class, 'getByPostalCode']);
});
