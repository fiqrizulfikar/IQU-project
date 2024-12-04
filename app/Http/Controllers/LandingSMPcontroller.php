<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizSMPIPS;
use App\Models\QuizSMPIPA;
use App\Models\QuizSMPMTK;
use App\Models\QuizSMPPKN;

class LandingSMPcontroller extends Controller
{
    public function index()
    {
        return view('landing.SMP');
    } 
    public function showQuizSMPIPS()
    {
        $quizsmpips = QuizSMPIPS::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SMP.IPS', compact('quizsmpips'));      
    }
    public function showQuizSMPIPA()
    {
        $quizsmpipa = QuizSMPIPA::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SMP.IPA', compact('quizsmpipa'));      
    }
    public function showQuizSMPMTK()
    {
        $quizsmpmtk = QuizSMPMTK::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SMP.MTK', compact('quizsmpmtk'));      
    }
    public function showQuizSMPPKN()
    {
        $quizsmppkn = QuizSMPPKN::all(); // Ambil semua data pertanyaan dari database
        return view('landing.SMP.PKN', compact('quizsmppkn'));      
    }

}