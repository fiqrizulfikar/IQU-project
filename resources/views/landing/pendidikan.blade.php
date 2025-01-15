
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
  --default-font: "Roboto",  system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --heading-font: "Raleway",  sans-serif;
  --nav-font: "Poppins",  sans-serif;
}

/* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
:root { 
  --background-color: #ffffff; /* Background color for the entire website, including individual sections */
  --default-color: #444444; /* Default color used for the majority of the text content across the entire website */
  --heading-color: #040677; /* Color for headings, subheadings and title throughout the website */
  --accent-color: #1acc8d; /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
  --surface-color: #ffffff; /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
  --contrast-color: #ffffff; /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
}

/* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
:root {
  --nav-color: #ffffff;  /* The default color of the main navmenu links */
  --nav-hover-color: #1acc8d; /* Applied to main navmenu links when they are hovered over or active */
  --nav-mobile-background-color: #ffffff; /* Used as the background color for mobile navigation menu */
  --nav-dropdown-background-color: #ffffff; /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
  --nav-dropdown-color: #444444; /* Used for navigation links of the dropdown items in the navigation menu. */
  --nav-dropdown-hover-color: #1acc8d; /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
}

/* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

.light-background {
  --background-color: #f4f5fe;
  --surface-color: #ffffff;
}

.dark-background {
  --background-color: #08005e;
  --default-color: #ffffff;
  --heading-color: #ffffff;
  --surface-color: #0c0091;
  --contrast-color: #ffffff;
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
      background-color: #ffffff
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
      background: #ffffff;
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
      color: #1acc8d;
    }
  
    .navmenu .dropdown ul a i {
      font-size: 12px;
    }
  
    .navmenu .dropdown ul a:hover,
    .navmenu .dropdown ul .active:hover,
    .navmenu .dropdown ul li:hover>a {
      color: white;
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
      background-color: white
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
    background-color: white;
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
    color: #1acc8d;
    
}

.navmenu .dropdown ul li a:hover {
    background-color: #1acc8d;
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
    color: var(--accent-color);
    text-decoration: none;
    transition: 0.3s;
  }
  
  a:hover {
    color: color-mix(in srgb, var(--accent-color), transparent 25%);
    text-decoration: none;
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
  background-color:  #040677;
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

/* Section Header */
.section-header {
  text-align: center;
  margin-bottom: 30px;
}

.section-header h2 {
  font-size: 32px;
  font-weight: bold;
  color: #34495e; /* Warna netral */
  text-transform: uppercase;
  letter-spacing: 1px;
  position: relative;
}

.section-header h2::after {
  content: "";
  display: block;
  width: 80px;
  height: 3px;
  background: #ff6f61; /* Warna aksen */
  margin: 10px auto 0;
}

/* Kotak Utama */
.main-container {
  background: #f7f9fc; /* Warna latar belakang lembut */
  border: 1px solid #ddd;
  border-radius: 15px;
  padding: 30px;
  max-width: 1200px;
  margin: 5% auto;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Shadow lembut */
}

/* Wrapper untuk kategori utama (SD, SMP, SMA, CPNS) */
.category-main-wrapper {
  display: flex; /* Mengatur menjadi horizontal */
  justify-content: space-between; /* Mengatur jarak antar kategori */
  gap: 8px; /* Menambahkan jarak antar kotak */
  flex-wrap: wrap; /* Agar bisa membungkus jika tidak muat dalam satu baris */
  animation: slideIn 0.5s ease-out;
  margin-top: 30px; /* Memberikan jarak atas */
}

/* Kategori Wrapper */
.category-wrapper {
  background: linear-gradient(145deg, #92d9ff, #66c4ff); /* Warna gradien cerah */
  border-radius: 15px;
  padding: 50px; /* Perbesar padding untuk memperbesar ukuran kotak */
  width: 200px; /* Ukuran kotak kategori lebih besar */
  border: 1px solid #ddd;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Shadow lembut */
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
  overflow: hidden;
  min-height: 170px; /* Menjaga agar kotak tetap proporsional */
}

.category-wrapper:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25); /* Efek hover */
}

.category-wrapper::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(45deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.1));
  opacity: 0.5;
  z-index: -1;
}

.category-header h3 {
  font-size: 24px;
  font-weight: bold;
  color: #34495e; /* Warna teks utama */
  text-align: center;
  margin-bottom: 15px;
}

/* Animasi untuk Kotak */
@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Menambahkan link pada kategori */
.category-link {
  text-decoration: none;
  color: inherit; /* Warna teks mengikuti warna kategori */
}

/* Responsif: Mengatur tata letak ketika lebar layar lebih kecil */
@media (max-width: 768px) {
  .category-main-wrapper {
    justify-content: center; /* Pusatkan kategori */
    gap: 15px; /* Mengurangi jarak antar kotak */
  }

  .category-wrapper {
    width: 220px; /* Ukuran kotak lebih kecil pada perangkat mobile */
    padding: 30px; /* Mengurangi padding */
  }
}



/* Menata link */
.login-link {
    display: inline-block;
    text-decoration: none; /* Menghilangkan garis bawah di link */
    cursor: pointer;
    padding: 10px; /* Jarak di sekitar icon */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animasi saat hover */
}

/* Menata icon login */
.login-icon {
    width: 30px; /* Ukuran lebar icon */
    height: 30px; /* Ukuran tinggi icon */
    border-radius: 50%; /* Membuat icon berbentuk lingkaran */
}

/* Efek hover pada link dan icon */
.login-link:hover .login-icon {
    transform: scale(1.1); /* Memperbesar icon sedikit saat hover */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Memberikan bayangan saat hover */
}

/* Menambahkan efek hover pada link */
.login-link:hover {
    background-color: #f
}

#preloader {
    position: fixed;
    inset: 0;
    z-index: 999999;
    overflow: hidden;
    background: var(--background-color);
    transition: all 0.6s ease-out;
  }
  
#preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #ffffff;
    border-color: var(--accent-color) transparent var(--accent-color) transparent;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    animation: animate-preloader 1.5s linear infinite;
  }
@keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }
  
    100% {
      transform: rotate(360deg);
    }
  }
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
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

          <nav id="navmenu" class="navmenu d-flex align-items-center">
            <ul>
              <li class="dropdown"><a href="{{ url('/pengetahuan') }}"><span>Pengetahuan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li class="dropdown">
                    <a href="{{ url('/ekonomi') }}"><span>Ekonomi</span> </i></a>    
                  </li>
                  <li><a href="{{ url('/politik') }}"><span>Politik</span></a></li>
                  <li><a href="/teknologi" class="active"><span>Teknologi</span></a></li>
                  <li><a href="{{ url('/umum') }}"><span>Umum</span></i></a>
                  </li>
                </ul>
                <li class="dropdown"><a href="{{ url('/games') }}"><span>Games</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li>
                      <a href="{{ url('/icebreaking') }}"><span>Ice Breaking</span> </i></a>    
                    </li>
                    <li><a href="{{ url('/politik') }}"><span>Tes IQ</span></a></li>
                    </li>
                  </ul>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="/">About US</a></li>
                <a href="/login" class="login-link">
                  <img src="assets/img/login.png" alt="Login Icon" class="login-icon">
              </a>
              </li>
            </ul>
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
      </button>
    </div>
    <div class="image-content">
      <img src="{{ asset('assets/img/scholl.png') }}" alt="Anak Belajar" class="landing-image" />
    </div>
  </div>
</header>

<section id="education-section" class="education-section">
  <div class="main-container">
    <div class="section-header">
      <h2>Kategori Pendidikan</h2>
    </div>
    <div class="category-main-wrapper">
      <a href="/sd" class="category-link">
        <div class="category-wrapper">
          <div class="category-header">
            <i class="icon sd-icon"></i>
            <h3>SD</h3>
          </div>
        </div>
      </a>
      <a href="/Smp" class="category-link">
        <div class="category-wrapper">
          <div class="category-header">
            <i class="icon smp-icon"></i>
            <h3>SMP</h3>
          </div>
        </div>
      </a>
      <a href="/SMA" class="category-link">
        <div class="category-wrapper">
          <div class="category-header">
            <i class="icon sma-icon"></i>
            <h3>SMA</h3>
          </div>
        </div>
      </a>
      <a href="/cpns-quiz/categories" class="category-link">
        <div class="category-wrapper">
          <div class="category-header">
            <i class="icon cpns-icon"></i>
            <h3>CPNS</h3>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>
  </div>
</body>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const educationSection = document.querySelector('.education-section');

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target); // Stop observing once visible
          }
        });
      },
      { threshold: 0.1 }
    );

    observer.observe(educationSection);
  });
</script>
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
  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>