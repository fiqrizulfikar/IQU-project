<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis SMA PKN</title>
    <link rel="stylesheet" href="{{ asset('assets/css/SMA.css') }}">
</head>
<body>
    <body>
        <div class="quiz-container">
            <!-- Judul Pertanyaan -->
            <h1 id="quiz-ips-title">Selamat Datang di Kuis SMA PKN</h1>
        
            <!-- Timer -->
            <div id="timer" class="timer"></div>
        
            <!-- Form Kuis -->
            <form id="quizForm" style="display: none;">
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
            </form>
        
            <!-- Hasil -->
            <div id="result" class="result"></div>
        
            <!-- Tombol Mulai -->
            <button id="startButton">Mulai Kuis</button>
        
            <!-- Tombol Mulai Ulang -->
            <button id="restartButton" style="display: none;">Mulai Ulang</button>
        
            <!-- Tombol Kembali -->
            <button id="homeButton" style="display: none;">Kembali ke Pilih Kuis</button>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () { 
    let currentQuestionIndex = 0;
    let correctAnswersCount = 0;
    const timeLimit = 15; // Waktu maksimal per pertanyaan (detik)
    let timerInterval;
    const questions = @json($quizsmapkn);

    // Ambil elemen-elemen dari DOM
    const quizContainer = document.querySelector('.quiz-container');
    const quizTitle = document.getElementById('quiz-ips-title');
    const labelA = document.getElementById('labelA');
    const labelB = document.getElementById('labelB');
    const labelC = document.getElementById('labelC');
    const labelD = document.getElementById('labelD');
    const resultContainer = document.getElementById('result');
    const quizForm = document.getElementById('quizForm');
    const timerElement = document.getElementById('timer');
    const startButton = document.getElementById('startButton');
    const restartButton = document.getElementById('restartButton');
    const backButton = document.getElementById('homeButton');

    // Event tombol mulai kuis
    startButton.addEventListener('click', function () {
        quizForm.style.display = 'block';
        startButton.style.display = 'none';
        restartButton.style.display = 'none';
        backButton.style.display = 'none';
        loadQuestion(currentQuestionIndex);
    });

    // Event tombol mulai ulang
    restartButton.addEventListener('click', resetQuiz);

    // Event tombol kembali
    backButton.addEventListener('click', function () {
        window.location.href = "/SMA"; // Redirect ke halaman pilih kuis
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
                }, 2000);
            }
        }, 1000);
    }

    // Fungsi untuk memuat pertanyaan
    function loadQuestion(index) {
        if (index < questions.length) {
            clearInterval(timerInterval);
            startTimer();

            const question = questions[index];
            quizTitle.textContent = question.quiz;
            labelA.textContent = question.jawaban_a;
            labelB.textContent = question.jawaban_b;
            labelC.textContent = question.jawaban_c;
            labelD.textContent = question.jawaban_d;

            document.querySelectorAll('.option input').forEach(input => (input.checked = false));
            resultContainer.textContent = '';
        } else {
            clearInterval(timerInterval);
            quizTitle.textContent = `Kuis selesai! Anda menjawab ${correctAnswersCount} dari ${questions.length} pertanyaan dengan benar.`;
            quizForm.style.display = 'none';
            timerElement.style.display = 'none';

            // Tampilkan tombol kembali dan mulai ulang
            restartButton.style.display = 'block';
            backButton.style.display = 'block';
        }
    }

    // Fungsi untuk memilih jawaban
    document.querySelectorAll('input[name="answer"]').forEach(input => {
        input.addEventListener('change', function (event) {
            clearInterval(timerInterval);

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
            }, 2000);
        });
    });

    // Fungsi untuk mereset kuis
    function resetQuiz() {
        currentQuestionIndex = 0;
        correctAnswersCount = 0;
        timerElement.style.display = 'block';
        resultContainer.textContent = '';
        startButton.style.display = 'none';
        restartButton.style.display = 'none';
        backButton.style.display = 'none';
        quizForm.style.display = 'block';
        loadQuestion(currentQuestionIndex);
    }

    // Awal form tersembunyi
    quizForm.style.display = 'none';
    restartButton.style.display = 'none';
    backButton.style.display = 'none';
});


        </script>
