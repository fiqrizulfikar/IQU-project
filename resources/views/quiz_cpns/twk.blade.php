<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis TWK</title>
    <link rel="stylesheet" href="{{ asset('assets/css/cpns.css') }}">
</head>
<body>
    <div class="quiz-container" id="tiu">
        <h2>Soal TWK (Tes Kewarganegaraan)</h2>
        <div id="timer">20:00</div>
    
        <div id="quiz-slides">
            @foreach ($soal_twk->chunk(5) as $index => $chunk)
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
            <p id="result-text"></p>
        </div>
        <div id="incorrect-answers" style="display:none;"></div>
    </div>
</body>
<script>
   document.addEventListener("DOMContentLoaded", function () {
    function setupQuiz(quizId, totalSlides, timerMinutes, quizType) {
        let currentSlide = 0;
        let score = 0;
        let userAnswers = [];
        let incorrectAnswers = []; // Menyimpan soal yang salah
        const slides = document.querySelectorAll(`#${quizId} .quiz-slide`);
        const nextButtons = document.querySelectorAll(`#${quizId} .next-slide`);
        const finishButton = document.querySelector(`#${quizId} #finish-quiz`);
        const startOverButton = document.querySelector(`#${quizId} #start-over-quiz`);
        const backToCategoryButton = document.querySelector(`#${quizId} #back-to-category`);
        const resultSection = document.querySelector(`#${quizId} #result-section`);
        const resultText = document.querySelector(`#${quizId} #result-text`);
        const resultIncorrect = document.querySelector(`#${quizId} #incorrect-answers`);
        const timerElement = document.querySelector(`#${quizId} #timer`);
        const progressBar = document.querySelector(`#${quizId} #progress-bar`);
        let timer = timerMinutes * 60; // Set timer sesuai menit yang diberikan

        // Timer
        function updateTimer() {
            const minutes = Math.floor(timer / 60);
            const seconds = timer % 60;
            timerElement.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
            if (timer <= 0) {
                alert("Waktu habis! Jawaban Anda akan disimpan.");
                finishButton.click();
            } else {
                timer--;
            }
        }
        setInterval(updateTimer, 1000); // Update timer setiap detik

        // Progress Bar Update
        function updateProgressBar(currentSlide, totalSlides) {
            const progress = (currentSlide / totalSlides) * 100;
            progressBar.style.width = progress + '%';
        }

        // Navigasi Slide
        function showSlide(index) {
            if (index >= totalSlides) return;
            slides[currentSlide].classList.remove("active");
            currentSlide = index;
            slides[currentSlide].classList.add("active");
            updateProgressBar(currentSlide + 1, totalSlides); // Update progress bar
            if (currentSlide === totalSlides - 1) {
                finishButton.style.display = 'block'; // Menampilkan tombol selesai pada slide terakhir
            }
        }

        nextButtons.forEach((button, index) => {
            button.addEventListener("click", function () {
                // Simpan jawaban sebelum melanjutkan ke soal berikutnya
                const selectedAnswer = document.querySelector(`input[name="answer${(currentSlide * 5) + (index + 1)}"]:checked`);
                if (selectedAnswer) {
                    userAnswers[(currentSlide * 5) + (index + 1) - 1] = selectedAnswer.value; // Correct indexing
                }
                showSlide(currentSlide + 1);
            });
        });

        // Tombol Selesai
        finishButton.addEventListener("click", function () {
            // Hitung nilai dan tampilkan soal yang salah
            userAnswers.forEach((answer, index) => {
                const correctAnswer = slides[index].querySelector('.correct-answer').value;
                if (answer === correctAnswer) {
                    score++;
                } else {
                    // Jika salah, tambahkan soal tersebut ke daftar soal yang salah
                    const soalText = slides[index].querySelector('.question').textContent;
                    incorrectAnswers.push({
                        soal: soalText,
                        jawaban: correctAnswer,
                        nomor: index + 1 // Menyimpan nomor soal untuk urutan yang benar
                    });
                }
            });

            // Urutkan soal yang salah berdasarkan nomor soal
            incorrectAnswers.sort((a, b) => a.nomor - b.nomor);

            resultText.textContent = `Kuis selesai! Nilai Anda adalah ${score} dari ${totalSlides}`;
            resultSection.style.display = 'block'; // Tampilkan hasil nilai
            finishButton.style.display = 'none'; // Sembunyikan tombol selesai
            startOverButton.style.display = 'block'; // Tampilkan tombol mulai ulang
            backToCategoryButton.style.display = 'block'; // Tampilkan tombol kembali ke kategori

            // Tampilkan soal yang salah
            if (incorrectAnswers.length > 0) {
                resultIncorrect.innerHTML = '<h3>Soal yang Salah:</h3>';
                incorrectAnswers.forEach(answer => {
                    resultIncorrect.innerHTML += `
                        <div class="incorrect-question">
                            <p><strong>Soal Nomor ${answer.nomor}:</strong> ${answer.soal}</p>
                            <p><strong>Jawaban yang Benar:</strong> ${answer.jawaban}</p>
                        </div>
                    `;
                });
            } else {
                resultIncorrect.innerHTML = '<p>Semua jawaban Anda benar! Selamat!</p>';
            }
        });

        // Tombol Mulai Ulang
        startOverButton.addEventListener("click", function () {
            // Reset nilai dan soal
            score = 0;
            userAnswers = [];
            incorrectAnswers = [];
            currentSlide = 0;
            slides.forEach(slide => slide.classList.remove("active"));
            slides[0].classList.add("active");
            finishButton.style.display = 'none';
            startOverButton.style.display = 'none';
            backToCategoryButton.style.display = 'none';
            resultSection.style.display = 'none';
            resultIncorrect.innerHTML = '';
            timer = timerMinutes * 60; // Reset timer
            updateProgressBar(currentSlide, totalSlides); // Reset progress bar
        });

        // Tombol Kembali ke Halaman Pilih Tes
        backToCategoryButton.addEventListener("click", function () {
            window.location.href = "//cpns-quiz/categories"; // Ganti dengan URL halaman pilih tes yang sesuai
        });
    }

    // Setup untuk TIU (20 menit)
    if (document.querySelector("#tiu")) {
        setupQuiz('tiu', 4, 20, 'TIU'); // TIU punya 20 soal, 4 slide (5 soal per slide)
    }

    // Setup untuk TWK (20 menit)
    if (document.querySelector("#twk")) {
        setupQuiz('twk', 4, 20, 'TWK'); // TWK punya 20 soal, 4 slide (5 soal per slide)
    }

    // Setup untuk TKP (20 menit)
    if (document.querySelector("#tkp")) {
        setupQuiz('tkp', 4, 20, 'TKP'); // TKP punya 20 soal, 4 slide (5 soal per slide)
    }
});
</script>
