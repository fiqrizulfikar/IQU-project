<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizSDIPA;

class LandingSDcontrollers extends Controller
{
    public function index()
    {
        return view('landing.SD.SekolahDasar');
    } 
    public function showQuizSDIPA()
    {
        $questions = QuizSDIPA::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SD.IPA', compact('questions'));
    }

    
}
