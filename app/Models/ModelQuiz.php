<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelQuiz extends Model
{
    use HasFactory;

    protected $fillable = ['quiz', 'jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d', 'jawaban_benar'];

    // Menetapkan nama tabel secara dinamis
    protected $table;

    // Konstruktor untuk menerima nama tabel
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Tentukan tabel jika belum ada
        if (!$this->table) {
            $this->table = 'quizzes'; // Tabel default jika belum di-set
        }
    }

    // Fungsi untuk mengatur nama tabel
    public function setTableName($tableName)
    {
        $this->table = $tableName;
        return $this;
    }
}