<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;




Route::post("/register",[AuthController::class,'register']);
Route::post("/login",[AuthController::class,'login']);
Route::get("useragent",[AuthController::class,'useragent']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    //All secure URL's
    
    Route::get('userIfno',[AuthController::class,'userIfno']);
    Route::post('logout',[AuthController::class,'logout']);
    });

    
