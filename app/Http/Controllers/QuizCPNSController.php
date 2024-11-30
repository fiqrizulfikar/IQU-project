<?php

namespace App\Http\Controllers;

use App\Models\QuizTIU;
use App\Models\QuizTWK;
use App\Models\QuizTKP;
use Illuminate\Http\Request;

class QuizCPNSController extends Controller
{
    // Menampilkan halaman untuk memilih kategori soal CPNS
    public function showCategories()
    {
        return view('quiz_cpns.categories');
    }

    // Menampilkan soal untuk kategori TIU
    public function showTIU()
    {
        $soal_tiu = QuizTIU::inRandomOrder()->take(20)->get(); // Ambil 20 soal TIU secara acak
        return view('quiz_cpns.tiu', compact('soal_tiu'));
    }

    // Menampilkan soal untuk kategori TWK
    public function showTWK()
    {
        $soal_twk = QuizTWK::inRandomOrder()->take(20)->get(); // Ambil 20 soal TWK secara acak
        return view('quiz_cpns.twk', compact('soal_twk'));
    }

    // Menampilkan soal untuk kategori TKP
    public function showTKP()
    {
        $soal_tkp = QuizTKP::inRandomOrder()->take(20)->get(); // Ambil 20 soal TKP secara acak
        return view('quiz_cpns.tkp', compact('soal_tkp'));
    }
}
