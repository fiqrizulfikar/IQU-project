
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
  :root {
    --default-font: "Roboto", system-ui, sans-serif;
    --nav-font: "Poppins", sans-serif;
    --nav-color: #ffffff;
    --nav-hover-color: #1a73e8;
    --nav-background-color: #0a2a4e; /* Warna biru tua */
    --nav-dropdown-background-color: #0e3b5f;
    --nav-dropdown-hover-color: #1a90ff;
}

.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: var(--nav-background-color);
    padding: 15px 20px;
    color: var(--nav-color);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar a {
    color: var(--nav-color);
    text-decoration: none;
    padding: 8px 16px;
    font-size: 1rem;
    font-weight: 500;
    transition: color 0.3s, background-color 0.3s;
}

.navbar a:hover {
    background-color: var(--nav-hover-color);
    color: var(--contrast-color);
    border-radius: 4px;
}

.navmenu {
    list-style: none;
    display: flex;
    gap: 15px;
}

.navmenu li {
    position: relative;
}

.navmenu .dropdown ul {
    position: absolute;
    top: 100%;
    left: 0;
    display: none;
    background-color: var(--nav-dropdown-background-color);
    padding: 10px 0;
    list-style: none;
    border-radius: 4px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    z-index: 999;
}

.navmenu .dropdown:hover ul {
    display: block;
}

.navmenu .dropdown ul li a {
    padding: 10px 20px;
    display: block;
    color: var(--nav-dropdown-hover-color);
}

.navmenu .dropdown ul li a:hover {
    background-color: var(--nav-dropdown-hover-color);
    color: var(--contrast-color);
}

/* Responsif */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }
    .navmenu {
        flex-direction: column;
        width: 100%;
    }
    .navmenu li {
        width: 100%;
    }
    .navmenu a {
        width: 100%;
        text-align: left;
    }
}

.header {
  --background-color: rgba(255, 255, 255, 0);
  --default-color: #ffffff;
  --heading-color: #ffffff;
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 20px 0;
  transition: all 0.5s;
  z-index: 997;
}

.header .logo {
  line-height: 1;
}

.header .logo img {
  max-height: 90px;
  margin-right: 8px;
}

.header .logo h1 {
  font-size: 30px;
  margin: 0;
  font-weight: 700;
  color: var(--heading-color);
}

.scrolled .header {
  box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
}

@media (min-width: 1200px) {
    .navmenu {
      padding: 0;
  
    }
  
    .navmenu ul {
      margin: 0;
      padding: 0;
      display: flex;
      list-style: none;
      align-items: center;
    }
  
    .navmenu li {
      position: relative;
    }
  
    .navmenu>ul>li {
      white-space: nowrap;
      padding: 15px 14px;
    }
  
    .navmenu>ul>li:last-child {
      padding-right: 0;
    }
  
    .navmenu a,
    .navmenu a:focus {
      color: color-mix(in srgb, var(--nav-color), transparent 20%);
      font-size: 15px;
      padding: 0 2px;
      font-family: var(--nav-font);
      font-weight: 400;
      display: flex;
      align-items: center;
      justify-content: space-between;
      white-space: nowrap;
      transition: 0.3s;
      position: relative;
    }
  
    .navmenu a i,
    .navmenu a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
      transition: 0.3s;
    }
  
    .navmenu>ul>li>a:before {
      content: "";
      position: absolute;
      height: 2px;
      bottom: -6px;
      left: 0;
      background-color: var(--nav-hover-color);
      visibility: hidden;
      width: 0px;
      transition: all 0.3s ease-in-out 0s;
    }
  
    .navmenu a:hover:before,
    .navmenu li:hover>a:before,
    .navmenu .active:before {
      visibility: visible;
      width: 25px;
    }
  
    .navmenu li:hover>a,
    .navmenu .active,
    .navmenu .active:focus {
      color: var(--nav-color);
    }
  
    .navmenu .dropdown ul {
      margin: 0;
      padding: 10px 0;
      background: var(--nav-dropdown-background-color);
      display: block;
      position: absolute;
      visibility: hidden;
      left: 14px;
      top: 130%;
      opacity: 0;
      transition: 0.3s;
      border-radius: 4px;
      z-index: 99;
      box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
    }
  
    .navmenu .dropdown ul li {
      min-width: 200px;
    }
  
    .navmenu .dropdown ul a {
      padding: 10px 20px;
      font-size: 15px;
      text-transform: none;
      color: var(--nav-dropdown-color);
    }
  
    .navmenu .dropdown ul a i {
      font-size: 12px;
    }
  
    .navmenu .dropdown ul a:hover,
    .navmenu .dropdown ul .active:hover,
    .navmenu .dropdown ul li:hover>a {
      color: var(--nav-dropdown-hover-color);
    }
  
    .navmenu .dropdown:hover>ul {
      opacity: 1;
      top: 100%;
      visibility: visible;
    }
  
    .navmenu .dropdown .dropdown ul {
      top: 0;
      left: -90%;
      visibility: hidden;
    }
  
    .navmenu .dropdown .dropdown:hover>ul {
      opacity: 1;
      top: 0;
      left: -100%;
      visibility: visible;
    }
  }
  
  /* Mobile Navigation */
  @media (max-width: 1199px) {
    .mobile-nav-toggle {
      color: var(--nav-color);
      font-size: 28px;
      line-height: 0;
      margin-right: 10px;
      cursor: pointer;
      transition: color 0.3s;
    }
  
    .navmenu {
      padding: 0;
      z-index: 9997;
    }
  
    .navmenu ul {
      display: none;
      list-style: none;
      position: absolute;
      inset: 60px 20px 20px 20px;
      padding: 10px 0;
      margin: 0;
      border-radius: 6px;
      background-color: var(--nav-mobile-background-color);
      border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
      box-shadow: none;
      overflow-y: auto;
      transition: 0.3s;
      z-index: 9998;
    }
  
    .navmenu a,
    .navmenu a:focus {
      color: var(--nav-dropdown-color);
      padding: 10px 20px;
      font-family: var(--nav-font);
      font-size: 17px;
      font-weight: 500;
      display: flex;
      align-items: center;
      justify-content: space-between;
      white-space: nowrap;
      transition: 0.3s;
    }
  
    .navmenu a i,
    .navmenu a:focus i {
      font-size: 12px;
      line-height: 0;
      margin-left: 5px;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      transition: 0.3s;
      background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
    }
  
    .navmenu a i:hover,
    .navmenu a:focus i:hover {
      background-color: var(--accent-color);
      color: var(--contrast-color);
    }
  
    .navmenu a:hover,
    .navmenu .active,
    .navmenu .active:focus {
      color: var(--nav-dropdown-hover-color);
    }
  
    .navmenu .active i,
    .navmenu .active:focus i {
      background-color: var(--accent-color);
      color: var(--contrast-color);
      transform: rotate(180deg);
    }
  
    .navmenu .dropdown ul {
      position: static;
      display: none;
      z-index: 99;
      padding: 10px 0;
      margin: 10px 20px;
      background-color: var(--nav-dropdown-background-color);
      transition: all 0.5s ease-in-out;
    }
  
    .navmenu .dropdown ul ul {
      background-color: rgba(33, 37, 41, 0.1);
    }
  
    .navmenu .dropdown>.dropdown-active {
      display: block;
      background-color: rgba(33, 37, 41, 0.03);
    }
  
    .mobile-nav-active {
      overflow: hidden;
    }
  
    .mobile-nav-active .mobile-nav-toggle {
      color: #fff;
      position: absolute;
      font-size: 32px;
      top: 15px;
      right: 15px;
      margin-right: 0;
      z-index: 9999;
    }
  
    .mobile-nav-active .navmenu {
      position: fixed;
      overflow: hidden;
      inset: 0;
      background: rgba(33, 37, 41, 0.8);
      transition: 0.3s;
    }
  
    .mobile-nav-active .navmenu>ul {
      display: block;
    }
  }
:root {
    --default-font: "Roboto",  system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    --heading-font: "Raleway",  sans-serif;
    --nav-font: "Poppins",  sans-serif;
  }

    /* Card Section */
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
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
  /* Resetting some basic styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* General Body Styles */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f0f4f8;
  color: #333;
  line-height: 1.6;
}

/* Navbar Styles */
.navbar {
  background-color: #0a2a4e;
  padding: 15px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar .logo a {
  color: #ecf0f1;
  font-size: 24px;
  font-weight: bold;
  letter-spacing: 1px;
  text-decoration: none;
}

.navbar .logo span {
  color: #e74c3c;
}

.navbar ul {
  list-style: none;
  display: flex;
  gap: 20px;
}

.navbar ul li a {
  color: #ecf0f1;
  font-size: 18px;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 1px;
  transition: color 0.3s ease;
}

.navbar ul li a:hover {
  color: #e74c3c;
}

/* Resetting some basic styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* General Body Styles */
body {
  font-family: 'Helvetica Neue', Arial, sans-serif;
  background-color: #f8f9fa;
  color: #333;
  line-height: 1.6;
}

h1, h2 {
  color: #2d3436;
  font-weight: bold;
}

a {
  text-decoration: none;
  color: inherit;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background: #f4f4f4;
  color: #333;
  line-height: 1.6;
}

/* Landing Section */
.landing {
  padding: 80px 20px;
  background-color: #0a2a4e;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}

.container {
  max-width: 1200px;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.text-content {
  max-width: 600px;
  animation: slideInLeft 1s ease-out forwards;
  opacity: 0;
}

.section-title {
  font-size: 42px;
  font-weight: bold;
  font-family: "Montserrat", sans-serif;
  color: #ffffff;
  margin-bottom: 20px;
  position: relative;
}

.section-title::after {
  content: '';
  position: absolute;
  width: 80px;
  height: 4px;
  color: white
  bottom: -10px;
  left: 0;
  border-radius: 4px;
}

.section-description {
  font-size: 18px;
  color: #ffffff;
  line-height: 1.8;
  margin-bottom: 20px;
}

.cta-btn a {
  background: #28a745; /* Warna hijau */
  color: #fff;
  text-decoration: none;
  padding: 12px 24px;
  font-size: 18px;
  font-weight: 600;
  border-radius: 30px;
  transition: all 0.4s ease; /* Efek transisi yang halus */
}

.cta-btn a:hover {
  background: #218838; /* Warna hijau yang lebih gelap saat hover */
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  transform: translateY(-10px); /* Efek tombol sedikit terangkat */
}

/* Gambar di Landing Section */
.image-content {
  max-width: 500px;
  opacity: 0;
  animation: fadeInUp 1.2s ease-out 0.5s forwards;
}

.landing-image {
  max-width: 100%;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transform: scale(0.8);
  transition: all 0.6s ease-out;
}

.landing-image:hover {
  transform: scale(1);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Animasi */
@keyframes slideInLeft {
  0% {
    transform: translateX(-50px);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeInUp {
  0% {
    transform: translateY(50px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}


/* Section Pendidikan */
.education-section {
  padding: 60px 20px;
  background: linear-gradient(135deg, #ffffff, white);
  color: #fff;
  text-align: center;
}

.section-header {
  margin-bottom: 40px;
}

.section-title {
  font-size: 42px;
  font-weight: 700;
  margin: 0;
  font-family: "Montserrat", sans-serif;
  color: white;
  text-transform: uppercase;
  position: relative;
  display: inline-block;
}

.section-title::after {
  content: '';
  position: absolute;
  width: 60px;
  height: 4px;
  background: linear-gradient(90deg, #000, #444);
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 4px;
}

.section-description {
  font-size: 18px;
  margin: 10px auto 0;
  color: #555;
  line-height: 1.8;
  max-width: 600px;
}
.menu-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.menu-card {
  background: #1e3a8a;
  border-radius: 10px;
  padding: 20px;
  width: 250px;
  text-align: center;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  opacity: 0;
  transform: translateY(50px);
  transition: all 0.6s ease-out;
}

.menu-card:hover {
  transform: translateY(-10px);
  background: #2563eb;
}

.menu-card h3 {
  font-size: 24px;
  margin-bottom: 15px;
  font-family: "Montserrat", sans-serif;
  color: #dbeafe;
}

.menu-card ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-card ul li {
  margin: 8px 0;
}

.menu-card ul li a {
  text-decoration: none;
  color: #fff;
  font-size: 16px;
  transition: color 0.3s;
}

.menu-card ul li a:hover {
  color: #dbeafe;
}

/* Animasi Urutan */
.menu-card:nth-child(1) {
  animation: fadeInUp 0.6s 0.1s forwards;
}

.menu-card:nth-child(2) {
  animation: fadeInUp 0.6s 0.3s forwards;
}

.menu-card:nth-child(3) {
  animation: fadeInUp 0.6s 0.5s forwards;
}

.menu-card:nth-child(4) {
  animation: fadeInUp 0.6s 0.7s forwards;
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(50px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.anjay{
  color: black;
}
</style>

</head>
<body>
  <head>
    <body class="index-page">
  
      <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
    
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="logoiqu.com">
            <h1 class="sitename">i</i></h1>
            <h1 class="sitename">-QUIZ</h1>
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
  <!-- Section Landing -->
  <header id="landing" class="landing">
  <div class="container">
    <div class="text-content">
      <h2 class="section-title">Solusi Cerdas untuk Pembelajaran Modern</h2>
      <p class="section-description">
        Jelajahi metode belajar interaktif yang dirancang untuk siswa berbagai jenjang. Tingkatkan kepercayaan diri dan hasil belajar dengan materi berkualitas!
      </p>
      <button class="cta-btn">
        <a href="#education-section">Ayo Mulai</a>
      </button>
    </div>
    <div class="image-content">
      <img src="{{ asset('assets/img/scholl.png') }}" alt="Anak Belajar" class="landing-image" />
    </div>
  </div>
</header>


  <section id="education-section" class="education-section">
    <div class="section-header">
      <h2 class="anjay">Kategori Pendidikan</h2>
    </div>
    <div class="menu-container">
      <div class="menu-card">
        <h3>SD</h3>
        <ul>
          <li><a href="#sd-ipa">IPA</a></li>
          <li><a href="#sd-ips">IPS</a></li>
          <li><a href="#sd-mtk">Matematika</a></li>
          <li><a href="#sd-pkn">PKN</a></li>
        </ul>
      </div>
      <div class="menu-card">
        <h3>SMP</h3>
        <ul>
          <li><a href="#smp-ipa">IPA</a></li>
          <li><a href="#smp-ips">IPS</a></li>
          <li><a href="#smp-mtk">Matematika</a></li>
          <li><a href="#smp-pkn">PKN</a></li>
        </ul>
      </div>
      <div class="menu-card">
        <h3>SMA</h3>
        <ul>
          <li><a href="#sma-ipa">IPA</a></li>
          <li><a href="#sma-ips">IPS</a></li>
          <li><a href="#sma-pkn">PKN</a></li>
          <li><a href="#sma-tik">TIK</a></li>
        </ul>
      </div>
      <div class="menu-card">
        <h3>CPNS</h3>
        <ul>
          <li><a href="#cpns-tiu">TIU</a></li>
          <li><a href="#cpns-twk">TWK</a></li>
          <li><a href="#cpns-tkp">TKP</a></li>
        </ul>
      </div>
    </div>
  </section>

<script>
  // Smooth Scroll Effect
// Smooth Scroll Effect
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth',
      block: 'start',
      inline: 'nearest'
    });
  });
});

</script>
