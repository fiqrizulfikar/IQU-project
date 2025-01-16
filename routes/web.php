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
use App\Http\Controllers\LandingGamesControllers;
use App\Http\Controllers\PinController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/', [LandingControllers::class, 'index']);
Route::get('/coba', [App\Http\Controllers\LandingControllers::class, 'coba']);
Route::get('/icebreaking', [App\Http\Controllers\LandingControllers::class, 'icebreaking']);
Route::get('/Smp', [App\Http\Controllers\LandingControllers::class, 'Smp']);
Route::get('/pendidikan', [App\Http\Controllers\LandingControllers::class, 'pendidikan']);
Route::get('/aboutus', [App\Http\Controllers\LandingControllers::class, 'aboutus']);

Route::get('/Smp', [LandingSMPcontroller::class, 'index']);
Route::get('/smpips', [LandingSMPcontroller::class, 'showQuizSMPIPS'])->name('IPS.show');
Route::get('/smpipa', [LandingSMPcontroller::class, 'showQuizSMPIPA'])->name('IPA.show');
Route::get('/smpmtk', [LandingSMPcontroller::class, 'showQuizSMPMTK'])->name('MTK.show');
Route::get('/smppkn', [LandingSMPcontroller::class, 'showQuizSMPPKN'])->name('PKN.show');
Route::get('/smpenglis', [LandingSMPcontroller::class, 'showQuizSMPENGLIS'])->name('ENGLIS.show');

Route::get('/sd', [LandingSDcontrollers::class, 'index']);
Route::get('/IPAsd', [LandingSDcontrollers::class, 'showQuizSDIPA'])->name('IPA.show');
Route::get('/MTKsd', [LandingSDcontrollers::class, 'showQuizSDMTK'])->name('MTK.show');
Route::get('/IPSsd', [LandingSDcontrollers::class, 'showQuizSDIPS'])->name('IPS.show');
Route::get('/PKNsd',  [LandingSDcontrollers::class, 'showQuizSDPKN'])->name('PKN.show');

Route::get('/games',  [LandingGamesControllers::class, 'index']);
Route::get('/tesiq',  [LandingGamesControllers::class, 'showQuiztesiq'])->name('tesiq.show');



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




// Route untuk halaman index admin
Route::get('/admin/questions', [QuizController::class, 'index'])->name('admin.index');
// Route untuk halaman tambah pertanyaan
Route::get('/admin/questions/create', [QuizController::class, 'create'])->name('admin.questions.create');
Route::post('/admin/questions/store', [QuizController::class, 'store'])->name('admin.questions.store');
// Route untuk edit pertanyaan
Route::get('/admin/questions/{table}/{id}/edit', [QuizController::class, 'edit'])->name('admin.edit');
Route::put('/admin/update/{table}/{id}', [QuizController::class, 'update'])->name('admin.update');

// Route untuk hapus pertanyaan
Route::delete('/admin/questions/{table}/{id}', [QuizController::class, 'destroy'])->name('admin.destroy');


//login
Route::get('/login', function () {
    return view ('login');
})->name('login');


Route::get('/contact', [ContactController::class, 'showForm'])->name('landing.contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/us', [ContactController::class, 'showUs'])->name('emails.us');
Route::post('/delete-messages', [ContactController::class, 'deleteByTime']);
Route::delete('/delete-message/{id}', [ContactController::class, 'deleteMessage'])->name('deleteMessage');



Route::post('/login', [AuthController::class, 'login'])->name('login.post'); 
Route::post('/register', [AuthController::class, 'register'])->name('register.post'); 
Route::get('/pendidikan', [LandingControllers::class, 'pendidikan']);
Route::post('/logout', [AuthController::class, 'login'])->name('logout'); 

Route::get('/cpns-quiz/categories', [QuizCPNSController::class, 'showCategories'])->name('cpns.categories');
Route::get('/cpns-quiz/tiu', [QuizCPNSController::class, 'showTIU'])->name('cpns.tiu');
Route::get('/cpns-quiz/twk', [QuizCPNSController::class, 'showTWK'])->name('cpns.twk');
Route::get('/cpns-quiz/tkp', [QuizCPNSController::class, 'showTKP'])->name('cpns.tkp');

Route::get('/loginz', function () {
    return view('landing.loginz');
});

