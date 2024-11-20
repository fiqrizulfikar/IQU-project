<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Ekonomi</title>
    <link rel="stylesheet" href="{{ asset('assets/css/ekonomi.css') }}">
</head>
<body>
    <body>
        <div class="quiz-container">
            <h1 id="question-title"></h1>
            <form id="quizForm">
                <div class="option">
                    <input type="radio" id="optionA" name="answer" value="A">
                    <label for="optionA" id="labelA"></label>
                </div>
                <div class="option">
                    <input type="radio" id="optionB" name="answer" value="B">
                    <label for="optionB" id="labelB"></label>
                </div>
                <div class="option">
                    <input type="radio" id="optionC" name="answer" value="C">
                    <label for="optionC" id="labelC"></label>
                </div>
                <div class="option">
                    <input type="radio" id="optionD" name="answer" value="D">
                    <label for="optionD" id="labelD"></label>
                </div>
                <br>
                <button id="restartButton" style="display: none;">Mulai Lagi</button>
                        <!-- Tombol Kembali ke halaman rumah -->
                <button id="homeButton" style="display: none;">Kembali ke Halaman Rumah</button>
            </form>
            <div id="result" class="result"></div>
            <div id="timer" class="timer"></div>
        </div>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    let currentQuestionIndex = 0;
    let correctAnswersCount = 0;
    const timeLimit = 15; // Waktu maksimal per pertanyaan
    let timerInterval;

    const questions = @json($quizPolitik); // Data dari backend Laravel

    const quizContainer = document.querySelector('.quiz-container');
    const quizPolitikTitle = document.getElementById('quiz-politik-title');
    const labelA = document.getElementById('labelA');
    const labelB = document.getElementById('labelB');
    const labelC = document.getElementById('labelC');
    const labelD = document.getElementById('labelD');
    const resultContainer = document.getElementById('result');
    const quizForm = document.getElementById('quizForm');

    // Elemen timer
    const timerElement = document.createElement('div');
    timerElement.id = 'timer';
    quizContainer.prepend(timerElement);

    // Tombol Mulai Kuis
    const startButton = document.createElement('button');
    startButton.textContent = 'Mulai Kuis';
    startButton.id = 'startButton';
    startButton.style.display = 'block'; // Tampilkan tombol saat halaman pertama kali dimuat
    quizContainer.prepend(startButton);

    // Event tombol mulai kuis
    startButton.addEventListener('click', function () {
        console.log('Tombol "Mulai Kuis" diklik'); // Debug log
        quizForm.style.display = 'block'; // Tampilkan form kuis
        startButton.style.display = 'none'; // Sembunyikan tombol mulai
        loadQuestion(currentQuestionIndex); // Muat pertanyaan pertama
    });

    // Fungsi untuk memulai timer
    function startTimer() {
        let timeLeft = timeLimit;
        timerElement.textContent = `Waktu tersisa: ${timeLeft} detik`;

        timerInterval = setInterval(() => {
            timeLeft--;
            timerElement.textContent = `Waktu tersisa: ${timeLeft} detik`;

            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                resultContainer.textContent = `Waktu habis! Jawaban yang benar adalah: ${questions[currentQuestionIndex].jawaban_benar}`;
                setTimeout(() => {
                    currentQuestionIndex++;
                    loadQuestion(currentQuestionIndex);
                }, 2000); // Tunggu 2 detik sebelum memuat pertanyaan berikutnya
            }
        }, 1000);
    }

    // Fungsi untuk memuat pertanyaan
    function loadQuestion(index) {
        if (index < questions.length) {
            console.log(`Memuat pertanyaan ke-${index + 1}`); // Debug log
            clearInterval(timerInterval); // Hentikan timer sebelumnya
            startTimer(); // Mulai timer baru

            const question = questions[index];
            quizPolitikTitle.textContent = question.quiz;
            labelA.textContent = question.jawaban_a;
            labelB.textContent = question.jawaban_b;
            labelC.textContent = question.jawaban_c;
            labelD.textContent = question.jawaban_d;

            document.querySelectorAll('.option input').forEach(input => (input.checked = false));
            resultContainer.textContent = '';
        } else {
            // Selesai kuis
            quizPolitikTitle.textContent = `Kuis selesai! Anda menjawab ${correctAnswersCount} dari ${questions.length} pertanyaan dengan benar.`;
            quizForm.style.display = 'none';
            timerElement.style.display = 'none';
        }
    }

    // Event untuk memilih jawaban
    document.querySelectorAll('input[name="answer"]').forEach(input => {
        input.addEventListener('change', function (event) {
            clearInterval(timerInterval); // Hentikan timer

            const selectedOption = event.target.value;
            const correctAnswer = questions[currentQuestionIndex].jawaban_benar;

            if (selectedOption === correctAnswer) {
                resultContainer.textContent = 'Jawaban Anda benar!';
                correctAnswersCount++;
            } else {
                resultContainer.textContent = `Jawaban Anda salah. Jawaban yang benar adalah: ${correctAnswer}`;
            }

            setTimeout(() => {
                currentQuestionIndex++;
                loadQuestion(currentQuestionIndex);
            }, 2000); // Tunggu 2 detik sebelum memuat pertanyaan berikutnya
        });
    });

    // Awal form tersembunyi
    quizForm.style.display = 'none';
});

    </script>
    
</body>
</html>
