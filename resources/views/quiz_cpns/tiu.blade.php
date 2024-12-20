<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis TIU</title>
    <link rel="stylesheet" href="{{ asset('assets/css/cpns.css') }}">
</head>
<body>
    <div class="quiz-container" id="tiu">
        <h2>Soal TIU (Tes Intelegensia Umum)</h2>
        <div id="timer">20:00</div>
    
        <div id="quiz-slides">
            @foreach ($soal_tiu->chunk(5) as $index => $chunk)
            <div class="quiz-slide @if($index == 0) active @endif">
                @foreach ($chunk as $i => $soal)
                <div class="question">
                    {{ ($index * 5) + $i + 1 }}. {{ $soal->quiz }}
                </div>
                <div class="answers">
                    <input type="radio" name="answer{{ $soal->id }}" value="A"> A. {{ $soal->jawaban_a }}<br>
                    <input type="radio" name="answer{{ $soal->id }}" value="B"> B. {{ $soal->jawaban_b }}<br>
                    <input type="radio" name="answer{{ $soal->id }}" value="C"> C. {{ $soal->jawaban_c }}<br>
                    <input type="radio" name="answer{{ $soal->id }}" value="D"> D. {{ $soal->jawaban_d }}
                </div>
                <input type="hidden" class="correct-answer" value="{{ $soal->jawaban_benar }}">
                @endforeach
                <button class="next-slide" data-index="{{ $index }}">Soal Berikutnya</button>
            </div>
            @endforeach
        </div>
    
        <button id="finish-quiz" class="btn btn-success mt-4" style="display:none;">Selesai</button>
        <button id="start-over-quiz" class="btn btn-primary mt-4" style="display:none;">Mulai Ulang</button>
        <button id="back-to-category" class="btn btn-secondary mt-4" style="display:none;">Kembali ke Pilih Tes</button>
    
        <!-- Hasil Nilai -->
        <div id="result-section" style="display:none;">
            <h2>Hasil Nilai</h2>
            <p id="result-score"></p>
        </div>
        <div class="progress-bar-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const timerElement = document.querySelector('#timer');
        const slides = document.querySelectorAll('.quiz-slide');
        const nextButtons = document.querySelectorAll('.next-slide');
        const finishButton = document.querySelector('#finish-quiz');
        const startOverButton = document.querySelector('#start-over-quiz');
        const backToCategoryButton = document.querySelector('#back-to-category');
        const resultSection = document.querySelector('#result-section');
        const resultText = document.querySelector('#result-score');
        const progressBar = document.querySelector('#progress-bar');
        const timerMinutes = 20; // Set timer duration in minutes
        let currentSlide = 0;
        let score = 0;
        let userAnswers = [];
        let timer = timerMinutes * 60;

        // Timer function
        function updateTimer() {
            const minutes = Math.floor(timer / 60);
            const seconds = timer % 60;
            timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            if (timer <= 0) {
                clearInterval(timerInterval); // Stop timer when it reaches 0
                alert("Waktu habis! Jawaban Anda akan disimpan.");
                finishButton.click();
            } else {
                timer--;
            }
        }

        let timerInterval = setInterval(updateTimer, 1000);

        // Progress bar function
        function updateProgressBar(currentSlide, totalSlides) {
            const progress = (currentSlide / totalSlides) * 100;
            progressBar.style.width = progress + '%';
        }

        // Show the next slide
        function showSlide(index) {
            if (index >= slides.length) return; // Don't show slide beyond the last one
            slides[currentSlide].classList.remove('active');
            currentSlide = index;
            slides[currentSlide].classList.add('active');
            updateProgressBar(currentSlide + 1, slides.length);

            if (currentSlide === slides.length - 1) {
                nextButtons[currentSlide].style.display = 'none'; // Hide the next button
                finishButton.style.display = 'block'; // Show finish button
                backToCategoryButton.style.display = 'block'; // Show back to category button
            }
        }

        // Handle next slide button click
        nextButtons.forEach((button, index) => {
            button.addEventListener("click", function () {
                const selectedAnswer = document.querySelector(`input[name="answer{{ $soal->id }}"]:checked`);
                if (selectedAnswer) {
                    userAnswers[index] = selectedAnswer.value;
                }
                showSlide(index + 1); // Move to the next slide
            });
        });

        // Finish quiz
        finishButton.addEventListener("click", function () {
            userAnswers.forEach((answer, index) => {
                const correctAnswer = slides[index].querySelector('.correct-answer').value;
                if (answer === correctAnswer) {
                    score++;
                }
            });

            resultText.textContent = `Kuis selesai! Nilai Anda adalah ${score} dari ${slides.length}`;
            resultSection.style.display = 'block';
            finishButton.style.display = 'none';
            startOverButton.style.display = 'block';
            backToCategoryButton.style.display = 'none'; // Hide back to category button after finish
        });

        // Start over button
        startOverButton.addEventListener("click", function () {
            score = 0;
            userAnswers = [];
            currentSlide = 0;
            slides.forEach(slide => slide.classList.remove("active"));
            slides[0].classList.add("active");
            finishButton.style.display = 'none';
            startOverButton.style.display = 'none';
            backToCategoryButton.style.display = 'none';
            resultSection.style.display = 'none';
            resultText.innerHTML = '';
            timer = timerMinutes * 60;
            clearInterval(timerInterval); // Clear previous timer
            timerInterval = setInterval(updateTimer, 1000); // Restart timer
            updateProgressBar(currentSlide, slides.length);
        });

        // Back to category button
        backToCategoryButton.addEventListener("click", function () {
            window.location.href = "/cpns-quiz/categories"; // Adjust the URL to your category page
        });
    });
</script>
</html>
