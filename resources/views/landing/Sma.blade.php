
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
        background-image: url('assets/img/UMUM.png');
        background-size: cover; /* Mengisi seluruh latar belakang */
        background-position: center; /* Memusatkan gambar latar */
        background-attachment: fixed; /* Membuat gambar tetap di tempat saat di-scroll */
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
        gap: 20px;
    }
    
    .option {
        margin: 20px;
        text-align: center;
        opacity: 0; /* Mulai dengan transparan */
        animation: fadeIn 1s forwards; /* Animasi selama 1 detik */
        text-align: center;
    }
    
    .option img {
        width: 100px; /* Atur ukuran gambar sesuai kebutuhan */
        height: auto;
        margin-bottom: 10px;
    }
    .option:nth-child(1) {
      animation-delay: 0s; /* Ikon pertama muncul tanpa delay */
    }
    .option:nth-child(2) {
      animation-delay: 0.3s; /* Ikon kedua muncul setelah 0.3 detik */
    }
    .option:nth-child(3) {
      animation-delay: 0.6s; /* Ikon ketiga muncul setelah 0.6 detik */
    }
    .option:nth-child(4) {
      animation-delay: 0.9s; /* Ikon keempat muncul setelah 0.9 detik */
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
      .footer {
        color: var(--default-color);
        background-color: var(--background-color);
        font-size: 14px;
        position: relative;
        margin-top: 180px;
      }
      
      .footer .footer-top {
        padding-top: 50px;
        border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
      }
      
      .footer .footer-about .logo {
        line-height: 1;
        margin-bottom: 25px;
      }
      
      .footer .footer-about .logo img {
        max-height: 40px;
        margin-right: 6px;
      }
      
      .footer .footer-about .logo span {
        font-size: 26px;
        font-weight: 700;
        letter-spacing: 1px;
        font-family: var(--heading-font);
        color: var(--heading-color);
      }
      
      .footer .footer-about p {
        font-size: 14px;
        font-family: var(--heading-font);
        text-align: left;
      }
      
      .footer .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 50%);
        font-size: 16px;
        color: color-mix(in srgb, var(--default-color), transparent 30%);
        margin-right: 10px;
        transition: 0.3s;
        
      }
      
      .footer .social-links a:hover {
        color: var(--accent-color);
        border-color: var(--accent-color);
      }
      
      .footer h4 {
        font-size: 16px;
        font-weight: bold;
        position: relative;
        padding-bottom: 12px;
      }
      
      .footer .footer-links {
        margin-bottom: 30px;
        
      }
      
      .footer .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
      
      }
      
      .footer .footer-links ul i {
        padding-right: 2px;
        font-size: 12px;
        line-height: 0;
        
      }
      
      .footer .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
        
      }
      
      .footer .footer-links ul li:first-child {
        padding-top: 0;
       
      }
      
      .footer .footer-links ul a {
        color: color-mix(in srgb, var(--default-color), transparent 30%);
        display: inline-block;
        line-height: 1;
      }
      
      .footer .footer-links ul a:hover {
        color: var(--accent-color);
      }
      
      .footer .footer-contact p {
        margin-bottom: 5px;
      }
      
      .footer .footer-newsletter .newsletter-form {
        margin-top: 30px;
        margin-bottom: 15px;
        padding: 6px 8px;
        position: relative;
        border-radius: 4px;
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 80%);
        display: flex;
        background-color: var(--background-color);
        transition: 0.3s;
      }
      
      .footer .footer-newsletter .newsletter-form:focus-within {
        border-color: var(--accent-color);
      }
      
      .footer .footer-newsletter .newsletter-form input[type=email] {
        border: 0;
        padding: 4px;
        width: 100%;
        background-color: var(--background-color);
        color: var(--default-color);
      }
      
      .footer .footer-newsletter .newsletter-form input[type=email]:focus-visible {
        outline: none;
      }
      
      .footer .footer-newsletter .newsletter-form input[type=submit] {
        border: 0;
        font-size: 16px;
        padding: 0 20px;
        margin: -7px -8px -7px 0;
        background: var(--accent-color);
        color: var(--contrast-color);
        transition: 0.3s;
        border-radius: 0 4px 4px 0;
      }
      
      .footer .footer-newsletter .newsletter-form input[type=submit]:hover {
        background: color-mix(in srgb, var(--accent-color), transparent 20%);
      }
      
      .footer .copyright {
        padding: 25px 0;
        border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
      }
      
      .footer .copyright p {
        margin-bottom: 0;
      }
      
      .footer .credits {
        margin-top: 6px;
        font-size: 13px;
      }
      
      /*--------------------------------------------------------------
      # Preloader
      --------------------------------------------------------------*/
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
      
      /*--------------------------------------------------------------
      # Scroll Top Button
      --------------------------------------------------------------*/
      .scroll-top {
        position: fixed;
        visibility: hidden;
        opacity: 0;
        right: 15px;
        bottom: 15px;
        z-index: 99999;
        background-color: var(--accent-color);
        width: 40px;
        height: 40px;
        border-radius: 4px;
        transition: all 0.4s;
      }
      
      .scroll-top i {
        font-size: 24px;
        color: var(--contrast-color);
        line-height: 0;
      }
      
      .scroll-top:hover {
        background-color: color-mix(in srgb, var(--accent-color), transparent 20%);
        color: var(--contrast-color);
      }
      
      .scroll-top.active {
        visibility: visible;
        opacity: 1;
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
              <h1 class="sitename">-QUIZ</h1>
            </a>
             
       <nav id="navmenu" class="navmenu">
       <ul>
        <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
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
              <li><a href="{{ url('/smaipa') }}">IPA</a></li>
              <li><a href="#">IPS</a></li>
              <li><a href="#">PKN</a></li>
              <li><a href="#">TIK</a></li>
            </ul>
          </ul>
        <li class="dropdown"><a href="{{ url('/pengetahuan') }}"><span>Pengetahuan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('/umum') }}">Umum </a></li>
                <li><a href="{{ url('/teknologi') }}">Teknologi</a></li>
                <li><a href="{{ url('/ekonomi') }}">Ekonomi</a></li>
                <li><a href="{{ url('/politik') }}">Politik</a></li>
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
              <h1 class="main-title">AYO PERBANYAK PENGETAHUANMU!</h1>
              <h2 class="sub-title">MANA YANG INGIN KAMU KUASAI:</h2>
                <div class="options">
                    <div class="option">
                        <img src="assets/img/buku.png" alt="Buku"> 
                        <a href="{{ url('/umum') }}" class="read-more"><span>Belajar Umum</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="option">
                        <img src="assets/img/ekonomi.png" alt="Globe">
                        <a href="{{ url('/ekonomi') }}" class="read-more"><span>Belajar Ekonomi</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="option">
                        <img src="assets/img/teknologi.png"alt="teknologi">
                        <a href="{{ url('/teknologi') }}" class="read-more"><span>Belajar Teknologi</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="option">
                        <img src="assets/img/court.png"alt="Politik">
                        <a href="{{ url('/politik') }}" class="read-more"><span>Belajar Politik</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    
        </main>
    
        <footer id="footer" class="footer dark-background">
    
          <div class="container footer-top">
            <div class="row gy-4">
              <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                  <span class="sitename">IQU.com</span>
                </a>
                <div class="footer-contact pt-3">
                  <p>Semarang</p>
                  <p>Tembalang,Amposari</p>
                  <p class="mt-3"><strong>Phone:</strong> <span>085601742751</span></p>
                  <p><strong>Email:</strong> <span>iqu123@gmail.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
      
              <div class="col-lg-2 col-md-3 footer-links">
                <h4>Tautan Berguna</h4>
                <ul>
                  <li><a href="#">Beranda</a></li>
                  <li><a href="#">Pendidikan</a></li>
                  <li><a href="#">Pengetahuan</a></li>
                  <li><a href="#">Games</a></li>
                  <li><a href="#">Media Sosial</a></li>
                  <li><a href="#">About As</a></li>
                </ul>
              </div>
      
              <div class="col-lg-2 col-md-3 footer-links">
                <h4>Layanan Kami</h4>
                <ul>
                  <li><a href="#">Pembelajaran Interaktif</a></li>
                  <li><a href="#">Kuis & Tes Pemahaman</a></li>
                  <li><a href="#">Bimbingan Belajar Online</a></li>
                  <li><a href="#">Belajar Terstruktur</a></li>
                  <li><a href="#">Fitur Ice Breaking & Tes IQ</a></li>
                </ul>
              </div>
      
              <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4></h4>
                <p>Selamat menikmati</p>
                <form action="forms/newsletter.php" method="post" class="php-email-form">
                  <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
              </div>
      
            </div>
          </div>
      
          <div class="container copyright text-center mt-4">
            <link href="assets/img/www.png" rel="icon">
            <p> <span></span> <strong class="px-1 sitename">IQU.com</strong> <span></span></p>
            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you've purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
              
            </div>
          </div>
      
        </footer>
      
        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      
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
      
        
      
    