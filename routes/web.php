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
Route::get('/mediasosial', function () {
    return view('mediasosial');
});
Route::get('/games', function () {
    return view('games');
});
Route::get('/pendidikan', function () {
    return view('pendidikan');
});
Route::get('/pengetahuan', function () {
    return view('pengetahuan');
});