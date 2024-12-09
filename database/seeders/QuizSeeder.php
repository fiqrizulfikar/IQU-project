<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {          
        DB::table('quizsdpkn')->insert([
            [
                'quiz' => 'Apa yang dimaksud dengan Pancasila?',
                'jawaban_a' => 'Dasar negara Indonesia',
                'jawaban_b' => 'Lagu kebangsaan Indonesia',
                'jawaban_c' => 'Bendera negara Indonesia',
                'jawaban_d' => 'Simbol hewan nasional',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Siapa yang dikenal sebagai Bapak Pendidikan Nasional?',
                'jawaban_a' => 'Ki Hajar Dewantara',
                'jawaban_b' => 'Soekarno',
                'jawaban_c' => 'Suharto',
                'jawaban_d' => 'Jokowi',
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
                'quiz' => 'Apa yang dimaksud dengan demokrasi?',
                'jawaban_a' => 'Sistem pemerintahan yang melibatkan rakyat',
                'jawaban_b' => 'Sistem pemerintahan yang dikuasai oleh satu orang',
                'jawaban_c' => 'Sistem pemerintahan yang tidak melibatkan rakyat',
                'jawaban_d' => 'Sistem pemerintahan yang hanya mengutamakan militer',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang menjadi tugas utama seorang warga negara?',
                'jawaban_a' => 'Menjaga keamanan dan ketertiban',
                'jawaban_b' => 'Hanya belajar di sekolah',
                'jawaban_c' => 'Bekerja di luar negeri',
                'jawaban_d' => 'Bermain sepanjang waktu',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Siapa yang berhak memilih dalam pemilihan umum?',
                'jawaban_a' => 'Warga negara yang sudah berusia 17 tahun',
                'jawaban_b' => 'Hanya orang kaya',
                'jawaban_c' => 'Hanya orang tua',
                'jawaban_d' => 'Hanya pegawai negeri',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan hak asasi manusia?',
                'jawaban_a' => 'Hak yang dimiliki setiap individu sejak lahir',
                'jawaban_b' => 'Hak yang hanya dimiliki oleh orang kaya',
                'jawaban_c' => 'Hak yang diberikan oleh pemerintah',
                'jawaban_d' => 'Hak yang hanya berlaku di sekolah',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang menjadi lambang persatuan bangsa Indonesia?',
                'jawaban_a' => 'Bhinneka Tunggal Ika',
                'jawaban_b' => 'Satu Nusa Satu Bangsa',
                'jawaban_c' => 'Merah Putih',
                'jawaban_d' => 'Garuda Pancasila',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan toleransi?',
                'jawaban_a' => 'Sikap saling menghormati antar sesama',
                'jawaban_b' => 'Sikap tidak peduli',
                'jawaban_c' => 'Sikap saling membenci',
                'jawaban_d' => 'Sikap egois',
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
        ]);      
    }
}