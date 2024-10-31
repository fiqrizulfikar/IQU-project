<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
    <style>

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

   /* Reset & Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;

}

/* Hero Section */
.hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    background-image: url('https://images.pexels.com/photos/6615278/pexels-photo-6615278.jpeg?auto=compress&cs=tinysrgb&w=400'); /* Ganti dengan URL gambar latar yang sebenarnya */
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
}

.hero-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Overlay */
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 700px;
    padding: 20px;
}

.hero-content h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-weight: bold;
    line-height: 1.2;
}

.hero-content p {
    font-size: 1rem;
    margin-bottom: 30px;
    color: #b3b3b3;
    line-height: 1.5;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    font-size: 1rem;
    border-radius: 5px;
    transition: all 0.3s ease;
    position: relative;
}

.cta-button span {
    margin-left: 10px;
    transition: margin-left 0.3s ease;
}

.cta-button:hover {
    background-color: #5d33d1;
}

.cta-button:hover span {
    margin-left: 15px;
}



body {
    background-color: #2506f3;
    color: #48e917;
    display: cover;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
    text-align: center;
    width: 100%;
    margin-bottom: 20px;
    background-color: var(--background-color);
    
    
}

.kotak {
  background-color: white;
  width: 100%;
  margin: 0 auto;
  text-align: center;
  padding-top: 30px;
  margin-bottom: 30px;
}

h1 {
  font-size: 2.5rem;
  margin-bottom: 25px;
}

.buttons {
  margin-bottom: 20px;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #333;
  color: white;
  border-radius: 5px;
  text-decoration: none;
  margin: 0 10px;
  transition: background-color 0.3s ease;
}

.mission-btn {
  background-color: #6e00ff;
}

.vision-btn {
  background-color: #6e00ff;
}

.btn:hover {
  background-color: #444;
}

.content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 40px;
}

.image-kotak {
  flex: 1;
  padding-right: 20px;
  margin: 15px;
  width: 300px;
  
}

.conference-image {
  width: 100%;
  border-radius: 10px;
}

.text-kotak {
  flex: 1;
  padding-left: 20px;
  text-align: left;
  margin-bottom: 450px;
}

h2 {
  font-size: 2rem;
  margin-bottom: 20px;
}

p {
  caret-color: black;
  font-size: 1.1rem;
  margin-bottom: 20px;
}

.features {
  list-style: none;
  padding: 0;
}

.features li {
  font-size: 1.1rem;
  margin-bottom: 10px;
}

.features li span {
  color: #6e00ff;
  margin-right: 10px;
  font-size: 1.5rem;
}

/* Section: About Principles */
.about {
    max-width: 800px;
    text-align: center;
    margin-bottom: 20px;
}

.about h1 {
    font-size: 24px;
    margin-bottom: 30px;
}

.principles {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}

.principle-card {
    background-color: #4ca95f;
    border-radius: 10px;
    padding: 20px;
    width: 180px;
    height: 190px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.principle-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 15px rgba(255, 0, 150, 0.5);
}

.icon {
    font-size: 40px;
    color: #ff00a6;
    margin-bottom: 10px;
}

.principle-card h2 {
    font-size: 18px;
    color: #ff00a6;
    margin-bottom: 10px;
}

.principle-card p {
    font-size: 14px;
    color: #ccc;
    text-align: center;
}

    </style>
</head>
<body>
    

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


  <section class="hero-section">
    <div class="hero-content">
        <h1>About As</h1>
        <p>This is our team ipsum dolor sit amet consectetur. Adipiscing craaliquam purus. Elit ac quisque eleifend aliquam vitae. In tincidunt purus quam diam convallis porttitor nisi amet.</p>
        <a href="#" class="cta-button"> <span></span></a>
    </div>
</section>

    <section class="kotak-vision">
        <div class="kotak">
            <h1><b>About as</b></h1>
            <div class="buttons">
            </div>
            <div class="content">
                <div class="image-kotak">
                    <img src="https://images.pexels.com/photos/5677357/pexels-photo-5677357.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Conference" class="conference-image"> <!-- Ganti dengan gambar yang sesuai -->
                </div>
                <div class="text-kotak">
                    <h2>Championing Soccer Excellence</h2>
                    <p>Wesum dolor sit amet consectetur. In ornare mauris quam donec diam sabulum sed ultricies neque amet enim mus.</p>
                    <p>Fsum dolor sit amet consectetur. In ornare mauris quam donec diam sagittis. Lomm sed vestibulum sed ultricies neque amet.</p>
                    <p>Pamet consectetur. In ornare mauris quam donec diam sagittis.rem sed vesm sed ultricies neque amet enim mus.</p>
                    <ul class="features">
                        <li><span>✔</span> Attention to Detail</li>
                        <li><span>✔</span> Engagement and Impact</li>
                        <li><span>✔</span> Technology Integration</li>
                        <li><span>✔</span> Creativity</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

  