<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
  <link rel="stylesheet" href="assets/css/games.css">
  
  <title>Games</title>
</head>
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

<!-- =======================================================
* Template Name: Bootslander
* Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
* Updated: Aug 07 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>
<head>
<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

<a href="index.html" class="logo d-flex align-items-center">
  <img src="assets/img/logo.png" alt="logoiqu.com">
  <h1 class="sitename">i-QUIZ</i></h1>
  
</a>     
    
<nav id="navmenu" class="navmenu">
  <ul>
    <li class="dropdown"><a href="{{ url('/pendidikan') }}"><span>Pendidikan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li>
          <a href="{{ url('/sekolahdasar') }}"><span>Sekolah Dasar</span> </i></a>    
        </li>
        <li><a href="{{ url('/Smp') }}"><span>Sekolah Menengah Pertama</span></a></li>
        <li><a href="/SMA" class="active"><span>Sekolah Menengah Atas</span></a></li>
        <li><a href="{{ url('/cpns-quiz/categories') }}"><span>Tes CPNS</span></i></a>
        </li>
      </ul>
      <li class="dropdown"><a href="{{ url('/pengetahuan') }}"><span>Pengetahuan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
        <ul>
          <li>
            <a href="{{ url('/ekonomi') }}"><span>Ekonomi</span> </i></a>    
          </li>
          <li><a href="{{ url('/politik') }}"><span>Politik</span></a></li>
          <li><a href="/teknologi" class="active"><span>Teknologi</span></a></li>
          <li><a href="{{ url('/umum') }}"><span>Umum</span></i></a>
          </li>
        </ul>
      <li><a href="{{ url('/mediasosial') }}">Media Sosial</a></li>
      <li><a href="/">About US</a></li>
      <a href="/login" class="login-link">
        <img src="assets/img/login.png" alt="Login Icon" class="login-icon">
    </a>
    </li>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav>
</div>
</header>
<body>
  <div class="fade-in"> 
  <div class="container">
    <div class="cards-container">
      <div class="card">
        <div class="info_card">
          <span>ICE</span>
          <h2>BREAKING</h2>
          <img src="assets/img/TES IQ 1.png" alt="Icebreaking">
        </div>
        <button class="next-btn">Mulai</button>
      </div>
      <div class="card">
        <div class="info_card">
          <span>TES</span>
          <h2>IQ</h2>
          <img src="assets/img/breaking.png" alt="TesIQ">
        </div>
        <button class="next-btn">
        <a href="{{ url('/tesiq') }}"> Mulai</a></button>
        
        
      </div>
    </div>
  </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
  const fadeInElements = document.querySelectorAll(".fade-in");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // Hentikan observasi setelah elemen muncul
        }
      });
    },
    {
      threshold: 0.1, // Elemen akan terlihat saat 10% bagian dari elemen muncul
    }
  );

  fadeInElements.forEach((el) => observer.observe(el));
});

  </script>
</body>
</html>
