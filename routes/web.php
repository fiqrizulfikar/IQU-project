<?php
use App\Models\ModelMahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\LandingControllers;
use App\Http\Controllers\LandingPengetahuan;
use App\Http\Controllers\LandingSDcontrollers;
use App\Http\Controllers\LandingSMPcontroller;
use App\Http\Controllers\LandingSMAcontroller;


Route::get('/', [LandingControllers::class, 'index']);

Route::get('/Smp', [App\Http\Controllers\LandingControllers::class, 'Smp']);
Route::get('/games', [App\Http\Controllers\LandingControllers::class, 'games']);
Route::get('/mediasosial', [App\Http\Controllers\LandingControllers::class, 'mediasosial']);
Route::get('/aboutus', [App\Http\Controllers\LandingControllers::class, 'aboutus']);
Route::get('/pendidikan', [App\Http\Controllers\LandingControllers::class, 'pendidikan']);
Route::get('/pendidikan', [App\Http\Controllers\LandingControllers::class, 'pendidikan']);



Route::get('/Smp', [LandingSMPcontroller::class, 'index']);
Route::get('/IPAsmp', [LandingSMPcontroller::class, 'IPAsmp']);
Route::get('/MTKsmp', [LandingSMPcontroller::class, 'MTKsmp']);
Route::get('/IPSsmp', [LandingSMPcontroller::class, 'IPSsmp']);
Route::get('/PKNsmp', [LandingSMPcontroller::class, 'PKNsmp']);


Route::get('/sekolahdasar', [LandingSDcontrollers::class, 'index']);
Route::get('/IPAsd', [LandingSDcontrollers::class, 'IPAsd']);
Route::get('/MTKsd', [LandingSDcontrollers::class, 'MTKsd']);
Route::get('/IPSsd', [LandingSDcontrollers::class, 'IPSsd']);
Route::get('/PKNsd', [LandingSDcontrollers::class, 'PKNsd']);


Route::get('/Login', [SesiController::class, 'login']);
Route::get('/pengetahuan', [LandingPengetahuan::class, 'index']);
Route::get('/ekonomi', [LandingPengetahuan::class, 'showQuiz'])->name('ekonomi.show'); // Menampilkan daftar kuis
Route::get('/politik', [LandingPengetahuan::class, 'showQuizPolitik'])->name('politik.show'); // Menampilkan daftar kuis
Route::get('/teknologi', [LandingPengetahuan::class, 'showQuizTeknologi'])->name('teknologi.show');
Route::get('/umum', [LandingPengetahuan::class, 'showQuizUmum'])->name('umum.show');

Route::get('/SMA', [LandingSMAcontroller::class, 'index']);
Route::get('/smaipa', [LandingSMAcontroller::class, 'showQuizSMAIPA'])->name('IPA.show');
