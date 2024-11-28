
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
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #1a1a2e, #16213e);
  color: #fff;
  margin: 0;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  overflow: hidden;
}

.container {
  text-align: center;
  position: relative;
}

.child {
  width: 100px;
  position: absolute;
  bottom: 50px;
  left: 50%;
  transform: translateX(-50%);
  transition: transform 1s ease;
}

.main-title {
  font-size: 2.8rem;
  color: #ffcc00;
}

.sub-title {
  font-size: 1.5rem;
  color: #f1f1f1;
  margin-bottom: 40px;
}

.options {
  display: flex;
  flex-direction: column;
  gap: 20px;
  align-items: center;
}

.option {
  background: #243b55;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  padding: 20px;
  text-align: center;
  cursor: pointer;
  transition: transform 0.3s ease;
  width: 80%;
  max-width: 400px;
}

.option:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
}

.option a {
  text-decoration: none;
  font-size: 1.2rem;
  font-weight: 600;
  color: #ffcc00;
  transition: color 0.3s ease;
}

.option span {
  display: block;
}
.child {
  width: 120px;
  position: absolute;
  bottom: 50px;
  left: 50%;
  transform: translateX(-50%);
  transition: transform 1s ease;
  filter: brightness(1.2) contrast(1.1) saturate(1.3); /* Menyesuaikan kecerahan dan saturasi */
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
  border-radius: 15px;
}
@keyframes bounceIn {
  0% {
    transform: translateY(50px) scale(0.8);
    opacity: 0;
  }
  60% {
    transform: translateY(-10px) scale(1.1);
  }
  100% {
    transform: translateY(0) scale(1);
    opacity: 1;
  }
}

.child {
  animation: bounceIn 1.5s ease-out;
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
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
          
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
                <li><a href="#hero" class="active">Beranda</a></li>
                <li class="dropdown"><a href="{{ url('/pendidikan') }}"><span>Pendidikan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li>
                      <a href="{{ url('/sekolahdasar') }}"><span>Sekolah Dasar</span> </i></a>                    
                    </li>
                    <li><a href="/SMA" class="active"><span>Sekolah Menengah Pertama</span></a></li>
                  </ul>
                  <li class="dropdown"><a href="{{ url('/pengetahuan') }}"><span>Pengetahuan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="{{ url('/umum') }}">Umum </a></li>
                      <li><a href="{{ url('/teknologi') }}">Teknologi</a></li>
                      <li><a href="{{ url('/ekonomi') }}">Ekonomi</a></li>
                      <li><a href="{{ url('/politik') }}">Politik</a></li>
                    </ul>
              </li>
                </li>
                  <li class="dropdown"><a href="{{ url('/games') }}"><span>Games</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Ice Breaking</a></li>
                    <li><a href="#">Tes IQ</a></li>
                  </ul>
                  <li><a href="{{ url('/mediasosial') }}">Media Sosial</a></li>
                  <li><a href="/aboutus">About US</a></li>
                  <li><a href="/login">Login</a></li>
                </li>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
              </nav>
      </div>
    </header>
    <body>
        <main>
          <div class="container">
            <h1 class="main-title">💡 AYO PERBANYAK PENGETAHUANMU!</h1>
            <h2 class="sub-title">PILIH MATERI YANG INGIN KAMU KUASAI:</h2>
            <img src="assets/img/anak.jpg" alt="Anak Kecil" class="child" id="childAnimation">
            <div class="options">
              <div class="option" data-option="IPA">
                <a href="{{ url('/smaipa') }}" class="read-more">
                  <span>🌿 Ilmu Pengetahuan Alam</span>
                </a>
              </div>
              <div class="option" data-option="IPS">
                <a href="{{ url('/smaips') }}" class="read-more">
                  <span>🌍 Ilmu Pengetahuan Sosial</span>
                </a>
              </div>
              <div class="option" data-option="PKN">
                <a href="{{ url('/smapkn') }}" class="read-more">
                  <span>🏛 Pendidikan Kewarganegaraan</span>
                </a>
              </div>
              <div class="option" data-option="TI">
                <a href="{{ url('/smatik') }}" class="read-more">
                  <span>💻 Ilmu Teknologi Informasi</span>
                </a>
              </div>
            </div>
          </div>
          
          </div>          
          
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800, // Durasi animasi
    once: true,    // Animasi hanya berjalan sekali
  });
  document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', function() {
      const child = document.getElementById('childAnimation');
      child.style.transform = 'translateX(0) scale(1.2)';
      
      // Mengembalikan ke posisi semula setelah 1 detik
      setTimeout(() => {
        child.style.transform = 'translateX(-50%) scale(1)';
      }, 1000);
    });
  });
</script>
        </main>