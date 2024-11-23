<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizsmaipa')->insert([
            [
                'quiz' => 'Apa unsur kimia yang memiliki simbol "O"?',
                'jawaban_a' => 'Oksigen',
                'jawaban_b' => 'Osmium',
                'jawaban_c' => 'Oganesson',
                'jawaban_d' => 'Oksalat',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Planet mana yang dikenal sebagai "Planet Merah"?',
                'jawaban_a' => 'Merkurius',
                'jawaban_b' => 'Venus',
                'jawaban_c' => 'Mars',
                'jawaban_d' => 'Jupiter',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Bagian mata manusia yang berfungsi mengatur jumlah cahaya yang masuk disebut?',
                'jawaban_a' => 'Kornea',
                'jawaban_b' => 'Iris',
                'jawaban_c' => 'Retina',
                'jawaban_d' => 'Lensa',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama partikel subatomik yang bermuatan negatif?',
                'jawaban_a' => 'Proton',
                'jawaban_b' => 'Neutron',
                'jawaban_c' => 'Elektron',
                'jawaban_d' => 'Ion',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Hewan mana yang termasuk mamalia laut?',
                'jawaban_a' => 'Hiu',
                'jawaban_b' => 'Lumba-lumba',
                'jawaban_c' => 'Kuda Laut',
                'jawaban_d' => 'Ubur-ubur',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama gas yang paling banyak di atmosfer bumi?',
                'jawaban_a' => 'Oksigen',
                'jawaban_b' => 'Karbon dioksida',
                'jawaban_c' => 'Nitrogen',
                'jawaban_d' => 'Hidrogen',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa alat yang digunakan untuk mengukur tekanan udara?',
                'jawaban_a' => 'Thermometer',
                'jawaban_b' => 'Barometer',
                'jawaban_c' => 'Hygrometer',
                'jawaban_d' => 'Anemometer',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Dalam tabel periodik, apa golongan unsur yang sangat reaktif?',
                'jawaban_a' => 'Gas Mulia',
                'jawaban_b' => 'Logam Alkali',
                'jawaban_c' => 'Logam Transisi',
                'jawaban_d' => 'Halogen',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama proses yang mengubah air menjadi uap air?',
                'jawaban_a' => 'Kondensasi',
                'jawaban_b' => 'Evaporasi',
                'jawaban_c' => 'Presipitasi',
                'jawaban_d' => 'Sublimasi',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama unit SI untuk arus listrik?',
                'jawaban_a' => 'Watt',
                'jawaban_b' => 'Volt',
                'jawaban_c' => 'Ampere',
                'jawaban_d' => 'Ohm',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Tumbuhan apa yang dikenal sebagai "paku" dalam dunia biologi?',
                'jawaban_a' => 'Bryophyta',
                'jawaban_b' => 'Pteridophyta',
                'jawaban_c' => 'Angiospermae',
                'jawaban_d' => 'Gymnospermae',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama planet terbesar di tata surya?',
                'jawaban_a' => 'Saturnus',
                'jawaban_b' => 'Jupiter',
                'jawaban_c' => 'Uranus',
                'jawaban_d' => 'Neptunus',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Hewan apa yang termasuk dalam kelas reptil?',
                'jawaban_a' => 'Katak',
                'jawaban_b' => 'Salamander',
                'jawaban_c' => 'Buaya',
                'jawaban_d' => 'Ikan Pari',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa nama zat dalam tumbuhan yang berfungsi menangkap energi matahari?',
                'jawaban_a' => 'Kloroplas',
                'jawaban_b' => 'Klorofil',
                'jawaban_c' => 'Xantofil',
                'jawaban_d' => 'Antosianin',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama proses penguraian molekul dengan bantuan air?',
                'jawaban_a' => 'Hidrolisis',
                'jawaban_b' => 'Dehidrasi',
                'jawaban_c' => 'Polimerisasi',
                'jawaban_d' => 'Sublimasi',
                'jawaban_benar' => 'A',
            ],
        ]);      
    }
}
