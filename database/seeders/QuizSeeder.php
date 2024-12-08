<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quiz_s_d_ipa')->insert([
            
                [
                    'quiz' => 'Apa fungsi utama akar pada tumbuhan?',
                    'jawaban_a' => 'Menyerap air dan mineral dari tanah',
                    'jawaban_b' => 'Menghasilkan makanan',
                    'jawaban_c' => 'Melindungi batang',
                    'jawaban_d' => 'Sebagai alat pernapasan',
                    'jawaban_benar' => 'A',
                ],
                [
                    'quiz' => 'Apa yang terjadi jika kita tidak menyiram tanaman dalam waktu lama?',
                    'jawaban_a' => 'Tanaman akan tumbuh lebih cepat',
                    'jawaban_b' => 'Tanaman akan layu dan mati',
                    'jawaban_c' => 'Tanaman akan berbunga',
                    'jawaban_d' => 'Tanaman akan menghasilkan buah',
                    'jawaban_benar' => 'B',
                ],
                [
                    'quiz' => 'Apa nama proses di mana tumbuhan hijau membuat makanannya sendiri?',
                    'jawaban_a' => 'Fotosintesis',
                    'jawaban_b' => 'Respirasi',
                    'jawaban_c' => 'Transpirasi',
                    'jawaban_d' => 'Fermentasi',
                    'jawaban_benar' => 'A',
                ],
                [
                    'quiz' => 'Hewan berikut yang termasuk kelompok serangga adalah?',
                    'jawaban_a' => 'Kupu-kupu',
                    'jawaban_b' => 'Katak',
                    'jawaban_c' => 'Cacing tanah',
                    'jawaban_d' => 'Ikan',
                    'jawaban_benar' => 'A',
                ],
                [
                    'quiz' => 'Apa yang dimaksud dengan daur air?',
                    'jawaban_a' => 'Perubahan air menjadi gas tanpa siklus',
                    'jawaban_b' => 'Proses perputaran air dari bumi ke atmosfer dan kembali ke bumi',
                    'jawaban_c' => 'Proses menyaring air di sungai',
                    'jawaban_d' => 'Perubahan air laut menjadi air tawar',
                    'jawaban_benar' => 'B',
                ],
                [
                    'quiz' => 'Hewan apa yang berkembang biak dengan cara bertelur?',
                    'jawaban_a' => 'Ayam',
                    'jawaban_b' => 'Kucing',
                    'jawaban_c' => 'Kambing',
                    'jawaban_d' => 'Kelinci',
                    'jawaban_benar' => 'A',
                ],
                [
                    'quiz' => 'Apa yang disebut sebagai energi alternatif?',
                    'jawaban_a' => 'Energi yang tidak bisa diperbarui',
                    'jawaban_b' => 'Energi yang berasal dari alam dan ramah lingkungan',
                    'jawaban_c' => 'Energi yang berasal dari batu bara',
                    'jawaban_d' => 'Energi yang mahal',
                    'jawaban_benar' => 'B',
                ],
                [
                    'quiz' => 'Bagian tubuh manusia yang berfungsi untuk memompa darah adalah?',
                    'jawaban_a' => 'Jantung',
                    'jawaban_b' => 'Paru-paru',
                    'jawaban_c' => 'Lambung',
                    'jawaban_d' => 'Ginjal',
                    'jawaban_benar' => 'A',
                ],
                [
                    'quiz' => 'Apa yang terjadi pada air jika dipanaskan sampai 100°C?',
                    'jawaban_a' => 'Air akan membeku',
                    'jawaban_b' => 'Air akan mendidih dan berubah menjadi uap',
                    'jawaban_c' => 'Air akan mengental',
                    'jawaban_d' => 'Air akan tetap sama',
                    'jawaban_benar' => 'B',
                ],
                [
                    'quiz' => 'Mengapa matahari penting bagi kehidupan di bumi?',
                    'jawaban_a' => 'Memberikan panas dan cahaya untuk mendukung kehidupan',
                    'jawaban_b' => 'Membantu hujan turun setiap hari',
                    'jawaban_c' => 'Menyebabkan gempa bumi',
                    'jawaban_d' => 'Membuat langit menjadi biru',
                    'jawaban_benar' => 'A',
                ],          
        ]);      
    }
}
