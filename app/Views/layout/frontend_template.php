<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>PT SIMS</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/SIMS.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&family=Darker+Grotesque:wght@300..900&display=swap" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- MDB -->
  <link rel="stylesheet" href="assets/css/mdb.min.css" />
  <!-- Style -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <?= $this->renderSection('style') ?>
  <style>
    footer {
      padding-left: 16px;
      padding-right: 16px;
      background-color: black;
      color: white;
      justify-content: space-between;
    }

    footer a {
      color: white;
      text-decoration: none;
    }

    footer a:hover {

      color: #ddd;


    }
 /* Pop-up Styles */
 .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background-color: #262626;
        padding: 20px;
        border-radius: 10px;
        width: 400px;
        color: white;
        text-align: center;
    }

    .modal-content h2 {
        color: #00b8d4;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #333;
        border-radius: 5px;
        color: #333;
    }

    .close-button {
        background: #00b8d4;
        border: none;
        padding: 10px 20px;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .switch-button {
        background: none;
        border: none;
        color: #00b8d4;
        cursor: pointer;
        text-decoration: underline;
    }
    
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('/') ?>">
        <img src="assets/img/SIMS.png" height="30" alt="SIMS Logo" loading="lazy" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

    <li class="nav-item"><a class="nav-link" href="<?= base_url('service') ?>">Product</a></li>
 
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('experience') ?>">Experiences</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('about_us') ?>">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('contact_us') ?>">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('blog') ?>">Blog</a></li>
        </ul>
      </div>
    </div>

  </nav>
  <!-- Navbar -->

  <!-- Main content -->
  <?= $this->renderSection('content') ?>

  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted-white pt-1" style="background-color:#000000;">
    <section>
      <div class="container text-center text-md-start mt-5">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <a class="navbar-brand" href="#">
              <img src=" <?= base_url ('assets/img/SIMS.png') ?>" height="30" alt="SIMS Logo" loading="lazy" />
            </a>
            <p>
              Wisma Kodel Lantai 8, Jl. HR Rasuna Said, Kuningan, Setiabudi, Jakarta Selatan
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
            <p>
              <a href="#"><img style="margin:5px" src=" <?= base_url ('assets/img/icon-footer/Kontak.png') ?>" width="24" height="24" alt="Whatsapp">+6281 **** ****</a>
            </p>
            <p>
              <a href="#"><img style="margin:5px" src=" <?= base_url ('assets/img/icon-footer/Gmail.png') ?>" width="24" height="24" alt="Email">sims@gmail.com</a>
            </p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Layanan</h6>
            <p>
              <a href="#"><img style="margin:5px" src=" <?= base_url ('assets/img/icon-footer/Internet.png') ?>" width="24" height="24" alt="Internet">Internet</a>
            </p>
            <p>
              <a href="#"><img style="margin:5px" src="<?= base_url ('assets/img/icon-footer/coding.png') ?>" width="24" height="24" alt="Email">Pengembangan Aplikasi</a>
            </p>
            <p>
              <a href="#"><img style="margin:5px" src="<?= base_url ('assets/img/icon-footer/email.png') ?>" width="24" height="24" alt="Pelatihan">Pelatihan</a>
            </p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Sosial Media</h6>
            <p>
              <a href="#"><img style="margin:5px" src=" <?= base_url ('assets/img/icon-footer/X.png') ?>" width="24" height="24" alt="Twitter">Twitter</a>
            </p>
            <p>
              <a href="http://instagram.com/username"><img style="margin:5px" src=" <?= base_url ('assets/img/icon-footer/Instagram.png') ?>" width="24" height="24" alt="Instagram">Instagram</a>
            </p>
          </div>
        </div>
      </div>
    </section>


    <div class="text-start" style="padding-left: 90px; padding-right: 90px;">
      © 2024 PT SIMS. All Rights Reserved
    </div>

  </footer>
  <!-- Footer -->

  <!-- MDB -->
  <script type="text/javascript" src="assets/js/mdb.umd.min.js"></script>
  <?= $this->renderSection('script') ?>
  <!-- Custom scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper('#swiper-experience', {
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5, // Number of logos to display at once
      spaceBetween: 30, // Space between logos
      loop: true, // Enable looping of slides
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 2500, // Auto-slide every 2.5 seconds
        disableOnInteraction: false,
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

  <!-- Modal for Login/Register -->
<div id="loginModal" class="modal">
    <div class="modal-content">
        <h2 id="modalTitle">Login</h2>
        <div id="loginForm">
            <div class="form-group"><input type="email" placeholder="Email" required></div>
            <div class="form-group"><input type="password" placeholder="Password" required></div>
            <button class="close-button" onclick="continueToPurchase()">Login</button>
            <p>Don't have an account? <button class="switch-button" onclick="showRegister()">Register</button></p>
        </div>
        <div id="registerForm" style="display: none;">
            <div class="form-group"><input type="text" placeholder="Full Name" required></div>
            <div class="form-group"><input type="email" placeholder="Email" required></div>
            <div class="form-group"><input type="password" placeholder="Password" required></div>
            <div class="form-group"><input type="password" placeholder="Repeat Password" required></div>
            <button class="close-button" onclick="continueToPurchase()">Register</button>
            <p>Already have an account? <button class="switch-button" onclick="showLogin()">Login</button></p>
        </div>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById("loginModal").style.display = "flex";
        showLogin();
    }

    function closeModal() {
        document.getElementById("loginModal").style.display = "none";
    }

    function showLogin() {
        document.getElementById("modalTitle").textContent = "Login";
        document.getElementById("loginForm").style.display = "block";
        document.getElementById("registerForm").style.display = "none";
    }

    function showRegister() {
        document.getElementById("modalTitle").textContent = "Register";
        document.getElementById("loginForm").style.display = "none";
        document.getElementById("registerForm").style.display = "block";
    }

    function continueToPurchase() {
        closeModal();
        alert("Redirecting to purchase form...");
        // Redirect to purchase form page here
    }
</script>

</body>

</html>