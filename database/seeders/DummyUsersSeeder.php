<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [ 
                'name'=>'sang operator',
                'email'=>'operator@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'sang keuangan',
                'email'=>'keuangan@gmail.com',
                'role'=>'keuangan',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'sang marketing',
                'email'=>'marketing@gmail.com',
                'role'=>'marketing',
                'password'=>bcrypt('123456')
            ],
         ];


         foreach ($userData as $key => $val){
            User::create($val);
         }
    }
}
