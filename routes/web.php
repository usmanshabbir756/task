<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index' , [
        'name'=> 'usman',
    ]);
});

Route::get("/abc", function () {
    return "Hello world";
})->name('hello');

Route::get("/hallo", function () {
    return redirect()->route("hello");
});

Route::get("/greet/{name}", function ($name) {

    return $name;
});


Route::fallBack(function (){
    return "something";
});