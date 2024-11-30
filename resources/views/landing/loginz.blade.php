<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
	<style>

/* Navbar */
header {
    background-color: #1a1a1a;
    padding: 20px 50px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-links {
    display: flex;
    gap: 25px;
    list-style: none;
}

.nav-links a {
    text-decoration: none;
    color: #fff;
    font-weight: 500;
    font-size: 18px;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #f1c40f;
}

.logo {
    font-size: 24px;
    font-weight: 700;
    color: #fff;
}/* General Styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f7fa;
    margin: 0;
    padding: 0;
    color: #4a4a4a;
}

/* Container */
.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

/* Section Title */
.w-md-80,
.w-lg-60 {
    max-width: 80%;
    margin: 0 auto;
}

.text-center {
    text-align: center;
}

.mb-5,
.mb-md-9 {
    margin-bottom: 60px;
}

span.d-block.small {
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    color: #007bff;
}

h2 {
    font-size: 32px;
    font-weight: 700;
    color: #333;
    margin-top: 10px;
    letter-spacing: 1px;
}

/* Team Cards */
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

/* Column Sizes */
.col-sm-6 {
    width: 45%;
}

.col-lg-3 {
    width: 23%;
}

/* Card Style */
.card {
    background-color: #fff;
    border: 1px solid #e4e7ea;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 40px rgba(0, 0, 0, 0.1);
}

/* Avatar (Profile Image) */
.avatar-lg {
    width: 100px;
    height: 100px;
    overflow: hidden;
    border-radius: 50%;
    margin: 20px auto;
}

.avatar-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Text Styles */
.text-lh-sm {
    line-height: 1.5;
}

.font-size-1 {
    font-size: 13px;
    color: #777;
}

.d-block.small.font-weight-bold.text-cap.mb-1 {
    font-size: 12px;
    font-weight: 600;
    color: #007bff;
}

h4 {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin: 10px 0;
}

/* Social Network Icons */
.card-footer ul {
    display: flex;
    justify-content: center;
    gap: 15px;
    padding: 10px 0;
}

.card-footer .btn {
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background-color: #f0f0f0;
    transition: background-color 0.3s ease;
}

.card-footer .btn:hover {
    background-color: #007bff;
}

.card-footer .fab {
    font-size: 16px;
    color: #333;
}

.card-footer .btn:hover .fab {
    color: #fff;
}

/* Job Info Section */
.d-inline-block {
    display: inline-block;
    padding: 12px 18px;
    border: 1px solid #e4e7ea;
    border-radius: 30px;
    background-color: #fff;
    font-size: 14px;
    font-weight: 600;
    color: #333;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.d-inline-block a {
    font-weight: 700;
    color: #007bff;
    text-decoration: none;
}

.d-inline-block a:hover {
    color: #333;
}

/* Hover Effects for All Cards */
.card-body {
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

/* Footer Links */
.card-footer .btn-xs {
    padding: 6px 12px;
    font-size: 13px;
    color: #007bff;
    border-radius: 30px;
    border: 1px solid #007bff;
}

.card-footer .btn-soft-secondary {
    color: #6c757d;
}

.card-footer .btn-soft-secondary:hover {
    color: #007bff;
}

/* Responsiveness */
@media (max-width: 768px) {
    .col-sm-6 {
        width: 48%;
    }

    .col-lg-3 {
        width: 48%;
    }

    h2 {
        font-size: 28px;
    }

    h4 {
        font-size: 16px;
    }

    .avatar-lg {
        width: 90px;
        height: 90px;
    }

    .font-size-1 {
        font-size: 12px;
    }
}

@media (max-width: 480px) {
    .col-sm-6 {
        width: 100%;
    }

    .avatar-lg {
        width: 80px;
        height: 80px;
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
<div class="container space-2">
  <!-- Title -->
  <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
    <span class="d-block small font-weight-bold text-cap mb-2">Our team</span>
    <h2>Creative mind by people like you</h2>
  </div>
  <!-- End Title -->

  <div class="row mx-n2 mb-5">
    <div class="col-sm-6 col-lg-3 px-2 mb-3">
      <!-- Team -->
      <div class="card h-100 transition-3d-hover">
        <div class="card-body">
          <div class="avatar avatar-lg avatar-circle mb-4">
            <img class="avatar-img" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
          </div>

          <span class="d-block small font-weight-bold text-cap mb-1">Founder / CEO</span>
          <h4 class="text-lh-sm">Christina Kray</h4>
          <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
        </div>

        <div class="card-footer border-0 pt-0">
          <!-- Social Networks -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                <i class="fab fa-google"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>
          <!-- End Social Networks -->
        </div>
      </div>
      <!-- End Team -->
    </div>

    <div class="col-sm-6 col-lg-3 px-2 mb-3">
      <!-- Team -->
      <div class="card h-100 transition-3d-hover">
        <div class="card-body">
          <div class="avatar avatar-lg avatar-circle mb-4">
            <img class="avatar-img" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
          </div>

          <span class="d-block small font-weight-bold text-cap mb-1">Project Manager</span>
          <h4 class="text-lh-sm">Jeff Fisher</h4>
          <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
        </div>

        <div class="card-footer border-0 pt-0">
          <!-- Social Networks -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                <i class="fab fa-google"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>
          <!-- End Social Networks -->
        </div>
      </div>
      <!-- End Team -->
    </div>

    <div class="col-sm-6 col-lg-3 px-2 mb-3">
      <!-- Team -->
      <div class="card h-100 transition-3d-hover">
        <div class="card-body">
          <div class="avatar avatar-lg avatar-circle mb-4">
            <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
          </div>

          <span class="d-block small font-weight-bold text-cap mb-1">Product Designer</span>
          <h4 class="text-lh-sm">Amy Forren</h4>
          <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>
        </div>

        <div class="card-footer border-0 pt-0">
          <!-- Social Networks -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                <i class="fab fa-google"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>
          <!-- End Social Networks -->
        </div>
      </div>
      <!-- End Team -->
    </div>

    <div class="col-sm-6 col-lg-3 px-2 mb-3">
      <!-- Team -->
      <div class="card h-100 transition-3d-hover">
        <div class="card-body">
          <div class="avatar avatar-lg avatar-circle mb-4">
            <img class="avatar-img" src="../../assets/img/100x100/img12.jpg" alt="Image Description">
          </div>

          <span class="d-block small font-weight-bold text-cap mb-1">Want a new challenge?</span>
          <h4 class="text-lh-sm">Join us</h4>
          <p class="font-size-1">Browse through our job opportunities and become a member of the family!</p>
        </div>

        <div class="card-footer border-0 pt-0">
          <a class="btn btn-xs btn-soft-secondary" href="#">View Open Jobs</a>
        </div>
      </div>
      <!-- End Team -->
    </div>
  </div>

  <!-- Info -->
  <div class="text-center">
    <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
      Wanna work with us? <a class="font-weight-bold ml-3" href="hire-us.html">We are hiring <span class="fas fa-angle-right fa-sm ml-1"></span></a>
    </div>
  </div>
  <!-- End Info -->
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
