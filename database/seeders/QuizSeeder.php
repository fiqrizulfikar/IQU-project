<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
<<<<<<< HEAD
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
=======
        DB::table('quizsmpenglis')->insert([
            [
                'quiz' => 'What is the main idea of the passage?',
                'jawaban_a' => 'To inform the reader about a specific topic',
                'jawaban_b' => 'To entertain the reader with a story',
                'jawaban_c' => 'To persuade the reader to take action',
                'jawaban_d' => 'To describe a personal experience',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Which word is a synonym for "happy"?',
                'jawaban_a' => 'Sad',
                'jawaban_b' => 'Joyful',
                'jawaban_c' => 'Angry',
                'jawaban_d' => 'Bored',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Choose the correct form of the verb: "She ____ to the store yesterday."',
                'jawaban_a' => 'Go',
                'jawaban_b' => 'Goes',
                'jawaban_c' => 'Went',
                'jawaban_d' => 'Going',
                'jawaban_benar' => 'C',
            ],
            [
                'quiz' => 'What does the word "benevolent" mean?',
                'jawaban_a' => 'Kind and generous',
                'jawaban_b' => 'Evil and malicious',
                'jawaban_c' => 'Indifferent and apathetic',
                'jawaban_d' => 'Selfish and greedy',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Which sentence is grammatically correct?',
                'jawaban_a' => 'He don’t like to play soccer.',
                'jawaban_b' => 'She doesn’t likes to read books.',
                'jawaban_c' => 'They doesn’t go to school on weekends.',
                'jawaban_d' => 'I don’t understand the lesson.',
                'jawaban_benar' => 'D',
            ],
            [
                'quiz' => 'What is the opposite of "difficult"?',
                'jawaban_a' => 'Hard',
                'jawaban_b' => 'Easy',
                'jawaban_c' => 'Complicated',
                'jawaban_d' => 'Challenging',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Fill in the blank: "If I ____ enough money, I would travel the world."',
                'jawaban_a' => 'Have',
                'jawaban_b' => 'Had',
                'jawaban_c' => 'Will have',
                'jawaban_d' => 'Having',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'What is the meaning of the idiom "break the ice"?',
                'jawaban_a' => 'To start a conversation in a social setting',
                'jawaban_b' => 'To make a situation worse',
                'jawaban_c' => 'To end a relationship',
                'jawaban_d' => 'To create a barrier',
                'jawaban_benar' => 'A',
            ],
            [
                'quiz' => 'Which of the following sentences is in the passive voice?',
                'jawaban_a' => 'The cat chased the mouse.',
                'jawaban_b' => 'The mouse was chased by the cat.',
                'jawaban_c' => 'The dog barks loudly.',
                'jawaban_d' => 'She writes a letter.',
                'jawaban_benar' => 'B',
            ],
            [
                'quiz' => 'Choose the correct preposition: "She is interested ____ learning new languages."',
                'jawaban_a' => 'In',
                'jawaban_b' => 'On',
                'jawaban_c' => 'At',
                'jawaban_d' => 'For',
                'jawaban_benar' => 'A',
            ],
>>>>>>> 40656c84fa901afe240c03728b734ef84c796351
        ]);      
    }
}