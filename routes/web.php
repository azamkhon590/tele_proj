<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
    return view("pages.home");
});

Route::middleware("auth_web")->group(function(){
    Route::get('/app', function () {
        return view('welcome');
    });
});

Route::middleware(\App\Http\Middleware\Telegram::class)->group(function (){
    Route::post("/login", [\App\Http\Controllers\WebController::class, "login"]);
});

Route::get("/home", function() {
    return view("pages.home");
});

Route::get("/profile", function() {
    return view("pages.profile");
});

Route::get("/task", function() {
    return view("pages.task");
});

Route::get("/setting", function() {
    return view("pages.setting");
});

