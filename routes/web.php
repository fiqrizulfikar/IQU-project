<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/navbar', function () {
    return view('navbar');
});
