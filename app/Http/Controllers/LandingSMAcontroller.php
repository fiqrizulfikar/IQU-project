<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizSMAIPA;
use App\Models\QuizSMAIPS;


class LandingSMAcontroller extends Controller
{
    public function index()
    {
        return view ('landing.Sma');
    }
    public function showQuizSMAIPA()
    {
        $questions = QuizSMAIPA::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SMA.IPA', compact('questions'));
    }
    public function showQuizSMAIPS()
    {
        $quizsmaips = QuizSMAIPS::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SMA.IPS', compact('quizsmaips'));
    }

}
