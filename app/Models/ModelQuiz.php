<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelQuiz extends Model
{
    use HasFactory;

    // Properti yang dapat diisi
    protected $fillable = ['quiz', 'jawaban_a', 'jawaban_b', 'jawaban_c', 'jawaban_d', 'jawaban_benar'];

    // Menetapkan nama tabel secara dinamis
    protected $table;

    /**
     * Fungsi untuk menetapkan nama tabel secara dinamis
     * 
     * @param string $tableName
     * @return $this
     */
    public function setTableName($tableName)
    {
        // Validasi nama tabel jika perlu
        if (!in_array($tableName, [
            'quizsmatik', 'quizsmaipa', 'quizsmaips', 'quizsmapkn',
            'quizumum', 'quizpolitik', 'quizteknologi', 'quizzes',
            'quiztiu', 'quiztwk', 'quiztkp'
        ])) {
            throw new \Exception("Nama tabel tidak valid: $tableName");
        }

        $this->table = $tableName;
        return $this;
    }

    /**
     * Override metode `newQuery` untuk mendukung nama tabel dinamis
     */
    public function newQuery()
    {
        if ($this->table) {
            return parent::newQuery()->from($this->table);
        }

        return parent::newQuery();
    }
}
