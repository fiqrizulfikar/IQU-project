<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQU SMP</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            color: #333;
            min-height: 100vh;
        }

        /* Navbar */
        .navbar {
            background: #08005e;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            font-size: 24px;
            display: flex;
            align-items: center;
        }

        .navbar h1 img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            transition: color 0.3s;
        }

        .navbar ul li a:hover {
            color: #ffdd59;
        }

        /* Card Section */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 50px 20px;
        }

        .card {
            position: relative;
            background: linear-gradient(145deg, #e2ecff, #d5e7fc);
            width: 260px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.4s, box-shadow 0.4s;
            animation: fadeIn 0.8s ease-in-out forwards;
        }

        .card:nth-child(1) {
            animation-delay: 0.2s;
        }

        .card:nth-child(2) {
            animation-delay: 0.4s;
        }

        .card:nth-child(3) {
            animation-delay: 0.6s;
        }

        .card:nth-child(4) {
            animation-delay: 0.8s;
        }

        .card:nth-child(5) {
            animation-delay: 1s;
        }

        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #89f7fe, #66a6ff, #ff9a9e, #fad0c4);
            background-size: 300% 300%;
            z-index: -1;
            border-radius: 20px;
            animation: gradientAnimation 6s infinite;
        }

        .card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .card h5 {
            font-size: 20px;
            font-weight: 700;
            color: #444;
            text-align: center;
            margin: 15px 0;
        }

        .card p {
            font-size: 14px;
            color: #666;
            padding: 0 15px;
            text-align: center;
            margin-bottom: 15px;
        }

        .card a {
            display: inline-block;
            text-align: center;
            margin: 10px auto 15px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            color: white;
            background: linear-gradient(90deg, #4e54c8, #8f94fb);
            border-radius: 25px;
            text-decoration: none;
            transition: background 0.3s, transform 0.3s;
        }

        .card a:hover {
            background: linear-gradient(90deg, #8f94fb, #4e54c8);
            transform: scale(1.1);
        }

        .card:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
        }

        /* Animasi Fade-In */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animasi Gradien */
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .card-container {
                padding: 30px 10px;
            }

            .card {
                width: 90%;
                max-width: 300px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <h1>
            <img src="assets/img/logo.png" alt="Logo">
            Sekolah Menengah Pertama
        </h1>
        <ul>
            <li><a href="{{ url('/pendidikan') }}"><span>Pendidikan</span></i></a>
            <li><a href="{{ url('/pengetahuan') }}"><span>Pengetahuan</span></i></a>
            <li><a href="{{ url('/games') }}"><span>Games</span></i></a>
            <li><a href="/">About US</a></li>
            <li><a href="/login" class="login-icon"><i class="fas fa-user"></i></a></li>  </li>
        </ul>
    </nav>

    <!-- Card Section -->
    <div class="card-container">
        <div class="card">
            <img src="https://i.pinimg.com/474x/e3/fc/ff/e3fcff56201a208bf023c04ec8b307ae.jpg" alt="Ilmu IPA">
            <h5>IPA</h5>
            <p>Mata pelajaran yang mempelajari alam sekitar dan isinya, termasuk benda-benda, peristiwa, dan gejala alam.</p>
            <a href="smpipa">Mulai Quiz</a>
        </div>
        <div class="card">
            <img src="https://rencanamu.id/assets/file_uploaded/blog/1463642073-20120314-q.jpg" alt="Ilmu IPS">
            <h5>IPS</h5>
            <p>Mata pelajaran yang mempelajari hubungan antar manusia, masalah sosial dan interaksinya dengan lingkungan sekitar.</p>
            <a href="smpips">Mulai Quiz</a>
        </div>
        <div class="card">
            <img src="https://i.pinimg.com/736x/b1/08/c6/b108c6be1ea418415a12ed7ed2ffa2ea.jpg" alt="Ilmu MTK">
            <h5>MTK</h5>
            <p>Mata pelajaran yang mempelajari konsep matematika dasar seperti angka, bentuk, dan hitungan.</p>
            <a href="smpmtk">Mulai Quiz</a>
        </div>
        <div class="card">
            <img src="https://sman2pinggir.sch.id/media_library/posts/large/4aa2de96bb4948c801a4f3b878251259.jpg" alt="Ilmu PKN">
            <h5>PKN</h5>
            <p>Mata pelajaran yang mempelajari nilai-nilai kewarganegaraan dan dasar-dasar demokrasi.</p>
            <a href="smppkn">Mulai Quiz</a>
        </div>
        <div class="card">
            <img src="https://i.pinimg.com/474x/f3/4b/34/f34b340f10b876307a5cbae87218d748.jpg" alt="Ilmu ENGLIS">
            <h5>ENGLIS</h5>
            <p>Mata pelajaran yang mempelajari seni budaya dan ekspresi kreatif.</p>
            <a href="smpenglis">Mulai Quiz</a>
        </div>
    </div>

</body>
</html>