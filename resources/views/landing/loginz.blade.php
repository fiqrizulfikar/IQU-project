<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
	<style>

/* Container */
.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

/* Styling untuk setiap team member (blog) */
.our-team {
    text-align: center;
    margin-bottom: 50px;
    z-index: 1;
    position: relative;
    /* Menambahkan padding dan margin untuk jarak antar item */
    padding: 10px;
}

.our-team .pic {
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    margin-bottom: 15px;
}

.our-team .pic:after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.7);
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    transition: opacity 0.5s ease;
}

.our-team:hover .pic:after {
    opacity: 1;
}

.our-team .pic img {
    width: 100%;
    height: auto;
}

.our-team .social {
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    opacity: 0;
    position: absolute;
    top: 45%;
    left: 0;
    z-index: 1;
    transition: opacity 0.5s ease;
}

.our-team:hover .social {
    opacity: 1;
}

.our-team .social li {
    display: inline-block;
}

.our-team .social li a {
    display: block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    border: 1px solid #fff;
    font-size: 15px;
    color: #fff;
    margin-right: 10px;
    transition: all 0.5s ease;
}

.our-team .social li a:hover {
    background: #fff;
    color: #000;
}

.our-team .team-content {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 2px dotted #ddd;
    position: absolute;
    bottom: -70px;
    left: 0;
    z-index: -1;
    transition: border-color 0.5s ease;
}

.our-team:hover .team-content {
    border-color: #00adae;
}

.our-team .team-info {
    width: 100%;
    color: #464646;
    position: absolute;
    bottom: 12px;
    left: 0;
}

.our-team .title {
    font-size: 20px;
    font-weight: 600;
    color: #464646;
    margin: 0 0 5px 0;
    transition: color 0.5s ease;
}

.our-team:hover .title {
    color: #00adae;
}

.our-team .post {
    display: block;
    font-size: 14px;
    color: #464646;
}

/* Layout: Flexbox untuk membuat 4 item dalam satu baris */
.our-team-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px; /* Menambahkan jarak antar item */
}

/* Responsiveness: Membuat tampilan lebih responsif */
@media (max-width: 768px) {
    .our-team-wrapper {
        justify-content: center; /* Mengatur posisi item ke tengah di layar kecil */
    }

    .our-team {
        width: 48%; /* Menampilkan 2 item dalam satu baris di layar tablet */
    }

    .our-team .team-content {
        bottom: -50px;
    }

    .our-team .title {
        font-size: 18px;
    }

    .our-team .post {
        font-size: 12px;
    }

    .our-team .social li a {
        width: 25px;
        height: 25px;
        font-size: 12px;
    }
}

@media (max-width: 480px) {
    .our-team-wrapper {
        justify-content: center;
    }

    .our-team {
        width: 100%; /* Menampilkan 1 item dalam satu baris di layar ponsel */
    }

    .our-team .pic {
        width: 80px;
        height: 80px;
    }

    .our-team .team-content {
        bottom: -40px;
    }

    .our-team .title {
        font-size: 16px;
    }

    .our-team .post {
        font-size: 12px;
    }

    .our-team .social li a {
        width: 20px;
        height: 20px;
        font-size: 10px;
    }
}

	</style>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">YourBrand</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

<!-- Team Section -->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="images/img-1.jpg">
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <div class="team-info">
                        <h3 class="title">Williamson</h3>
                        <span class="post">Web Developer</span>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="images/img-2.jpg">
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <div class="team-info">
                        <h3 class="title">Kristiana</h3>
                        <span class="post">Web Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Team Section -->


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', () => {
    const teamMembers = document.querySelectorAll('.team-member');

    teamMembers.forEach(member => {
        member.addEventListener('mouseenter', () => {
            member.style.transform = 'translateY(-15px)';
            member.style.boxShadow = '0 20px 60px rgba(0, 0, 0, 0.15)';
        });

        member.addEventListener('mouseleave', () => {
            member.style.transform = 'translateY(0)';
            member.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.1)';
        });
    });
});

	</script>
</body>
</html>
