<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingControllers;



Route::get('/', [LandingControllers::class, 'index']);
Route::get('/SekolahDasar', [App\Http\Controllers\LandingControllers::class, 'SekolahDasar']);
Route::get('/pengetahuan', [App\Http\Controllers\LandingControllers::class, 'pengetahuan']);
Route::get('/games', [App\Http\Controllers\LandingControllers::class, 'games']);
Route::get('/mediasosial', [App\Http\Controllers\LandingControllers::class, 'mediasosial']);
Route::get('/aboutus', [App\Http\Controllers\LandingControllers::class, 'aboutus']);
Route::get('/pendidikan', [App\Http\Controllers\LandingControllers::class, 'pendidikan']);