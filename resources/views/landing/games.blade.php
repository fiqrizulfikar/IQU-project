<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
 
  <title>Landing Page Full Screen</title>
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

.navbar::before {
    content: "";
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 20px;
    background-color: #ff5722; /* Warna kotak */
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    z-index: -1; /* Pastikan kotak berada di belakang elemen lain */
}

.navmenu {
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center;
    list-style: none;
    gap: 15px; /* Jarak antar item */
}

.navmenu li {
    position: relative;
}

.navmenu a,
.navmenu a:focus {
    color: var(--nav-color);
    font-size: 15px;
    padding: 10px 20px; /* Padding yang lebih baik */
    font-family: var(--nav-font);
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: color 0.3s, background-color 0.3s;
}

.navmenu a:hover {
    background-color: var(--nav-hover-color);
    color: var(--contrast-color);
    border-radius: 4px;
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
    display: block; /* Tampilkan dropdown saat hover */
}

.navmenu .dropdown ul li a {
    padding: 10px 20px;
    display: block;
    color: #1acc8d; /* Warna teks dropdown */
}

.navmenu .dropdown ul li a:hover {
    background-color: #1acc8d; /* Warna latar belakang saat hover */
    color: white; /* Warna teks saat hover */
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
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
      color: #333;
    }

    .landing {
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #fffb10 0%, #1c1b07 100%);
      color: white;
      text-align: center;
      padding: 20px;
      border-radius: 0 0 20px 20px;
    }
    .container {
    max-width: 1200px; /* Atur lebar maksimum */
    margin: 0 auto; /* Pusatkan konten */
    padding: 20px; /* Tambahkan padding */
}

    .landing h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      animation: fadeIn 1s ease-in-out;
    }

    .landing p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      animation: fadeIn 1.5s ease-in-out;
    }

    .landing .btn-primary {
      display: inline-block;
      background: #f9c80e;
      color: #333;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: 600;
      text-transform: uppercase;
      border-radius: 5px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .landing .btn-primary:hover {
      background: #f5a623;
      transform: scale(1.1);
    }

    .container1 {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 40px;
      padding: 10px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 90%;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
    }

   
    .card {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  width: 230px;
  height: 330px;
  background-color: var(--white, #ffffff);
  border-radius: 10px;
  box-shadow: 0px 10px 12px rgba(0, 0, 0, 0.08), -4px -4px 12px rgba(0, 0, 0, 0.08);
  padding: 15px;
  box-sizing: border-box;
  overflow: hidden;
  transition: all 0.3s;
  cursor: pointer;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 0px 20px 20px rgba(0, 0, 0, 0.1), -4px -4px 12px rgba(0, 0, 0, 0.08);
}

.card-image-container {
    width: 100%;
    height: 280px; /* Tinggi kontainer */
    border-radius: 10px;
    margin-bottom: 12px;
    overflow: hidden; /* Menyembunyikan bagian gambar yang keluar dari kontainer */
    background-color: rgb(254, 254, 255);
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-img {
    width: 100%; /* Membuat gambar memenuhi lebar kontainer */
    height: 200%; /* Mempertahankan rasio aspek gambar */
    max-height: 100%; /* Membatasi tinggi gambar agar tidak melebihi kontainer */
    object-fit: cover; /* Memastikan gambar mengisi kontainer dengan baik */
    transition: transform 0.3s; /* Menambahkan efek transisi saat gambar diperbesar */
}

.card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Menjaga proporsi gambar */
  border-radius: 10px;
}

.card-title {
  margin: 0;
  font-size: 17px;
  font-family: "Lucida Sans", Geneva, Verdana, sans-serif;
  font-weight: 600;
  color: #1797b8;
  text-align: center;
}

.card-des {
  margin: 0 0 15px;
  font-size: 13px;
  font-family: "Lucida Sans", Geneva, Verdana, sans-serif;
  color: #1797b8;
  text-align: center;
  line-height: 1.5;
}

.btn {
  color: purple;
  text-transform: uppercase;
  text-decoration: none;
  border: 2px solid purple;
  padding: 10px 20px;
  font-size: 17px;
  font-weight: bold;
  background: transparent;
  position: relative;
  transition: all 1s;
  overflow: hidden;
  text-align: center;
}

.btn:hover {
  color: white;
}

.btn::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 0%;
  top: 0;
  left: -40px;
  transform: skewX(45deg);
  background-color: purple;
  z-index: -1;
  transition: all 1s;
}

.btn:hover::before {
  width: 160%;
}


    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<!-- Navbar -->
<body>
  <head>
  <body class="index-page"></body>
  
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <!-- Logo Section -->
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="logoiqu.com">
        <h1 class="sitename">i</h1>
        <h1 class="sitename">-QUIZ</h1>
      </a>
      
      <!-- Navigation Menu -->
      <nav id="navmenu" class="navmenu d-flex align-items-center">
        <ul class="d-flex mb-0">
          <li class="dropdown">
            <a href="{{ url('/pengetahuan') }}"><span>Pengetahuan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/ekonomi') }}">Ekonomi</a></li>
              <li><a href="{{ url('/politik') }}">Politik</a></li>
              <li><a href="/teknologi" class="active">Teknologi</a></li>
              <li><a href="{{ url('/umum') }}">Umum</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="{{ url('/games') }}"><span>Games</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/ekonomi') }}">Ekonomi</a></li>
              <li><a href="{{ url('/politik') }}">Politik</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/mediasosial') }}">Media Sosial</a></li>
          <li><a href="/">About Us</a></li>
        </ul>
        <!-- Login Link -->
        <a href="/login" class="login-link">
          <img src="assets/img/login.png" alt="Login Icon" class="login-icon">
        </a>
      </nav>
      
      <!-- Mobile Toggle Icon -->
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </div>
  </header>
</body>
</head>
</body>
  
  <!-- Hero Section -->
  <header class="landing">
    <div class="countainer">
      <h1>Selamat Datang di <span>i-QUIZ</span></h1>
        <p>
      Temukan pengalaman belajar interaktif dan seru dengan i-QUIZ. Cobalah tes IQ, media pembelajaran, dan games menarik untuk semua tingkat pendidikan.
        </p>
        <a href="#features" class="btn-primary">Jelajahi Sekarang</a>
    </div>
  </header>

  <!-- Content Section -->
  <div class="container1">
    <div class="card">
      <div class="card-image-container">
        <img class="card-img" src="assets/img/TES IQ.png" alt="Tes IQ">
        
      </div>
      
      <p> TES IQ</p>
      <p class="card-des">
        AYO COBA PENGETAHUAN IQ
      </p>
       <a href="/tesiq" class="btn">Mulai</a>
    </div>

    
    
<div class="card">
  <div class="card-image-container">
    <img class="card-img" src="assets/img/breaking.png" alt="icebreaking">
  </div>
  <p> ICE BREAKING</p>
  <p class="card-des">
   AYO LAKUKAN GAMES
  </p>
  <button class="btn">Mulai</button>
</div>


  </div>
</body>
</html>