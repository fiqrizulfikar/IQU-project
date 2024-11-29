<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'SMA TIK', 'table_name' => 'quizsmatik'],
            ['name' => 'SMA IPA', 'table_name' => 'quizsmaipa'],
            ['name' => 'SMA IPS', 'table_name' => 'quizsmaips'],
            ['name' => 'SMA IPS', 'table_name' => 'quizsmapkn'],
            ['name' => 'Pengetahuan Umum', 'table_name' => 'quizumum'],
            ['name' => 'Pengetahuan Politik', 'table_name' => '_quiz_politik'],
            ['name' => 'Pengetahuan Ekonomi', 'table_name' => 'quizzes'],
            ['name' => 'Pengetahuan Teknologi', 'table_name' => 'quizteknologi'],

        ]);
    }
}
