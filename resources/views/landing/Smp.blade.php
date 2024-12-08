<!DOCTYPE html>
<html lang="id">
<head>
<link href="assets/css/SD/IPASD.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar dan Cards</title>



      <!-- Favicons -->
  <link href="assets/img/www.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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








  <style>
    /* Reset */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    /* Navbar */
    .navbar {
        background-color: #002776;
        color: white;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar h1 {
        font-size: 24px;
        color: white;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .navbar h1 img {
        height: 40px;
        margin-right: 10px;
    }

    /* Navbar Links */
    .navbar ul {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    .navbar ul li {
        position: relative;
    }

    .navbar ul li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        padding: 8px 12px;
        display: block;
    }

    .navbar ul li a:hover {
        border-bottom: 2px solid #00ccff;
    }

    /* Dropdown */
    .navbar ul li .dropdown {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #0033a0;
        border-radius: 5px;
        min-width: 150px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .navbar ul li .dropdown a {
        padding: 10px 15px;
        color: white;
    }

    .navbar ul li:hover .dropdown {
        display: block;
    }

    /* Responsif Navbar */
    @media (max-width: 768px) {
        .navbar ul {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
    }

    /* Card Section */
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 80px;
        padding-bottom: 160px;
        background-image: url('https://i.pinimg.com/474x/c3/85/50/c38550c329b380b91b0a20077c997932.jpg');
    }

    .card {
        background-color: #f8f8f8;
        width: 200px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
        text-align: center;
        padding: 10px;
        justify-content: space-between; /* Agar tombol ada di bawah */
        padding-bottom: 10px;
    }

    .card img {
        width: 100%;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card h5 {
        font-size: 18px;
        color: #333;
        margin: 10px 0;
    }

    .card p {
        font-size: 14px;
        color: #666;
    }

    .card a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 12px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.2s;
        justify-content: space-between; /* Agar tombol ada di bawah */
        text align: center;

    }

    .card a:hover {
        background-color: #0056b3;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    /* Responsif Cards */
    @media (max-width: 768px) {
        .card {
            width: 100%;
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
        <li><a href="/">Beranda</a></li>
        
        <li><a href="/aboutus">About US</a></li>
    </ul>
</nav>

<!-- Card Section -->
<div class="card-container">
    <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcHeaS_NR0GL3Ml9fi1oEAdHb63VuaXhDqFg&s" alt="Ilmu IPA">
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
        <img src="https://media.istockphoto.com/id/1439286764/id/vektor/matematika-tulisan-tangan-dengan-corat-coret-matematika.jpg?s=612x612&w=0&k=20&c=A5UsOnOuspqLDqzifguOHHyA4Dn06LV9Y3yKPqPRYPo=" alt="Ilmu MTK">
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
</div>


