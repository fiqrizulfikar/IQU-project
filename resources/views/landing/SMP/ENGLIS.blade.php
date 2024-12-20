<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis SMP IPA</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .quiz-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            transition: transform 0.2s ease-in-out;
        }

        .quiz-container:hover {
            transform: translateY(-5px);
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }

        .timer {
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 15px;
            color: #e74c3c;
        }

        form {
            margin-bottom: 20px;
        }

        .option {
            margin: 10px 0;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            background-color: #f7f9fc;
            border: 1px solid #dcdfe6;
            border-radius: 8px;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .option:hover {
            background-color: #eef5ff;
        }

        .option input {
            margin-right: 10px;
        }

        .option label {
            font-size: 1rem;
            color: #333;
        }

        .result {
            font-size: 1.2rem;
            font-weight: 500;
            color: #27ae60;
            margin-bottom: 20px;
        }

        button {
            padding: 12px 25px;
            font-size: 1rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        #startButton {
            background-color: #3498db;
            color: #fff;
        }

        #restartButton {
            background-color: #f1c40f;
            color: #fff;
        }

        #homeButton {
            background-color: #7f8c8d;
            color: #fff;
        }

        button:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="quiz-container">
        <!-- Judul Pertanyaan -->
        <h1 id="quiz-ips-title">Selamat Datang di Kuis SMP ENGLIS</h1>

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
        // Semua script Anda tetap sama tanpa perubahan berarti
        document.addEventListener('DOMContentLoaded', function () { 
            let currentQuestionIndex = 0;
            let correctAnswersCount = 0;
            const timeLimit = 15; // Waktu maksimal per pertanyaan (detik)
            let timerInterval;
            const questions = @json($quizsmpenglis);

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

            startButton.addEventListener('click', function () {
                quizForm.style.display = 'block';
                startButton.style.display = 'none';
                restartButton.style.display = 'none';
                backButton.style.display = 'none';
                loadQuestion(currentQuestionIndex);
            });

            restartButton.addEventListener('click', resetQuiz);

            backButton.addEventListener('click', function () {
                window.location.href = "/Smp";
            });

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

                    restartButton.style.display = 'block';
                    backButton.style.display = 'block';
                }
            }

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

            quizForm.style.display = 'none';
            restartButton.style.display = 'none';
            backButton.style.display = 'none';
        });
    </script>
</body>
</html>
