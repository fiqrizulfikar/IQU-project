<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiztesiq;

class LandingGamesControllers extends Controller
{
     public function index()
    {
        return view('landing.games');
    }
    public function showQuiztesiq()
    {
        $questions = Quiztesiq::all(); // Ambil semua data pertanyaan dari database
        return view('landing.landing_games.tesiq', compact('questions'));
    }
   
}
