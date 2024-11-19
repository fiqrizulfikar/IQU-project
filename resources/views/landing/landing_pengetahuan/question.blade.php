<form action="/questions" method="POST">
    @csrf
    <label for="question_text">Pertanyaan:</label>
    <input type="text" name="question_text" required>

    <label for="option_a">Opsi A:</label>
    <input type="text" name="option_a" required>

    <label for="option_b">Opsi B:</label>
    <input type="text" name="option_b" required>

    <label for="option_c">Opsi C:</label>
    <input type="text" name="option_c" required>

    <label for="option_d">Opsi D:</label>
    <input type="text" name="option_d" required>

    <label for="correct_answer">Jawaban Benar:</label>
    <input type="text" name="correct_answer" required>

    <button type="submit">Simpan Pertanyaan</button>
</form>
