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
      --background-color: #ededed; /* Background color for the entire website, including individual sections */
      --default-color: #444444; /* Default color used for the majority of the text content across the entire website */
      --heading-color: #040677; /* Color for headings, subheadings and title throughout the website */
      --accent-color: #1acc8d; /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
      --surface-color: #ffffff; /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
      --contrast-color: #ffffff; /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
    }
    
    /* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
    :root {
      --nav-color: #1407c2;  /* The default color of the main navmenu links */
      --nav-hover-color: #1acc8d; /* Applied to main navmenu links when they are hovered over or active */
      --nav-mobile-background-color: #ffffff; /* Used as the background color for mobile navigation menu */
      --nav-dropdown-background-color: #ffffff; /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
      --nav-dropdown-color: #444444; /* Used for navigation links of the dropdown items in the navigation menu. */
      --nav-dropdown-hover-color: #1acc8d; /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
    }
    
    /* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */
    
    .light-background {
      --background-color: #4b00d6;
      --surface-color: #160bb5;
    }
    
    .dark-background {
      --background-color: #0e00a7;
      --default-color: #1904d5;
      --heading-color: #0000b1;
      --surface-color: #0c0091;
      --contrast-color: #3803c0;
    }
    
    .header {
  --background-color: #040677;
  --default-color: #ffffff;
  --heading-color: #ffffff;

  color: var(--default-color);
  background-color: var(--background-color);

  width: 100%; /* Lebar penuh */
  height: 80px; /* Tinggi default */
  padding: 10px 20px; /* Padding untuk ruang internal */

  display: flex; /* Menggunakan Flexbox untuk mengatur konten di dalam header */
  align-items: center; /* Memposisikan konten di tengah secara vertikal */
  justify-content: space-between; /* Memisahkan konten di kiri dan kanan */

  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Menambahkan sedikit bayangan */
  position: fixed; /* Tetap di atas saat di-scroll */
  top: 0;
  z-index: 997; /* Tetap di atas elemen lain */

  transition: all 0.5s ease; /* Animasi untuk transisi warna atau ukuran */
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
  .header {
    height: 60px; /* Menyesuaikan tinggi */
    padding: 5px 15px; /* Mengurangi padding */
  }

  .header h1 {
    font-size: 1.2rem; /* Ukuran font lebih kecil */
  }
}

/* Responsif untuk layar sangat besar */
@media (min-width: 1200px) {
  .header {
    height: 100px; /* Tinggi lebih besar untuk layar besar */
    padding: 15px 30px; /* Padding lebih besar */
  }

  .header h1 {
    font-size: 2rem; /* Ukuran font lebih besar */
  }
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
  




  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #0606a8;
      color: #333;
    }

    .landing {
  height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  position: relative; /* Agar video dan konten di atasnya terstruktur dengan baik */
  color: rgb(255, 255, 255);
  text-align: center;
  padding: 20px;
  border-radius: 0 0 20px 20px;
  overflow: hidden; /* Untuk memastikan konten tidak keluar dari batas */
}

.landing video {
  position: absolute; /* Menempatkan video di belakang konten */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; /* Menutupi seluruh elemen */
  z-index: -1; /* Menempatkan video di bawah konten */
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
    font-size: 1.5rem;
    margin-bottom: 30px;
    animation: fadeIn 1.5s ease-in-out;
    
    /* Menambahkan font yang lebih menarik */
    font-family: 'Lobster', cursive; /* Ganti dengan font yang Anda inginkan */
    font-weight: 400; /* Berat font normal, bisa disesuaikan */
    
    /* Menambahkan jarak antar huruf agar lebih modern */
    letter-spacing: 0.5px;
    
    /* Mengatur jarak antar baris agar teks lebih mudah dibaca */
    line-height: 1.6;
    
    /* Menambahkan sedikit bayangan untuk teks agar lebih menonjol */
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Efek fadeIn */
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
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
      background: #2108ff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgb(61, 87, 255);
      width: 90%;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
    }

   
   /* Container Styling */
.container1 {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 70px;
  background-color: #42434a00;
}

/* Card Styling */
.card {
  width: 300px;
  background: #e8e8e8;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Card Image Styling */
.card-image-container {
  overflow: hidden;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.card-img {
  width: 100%;
  height: auto;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.card:hover .card-img {
  transform: scale(1.1);
}

/* Card Title Styling */
.card-title {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  margin: 15px 0;
}

/* Card Description Styling */
.card-des {
  font-size: 16px;
  color: #666;
  padding: 0 10px;
  margin-bottom: 20px;
}

/* Button Styling */
.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #3018e9;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-primary {
  display: inline-block;
  padding: 10px 20px;
  background-color: var(--accent-color);
  color: var(--contrast-color);
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}


.btn-primary:hover {
  background-color: color-mix(in srgb, var(--accent-color), transparent 25%);
}

.btn::before {
  content: "";
  position: absolute;
  height: 100%;
  width: 0%;
  top: 0;
  left: -40px;
  
 
  
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
                <ul class="d-flex mb-0">
                  <li class="dropdown">
                    <a href="{{ url('/ekonomi') }}"><span>Ekonomi</span> </i></a>    
                  </li>
                  <li><a href="{{ url('/politik') }}"><span>Politik</span></a></li>
                  <li><a href="/teknologi" class="active"><span>Teknologi</span></a></li>
                  <li><a href="{{ url('/umum') }}"><span>Umum</span></i></a>
                  </li>
                </ul>
                <li class="dropdown"><a href="{{ url('/pendidikan') }}"><span>Pendidikan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li>
                      <a href="{{ url('/sd') }}"><span>Sekolah Dasar</span> </i></a>    
                    </li>
                    <li><a href="{{ url('/Smp') }}"><span>Sekolah Menengah Pertama</span></a></li>
                    <li><a href="/SMA" class="active"><span>Sekolah Menengah Atas</span></a></li>
                    <li><a href="{{ url('/cpns-quiz/categories') }}"><span>Tes CPNS</span></i></a>
                    </li>
                  </ul>
                <li><a href="{{ url('/contact') }}">Media Sosial</a></li>
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

  
  <!-- Hero Section -->
  <header class="landing">
    <div class="countainer">
      <video autoplay loop muted>
        <source src="assets/img/vidiooo.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <h1>Selamat Datang di <span>i-QUIZ</span></h1>
        <p>
           Selamat datang di Halaman Games , disini menyediakan  kuis seru yang terdiri dari dua bagian. Bagian pertama adalah tes IQ, di mana kalian bisa menguji seberapa tajam kemampuan berpikir kalian. Lalu, untuk mencairkan suasana, kita akan lanjut ke sesi ice breaking yang dijamin seru dan menyenangkan. Jadi, siapkan pikiran kalian, tetap santai, dan mari kita mulai dengan penuh semangat!
        </p>
        <a href="#cards-section" class="btn-primary">Jelajahi Sekarang</a>
        <script>
          document.querySelector('.btn-primary').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah perilaku default dari anchor link
            document.querySelector('#cards-section').scrollIntoView({
              behavior: 'smooth'  // Mengatur scroll menjadi halus
            });
          });
        </script>
        
    </div>
  </header>

  <!-- Content Section -->
  <div id="cards-section" class="container1">
    <div class="card">
      <div class="card-image-container">
        <img class="card-img" src="assets/img/testes.jpg" alt="Tes IQ">
      </div>
      <p> TES IQ</p>
      <p class="card-des">
        "Selamat datang di tantangan Tes IQ! Siapkan diri Anda untuk menghadapi pertanyaan-pertanyaan menarik. Klik tombol 'Mulai' untuk memulai!"
      </p>
       <a href="/tesiq" class="btn">Mulai</a>
    </div>

    
    
<div class="card">
  <div class="card-image-container">
    <img class="card-img" src="assets/img/breking.jpg" alt="icebreaking">
  </div>
  <p> ICE BREAKING</p>
  <p class="card-des">
    "Yuk, tingkatkan suasana dengan menonton video ice breaking yang seru di YouTube. Temukan ide-ide menarik untuk mencairkan suasana!"
  </p>
  <a href="/icebreaking" class="btn">Mulai</a>
</div>

<div class="card">
  <div class="card-image-container">
    <img class="card-img" src="assets/img/pppu.jpg" alt="icebreaking">
  </div>
  <p> ICE BREAKING QUIZ</p>
  <p class="card-des">
    "Yuk, tingkatkan suasana dengan memainkan kuis lucu dan kocak tentang gambar hewan . ayo coba sekarang!"
  </p>
  <a href="/icebreakinggames" class="btn">Mulai</a>
</div>

  </div>
</body>
</html>