<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizsmppkn')->insert([
            
            
            [
                'quiz' => 'Apa yang dimaksud dengan konstitusi?',
                'jawaban_a' => 'Himpunan norma hukum yang mengatur kehidupan berbangsa dan bernegara',
                'jawaban_b' => 'Peraturan yang dibuat oleh pemerintah daerah',
                'jawaban_c' => 'Dokumen yang berisi keputusan pengadilan',
                'jawaban_d' => 'Tata cara pemilihan umum',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa fungsi dari lembaga legislatif?',
                'jawaban_a' => 'Mengawasi jalannya pemerintahan',
                'jawaban_b' => 'Menyusun dan mengesahkan undang-undang',
                'jawaban_c' => 'Menjalankan kebijakan pemerintah',
                'jawaban_d' => 'Mengadili perkara hukum',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Salah satu prinsip dasar Pancasila adalah?',
                'jawaban_a' => 'Keadilan sosial bagi seluruh rakyat Indonesia',
                'jawaban_b' => 'Kedaulatan rakyat',
                'jawaban_c' => 'Persatuan Indonesia',
                'jawaban_d' => 'Ketuhanan yang Maha Esa',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan hak asasi manusia?',
                'jawaban_a' => 'Hak yang diberikan oleh negara kepada warganya',
                'jawaban_b' => 'Hak yang melekat pada setiap individu sebagai manusia',
                'jawaban_c' => 'Hak yang diperoleh melalui pemilihan umum',
                'jawaban_d' => 'Hak yang hanya berlaku di negara tertentu',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa yang menjadi dasar hukum bagi pelaksanaan pemilihan umum di Indonesia?',
                'jawaban_a' => 'Undang-Undang Dasar 1945',
                'jawaban_b' => 'Undang-Undang Pemilu',
                'jawaban_c' => 'Peraturan Pemerintah',
                'jawaban_d' => 'Keputusan Presiden',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan otonomi daerah?',
                'jawaban_a' => 'Kekuasaan daerah untuk mengatur dan mengurus rumah tangganya sendiri',
                'jawaban_b' => 'Pengawasan pemerintah pusat terhadap daerah',
                'jawaban_c' => 'Pembagian kekuasaan antara pusat dan daerah',
                'jawaban_d' => 'Pemberian dana dari pusat ke daerah',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang menjadi tujuan dari sistem pemerintahan demokrasi?',
                'jawaban_a' => 'Mewujudkan kekuasaan absolut',
                'jawaban_b' => 'Memberikan kebebasan penuh kepada individu',
                'jawaban_c' => 'Mengutamakan kepentingan umum',
                'jawaban_d' => 'Mengurangi peran masyarakat dalam pemerintahan',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Siapa yang berhak memilih dalam pemilihan umum?',
                'jawaban_a' => 'Warga negara yang berusia 17 tahun ke atas',
                'jawaban_b' => 'Warga negara yang memiliki pekerjaan tetap',
                'jawaban_c' => 'Warga negara yang terdaftar di lembaga pendidikan',
                'jawaban_d' => 'Warga negara yang memiliki KTP',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan pluralisme?',
                'jawaban_a' => 'Keberagaman dalam masyarakat yang harus disatukan',
                'jawaban_b' => 'Pengakuan terhadap perbedaan di dalam masyarakat',
                'jawaban_c' => 'Pemisahan antara agama dan negara',
                'jawaban_d' => 'Persatuan dalam keragaman',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa yang menjadi landasan moral dalam kehidupan berbangsa dan bernegara?',
                'jawaban_a' => 'Pancasila',
                'jawaban_b' => 'Undang-Undang Dasar 1945',
                'jawaban_c' => 'Peraturan Pemerintah',
                'jawaban_d' => 'Keputusan Presiden',
                'jawaban_benar' => 'A',
             ],
            
            
            
        ]);      
    }
}
