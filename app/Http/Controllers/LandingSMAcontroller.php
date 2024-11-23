<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizSMAIPA;

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

}
