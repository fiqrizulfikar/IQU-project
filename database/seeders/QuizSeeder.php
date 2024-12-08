<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
    {
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
        ]);      
    }
}