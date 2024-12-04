<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizsmpipa', function (Blueprint $table) {
            $table->id(); // Membuat kolom id sebagai primary key
            $table->text('quiz'); // Kolom untuk pertanyaan
            $table->string('jawaban_a'); // Kolom untuk jawaban A
            $table->string('jawaban_b'); // Kolom untuk jawaban B
            $table->string('jawaban_c'); // Kolom untuk jawaban C
            $table->string('jawaban_d'); // Kolom untuk jawaban D
            $table->char('jawaban_benar', 1); // Kolom untuk jawaban benar (A/B/C/D)
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
