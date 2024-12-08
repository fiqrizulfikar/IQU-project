<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>IQU.com</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/www.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/Sdipa.css') }}">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/SD/IPASD.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="logoiqu.com">
        <h1 class="sitename">sekolah dasar</i></h1>
      </a>
       
 <nav id="navmenu" class="navmenu">

<ul>
  <li><a href="/" class="active">Beranda</a></li>
  
   
    <li class="dropdown"><a href="IPAsd"><span>IPA</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a></li>
    <li class="dropdown"><a href="IPSsd"><span>IPS</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
    <li class="dropdown"><a href="MTKsd"><span>MTK</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
    <li class="dropdown"><a href="PKNsd"><span>PKN</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
    <li><a href="/aboutus">About US</a></li>
  </li>
<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

</nav> 
</section><!-- /About Section -->
</header>
    <body>
    <body>
        <div class="quiz-container">
            <!-- Judul Pertanyaan -->
            <h1 id="quiz-ips-title">Selamat Datang di Kuis SD IPA</h1>
        
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
    const questions = @json( $questions);

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
        window.location.href = "/sekolahdasar"; // Redirect ke halaman pilih kuis
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
  



    </body>



     
 


</header>

</body>
</html>

