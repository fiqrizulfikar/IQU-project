<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
        DB::table('quizsmaips')->insert([
            [
                'quiz' => 'Apa nama perang yang mengakhiri masa kekuasaan Napoleon Bonaparte?',
                'jawaban_a' => 'Perang Dunia I',
                'jawaban_b' => 'Perang Waterloo',
                'jawaban_c' => 'Perang Revolusi Prancis',
                'jawaban_d' => 'Perang Trafalgar',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama perjanjian yang mengakhiri Perang Dunia I?',
                'jawaban_a' => 'Perjanjian Versailles',
                'jawaban_b' => 'Perjanjian Geneva',
                'jawaban_c' => 'Perjanjian Tordesillas',
                'jawaban_d' => 'Perjanjian Utrecht',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Kerajaan Majapahit mencapai puncak kejayaan pada masa pemerintahan siapa?',
                'jawaban_a' => 'Raden Wijaya',
                'jawaban_b' => 'Hayam Wuruk',
                'jawaban_c' => 'Gajah Mada',
                'jawaban_d' => 'Brawijaya V',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama teori yang menyatakan bahwa benua-benua di bumi pernah menjadi satu massa daratan besar?',
                'jawaban_a' => 'Teori Big Bang',
                'jawaban_b' => 'Teori Pangea',
                'jawaban_c' => 'Teori Continental Drift',
                'jawaban_d' => 'Teori Tektonik Lempeng',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Sungai Nil mengalir melewati negara mana?',
                'jawaban_a' => 'Sudan',
                'jawaban_b' => 'Mesir',
                'jawaban_c' => 'Ethiopia',
                'jawaban_d' => 'Semua benar',
                'jawaban_benar' => 'D',
            ],
            [
                'quiz' => 'Apa nama proses dimana masyarakat berubah dari tradisional menjadi modern?',
                'jawaban_a' => 'Globalisasi',
                'jawaban_b' => 'Modernisasi',
                'jawaban_c' => 'Urbanisasi',
                'jawaban_d' => 'Migrasi',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama kerajaan Islam tertua di Indonesia?',
                'jawaban_a' => 'Demak',
                'jawaban_b' => 'Samudra Pasai',
                'jawaban_c' => 'Aceh Darussalam',
                'jawaban_d' => 'Mataram Islam',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama perang dingin antara Amerika Serikat dan Uni Soviet?',
                'jawaban_a' => 'Perang Vietnam',
                'jawaban_b' => 'Perang Dunia II',
                'jawaban_c' => 'Perang Dingin',
                'jawaban_d' => 'Perang Korea',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa nama kota kuno yang hilang dan ditemukan kembali oleh arkeolog di Peru?',
                'jawaban_a' => 'Petra',
                'jawaban_b' => 'Angkor Wat',
                'jawaban_c' => 'Machu Picchu',
                'jawaban_d' => 'Pompeii',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Siapa yang dikenal sebagai "Bapak Sosiologi"?',
                'jawaban_a' => 'Karl Marx',
                'jawaban_b' => 'Auguste Comte',
                'jawaban_c' => 'Max Weber',
                'jawaban_d' => 'Émile Durkheim',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama pelabuhan dagang terbesar di dunia pada masa Kesultanan Malaka?',
                'jawaban_a' => 'Pelabuhan Sunda Kelapa',
                'jawaban_b' => 'Pelabuhan Malaka',
                'jawaban_c' => 'Pelabuhan Gresik',
                'jawaban_d' => 'Pelabuhan Tuban',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama samudra yang terletak di sebelah timur Indonesia?',
                'jawaban_a' => 'Samudra Hindia',
                'jawaban_b' => 'Samudra Pasifik',
                'jawaban_c' => 'Samudra Atlantik',
                'jawaban_d' => 'Samudra Artik',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Apa nama sistem irigasi tradisional Bali yang terkenal?',
                'jawaban_a' => 'Subak',
                'jawaban_b' => 'Sawah Terasering',
                'jawaban_c' => 'Bali Aga',
                'jawaban_d' => 'Tenganan',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Apa nama gunung tertinggi di dunia?',
                'jawaban_a' => 'K2',
                'jawaban_b' => 'Kilimanjaro',
                'jawaban_c' => 'Everest',
                'jawaban_d' => 'Elbrus',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'Apa nama negara yang memiliki bendera dengan pola "Union Jack"?',
                'jawaban_a' => 'Australia',
                'jawaban_b' => 'Inggris',
                'jawaban_c' => 'Kanada',
                'jawaban_d' => 'Amerika Serikat',
                'jawaban_benar' => 'B',
            ],
        ]);      
    }
}
