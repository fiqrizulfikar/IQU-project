<?php
use App\Models\ModelMahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\LandingControllers;
use App\Http\Controllers\LandingPengetahuan;
use App\Http\Controllers\LandingSDcontrollers;
use App\Http\Controllers\LandingSMPcontroller;
use App\Http\Controllers\LandingSMAcontroller;
use App\Http\Controllers\Quizcontroller;
use App\Http\Controllers\QuizCPNScontroller;
use App\Http\Controllers\AuthController;


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



Route::get('/pengetahuan', [LandingPengetahuan::class, 'index']);
Route::get('/ekonomi', [LandingPengetahuan::class, 'showQuiz'])->name('ekonomi.show'); // Menampilkan daftar kuis
Route::get('/politik', [LandingPengetahuan::class, 'showQuizPolitik'])->name('politik.show'); // Menampilkan daftar kuis
Route::get('/teknologi', [LandingPengetahuan::class, 'showQuizTeknologi'])->name('teknologi.show');
Route::get('/umum', [LandingPengetahuan::class, 'showQuizUmum'])->name('umum.show');

Route::get('/SMA', [LandingSMAcontroller::class, 'index']);
Route::get('/smaipa', [LandingSMAcontroller::class, 'showQuizSMAIPA'])->name('IPA.show');
Route::get('/smaips', [LandingSMAcontroller::class, 'showQuizSMAIPS'])->name('IPS.show');
Route::get('/smapkn', [LandingSMAcontroller::class, 'showQuizSMAPKN'])->name('PKN.show');
Route::get('/smatik', [LandingSMAcontroller::class, 'showQuizSMATIK'])->name('TIK.show');

Route::get('/admin/questions', [QuizController::class, 'index'])->name('admin.questions.index');

// Route untuk halaman tambah pertanyaan
Route::get('/admin/questions/create', [QuizController::class, 'create'])->name('admin.questions.create');
Route::post('/admin/questions/store', [QuizController::class, 'store'])->name('admin.questions.store');

// Route untuk edit pertanyaan
Route::get('/admin/questions/{table}/{id}/edit', [QuizController::class, 'edit'])->name('admin.questions.edit');
Route::put('/admin/questions/{table}/{id}', [QuizController::class, 'update'])->name('admin.questions.update');

// Route untuk hapus pertanyaan
Route::delete('/admin/questions/{table}/{id}', [QuizController::class, 'destroy'])->name('admin.questions.destroy');

//login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post'); 
Route::post('/register', [AuthController::class, 'register'])->name('register.post'); 
Route::get('/mediasosial', [AuthController::class, 'mediasosial'])->name('mediasosial'); 
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); 

Route::get('/cpns-quiz/categories', [QuizCPNSController::class, 'showCategories'])->name('cpns.categories');
Route::get('/cpns-quiz/tiu', [QuizCPNSController::class, 'showTIU'])->name('cpns.tiu');
Route::get('/cpns-quiz/twk', [QuizCPNSController::class, 'showTWK'])->name('cpns.twk');
Route::get('/cpns-quiz/tkp', [QuizCPNSController::class, 'showTKP'])->name('cpns.tkp');

Route::get('/loginz', function () {
    return view('landing.loginz');
});