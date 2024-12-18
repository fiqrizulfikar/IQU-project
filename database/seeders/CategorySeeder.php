<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'SD IPS', 'table_name' => 'quizsdips'],
            ['name' => 'SD MTK', 'table_name' => 'quizsdmtk'],
            ['name' => 'SD PKN', 'table_name' => 'quizsdpkn'],
            ['name' => 'SD IPA', 'table_name' => 'quiz_s_d_ipa'],
            ['name' => 'SMP PKN', 'table_name' => 'quizsmppkn'],
            ['name' => 'SMP IPA', 'table_name' => 'quizsmpipa'],
            ['name' => 'SMP IPS', 'table_name' => 'quizsmpips'],
            ['name' => 'SMP MTK', 'table_name' => 'quizsmpmtk'],
            ['name' => 'SMP English', 'table_name' => 'quizsmpenglis'],
            ['name' => 'SMA TIK', 'table_name' => 'quizsmatik'],
            ['name' => 'SMA IPA', 'table_name' => 'quizsmaipa'],
            ['name' => 'SMA IPS', 'table_name' => 'quizsmaips'],
            ['name' => 'SMA IPS', 'table_name' => 'quizsmapkn'],
            ['name' => 'Pengetahuan Umum', 'table_name' => 'quizumum'],
            ['name' => 'Pengetahuan Politik', 'table_name' => '_quiz_politik'],
            ['name' => 'Pengetahuan Ekonomi', 'table_name' => 'quizzes'],
            ['name' => 'Pengetahuan Teknologi', 'table_name' => 'quizteknologi'],
            ['name' => 'Soal CPNS TIU', 'table_name' => 'quiztiu'],
            ['name' => 'Soal CPNS TWK', 'table_name' => 'quiztwk'],
            ['name' => 'Soal CPNS TKP', 'table_name' => 'quiztkp'],
            ['name' => 'Tes Iq', 'table_name' => 'quiztesiq'],
        ]);
    }

}
