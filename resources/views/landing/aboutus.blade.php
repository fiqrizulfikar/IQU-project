<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spencer Sharp</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ffffff;
      color: #333;
      line-height: 1.6;
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

    .container {
      max-width: 1200px;
      margin: 50px auto;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      padding: 0 20px;
    }

    .content {
      flex: 1 1 60%;
    }

    .content h1 {
      font-size: 3rem;
      font-weight: bold;
      margin-bottom: 20px;
      line-height: 1.3;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s forwards;
    }

    .content p {
      margin-bottom: 20px;
      font-size: 1.1rem;
      color: #555;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s forwards;
    }

    .content p:nth-child(2) {
      animation-delay: 0.5s;
    }

    .content p:nth-child(3) {
      animation-delay: 1s;
    }

    .content p:nth-child(4) {
      animation-delay: 1.5s;
    }

    .social-links a {
      display: block;
      margin-bottom: 10px;
      font-size: 1rem;
      text-decoration: none;
      color: #0073e6;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s forwards;
      animation-delay: 2s;
    }

    .social-links a:hover {
      color: #005bb5;
    }

    .image {
      flex: 1 1 35%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .image img {
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      opacity: 0;
      transform: scale(0.95) rotate(-5deg);
      animation: fadeInScale 1s forwards;
    }

    /* Keyframes untuk animasi fadeInUp */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Keyframes untuk animasi fadeInScale */
    @keyframes fadeInScale {
      from {
        opacity: 0;
        transform: scale(0.95) rotate(-5deg);
      }
      to {
        opacity: 1;
        transform: scale(1) rotate(0);
      }
    }

  </style>

</head>

<body>

  <!-- Navbar -->
  <nav class="navbar">
    <h1>
      <img src="assets/img/logo.png" alt="Logo">
      Sekolah Dasar
    </h1>
    <ul>
      <li><a href="/">Beranda</a></li>
      <li><a href="/login">Login</a></li>
    </ul>
  </nav>

  <div class="container">
    <div class="content">
      <h1>About US</h1>
      <p>
        IQU.com adalah platform e-learning inovatif yang menawarkan kursus, artikel pengetahuan, dan game edukasi untuk membuat pembelajaran lebih interaktif dan menyenangkan.
         Dengan desain yang ramah pengguna, pengguna dapat belajar kapan saja dan di mana saja.
      </p>
      <p>
        Fitur komunitasnya memungkinkan interaksi dengan mentor dan pelajar lain, memudahkan diskusi dan berbagi pengalaman. 
        Kombinasi pembelajaran mandiri dan dukungan komunitas menjadikan IQU.com solusi pendidikan yang efektif.
      </p>
      <p>
        IQU.com menawarkan fleksibilitas, metode pembelajaran menarik, dan program sertifikasi yang terjangkau, 
        menjadikannya pilihan ideal untuk meningkatkan keterampilan dan pengetahuan secara efisien.
      </p>
      <div class="social-links">
        <a href="#">Follow on X</a>
        <a href="#">Follow on Instagram</a>
        <a href="#">Follow on GitHub</a>
        <a href="#">Follow on LinkedIn</a>
        <a href="mailto:spencer@planetaria.tech">spencer@planetaria.tech</a>
      </div>
    </div>
    <div class="image">
      <img src="https://i.pinimg.com/474x/f4/3d/f5/f43df51ff61e6cbe59ff3d99aa1fea18.jpg" alt="Spencer Sharp in helmet">
    </div>
  </div>

</body>

</html>
