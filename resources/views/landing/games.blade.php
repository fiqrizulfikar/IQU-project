
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
    
    /* Smooth scroll */
    :root {
      scroll-behavior: smooth;
    }
    
    /*--------------------------------------------------------------
    # General Styling & Shared Classes
    --------------------------------------------------------------*/
    body {
      color: var(--default-color);
      background-color: var(--background-color);
      font-family: var(--default-font);
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
    
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: var(--heading-color);
      font-family: var(--heading-font);
    }
    body {
    font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('assets/img/gamesbkg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
    }
    main {
        padding-top: 200px; /* Atur sesuai kebutuhan */
    }
    
    .container {
        text-align: center;
    }
    
    .options {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    
    .option {
        margin: 20px;
        text-align: center;
    }
    
    .option img {
        width: 300px; /* Atur ukuran gambar sesuai kebutuhan */
        height: auto;
    }
    .main-title {
        font-family: 'Raleway', sans-serif; /* Ganti dengan font yang diinginkan */
        font-size: 3rem; /* Ukuran font besar */
        color: #ffcc00; /* Warna cerah untuk judul utama */
        text-align: center; /* Rata tengah */
        margin: 20px 0; /* Margin atas dan bawah */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Bayangan teks */
        transition: transform 0.3s, color 0.3s; /* Transisi untuk efek hover */
    }
    
    .main-title:hover {
        transform: scale(1.05); /* Efek membesar saat hover */
        color: #ff9900; /* Warna saat hover */
    }
    
    .sub-title {
        font-family: 'Poppins', sans-serif; /* Ganti dengan font yang diinginkan */
        font-size: 2rem; /* Ukuran font sedang */
        color: #ff6600; /* Warna cerah untuk subjudul */
        text-align: center; /* Rata tengah */
        margin: 10px 0; /* Margin atas dan bawah */
        font-weight: 600; /* Bold */
        transition: color 0.3s; /* Transisi untuk efek hover */
    }
    
    .sub-title:hover {
        color: #ff3300; /* Warna saat hover */
    }
    .read-more {
        display: block;
        margin-top: 10px; /* Jarak antara gambar dan teks */
        text-decoration: none;
        color: #000; /* Warna teks default */
        transition: color 0.3s, background-color 0.3s; /* Transisi warna */
        padding: 10px 15px; /* Tambahkan padding untuk kotak */
        border: 2px solid #2f00ff; /* Tambahkan border */
        border-radius: 5px; /* Buat sudut kotak membulat */
        background-color: transparent; /* Warna latar belakang default */
    }
    
    .read-more:hover {
        color: #fff; /* Warna teks saat hover */
        background-color: #2f00ff; /* Warna latar belakang saat hover */
    }
    
    .read-more:active {
        background-color: #1a00cc; /* Warna latar belakang saat diklik */
    }
    
    .read-more span {
        font-weight: bold; /* Membuat teks lebih tebal */
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
      
    </style>
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
              <h1 class="sitename">i</i></h1>
              <h1 class="sitename">-Learning</h1>
            </a>
             
       <nav id="navmenu" class="navmenu">
       <ul>
        <li><a href="#hero" class="active">Beranda</a></li>
        <li class="dropdown"><a href="{{ url('/pendidikan') }}"><span>Pendidikan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li class="dropdown"><a href="{{ url('/SekolahDasar') }}"><span>Sekolah Dasar</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">IPA</a></li>
                <li><a href="#">IPS</a></li>
                <li><a href="#">MTK</a></li>
                <li><a href="#">PKN</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="{{ url('/Smp') }}"><span>Sekolah Menengah Pertama</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">IPA</a></li>
              <li><a href="#">IPS</a></li>
              <li><a href="#">PKN</a></li>
              <li><a href="#">Bahasa Inggris</a></li>
            </ul>
            <li class="dropdown"><a href="{{ url('/Sma') }}"><span>Sekolah Menengah Atas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">IPA</a></li>
              <li><a href="#">IPS</a></li>
              <li><a href="#">PKN</a></li>
              <li><a href="#">TIK</a></li>
            </ul>
          </ul>
        <li class="dropdown"><a href="{{ url('/pengetahuan') }}"><span>Pengetahuan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Umum </a></li>
                <li><a href="#">Teknologi</a></li>
                <li><a href="#">Ekonomi</a></li>
                <li><a href="#">Politik</a></li>
              </ul>
        </li>
          <li class="dropdown"><a href="{{ url('/games') }}"><span>Games</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Ice Breaking</a></li>
            <li><a href="#">Tes IQ</a></li>
          </ul>
          <li><a href="{{ url('/mediasosial') }}">Media Sosial</a></li>
          <li><a href={{ url('/aboutus') }}>About US</a></li>
          <li><a href={{ url('/Login') }}>Login</a></li>
        </li>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>
    <body>
        <main>
            <div class="container">
              <h1 class="main-title">MARI LATIH PENGETAHUAN KALIAN DENGAN GAMES IQ</h1>
              <h2 class="sub-title">GAMES IQ MANA YANG KALIAN SUKAI:</h2>
                <div class="options">
                    <div class="option">
                        <img src="assets/img/Icebreaking.png" alt="Gambar IceBreaking"> 
                        <a href="{{ url('/icebreaking') }}" class="read-more"><span>Ice Breaking</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="option">
                        <img src="assets/img/TesIQ.jpg" alt="Globe">
                        <a href="{{ url('/tesiq') }}"class="read-more"><span>tes IQ</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                    
                </div>
            </div>
        </main>