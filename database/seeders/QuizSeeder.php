<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('_quiz_politik')->insert([
                [
                    'quiz' => 'Siapa presiden pertama Republik Indonesia?',
                    'jawaban_a' => 'Soeharto',
                    'jawaban_b' => 'Ir. Soekarno',
                    'jawaban_c' => 'B.J. Habibie',
                    'jawaban_d' => 'Megawati Soekarnoputri',
                    'jawaban_benar' => 'B',
                ],
                [
                    'quiz' => 'Apa nama sistem pemerintahan Indonesia?',
                    'jawaban_a' => 'Monarki',
                    'jawaban_b' => 'Komunis',
                    'jawaban_c' => 'Demokrasi',
                    'jawaban_d' => 'Sosialis',
                    'jawaban_benar' => 'C',
                ],
                [
                    'quiz' => 'Undang-Undang Dasar yang berlaku di Indonesia adalah?',
                    'jawaban_a' => 'UUD 1945',
                    'jawaban_b' => 'UUD 1949',
                    'jawaban_c' => 'UUD 1950',
                    'jawaban_d' => 'UUD Sementara',
                    'jawaban_benar' => 'A',
                ],
                [
                    'quiz' => 'Lembaga yang berwenang membuat undang-undang di Indonesia adalah?',
                    'jawaban_a' => 'Presiden',
                    'jawaban_b' => 'DPR',
                    'jawaban_c' => 'MA',
                    'jawaban_d' => 'KPU',
                    'jawaban_benar' => 'B',
                ],
                [
                    'quiz' => 'Apa nama partai politik tertua di Indonesia?',
                    'jawaban_a' => 'Golkar',
                    'jawaban_b' => 'PDIP',
                    'jawaban_c' => 'PSI',
                    'jawaban_d' => 'PNI',
                    'jawaban_benar' => 'D',
                ],
                [
                    'quiz' => 'Siapa yang menjabat sebagai presiden ke-7 Indonesia?',
                    'jawaban_a' => 'Joko Widodo',
                    'jawaban_b' => 'Susilo Bambang Yudhoyono',
                    'jawaban_c' => 'Megawati Soekarnoputri',
                    'jawaban_d' => 'B.J. Habibie',
                    'jawaban_benar' => 'A',
                ],
                [
                    'quiz' => 'Apa kepanjangan dari KPU?',
                    'jawaban_a' => 'Komisi Perdagangan Umum',
                    'jawaban_b' => 'Komisi Pemilihan Umum',
                    'jawaban_c' => 'Komite Persatuan Umum',
                    'jawaban_d' => 'Komisi Pendidikan Umum',
                    'jawaban_benar' => 'B',
                ],
                [
                    'quiz' => 'Berapa jumlah provinsi di Indonesia saat ini (2024)?',
                    'jawaban_a' => '33',
                    'jawaban_b' => '34',
                    'jawaban_c' => '37',
                    'jawaban_d' => '38',
                    'jawaban_benar' => 'D',
                ],
                [
                    'quiz' => 'Siapa pendiri organisasi Budi Utomo?',
                    'jawaban_a' => 'R.A. Kartini',
                    'jawaban_b' => 'Ki Hajar Dewantara',
                    'jawaban_c' => 'Dr. Wahidin Sudirohusodo',
                    'jawaban_d' => 'Ir. Soekarno',
                    'jawaban_benar' => 'C',
                ],
                [
                    'quiz' => 'Apa nama lagu kebangsaan Indonesia?',
                    'jawaban_a' => 'Indonesia Raya',
                    'jawaban_b' => 'Garuda Pancasila',
                    'jawaban_c' => 'Tanah Airku',
                    'jawaban_d' => 'Bagimu Negeri',
                    'jawaban_benar' => 'A',
                ],
        ]);
    }
}
