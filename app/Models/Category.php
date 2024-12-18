<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

        protected $table = 'categories'; // Sesuaikan dengan nama tabel kategori
    

    // Jika Anda ingin mengambil soal berdasarkan kategori, tambahkan relasi jika diperlukan
    // Misalnya, jika suatu kategori memiliki banyak soal:
    // public function quizzes()
    // {
    //     return $this->hasMany(Quiz::class);
    // }
}

