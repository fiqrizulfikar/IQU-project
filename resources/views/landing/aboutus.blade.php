<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar dan Cards</title>

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

        /* Hero Section */
        .hero-section {
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: url('https://images.pexels.com/photos/6615278/pexels-photo-6615278.jpeg?auto=compress&cs=tinysrgb&w=400');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
        }

        .hero-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6); /* Overlay */
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #b3b3b3;
            line-height: 1.5;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            border-radius: 5px;
            background-color: #5d33d1;
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background-color: #3c1f89;
        }

        /* Kotak Section */
        .kotak {
            background-color: white;
            width: 80%;
            margin: 40px auto;
            text-align: center;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .kotak h1 {
            font-size: 2.5rem;
            margin-bottom: 25px;
            color: #333;
        }

        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .image-kotak {
            flex: 1;
            padding: 20px;
            max-width: 500px;
            margin: 15px;
        }

        .conference-image {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .text-kotak {
            flex: 1;
            padding: 20px;
            text-align: left;
        }

        .text-kotak h2 {
            font-size: 2rem;
            color: #08005e;
            margin-bottom: 20px;
            text-align: center;
        }

        .text-kotak p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .features {
            list-style: none;
            padding: 0;
        }

        .features li {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .features li a {
            text-decoration: none;
            color: #6e00ff;
            font-weight: bold;
        }

        .features li a:hover {
            color: #3c1f89;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .image-kotak {
                max-width: 100%;
                padding: 0;
            }

            .text-kotak {
                padding: 15px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <h1>
            <img src="assets/img/logo.png" alt="Logo">
            About Us
        </h1>
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </nav>

    <section class="hero-section">
        <div class="hero-content">
            <h1>About Us</h1>
            <p>IQU.com adalah platform e-learning yang menyediakan akses mudah ke materi pendidikan berkualitas, membantu Anda belajar kapan saja, di mana saja, untuk mencapai potensi terbaik.</p>
            <a href="#" class="cta-button">Learn More</a>
        </div>
    </section>

    <section class="kotak">
        <h1>Welcome to IQU.com</h1>
        <div class="content">
            <div class="image-kotak">
                <img src="https://i.pinimg.com/originals/01/5e/31/015e310e55ee63635587d9125b6d08b0.gif" alt="Conference" class="conference-image">
            </div>
            <div class="text-kotak">
                <h2>IQU.com</h2>
                <p>Selamat datang di IQU.com - platform e-learning yang dirancang untuk mendukung setiap langkah dalam perjalanan belajar Anda. Kami berkomitmen untuk menyediakan akses ke berbagai materi pendidikan berkualitas, yang dapat diakses kapan saja dan di mana saja.</p>
                <p>Dengan lebih dari sekadar kursus, IQU.com menawarkan pengalaman belajar yang holistik. Kami menciptakan ekosistem pembelajaran yang lengkap dan mendalam.</p>
                <ul class="features">
                    <li><a href="/pendidikan">Pendidikan</a></li>
                    <li><a href="/pengetahuan">Pengetahuan</a></li>
                    <li><a href="/games">Games</a></li>
                    <li><a href="/mediasosial">Contact</a></li>
                    <li><a href="/aboutus">About Us</a></li>
                </ul>
            </div>
        </div>
    </section>

</body>

</html>
