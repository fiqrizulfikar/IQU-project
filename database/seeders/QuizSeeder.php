<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizumum')->insert([
            [
                'quiz' => 'Apa ibu kota negara Jepang?',
                'jawaban_a' => 'Seoul',
                'jawaban_b' => 'Beijing',
                'jawaban_c' => 'Tokyo',
                'jawaban_d' => 'Bangkok',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Siapa penulis novel "Harry Potter"?',
                'jawaban_a' => 'J.R.R. Tolkien',
                'jawaban_b' => 'J.K. Rowling',
                'jawaban_c' => 'George R.R. Martin',
                'jawaban_d' => 'Suzanne Collins',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Gunung tertinggi di dunia adalah?',
                'jawaban_a' => 'Gunung Kilimanjaro',
                'jawaban_b' => 'Gunung Everest',
                'jawaban_c' => 'Gunung Fuji',
                'jawaban_d' => 'Gunung Elbrus',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Siapa yang pertama kali mendarat di bulan?',
                'jawaban_a' => 'Neil Armstrong',
                'jawaban_b' => 'Yuri Gagarin',
                'jawaban_c' => 'Buzz Aldrin',
                'jawaban_d' => 'John Glenn',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa nama planet terbesar di tata surya?',
                'jawaban_a' => 'Mars',
                'jawaban_b' => 'Jupiter',
                'jawaban_c' => 'Saturnus',
                'jawaban_d' => 'Neptunus',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Siapa presiden Amerika Serikat yang ke-16?',
                'jawaban_a' => 'Abraham Lincoln',
                'jawaban_b' => 'George Washington',
                'jawaban_c' => 'Theodore Roosevelt',
                'jawaban_d' => 'Thomas Jefferson',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa nama samudra terbesar di dunia?',
                'jawaban_a' => 'Samudra Pasifik',
                'jawaban_b' => 'Samudra Atlantik',
                'jawaban_c' => 'Samudra Hindia',
                'jawaban_d' => 'Samudra Arktik',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Di negara manakah Menara Eiffel berada?',
                'jawaban_a' => 'Inggris',
                'jawaban_b' => 'Prancis',
                'jawaban_c' => 'Italia',
                'jawaban_d' => 'Spanyol',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama bentuk pemerintahan yang dipimpin oleh seorang raja?',
                'jawaban_a' => 'Republik',
                'jawaban_b' => 'Monarki',
                'jawaban_c' => 'Oligarki',
                'jawaban_d' => 'Teokrasi',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Siapa pelukis terkenal yang melukis "Mona Lisa"?',
                'jawaban_a' => 'Vincent van Gogh',
                'jawaban_b' => 'Pablo Picasso',
                'jawaban_c' => 'Leonardo da Vinci',
                'jawaban_d' => 'Claude Monet',
                'jawaban_benar' => 'C',
            ],        
        ]);      
    }
}
