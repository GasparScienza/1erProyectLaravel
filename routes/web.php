<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::view("/", "welcome") -> name("home");
Route::view("/contact", "contact")-> name("contact");
Route::view("/about", "about") -> name("about");
Route::view("/blog", "blog") -> name("blog");