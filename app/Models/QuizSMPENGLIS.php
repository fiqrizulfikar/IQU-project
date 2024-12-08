<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSMPENGLIS extends Model
{
    use HasFactory;

    protected $table = 'quizsmpenglis'; // Nama tabel yang digunakan

    protected $fillable = [
        'quiz',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_benar',
    ];
}
