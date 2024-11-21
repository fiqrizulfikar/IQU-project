<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizumum')->insert([
            [
                'quiz' => 'Apa nama fenomena alam yang digunakan sebagai dasar sistem navigasi satelit (GPS)?',
                'jawaban_a' => 'Efek Doppler',
                'jawaban_b' => 'Relativitas Einstein',
                'jawaban_c' => 'Gelombang Elektromagnetik',
                'jawaban_d' => 'Gravitasi Newton',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Siapa yang menemukan prinsip dasar listrik yang dikenal sebagai hukum Ohm?',
                'jawaban_a' => 'Georg Ohm',
                'jawaban_b' => 'Nikola Tesla',
                'jawaban_c' => 'Thomas Edison',
                'jawaban_d' => 'Michael Faraday',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa nama lapisan keamanan yang digunakan dalam protokol HTTPS untuk enkripsi data?',
                'jawaban_a' => 'TLS (Transport Layer Security)',
                'jawaban_b' => 'SSL (Secure Sockets Layer)',
                'jawaban_c' => 'IPSec (Internet Protocol Security)',
                'jawaban_d' => 'VPN (Virtual Private Network)',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa nama metode penyimpanan data digital yang menggunakan properti magnetik bahan?',
                'jawaban_a' => 'Solid State Drive',
                'jawaban_b' => 'Magnetic Storage',
                'jawaban_c' => 'Flash Memory',
                'jawaban_d' => 'Optical Storage',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Siapa yang dikenal sebagai "Bapak Komputasi Modern"?',
                'jawaban_a' => 'Charles Babbage',
                'jawaban_b' => 'Alan Turing',
                'jawaban_c' => 'John von Neumann',
                'jawaban_d' => 'Ada Lovelace',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa nama fenomena alam yang memungkinkan serat optik mengirimkan data dengan kecepatan tinggi?',
                'jawaban_a' => 'Total Internal Reflection',
                'jawaban_b' => 'Refraction',
                'jawaban_c' => 'Diffraction',
                'jawaban_d' => 'Dispersion',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Bahasa pemrograman apa yang digunakan untuk menciptakan web browser pertama di dunia?',
                'jawaban_a' => 'HTML',
                'jawaban_b' => 'JavaScript',
                'jawaban_c' => 'C',
                'jawaban_d' => 'Python',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa istilah untuk perangkat lunak yang berbahaya dan dirancang untuk merusak, mengganggu, atau mencuri data?',
                'jawaban_a' => 'Malware',
                'jawaban_b' => 'Adware',
                'jawaban_c' => 'Spyware',
                'jawaban_d' => 'Ransomware',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa nama teknologi yang memungkinkan perangkat elektronik dihidupkan tanpa menggunakan kabel listrik?',
                'jawaban_a' => 'Wireless Charging',
                'jawaban_b' => 'Induction Technology',
                'jawaban_c' => 'Magnetic Resonance',
                'jawaban_d' => 'Solar Energy',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa nama metode analisis data yang digunakan dalam kecerdasan buatan untuk mengenali pola dalam data besar?',
                'jawaban_a' => 'Data Mining',
                'jawaban_b' => 'Deep Learning',
                'jawaban_c' => 'Big Data Analytics',
                'jawaban_d' => 'Predictive Analysis',
                'jawaban_benar' => 'B',
            ],
        ]);
    }
}
