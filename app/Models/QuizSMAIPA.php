<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSMAIPA extends Model
{
    use HasFactory;

    protected $table = 'quizsmaipa'; // Nama tabel yang digunakan

    protected $fillable = [
        'quiz',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'jawaban_benar',
    ];
}
