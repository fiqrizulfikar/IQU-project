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
                'quiz' => 'Apa yang dimaksud dengan teknologi informasi?',
                'jawaban_a' => 'Penggunaan teknologi untuk mengolah, menyimpan, dan menyebarkan informasi',
                'jawaban_b' => 'Proses pemrograman untuk membuat aplikasi perangkat keras',
                'jawaban_c' => 'Perangkat yang digunakan untuk menggantikan pekerjaan manusia',
                'jawaban_d' => 'Teknologi yang hanya digunakan di dunia perbankan',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan cloud computing?',
                'jawaban_a' => 'Menyimpan data di server pribadi yang ada di rumah',
                'jawaban_b' => 'Penyimpanan data di internet dengan menggunakan server jarak jauh',
                'jawaban_c' => 'Penyimpanan data menggunakan hard drive eksternal',
                'jawaban_d' => 'Menggunakan data pribadi untuk mencari informasi di mesin pencari',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan "big data"?',
                'jawaban_a' => 'Data dalam jumlah besar yang tidak bisa dikelola menggunakan metode konvensional',
                'jawaban_b' => 'Data yang berukuran kecil namun penting untuk keputusan bisnis',
                'jawaban_c' => 'Data yang hanya digunakan untuk transaksi perbankan',
                'jawaban_d' => 'Data yang disimpan di perangkat keras pribadi',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Manakah dari berikut ini yang bukan contoh perangkat lunak (software)?',
                'jawaban_a' => 'Microsoft Windows',
                'jawaban_b' => 'Intel Core i7',
                'jawaban_c' => 'Adobe Photoshop',
                'jawaban_d' => 'Google Chrome',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan Internet of Things (IoT)?',
                'jawaban_a' => 'Koneksi perangkat elektronik yang dapat saling berkomunikasi melalui internet',
                'jawaban_b' => 'Penggunaan internet untuk berkomunikasi dengan teman secara online',
                'jawaban_c' => 'Teknologi untuk mengakses data secara online menggunakan smartphone',
                'jawaban_d' => 'Jaringan komputer lokal di dalam suatu gedung',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan algoritma dalam pemrograman komputer?',
                'jawaban_a' => 'Langkah-langkah yang sistematis untuk menyelesaikan suatu masalah',
                'jawaban_b' => 'Bahasa pemrograman yang digunakan untuk membuat aplikasi',
                'jawaban_c' => 'Metode untuk mempercepat kinerja komputer',
                'jawaban_d' => 'Proses untuk menghubungkan dua komputer dalam jaringan',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa itu HTML?',
                'jawaban_a' => 'Bahasa pemrograman untuk membuat aplikasi desktop',
                'jawaban_b' => 'Bahasa markup yang digunakan untuk membuat halaman web',
                'jawaban_c' => 'Bahasa yang digunakan untuk mengembangkan aplikasi mobile',
                'jawaban_d' => 'Bahasa yang digunakan untuk menghubungkan database ke website',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Manakah yang bukan fungsi dari database?',
                'jawaban_a' => 'Menyimpan dan mengelola data secara efisien',
                'jawaban_b' => 'Menampilkan data kepada pengguna',
                'jawaban_c' => 'Mencetak dokumen dan laporan',
                'jawaban_d' => 'Mengatur hubungan antar data yang saling terkait',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa itu aplikasi perangkat lunak open-source?',
                'jawaban_a' => 'Aplikasi yang dapat diubah dan disebarluaskan oleh siapa saja',
                'jawaban_b' => 'Aplikasi yang hanya dapat digunakan oleh pengembang perangkat keras',
                'jawaban_c' => 'Aplikasi yang harus dibayar untuk digunakan',
                'jawaban_d' => 'Aplikasi yang hanya dapat dijalankan di sistem operasi tertentu',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan VPN (Virtual Private Network)?',
                'jawaban_a' => 'Jaringan yang memungkinkan koneksi aman dan terenskripsi ke internet',
                'jawaban_b' => 'Proses untuk mempercepat koneksi internet',
                'jawaban_c' => 'Layanan untuk mencari informasi di internet',
                'jawaban_d' => 'Alat untuk meningkatkan kekuatan sinyal Wi-Fi',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa perbedaan antara HTTP dan HTTPS?',
                'jawaban_a' => 'HTTPS memiliki lapisan keamanan tambahan untuk enkripsi data',
                'jawaban_b' => 'HTTP digunakan untuk komunikasi lokal, sedangkan HTTPS untuk komunikasi global',
                'jawaban_c' => 'HTTPS lebih cepat daripada HTTP',
                'jawaban_d' => 'Tidak ada perbedaan, keduanya sama saja',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan software antivirus?',
                'jawaban_a' => 'Perangkat lunak yang digunakan untuk mendeteksi dan menghapus virus dari komputer',
                'jawaban_b' => 'Perangkat keras yang mencegah virus masuk ke dalam komputer',
                'jawaban_c' => 'Program yang mengatur sistem operasi komputer',
                'jawaban_d' => 'Program untuk mempercepat kinerja komputer',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan SEO (Search Engine Optimization)?',
                'jawaban_a' => 'Proses mengoptimalkan situs web agar lebih mudah ditemukan di mesin pencari',
                'jawaban_b' => 'Proses mengedit gambar untuk mempercepat pemuatan situs web',
                'jawaban_c' => 'Proses menghubungkan beberapa situs web ke satu server',
                'jawaban_d' => 'Proses mendownload aplikasi dari internet',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan bahasa pemrograman Python?',
                'jawaban_a' => 'Bahasa pemrograman yang dirancang untuk kemudahan dan kecepatan pembuatan aplikasi',
                'jawaban_b' => 'Bahasa pemrograman untuk membuat aplikasi web statis',
                'jawaban_c' => 'Bahasa yang digunakan untuk menciptakan game komputer',
                'jawaban_d' => 'Bahasa yang digunakan untuk mengembangkan aplikasi seluler',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan algoritma pencarian?',
                'jawaban_a' => 'Proses untuk menemukan nilai atau informasi dalam kumpulan data',
                'jawaban_b' => 'Metode untuk menghitung waktu eksekusi program',
                'jawaban_c' => 'Langkah-langkah untuk mendeteksi dan menghapus virus',
                'jawaban_d' => 'Proses untuk memperbaiki bug dalam aplikasi',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan aplikasi mobile?',
                'jawaban_a' => 'Perangkat lunak yang dirancang untuk digunakan di perangkat seluler',
                'jawaban_b' => 'Perangkat keras yang digunakan untuk menghubungkan ke jaringan',
                'jawaban_c' => 'Program yang digunakan untuk mengatur data di komputer',
                'jawaban_d' => 'Aplikasi yang hanya dapat dijalankan di desktop',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Manakah dari berikut ini yang termasuk perangkat keras komputer?',
                'jawaban_a' => 'Monitor, keyboard, mouse, CPU',
                'jawaban_b' => 'Windows, Android, macOS',
                'jawaban_c' => 'Microsoft Word, Excel, PowerPoint',
                'jawaban_d' => 'Google Chrome, Mozilla Firefox, Safari',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa itu browser web?',
                'jawaban_a' => 'Perangkat lunak yang digunakan untuk mengakses dan menjelajahi internet',
                'jawaban_b' => 'Perangkat keras yang digunakan untuk menghubungkan komputer ke internet',
                'jawaban_c' => 'Program untuk mengelola file di komputer',
                'jawaban_d' => 'Sistem operasi untuk perangkat komputer',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa yang dimaksud dengan sistem operasi (OS)?',
                'jawaban_a' => 'Perangkat lunak yang mengatur dan mengelola perangkat keras serta perangkat lunak lainnya',
                'jawaban_b' => 'Perangkat keras yang digunakan untuk menyimpan data',
                'jawaban_c' => 'Program yang digunakan untuk mengelola database',
                'jawaban_d' => 'Program untuk mendesain gambar dan video',
                'jawaban_benar' => 'A',
            ]
        ]); 
    }
}