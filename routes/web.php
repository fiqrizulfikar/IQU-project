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
Route::get('/IPAsd', [App\Http\Controllers\LandingControllers::class, 'IPA']);
Route::get('/MTKsd', [App\Http\Controllers\LandingControllers::class, 'MTK']);
Route::get('/IPSsd', [App\Http\Controllers\LandingControllers::class, 'IPS']);
Route::get('/PKNsd', [App\Http\Controllers\LandingControllers::class, 'PKN']);

Route::get('/Login', [SesiController::class, 'login']);
Route::get('/pengetahuan', [LandingPengetahuan::class, 'index']);
Route::get('/ekonomi', [LandingPengetahuan::class, 'showQuiz'])->name('ekonomi.show'); // Menampilkan daftar kuis
Route::get('/politik', [LandingPengetahuan::class, 'showQuizPolitik'])->name('politik.show'); // Menampilkan daftar kuis