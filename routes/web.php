<?php
use App\Models\ModelMahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\LandingControllers;
use App\Http\Controllers\LandingPengetahuan;



Route::get('/', [LandingControllers::class, 'index']);
Route::get('/SekolahDasar', [LandingControllers::class, 'SekolahDasar']);
Route::get('/Smp', [LandingControllers::class, 'Smp']);
Route::get('/games', [LandingControllers::class, 'games']);
Route::get('/mediasosial', [LandingControllers::class, 'mediasosial']);
Route::get('/aboutus', [LandingControllers::class, 'aboutus']);
Route::get('/pendidikan', [LandingControllers::class, 'pendidikan']);
Route::get('/login', [SesiController::class, 'login']);
Route::get('/pengetahuan', [LandingPengetahuan::class, 'index']);
Route::get('/ekonomi', [LandingPengetahuan::class, 'showQuiz'])->name('ekonomi.show'); // Menampilkan daftar kuis