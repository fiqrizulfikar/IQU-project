<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingControllers;
use App\Http\Controllers\SesiController;


Route::get('/', [LandingControllers::class, 'index']);
Route::get('/SekolahDasar', [App\Http\Controllers\LandingControllers::class, 'SekolahDasar']);>>>>>>>
Route::get('/Smp', [App\Http\Controllers\LandingControllers::class, 'Smp']);
Route::get('/pengetahuan', [App\Http\Controllers\LandingControllers::class, 'pengetahuan']);
Route::get('/games', [App\Http\Controllers\LandingControllers::class, 'games']);
Route::get('/mediasosial', [App\Http\Controllers\LandingControllers::class, 'mediasosial']);
Route::get('/aboutus', [App\Http\Controllers\LandingControllers::class, 'aboutus']);
Route::get('/pendidikan', [App\Http\Controllers\LandingControllers::class, 'pendidikan']);
>>>>>> HEAD
Route::get('/pendidikan', [App\Http\Controllers\LandingControllers::class, 'pendidikan']);
=======
Route::get('/login', [SesiController::class, 'login']);
>>>>>>> d6dcb9cc17249b684b267eb6ae27e0b92eb4aac0
