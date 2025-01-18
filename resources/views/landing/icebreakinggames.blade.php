<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tebak Gambar Lucu</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2a83f1;
            text-align: center;
        }

        header {
            background-color: #090089;
            color: rgb(255, 255, 255);
            padding: 20px;
            font-size: 36px;
            font-family: 'Lobster', cursive;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            letter-spacing: 2px;
        }

        #game-container {
            margin: 20px auto;
            max-width: 700px;
            padding: 20px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        #game-container img {
            width: 100%;
            max-height: 300px;
            object-fit: contain;
            margin-bottom: 20px;
            border-radius: 10px;
        }

                .button {
            display: inline-block;
            width: 40%;
            margin: 10px;
            padding: 12px;
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Tebal teks */
            color: #fff;
            background-color: #FFC107;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #7b00be;
        }

        .result {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }

        .correct {
            color: green;
        }

        .wrong {
            color: red;
        }

        .correct-image {
            margin-top: 20px;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        #next-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #04a8b0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: none;
        }

        #next-button:hover {
            background-color: #005897;
        }
    </style>
</head>
<body>
    <header>
        Tebak Gambar Lucu
    </header>

    <div id="game-container">
        <img id="funny-image" src="assets/img/tebak gambar/1.jpeg" alt="Guess the image">

        <div id="options-container"></div>

        <div id="result" class="result"></div>
        <img id="correct-image" class="correct-image" src="" alt="" style="display: none;">

        <button id="next-button" onclick="nextQuestion()">Next</button>
    </div>

    <script>
        const questions = [
            {
                image: "assets/img/tebak gambar/1.jpeg",
                options: ["Berang-berang", "ayam", "Singa", "Kucing"],
                correctAnswer: "ayam",
                correctImage: "assets/img/tebak gambar/1..jpeg",
            },
            {
                image: "assets/img/tebak gambar/2.jpeg",
                options: ["gajah", "Kelinci", "bebek", "Panda"],
                correctAnswer: "bebek",
                correctImage: "assets/img/tebak gambar/2..jpeg",
            },
            {
                image: "assets/img/tebak gambar/3.jpg",
                options: ["zebra", "Kucing", "gorilla", "Bebek"],
                correctAnswer: "gorilla",
                correctImage: "assets/img/tebak gambar/3..jpg",
            },
            {
                image: "assets/img/tebak gambar/4.jpg",
                options: ["marmut", "singa", "Zebra", "Koala"],
                correctAnswer: "marmut",
                correctImage: "assets/img/tebak gambar/4..jpg",
            },
            {
                image: "assets/img/tebak gambar/5.jpeg",
                options: ["Bebek", "Burung", "gorilla", "anjing"],
                correctAnswer: "anjing",
                correctImage: "assets/img/tebak gambar/5..jpeg",
            },
            {
                image: "assets/img/tebak gambar/6.jpg",
                options: ["Tikus", "Kuda", "anjing", "unta"],
                correctAnswer: "anjing",
                correctImage: "assets/img/tebak gambar/6..jpg",
            },
            {
                image: "assets/img/tebak gambar/7.jpg",
                options: ["kuda", "sigung", "Serigala", "Macan"],
                correctAnswer: "kuda",
                correctImage: "assets/img/tebak gambar/7..jpg",
            },
            {
                image: "assets/img/tebak gambar/8.jpg",
                options: ["Ular", "Bebek", "Hiu", "unta"],
                correctAnswer: "Ular",
                correctImage: "assets/img/tebak gambar/8..jpg",
            },
        ];

        let currentQuestionIndex = 0;

        function loadQuestion() {
            const question = questions[currentQuestionIndex];
            document.getElementById("funny-image").src = question.image;

            const optionsContainer = document.getElementById("options-container");
            optionsContainer.innerHTML = ""; // Clear previous options

            question.options.forEach(option => {
                const button = document.createElement("button");
                button.className = "button";
                button.textContent = option;
                button.onclick = () => checkAnswer(option);
                optionsContainer.appendChild(button);
            });

            document.getElementById("result").textContent = "";
            document.getElementById("correct-image").style.display = "none";
            document.getElementById("next-button").style.display = "none";
        }

        function checkAnswer(selectedOption) {
            const question = questions[currentQuestionIndex];
            const resultElement = document.getElementById("result");
            const correctImage = document.getElementById("correct-image");
            const nextButton = document.getElementById("next-button");

            if (selectedOption === question.correctAnswer) {
                resultElement.textContent = "Jawaban Anda Benar wkakakaka!";
                resultElement.className = "result correct";
                correctImage.src = question.correctImage;
                correctImage.style.display = "block";
                nextButton.style.display = "inline-block";
            } else {
                resultElement.textContent = "Jawaban Salah, coba lagi haha!";
                resultElement.className = "result wrong";
                correctImage.style.display = "none";
                nextButton.style.display = "none";
            }
        }

        function nextQuestion() {
            currentQuestionIndex++;
            if (currentQuestionIndex < questions.length) {
                loadQuestion();
            } else {
                alert("Game selesai! Terima kasih sudah bermain.Ini hanya sekedar game seru-seruan supaya dalam pembelajaran tidak terlalu tegang");
                location.reload();
            }
        }

        // Load the first question when the page loads
        loadQuestion();
    </script>
</body>
</html>
