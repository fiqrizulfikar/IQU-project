<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
use App\Http\Controllers\LandingControllers;



Route::get('/', [LandingControllers::class, 'index']);
Route::get('/SekolahDasar', [App\Http\Controllers\LandingControllers::class, 'SekolahDasar']);
Route::get('/pengetahuan', [App\Http\Controllers\LandingControllers::class, 'pengetahuan']);
Route::get('/games', [App\Http\Controllers\LandingControllers::class, 'games']);
Route::get('/mediasosial', [App\Http\Controllers\LandingControllers::class, 'mediasosial']);
Route::get('/aboutus', [App\Http\Controllers\LandingControllers::class, 'aboutus']);
Route::get('/pendidikan', [App\Http\Controllers\LandingControllers::class, 'pendidikan']);
=======
use App\Http\Controllers\Sessioncontroler; 



Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/sesi', [Sessioncontroler::class, 'index']);
Route::get('/sesi/login', [Sessioncontroler::class, 'login']);
>>>>>>> Stashed changes
