<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizSDIPA;
use App\Models\QuizSDIPS;


class LandingSDcontrollers extends Controller
{
    public function index()
    {
        return view('landing.Sd');
    } 
    public function showQuizSDIPA()
    {
        $questions = QuizSDIPA::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SD.IPA', compact('questions'));
    }
    public function showQuizSDIPS()
    {
        $questions = QuizSDIPS::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SD.IPS', compact('questions'));
    }
    
}
