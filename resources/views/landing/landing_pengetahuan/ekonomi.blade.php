<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Ekonomi</title>
    <link rel="stylesheet" href="{{ asset('assets/css/ekonomi.css') }}">
</head>
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
        </form>
        <div id="result" class="result"></div>
        <div id="timer" class="timer"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let currentQuestionIndex = 0;
            let correctAnswersCount = 0;
            const timeLimit = 15; // Batas waktu dalam detik untuk setiap pertanyaan
            let timerInterval;
            const questions = @json($questions);
    
            const quizContainer = document.querySelector('.quiz-container');
            const questionTitle = document.getElementById('question-title');
            const labelA = document.getElementById('labelA');
            const labelB = document.getElementById('labelB');
            const labelC = document.getElementById('labelC');
            const labelD = document.getElementById('labelD');
            const resultContainer = document.getElementById('result');
            const quizForm = document.getElementById('quizForm');
    
            // Elemen Timer
            const timerElement = document.createElement('div');
            timerElement.id = 'timer';
            quizContainer.prepend(timerElement);
    
            // Tombol Mulai
            const startButton = document.createElement('button');
            startButton.textContent = 'Mulai Kuis';
            startButton.id = 'startButton';
            startButton.addEventListener('click', function () {
                quizForm.style.display = 'block';
                startButton.style.display = 'none';
                loadQuestion(currentQuestionIndex);
            });
            quizContainer.prepend(startButton);
    
            // Tombol untuk kembali ke halaman rumah
            const homeButton = document.createElement('button');
            homeButton.textContent = 'Kembali ke Halaman Rumah';
            homeButton.style.display = 'none';
            homeButton.addEventListener('click', function () {
                window.location.href = '/pengetahuan'; // Ubah sesuai dengan URL halaman rumah
            });
            quizContainer.appendChild(homeButton);
    
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
    
            function loadQuestion(index) {
                if (index < questions.length) {
                    clearInterval(timerInterval);
                    startTimer();
    
                    const question = questions[index];
                    questionTitle.textContent = question.quiz;
                    labelA.textContent = question.jawaban_a;
                    labelB.textContent = question.jawaban_b;
                    labelC.textContent = question.jawaban_c;
                    labelD.textContent = question.jawaban_d;
                    document.querySelectorAll('.option input').forEach(input => input.checked = false);
                    resultContainer.textContent = '';
                } else {
                    questionTitle.textContent = `Kuis selesai! Anda menjawab ${correctAnswersCount} dari ${questions.length} pertanyaan dengan benar.`;
                    quizForm.style.display = 'none';
                    timerElement.style.display = 'none';
                    homeButton.style.display = 'inline-block';
                }
            }
    
            // Fungsi untuk menangani pilihan jawaban
            function handleAnswerSelection(event) {
                clearInterval(timerInterval);
                const selectedOption = event.target;
                const correctAnswer = questions[currentQuestionIndex].jawaban_benar;
    
                if (selectedOption) {
                    if (selectedOption.value === correctAnswer) {
                        resultContainer.textContent = 'Jawaban Anda benar!';
                        correctAnswersCount++;
                    } else {
                        resultContainer.textContent = `Jawaban Anda salah. Jawaban yang benar adalah: ${correctAnswer}`;
                    }
    
                    setTimeout(() => {
                        currentQuestionIndex++;
                        loadQuestion(currentQuestionIndex);
                    }, 2000);
                }
            }
    
            // Event listener untuk pilihan jawaban
            document.querySelectorAll('input[name="answer"]').forEach(input => {
                input.addEventListener('change', handleAnswerSelection);
            });
    
            // Awal: Sembunyikan form quiz
            quizForm.style.display = 'none';
        });
    </script>
    
</body>
</html>
