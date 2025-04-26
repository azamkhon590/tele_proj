<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::middleware("auth_web")->group(function(){
    Route::get('/app', function () {
        return view('welcome');
    });
});


Route::middleware(\App\Http\Middleware\Telegram::class)->group(function (){
    Route::post("/login", [\App\Http\Controllers\WebController::class, "login"]);
});

