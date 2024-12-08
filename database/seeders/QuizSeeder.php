<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {          
        DB::table('quizsdips')->insert([
            [
                'quiz' => 'Apa yang dimaksud dengan demokrasi?',
                'jawaban_a' => 'Sistem pemerintahan di mana rakyat memiliki kekuasaan untuk memilih pemimpin',
                'jawaban_b' => 'Sistem pemerintahan yang dikuasai oleh satu orang',
                'jawaban_c' => 'Sistem pemerintahan yang tidak melibatkan rakyat',
                'jawaban_d' => 'Sistem pemerintahan yang hanya mengutamakan militer',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Siapa yang dikenal sebagai Bapak Proklamasi Indonesia?',
                'jawaban_a' => 'Soekarno',
                'jawaban_b' => 'Suharto',
                'jawaban_c' => 'Jokowi',
                'jawaban_d' => 'Habibie',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang menjadi tujuan dari pendidikan di Indonesia?',
                'jawaban_a' => 'Mencetak generasi yang cerdas dan berakhlak',
                'jawaban_b' => 'Mencetak generasi yang hanya pandai dalam matematika',
                'jawaban_c' => 'Mencetak generasi yang tidak peduli dengan lingkungan',
                'jawaban_d' => 'Mencetak generasi yang hanya tahu tentang sejarah',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan globalisasi?',
                'jawaban_a' => 'Proses di mana negara-negara di dunia saling terhubung',
                'jawaban_b' => 'Proses di mana negara menjadi tertutup',
                'jawaban_c' => 'Proses di mana hanya satu negara yang berkuasa',
                'jawaban_d' => 'Proses di mana budaya lokal hilang sepenuhnya',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang menjadi simbol negara Indonesia?',
                'jawaban_a' => 'Burung Garuda',
                'jawaban_b' => 'Harimau',
                'jawaban_c' => 'Bunga Melati',
                'jawaban_d' => 'Bintang',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan peta?',
                'jawaban_a' => 'Gambar yang menunjukkan lokasi dan informasi geografis',
                'jawaban_b' => 'Buku yang berisi cerita',
                'jawaban_c' => 'Alat musik',
                'jawaban_d' => 'Makanan khas daerah',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Siapa yang bertugas menjaga keamanan negara?',
                'jawaban_a' => 'Tentara dan polisi',
                'jawaban_b' => 'Guru dan dokter',
                'jawaban_c' => 'Petani dan nelayan',
                'jawaban_d' => 'Pengusaha dan pedagang',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang menjadi sumber daya alam Indonesia yang terkenal?',
                'jawaban_a' => 'Minyak dan gas',
                'jawaban_b' => 'Buku dan alat tulis',
                'jawaban_c' => 'Pakaian dan sepatu',
                'jawaban_d' => 'Makanan cepat saji',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan budaya?',
                'jawaban_a' => 'Kebiasaan, tradisi, dan nilai-nilai yang dianut oleh suatu kelompok masyarakat',
                'jawaban_b' => 'Hanya seni dan musik',
                'jawaban_c' => 'Hanya bahasa yang digunakan',
                'jawaban_d' => 'Hanya makanan khas',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang menjadi ciri khas dari negara kepulauan seperti Indonesia?',
                'jawaban_a' => 'Memiliki banyak pulau dan lautan',
                'jawaban_b' => 'Hanya memiliki satu pulau',
                'jawaban_c' => 'Tidak memiliki laut',
                'jawaban_d' => 'Hanya memiliki pegunungan',
                'jawaban_benar' => 'A',
            ],
        ]);      
    }
}