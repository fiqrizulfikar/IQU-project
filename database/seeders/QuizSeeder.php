<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizzes')->insert([
            [
                'quiz' => 'Apa yang dimaksud dengan inflasi?',
                'jawaban_a' => 'Penurunan harga barang secara terus-menerus',
                'jawaban_b' => 'Kenaikan harga barang secara umum dan terus-menerus',
                'jawaban_c' => 'Penurunan nilai mata uang secara langsung',
                'jawaban_d' => 'Peningkatan jumlah ekspor',
                'jawaban_benar' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz' => 'Apa fungsi utama bank sentral?',
                'jawaban_a' => 'Mengelola dana masyarakat',
                'jawaban_b' => 'Mencetak uang dan mengatur kebijakan moneter',
                'jawaban_c' => 'Memberikan pinjaman kepada masyarakat',
                'jawaban_d' => 'Mengatur perdagangan internasional',
                'jawaban_benar' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan pasar bebas?',
                'jawaban_a' => 'Pasar tanpa pengawasan pemerintah',
                'jawaban_b' => 'Pasar di mana barang tidak dikenakan pajak',
                'jawaban_c' => 'Pasar dengan kebijakan perdagangan tanpa hambatan',
                'jawaban_d' => 'Pasar yang hanya menjual barang lokal',
                'jawaban_benar' => 'C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz' => 'Apa arti dari subsidi?',
                'jawaban_a' => 'Pajak tambahan untuk barang mewah',
                'jawaban_b' => 'Bantuan pemerintah untuk menurunkan biaya produksi',
                'jawaban_c' => 'Pinjaman lunak kepada negara lain',
                'jawaban_d' => 'Investasi langsung pemerintah pada perusahaan',
                'jawaban_benar' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan defisit anggaran?',
                'jawaban_a' => 'Pendapatan negara lebih besar dari pengeluaran',
                'jawaban_b' => 'Pengeluaran negara lebih besar dari pendapatan',
                'jawaban_c' => 'Peningkatan nilai tukar mata uang',
                'jawaban_d' => 'Penurunan tingkat investasi',
                'jawaban_benar' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan GDP?',
                'jawaban_a' => 'Pendapatan nasional bruto',
                'jawaban_b' => 'Total nilai barang dan jasa yang dihasilkan dalam suatu negara',
                'jawaban_c' => 'Jumlah investasi asing dalam suatu negara',
                'jawaban_d' => 'Jumlah pendapatan ekspor dan impor',
                'jawaban_benar' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz' => 'Apa tujuan utama pajak progresif?',
                'jawaban_a' => 'Mengurangi kesenjangan pendapatan',
                'jawaban_b' => 'Meningkatkan konsumsi masyarakat',
                'jawaban_c' => 'Mendukung investasi asing',
                'jawaban_d' => 'Mengurangi ekspor',
                'jawaban_benar' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan ekonomi mikro?',
                'jawaban_a' => 'Studi tentang ekonomi global',
                'jawaban_b' => 'Analisis ekonomi pada level individu dan perusahaan',
                'jawaban_c' => 'Pengelolaan keuangan negara',
                'jawaban_d' => 'Kebijakan moneter pemerintah',
                'jawaban_benar' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan ekonomi makro?',
                'jawaban_a' => 'Analisis ekonomi secara keseluruhan dalam suatu negara',
                'jawaban_b' => 'Pengelolaan usaha kecil',
                'jawaban_c' => 'Studi tentang perilaku konsumen',
                'jawaban_d' => 'Manajemen logistik internasional',
                'jawaban_benar' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan pasar oligopoli?',
                'jawaban_a' => 'Pasar yang dikuasai oleh satu perusahaan',
                'jawaban_b' => 'Pasar yang dikuasai oleh beberapa perusahaan besar',
                'jawaban_c' => 'Pasar dengan banyak produsen kecil',
                'jawaban_d' => 'Pasar tanpa persaingan',
                'jawaban_benar' => 'B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
