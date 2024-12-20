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
        Schema::create('quiztesiq', function (Blueprint $table) {
            $table->id();
            $table->text('quiz'); // Kolom untuk menyimpan pertanyaan
            $table->string('jawaban_a'); // Opsi jawaban A
            $table->string('jawaban_b'); // Opsi jawaban B
            $table->string('jawaban_c'); // Opsi jawaban C
            $table->string('jawaban_d'); // Opsi jawaban d
            $table->char('jawaban_benar', 1); // Kolom untuk jawaban yang benar, A, B, atau C
            $table->timestamps();
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiztesiq');
    }
};
