<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
  <link rel="stylesheet" href="assets/css/games.css">
  
  <title>Document</title>
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
    <li><a href="/" class="active">Beranda</a></li>
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
      <li><a href="{{ url('/games') }}"><span>Games</span></i></a>
      <li><a href="{{ url('/mediasosial') }}">Media Sosial</a></li>
      <li><a href="/aboutus">About US</a></li>
    </li>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav>
</div>
</header>
<body>
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
        <button class="next-btn">Mulai</button>
        
        
      </div>
    </div>
  </div>
  <style>
    .card img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
  </style>
</body>
</html>
