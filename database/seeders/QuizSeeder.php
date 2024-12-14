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
                'jawaban_a' => 'Kenaikan harga barang dan jasa secara umum dalam suatu periode waktu',
                'jawaban_b' => 'Penurunan harga barang dan jasa secara umum',
                'jawaban_c' => 'Proses pertumbuhan ekonomi yang stabil',
                'jawaban_d' => 'Penurunan nilai mata uang suatu negara terhadap mata uang asing',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan kebijakan moneter?',
                'jawaban_a' => 'Kebijakan yang dilakukan oleh bank sentral untuk mengatur jumlah uang beredar dan suku bunga',
                'jawaban_b' => 'Kebijakan pemerintah dalam pengelolaan pajak dan anggaran negara',
                'jawaban_c' => 'Kebijakan yang mengatur hubungan internasional antar negara',
                'jawaban_d' => 'Kebijakan yang berfokus pada pengelolaan sektor pertanian',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan pajak progresif?',
                'jawaban_a' => 'Pajak yang semakin besar seiring dengan bertambahnya penghasilan wajib pajak',
                'jawaban_b' => 'Pajak yang sama untuk semua orang tanpa memperhatikan penghasilan',
                'jawaban_c' => 'Pajak yang dikenakan berdasarkan jumlah barang yang dikonsumsi',
                'jawaban_d' => 'Pajak yang hanya dikenakan pada barang mewah',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan deflasi?',
                'jawaban_a' => 'Penurunan harga barang dan jasa secara umum dalam suatu periode waktu',
                'jawaban_b' => 'Kenaikan harga barang dan jasa yang tajam dalam waktu singkat',
                'jawaban_c' => 'Kondisi di mana suatu negara mengalami krisis ekonomi',
                'jawaban_d' => 'Penurunan produksi barang dan jasa dalam suatu negara',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan neraca pembayaran?',
                'jawaban_a' => 'Laporan yang mencatat seluruh transaksi ekonomi antar negara dalam suatu periode waktu',
                'jawaban_b' => 'Laporan yang mencatat pengeluaran negara untuk kebutuhan dalam negeri',
                'jawaban_c' => 'Laporan yang mencatat jumlah utang luar negeri sebuah negara',
                'jawaban_d' => 'Laporan yang mencatat hasil ekspor barang dan jasa suatu negara',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan PDB (Produk Domestik Bruto)?',
                'jawaban_a' => 'Total nilai semua barang dan jasa yang diproduksi dalam suatu negara selama periode tertentu',
                'jawaban_b' => 'Jumlah seluruh ekspor dan impor yang dilakukan oleh suatu negara',
                'jawaban_c' => 'Jumlah investasi asing yang masuk ke suatu negara',
                'jawaban_d' => 'Jumlah total pendapatan yang diterima oleh pemerintah negara tersebut',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan pasar bebas?',
                'jawaban_a' => 'Sistem perdagangan yang tidak dibatasi oleh hambatan tarif atau kuota antar negara',
                'jawaban_b' => 'Sistem yang memungkinkan monopoli terjadi di suatu industri',
                'jawaban_c' => 'Pasar yang hanya menyediakan barang-barang kebutuhan dasar',
                'jawaban_d' => 'Pasar yang hanya menerima transaksi dalam mata uang asing',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan suku bunga?',
                'jawaban_a' => 'Biaya pinjaman yang dikenakan oleh pemberi pinjaman terhadap peminjam uang',
                'jawaban_b' => 'Jumlah uang yang dipinjam oleh seseorang dari bank',
                'jawaban_c' => 'Harga barang dan jasa yang ditawarkan di pasar',
                'jawaban_d' => 'Bunga yang diberikan oleh bank kepada pemegang rekening',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan devaluasi mata uang?',
                'jawaban_a' => 'Penurunan nilai tukar mata uang suatu negara terhadap mata uang asing',
                'jawaban_b' => 'Peningkatan nilai tukar mata uang suatu negara terhadap mata uang asing',
                'jawaban_c' => 'Peningkatan jumlah uang yang beredar dalam ekonomi',
                'jawaban_d' => 'Penurunan harga barang dan jasa dalam suatu negara',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan globalisasi ekonomi?',
                'jawaban_a' => 'Proses integrasi ekonomi antar negara yang menghasilkan pasar global',
                'jawaban_b' => 'Proses di mana negara-negara mengurangi kerjasama ekonomi antar mereka',
                'jawaban_c' => 'Proses pengalihan kegiatan produksi barang ke negara berkembang',
                'jawaban_d' => 'Proses yang mempengaruhi sistem pemerintahan negara-negara dunia',
                'jawaban_benar' => 'A',
            ],            
        ]);      
    }
}