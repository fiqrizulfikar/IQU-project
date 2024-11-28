<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizsmatik')->insert([
            [
                'quiz' => 'Apa kep singkatan dari TIK?',
                'jawaban_a' => 'Teknologi Inovasi Komunikasi',
                'jawaban_b' => 'Teknologi Informasi dan Komunikasi',
                'jawaban_c' => 'Transmisi Informasi dan Komunikasi',
                'jawaban_d' => 'Teknologi Industri dan Komunikasi',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan internet?',
                'jawaban_a' => 'Jaringan komputer yang menghubungkan perangkat di seluruh dunia',
                'jawaban_b' => 'Layanan komunikasi antar perangkat tanpa kabel',
                'jawaban_c' => 'Sistem operasi untuk komputer',
                'jawaban_d' => 'Perangkat keras untuk memproses data',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan "Cloud Computing"?',
                'jawaban_a' => 'Proses penyimpanan data di perangkat lokal',
                'jawaban_b' => 'Pengolahan data di pusat data jarak jauh yang dapat diakses melalui internet',
                'jawaban_c' => 'Sistem penyimpanan data hanya di hard drive',
                'jawaban_d' => 'Proses komputerisasi yang membutuhkan banyak perangkat keras',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan "Software"?',
                'jawaban_a' => 'Perangkat keras yang digunakan untuk komputer',
                'jawaban_b' => 'Sistem operasi yang mengontrol perangkat keras',
                'jawaban_c' => 'Program atau aplikasi yang digunakan oleh komputer',
                'jawaban_d' => 'Koneksi internet yang menghubungkan komputer',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Manakah yang termasuk contoh perangkat keras komputer?',
                'jawaban_a' => 'Windows',
                'jawaban_b' => 'Word Processor',
                'jawaban_c' => 'Monitor',
                'jawaban_d' => 'Google Chrome',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa nama sistem operasi yang paling banyak digunakan di komputer pribadi?',
                'jawaban_a' => 'Android',
                'jawaban_b' => 'iOS',
                'jawaban_c' => 'Windows',
                'jawaban_d' => 'Linux',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa kepanjangan dari URL?',
                'jawaban_a' => 'Uniform Resource Locator',
                'jawaban_b' => 'Universal Resource Locator',
                'jawaban_c' => 'Uniform Real Locator',
                'jawaban_d' => 'Universal Readable Locator',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa fungsi dari RAM (Random Access Memory) pada komputer?',
                'jawaban_a' => 'Menyimpan data secara permanen',
                'jawaban_b' => 'Menyimpan data sementara untuk akses cepat',
                'jawaban_c' => 'Mengatur input dan output',
                'jawaban_d' => 'Menjalankan aplikasi dan sistem operasi',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Manakah dari berikut ini yang bukan merupakan jenis file gambar?',
                'jawaban_a' => 'JPEG',
                'jawaban_b' => 'PNG',
                'jawaban_c' => 'GIF',
                'jawaban_d' => 'TXT',
                'jawaban_benar' => 'D',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan "Spam" dalam dunia internet?',
                'jawaban_a' => 'Pesan yang berguna dan tidak diminta',
                'jawaban_b' => 'Pesan yang dikirim secara massal dan tidak diminta',
                'jawaban_c' => 'Pesan yang berasal dari teman-teman',
                'jawaban_d' => 'Pesan yang bersifat penting',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan "Firewall" dalam keamanan komputer?',
                'jawaban_a' => 'Program untuk memodifikasi tampilan komputer',
                'jawaban_b' => 'Perangkat untuk meningkatkan kecepatan koneksi internet',
                'jawaban_c' => 'Sistem untuk melindungi komputer dari ancaman eksternal',
                'jawaban_d' => 'Proses menghapus virus dari komputer',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan "Phishing"?',
                'jawaban_a' => 'Proses mencuri data pengguna dengan cara menyamar sebagai situs web tepercaya',
                'jawaban_b' => 'Menjaga keamanan data di internet',
                'jawaban_c' => 'Teknologi untuk mempercepat koneksi internet',
                'jawaban_d' => 'Proses mengamankan perangkat keras komputer',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan "VPN" (Virtual Private Network)?',
                'jawaban_a' => 'Jaringan pribadi yang aman melalui internet',
                'jawaban_b' => 'Koneksi internet cepat untuk download',
                'jawaban_c' => 'Jaringan Wi-Fi umum untuk penggunaan publik',
                'jawaban_d' => 'Alat untuk meningkatkan kualitas gambar di komputer',
                'jawaban_benar' => 'A',
            ],        
        ]);      
    }
}
