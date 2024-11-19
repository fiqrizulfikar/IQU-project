<?php
use App\Models\ModelMahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\LandingControllers;
use App\Http\Controllers\LandingPengetahuan;



Route::get('/', [LandingControllers::class, 'index']);

Route::get('/Smp', [App\Http\Controllers\LandingControllers::class, 'Smp']);
Route::get('/pengetahuan', [App\Http\Controllers\LandingControllers::class, 'pengetahuan']);
Route::get('/games', [App\Http\Controllers\LandingControllers::class, 'games']);
Route::get('/mediasosial', [App\Http\Controllers\LandingControllers::class, 'mediasosial']);
Route::get('/aboutus', [App\Http\Controllers\LandingControllers::class, 'aboutus']);
Route::get('/pendidikan', [App\Http\Controllers\LandingControllers::class, 'pendidikan']);
Route::get('/pendidikan', [App\Http\Controllers\LandingControllers::class, 'pendidikan']);


Route::get('/SekolahDasar', [App\Http\Controllers\LandingControllers::class, 'SekolahDasar']);
Route::get('/IPAsd', [App\Http\Controllers\LandingControllers::class, 'IPAsd']);
Route::get('/MTKsd', [App\Http\Controllers\LandingControllers::class, 'MTKsd']);
Route::get('/IPSsd', [App\Http\Controllers\LandingControllers::class, 'IPSsd']);
Route::get('/PKNsd', [App\Http\Controllers\LandingControllers::class, 'PKNsd']);



>>>>>>> 38593ba865acda01488eb41622789149755d6ec0
Route::get('/login', [SesiController::class, 'login']);
Route::get('/pengetahuan', [LandingPengetahuan::class, 'index']);
Route::get('/ekonomi', [LandingPengetahuan::class, 'showQuiz'])->name('ekonomi.show'); // Menampilkan daftar kuis