<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello";
});

Route::get("/hello", function () {

    return "Hello world";
});
Route::get("/hallo", function () {
    return redirect("/hello");
});
Route::get("/greet/{name}", function ($name) {

    return $name;
});