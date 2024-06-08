<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\roleCheck;
use Illuminate\Support\Facades\Route;


Route::get('/',[BlogController::class,"index"]);

Route::get('/addblog',[BlogController::class,"addblog"])->middleware("auth");
Route::get('/editblog/{id}',[BlogController::class,"editblog"])->middleware("auth");
Route::post('/addblog',[BlogController::class,"store"])->middleware("auth");
Route::put('/editblog/{id}',[BlogController::class,"update"])->middleware("auth");
Route::delete('/deleteblog/{id}',[BlogController::class,"destroy"])->middleware(roleCheck::class);

Route::get('/description',[DescriptionController::class,"index"]);
Route::get('/editdescription',[DescriptionController::class,"edit"])->middleware("auth");
Route::put('/editdescription',[DescriptionController::class,"update"])->middleware("auth");

Route::get("/registration",[UserController::class,"registration"]);
Route::post("/register",[UserController::class,"register"]);
Route::post("/logout",[UserController::class,"logout"])->middleware("auth");
Route::get("/authentication",[UserController::class,"authentication"]);
Route::post("/login",[UserController::class,"login"]);
