<?php
use App\Http\Controllers\Api\V1\CompanyController;
use App\Http\Controllers\Api\V1\AuthController;

Route::apiResource('companies', CompanyController::class);

Route::post('/login',[AuthController::class,'login']);