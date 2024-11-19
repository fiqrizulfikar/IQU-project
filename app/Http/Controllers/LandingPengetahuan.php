<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
}

