<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quiztesiq')->insert([
            [
                'quiz' => 'Apa yang lebih berat, satu kilogram kapas atau satu kilogram besi?',
                'jawaban_a' => 'Satu kilogram kapas',
                'jawaban_b' => 'Satu kilogram besi',
                'jawaban_c' => 'Keduanya sama beratnya',
                'jawaban_d' => 'Tidak tahu, saya hanya bawa satu tas',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Jika saya memiliki dua apel dan memberi satu kepada teman, berapa banyak apel yang saya miliki?',
                'jawaban_a' => 'Satu apel',
                'jawaban_b' => 'Dua apel',
                'jawaban_c' => 'Tidak ada apel',
                'jawaban_d' => 'Apel saya habis dimakan teman',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang lebih cepat, mobil Ferrari atau internet?',
                'jawaban_a' => 'Mobil Ferrari',
                'jawaban_b' => 'Internet',
                'jawaban_c' => 'Keduanya sama cepatnya',
                'jawaban_d' => 'Itu tergantung dari sinyal Wi-Fi',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Jika Anda berjalan dari Jakarta ke Surabaya, berapa lama waktu yang diperlukan?',
                'jawaban_a' => 'Tergantung kecepatan jalan kaki',
                'jawaban_b' => 'Satu jam',
                'jawaban_c' => 'Enam jam',
                'jawaban_d' => 'Tidak mungkin, lebih baik naik pesawat',
                'jawaban_benar' => 'D',
            ],
            [
                'quiz' => 'Apa yang lebih besar, jumlah hari dalam setahun atau jumlah jari di tubuh manusia?',
                'jawaban_a' => 'Jumlah hari dalam setahun',
                'jawaban_b' => 'Jumlah jari di tubuh manusia',
                'jawaban_c' => 'Keduanya sama',
                'jawaban_d' => 'Tergantung apakah jari Anda lebih panjang',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Jika Anda menemukan sebuah cermin, apa yang pertama kali Anda lihat?',
                'jawaban_a' => 'Refleksi diri saya',
                'jawaban_b' => 'Cermin itu sendiri',
                'jawaban_c' => 'Bayangan orang lain',
                'jawaban_d' => 'Tidak ada, karena saya buta',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang bisa terbang tanpa sayap?',
                'jawaban_a' => 'Waktu',
                'jawaban_b' => 'Burung',
                'jawaban_c' => 'Pesawat',
                'jawaban_d' => 'Kertas terbang',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Siapa yang lebih pintar, komputer atau manusia?',
                'jawaban_a' => 'Komputer lebih pintar',
                'jawaban_b' => 'Manusia lebih pintar',
                'jawaban_c' => 'Keduanya sama pintar',
                'jawaban_d' => 'Tergantung aplikasi yang digunakan',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Jika ada tiga orang di sebuah ruangan dan mereka semua tertawa, apa yang terjadi?',
                'jawaban_a' => 'Mereka sedang bahagia',
                'jawaban_b' => 'Ruangan itu penuh dengan tawa',
                'jawaban_c' => 'Mereka sedang bercanda',
                'jawaban_d' => 'Ada yang lucu, mungkin lelucon',
                'jawaban_benar' => 'D',
            ],
            [
                'quiz' => 'Apa yang lebih pintar, seekor kucing atau seekor anjing?',
                'jawaban_a' => 'Kucing lebih pintar',
                'jawaban_b' => 'Anjing lebih pintar',
                'jawaban_c' => 'Keduanya pintar dengan cara yang berbeda',
                'jawaban_d' => 'Mereka lebih pintar dari saya',
                'jawaban_benar' => 'C',
            ],
        ]); 
    }
}