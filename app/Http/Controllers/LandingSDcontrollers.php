<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizSDIPA;
use App\Models\QuizSDIPS;
use App\Models\QuizSDMTK;
use App\Models\QuizSDPKN;


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
        $questionsips = QuizSDIPS::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SD.IPS', compact('questionsips'));
    }
    public function showQuizSDMTK()
    {
        $questionsmtk = QuizSDMTK::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SD.MTK', compact('questionsmtk'));
    }
    public function showQuizSDPKN()
    {
        $questionspkn = QuizSDPKN::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SD.PKN', compact('questionspkn'));
    }
   
}
