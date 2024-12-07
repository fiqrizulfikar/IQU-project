
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

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
  <!DOCTYPE html>
<html lang="id">
<head>
<link href="assets/css/SD/IPASD.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar dan Cards</title>



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
    /* Reset */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    /* Navbar */
    .navbar {
        background-color: #002776;
        color: white;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .navbar h1 {
        font-size: 24px;
        color: white;
        margin: 0;
        display: flex;
        align-items: center;
    }

    .navbar h1 img {
        height: 40px;
        margin-right: 10px;
    }

    /* Navbar Links */
    .navbar ul {
        list-style: none;
        display: flex;
        gap: 20px;
    }

    .navbar ul li {
        position: relative;
    }

    .navbar ul li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        padding: 8px 12px;
        display: block;
    }

    .navbar ul li a:hover {
        border-bottom: 2px solid #00ccff;
    }

    /* Dropdown */
    .navbar ul li .dropdown {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #0033a0;
        border-radius: 5px;
        min-width: 150px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .navbar ul li .dropdown a {
        padding: 10px 15px;
        color: white;
    }

    .navbar ul li:hover .dropdown {
        display: block;
    }

    /* Responsif Navbar */
    @media (max-width: 768px) {
        .navbar ul {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
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
  background-color: #2c3e50;
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
/* Reset and General Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background: #f9f9f9;
  color: #333;
  line-height: 1.6;
}

/* Landing Section */
.landing {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: linear-gradient(135deg, #8e44ad, #3498db);
  text-align: center;
  color: white;
  padding: 40px 20px;
}

.landing h1 {
  font-size: 64px;
  margin-bottom: 20px;
}

.landing p {
  font-size: 20px;
  margin-bottom: 30px;
}

.cta-btn {
  background: white;
  color: #3498db;
  padding: 15px 30px;
  font-size: 18px;
  border: none;
  border-radius: 30px;
  cursor: pointer;
  transition: all 0.3s ease;
  text-decoration: none;
}

.cta-btn:hover {
  background: #3498db;
  color: white;
  transform: scale(1.1);
}

/* Menu Section */
.menu-section {
  padding: 50px 20px;
  background: #ffffff;
}

.menu-section h2 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 20px;
  color: #333;
}

.menu {
  display: flex;
  justify-content: center;
  gap: 30px;
  list-style: none;
}

.menu-item {
  position: relative;
  padding: 15px 20px;
  font-size: 20px;
  font-weight: bold;
  background: linear-gradient(135deg, #74b9ff, #81ecec);
  border-radius: 8px;
  color: white;
  cursor: pointer;
  transition: all 0.3s ease;
}

.menu-item:hover {
  transform: scale(1.1);
}

.menu-item .dropdown {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background: #dfe6e9;
  list-style: none;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  z-index: 10;
}

.menu-item:hover .dropdown {
  display: block;
}

.dropdown li {
  padding: 10px 20px;
}

.dropdown li a {
  text-decoration: none;
  color: #3498db;
  transition: all 0.3s ease;
}

.dropdown li a:hover {
  color: #2c3e50;
}

/* Responsive Design */
@media (max-width: 768px) {
  .menu {
    flex-direction: column;
    gap: 20px;
  }

  .landing h1 {
    font-size: 48px;
  }
}

</style>

</head>
<body>

   <!-- Navbar -->
 
   <nav class="navbar">
    <h1>
        <img src="assets/img/logo.png" alt="Logo">
        Tes CPNS
    </h1>
    <ul>
        <li><a href="/">Beranda</a></li>
        <li>
            <a href="/pendidikan">Pendidikan</a>
            
        </li>
        <li>
            <a href="/pengetahuan">Pengetahuan</a>
            
        </li>
        <li>
            <a href="/games">Games</a>
           
        </li>
        <li>
            <a href="/mediasosial">Media Sosial</a>
           
            </div>
        </li>
        <li><a href="/aboutus">About US</a></li>
    </ul>
</nav>
<body>
  <!-- Landing Section -->
  <section id="landing" class="landing">
    <div class="container">
      <h1>Selamat Datang di EdukasiKu</h1>
      <p>Tempat belajar menyenangkan dari SD hingga persiapan CPNS.</p>
      <button class="cta-btn"><a href="#education-menu">Jelajahi</a></button>
    </div>
  </section>

  <!-- Menu Pendidikan -->
  <section id="education-menu" class="menu-section">
    <div class="container">
      <h2>Kategori Pendidikan</h2>
      <ul class="menu">
        <li class="menu-item">SD
          <ul class="dropdown">
            <li><a href="#sd-ipa">IPA</a></li>
            <li><a href="#sd-ips">IPS</a></li>
            <li><a href="#sd-mtk">Matematika</a></li>
            <li><a href="#sd-pkn">PKN</a></li>
          </ul>
        </li>
        <li class="menu-item">SMP
          <ul class="dropdown">
            <li><a href="#smp-ipa">IPA</a></li>
            <li><a href="#smp-ips">IPS</a></li>
            <li><a href="#smp-mtk">Matematika</a></li>
            <li><a href="#smp-pkn">PKN</a></li>
          </ul>
        </li>
        <li class="menu-item">SMA
          <ul class="dropdown">
            <li><a href="#sma-ipa">IPA</a></li>
            <li><a href="#sma-ips">IPS</a></li>
            <li><a href="#sma-pkn">PKN</a></li>
            <li><a href="#sma-tik">TIK</a></li>
          </ul>
        </li>
        <li class="menu-item">CPNS
          <ul class="dropdown">
            <li><a href="#cpns-tiu">TIU</a></li>
            <li><a href="#cpns-twk">TWK</a></li>
            <li><a href="#cpns-tkp">TKP</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </section>
</body>
</html>
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
