<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="assets/css/mediasosial7.css" rel="stylesheet">
    <title>Contact Page</title>
    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #0c0c38;
    color: #ffffff;
    overflow: hidden;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}


.navbar {
    width: 100%;
    padding: 20px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar .logo {
    font-size: 1.5em;
    font-family:skrip, sans serif;
    margin-right:10px;
    color: #ffffff;
    position: relative;
    display: inline-block;
    cursor: pointer;
    overflow: hidden;
}

.navbar .logo::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);
    z-index: 1;
    transition: left 0.6s ease;
}

.navbar .logo:hover::after {
    left: 100%;
}


.navbar a {
    color: #ffffff;
    text-decoration: none;
    font-size: 1em;
    margin: 0 15px;
    transition: color 0.3s;
}

.navbar a:hover {
    color: #00bcd4;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    width: 100%;
    padding: 40px;
    margin-top: 18px;
    gap: 20px;
}

.text-section {
    flex: 1;
    padding-right: 20px;
    
}

.text-section h1 {
    font-size: 4em;
    font-family:'Playfair Display', serif;;
    margin-bottom: 40px;
}

.text-section p {
    font-family:'robo', sans-serif;
    font-size: 0.9em;
    margin-bottom: 30px;
}

.form-section {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-section input, .form-section textarea {
    width: 100%;
    padding: 10px;
    font-size: 1em;
    border: 1px solid #ffffff;
    border-radius: 5px;
    outline: none;
    background: transparent;
    color: #ffffff;
    transition: border-color 0.3s, color 0.3s;
}

.form-section input:focus, .form-section textarea:focus {
    border-color: #00bcd4;
    color: #00bcd4;
}

.form-section button {
    padding: 10px;
    font-size: 1em;
    border: 1px solid #ffffff;
    background: transparent;
    color: #ffffff;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.form-section button:hover {
    background-color: #00bcd4;
    color: #ffffff;
}
.social-icons {
    margin-top: 20px;
    gap: 15px;
}

.social-icons a {
    margin: 0 10px;
    color: #ffffff;
    font-size: 1.5em;
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #00bcd4;
}

.wave-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    overflow: hidden;
    background: linear-gradient(45deg, #ff6a00, #ee0979, #ff007f);
    background-size: 400% 400%;
    animation: wave 15s ease infinite;
}

/* Animasi Gelombang */
@keyframes wave {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.wave-bg .circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.4);
    animation: float 10s infinite ease-in-out, colorChange 3s infinite alternate;
}

/* Animasi gerakan float */
@keyframes float {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-50px);
    }
    100% {
        transform: translateY(0);
    }
}

/* Animasi perubahan warna */
@keyframes colorChange {
    0% {
        background: rgba(255, 255, 255, 0.2);
    }
    50% {
        background: rgba(0, 255, 255, 0.5);
    }
    100% {
        background: rgba(255, 255, 255, 0.2);
    }
}


/* Footer Styling */
.footer {
width: 100%;
color: #3C3D37;
display: flex; /* Mengaktifkan Flexbox */
justify-content: center; /* Pusatkan elemen secara horizontal */

padding: 20px 10px;
font-size: 0.9em;
margin-top: auto; /* Menempel di bawah */
}

.footer-content {
display: flex; /* Membuat elemen anak sejajar horizontal */
gap: 15px; /* Jarak antar elemen */
align-items: center;
}

.footer-content p {
margin: 0;
}

.footer-content a {
color: #00bcd4; /* Warna biru cerah */
text-decoration: none;
transition: color 0.3s ease;
}

.footer-content a:hover {
color: #ffffff; /* Warna hover */
}

/* Efek Animasi Muncul */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px); /* Mulai dari bawah */
    }
    100% {
        opacity: 1;
        transform: translateY(0); /* Posisi normal */
    }
}

.fade-in {
    opacity: 0;
    animation: fadeIn 1s forwards;
}

.fade-in-delay {
    animation-delay: 0.5s; /* Memberikan sedikit delay agar elemen muncul satu per satu */
}

.form-section input, .form-section textarea, .text-section h1, .text-section p {
    opacity: 0; /* Mulai dengan opacity 0, sehingga elemen tidak terlihat */
}



    </style>
   
</head>
<body>
<div class="wave-bg">
    <div class="circle" style="width: 100px; height: 100px; top: 20%; left: 10%;"></div>
    <div class="circle" style="width: 150px; height: 150px; top: 40%; left: 50%;"></div>
    <div class="circle" style="width: 80px; height: 80px; top: 70%; left: 30%;"></div>
    <div class="circle" style="width: 100px; height: 100px; top: 90%; left: 80%;"></div>
</div>

    <nav class="navbar">
    <div class="logo ">
        
          1QU 
   
    </div>
        </div>
        <div class="menu">
            <a href="#">About</a>
            <a href="#">J. Ventures</a>
            <a href="#">Longevity Intelligence</a>
            <a href="#">Explore</a>
        </div>
    </nav>

    <div class="container">
        <div class="text-section">
          <h1 class="fade-in">WANNA GET IN TOUCH?</h1>
             <p class="fade-in">Have a question or want to collaborate? Reach out to us directly. Whether you’re looking to discuss partnerships, media inquiries, or simply connect, we’re here to help you take the next step.</p>
             <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://x.com" target="_blank" title="X">
                    <i class="fab fa-x"></i> 
                </a>
            </div>

        </div>

        <form class="form-section">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>

    <footer class="footer">
    <div class="footer-content">
        <p>© 2024 All Rights Reserved</p>
        <p>Created by <a href="https://www.iqu.com" target="_blank">1QU Project</a></p>
    </div>
    </footer>

    
</body>

<script>
    // Menunggu hingga halaman dimuat
    window.addEventListener("load", function() {
        // Pilih elemen yang ingin di-animasikan
        const elements = document.querySelectorAll('.fade-in');
        
        // Tambahkan kelas 'fade-in' untuk memulai animasi
        elements.forEach((element, index) => {
            // Berikan delay agar elemen muncul satu per satu
            element.classList.add('fade-in-delay');
            setTimeout(() => {
                element.classList.add('fade-in');
            }, index * 300); // Delay tambahan untuk setiap elemen
        });
    });
</script>

</html>


body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9;
    color: #333;
  }

  .landing {
    height: 70vh;
    display: block;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #fffb10 0%, #1c1b07 100%);
    color: white;
    text-align: center;
    padding: 20px;
    border-radius: 0 0 20px 20px;
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
<nav class="navbar">
<h1>
    <img src="assets/img/logo.png" alt="Logo">
    Sekolah Dasar
</h1>
<ul>
    <li><a href="{{ url('/pendidikan') }}"><span>Pendidikan</span></i></a>
    <li><a href="{{ url('/pengetahuan') }}"><span>Pengetahuan</span></i></a>
    <li><a href="{{ url('/games') }}"><span>Games</span></i></a>
    <li><a href="/">About US</a></li>
    <li><a href="/login" class="login-icon"><i class="fas fa-user"></i></a></li>  </li>
</ul>
</nav>
</head>
</body>

<!-- Hero Section -->
<header class="landing">
  <h1>Selamat Datang di <span>i-QUIZ</span></h1>
  <p>
    Temukan pengalaman belajar interaktif dan seru dengan i-QUIZ. Cobalah tes IQ, media pembelajaran, dan games menarik untuk semua tingkat pendidikan.
  </p>
  <a href="#features" class="btn-primary">Jelajahi Sekarang</a>
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