<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use App\Models\QuizPolitik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\QuizTeknologi;
use App\Models\QuizUmum;

class LandingPengetahuan extends Controller
{
    public function index()
    {
        return view('landing.pengetahuan');
    }
    public function showQuiz()
    {
        $questions = Quiz::all(); // Ambil semua data pertanyaan dari database
        return view('landing.landing_pengetahuan.ekonomi', compact('questions'));
    }
    public function showQuizPolitik()
    {
        $quizPolitik = QuizPolitik::all(); // Ambil semua data pertanyaan dari database
        return view('landing.landing_pengetahuan.politik', compact('quizPolitik'));
    }
    public function showQuizTeknologi()
    {
        $quizTeknologi = QuizTeknologi::all(); // Ambil semua data pertanyaan dari database
        return view('landing.landing_pengetahuan.teknologi', compact('quizTeknologi'));
    }
    public function showQuizUmum()
    {
        $quizUmum = QuizUmum::all(); // Ambil semua data pertanyaan dari database
        return view('landing.landing_pengetahuan.umum', compact('quizUmum'));
    }
}

