<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quiztwk')->insert([
            [
                'quiz' => 'Siapa yang menulis naskah proklamasi kemerdekaan Indonesia?',
                'jawaban_a' => 'Soekarno',
                'jawaban_b' => 'Mohammad Hatta',
                'jawaban_c' => 'Sayuti Melik',
                'jawaban_d' => 'Ahmad Subardjo',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Pancasila sebagai dasar negara Indonesia ditetapkan pada tanggal?',
                'jawaban_a' => '17 Agustus 1945',
                'jawaban_b' => '1 Juni 1945',
                'jawaban_c' => '18 Agustus 1945',
                'jawaban_d' => '22 Juni 1945',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 disahkan oleh?',
                'jawaban_a' => 'BPUPKI',
                'jawaban_b' => 'PPKI',
                'jawaban_c' => 'MPR',
                'jawaban_d' => 'DPR',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Sila pertama Pancasila berbunyi?',
                'jawaban_a' => 'Kemanusiaan yang Adil dan Beradab',
                'jawaban_b' => 'Ketuhanan Yang Maha Esa',
                'jawaban_c' => 'Persatuan Indonesia',
                'jawaban_d' => 'Keadilan Sosial bagi Seluruh Rakyat Indonesia',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Bendera negara Indonesia adalah?',
                'jawaban_a' => 'Merah Biru',
                'jawaban_b' => 'Merah Putih',
                'jawaban_c' => 'Merah Hitam',
                'jawaban_d' => 'Putih Biru',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Siapakah pahlawan nasional yang dijuluki "Bapak Pendidikan Nasional"?',
                'jawaban_a' => 'Ki Hajar Dewantara',
                'jawaban_b' => 'Soekarno',
                'jawaban_c' => 'R.A. Kartini',
                'jawaban_d' => 'Mohammad Hatta',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Bahasa Indonesia mulai digunakan sebagai bahasa persatuan pada?',
                'jawaban_a' => 'Sumpah Pemuda 1928',
                'jawaban_b' => 'Proklamasi 1945',
                'jawaban_c' => 'Konferensi Meja Bundar 1949',
                'jawaban_d' => 'Sidang BPUPKI 1945',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Lambang negara Indonesia adalah?',
                'jawaban_a' => 'Garuda Merah',
                'jawaban_b' => 'Garuda Putih',
                'jawaban_c' => 'Garuda Pancasila',
                'jawaban_d' => 'Garuda Bhineka Tunggal Ika',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa semboyan negara Indonesia?',
                'jawaban_a' => 'Merdeka atau Mati',
                'jawaban_b' => 'Garuda Indonesia',
                'jawaban_c' => 'Pancasila',
                'jawaban_d' => 'Bhinneka Tunggal Ika',
                'jawaban_benar' => 'D',
            ],
            [
                'quiz' => 'Di bawah ini yang bukan termasuk isi Sumpah Pemuda adalah?',
                'jawaban_a' => 'Berbangsa yang satu, bangsa Indonesia',
                'jawaban_b' => 'Berbahasa yang satu, bahasa Indonesia',
                'jawaban_c' => 'Bertanah air yang satu, tanah air Indonesia',
                'jawaban_d' => 'Beragama yang satu, agama Indonesia',
                'jawaban_benar' => 'D',
            ],
        ]); 
    }
}