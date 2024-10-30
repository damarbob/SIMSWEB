<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }
/* 
    .navbar {
        background-color: transparent;
        border-bottom: none;
        transition: background-color 0.3s ease;
    }

    .navbar.navbar-dark .navbar-nav .nav-link {
        color: white;
    }

    .navbar.navbar-dark .navbar-toggler {
        background-color: white;
    }

    .navbar.scrolled {
        background-color: rgba(0, 0, 0, 0.8) !important;
    } */

    /* Hero Section */
    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('<?= base_url('assets/img/Background_PayTV.png') ?>');
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .hero-content h1 {
        margin: 0;
        font-size: 3rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .hero-content p {
        margin-top: 20px;
        margin-right: 20px;
        font-size: 1rem;
        letter-spacing: 2px;
    }

    .wood-background {
        position: relative;
        width: 100%;
        background-image: url('<?= base_url('assets/img/image 25.png') ?>');
        background-size: cover;
        background-position: center;
        height: auto;
        padding-top: 50px;
        /* Tambahkan padding agar gambar tidak terlalu tinggi */
    }

    .info-box {
        position: absolute;
        top: 20%;
        /* Mengatur posisi top lebih tinggi */
        left: 50%;
        transform: translate(-50%, -50%);
        padding-right: 30px;
        padding-left: 30px;
        background: rgba(255, 255, 255, 0.95);
        padding-top: 30px;
        padding-bottom: 30px;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 60%;
        height: auto;
        max-width: 600px;
        z-index: 2;
    }

    .icon-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .icon-item {
        text-align: center;
        flex: 1;
        padding: 10px;
    }

    .icon-item img {
        max-width: 50px;
        margin-bottom: 10px;
    }

    .info-box h3 {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: #333;
    }

    .separator-line {
        width: 50%;
        height: 5px;
        background: url('<?= base_url('assets/img/pay-tv/Line.png') ?>') no-repeat center;
        margin: 20px auto;
    }

    .info-box p {
        font-size: 1rem;
        margin-bottom: 0;
        color: #333;
    }

    .text-box {
        position: absolute;
        width: 40%;
        height: 300px;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #B33F5E;
        border-radius: 8px;
    }

    .position-box {
        margin-top: 300px;
        left: 50%;
        transform: translate(-25%, -50%);
        z-index: 3;
    }

    .separator-wave {
        position: absolute;
        width: 50vw;
        height: 93vh;
        right: 50%;
        background-image: url('<?= base_url('assets/img/separatorwave.svg') ?>');
        background-size: auto 100%;
        background-repeat: no-repeat;
        background-position: right center;

    }

    .separator-arrow-down-subtractive {
        position: absolute;
        width: 100vw;
        height: 128px;
        margin-top: 500px;
        left: 0;
        background-image: url('<?= base_url('assets/img/separatorpaytv.svg') ?>');
        background-size: contain;
        background-repeat: no-repeat;
        z-index: 10;
    }

    .title {
        font-size: 4rem;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        margin-bottom: 20px;
        font-family: 'Arcade Interlaced', sans-serif;
    }

    .subtitle {
        font-size: 1.5rem;
        color: #fff;
        margin-bottom: 40px;
        letter-spacing: 2px;
        font-family: 'Chakra Petch', sans-serif;
    }

    .cta-button {
        padding: 15px 30px;
        font-size: 1.2rem;
        font-weight: bold;
        color: #fff;
        background-color: #000;
        border: 4px solid #fff;
        text-transform: uppercase;
        transition: all 0.3s ease;
        font-family: 'Chakra Petch', sans-serif;
    }

    .cta-button:hover {
        background-color: transparent;
        color: #000;
    }

    .gradient {
        background-image: linear-gradient(180deg,
                rgba(255, 255, 255, 0.01),
                rgba(255, 255, 255, 0) 85%),
            radial-gradient(ellipse at center left,
                rgba(128, 0, 128, 0.15),
                /* Purple */
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 128, 0, 0.15),
                /* Green */
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 0, 255, 0.15),
                /* Blue */
                transparent 50%),
            radial-gradient(ellipse at center left,
                rgba(255, 192, 203, 0.15),
                /* Pink */
                transparent 50%);
        padding: 96px 0;
    }
    .card {
            border: none; /* Menghilangkan garis pada kartu */
            display: flex; /* Menggunakan flexbox */
            flex-direction: column; /* Mengatur arah kolom */
            height: 100%; /* Mengatur tinggi kartu 100% dari kolom */
        }
        .card-body {
            flex-grow: 1; /* Memungkinkan body kartu untuk mengisi ruang yang tersedia */
            padding-bottom: 20px; /* Memberikan padding di bawah */
        }
        .card-footer {
            text-align: center; /* Menyusun teks footer di tengah */
        }
        .card:hover {
            transform: scale(1.05); /* Efek zoom saat hover */
        }
        .btn {
            width: 100%; /* Mengatur lebar tombol agar memenuhi ruang footer */
        }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="col">
                <div class="hero-content text-start" style="padding:0px 250px;">
                    <h1 class="chakra-petch-bold">Pay TV Services</h1>
                    <p class="arcade-interlaced-regular">DIGITAL TV SERVICE EMPLOYS FTTH TECHNOLOGY OFFERS NUMEROUS FREE TO AIR AND PREMIUM CHANNELS</p>
                    <br>
                    <a href="#" class="btn btn-outline-light btn-lg chakra-petch-medium">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wood Background Section with Info Box -->
<section class="wood-background position-relative">
    <div class="container-fluid" style="padding: 0;">
        <div class="row">
            <img src="<?= base_url('assets/img/image 25.png') ?>" alt="Service Item" style="width: 100%; display: block;">
        </div>
    </div>
    <div class="info-box rounded-0 position-absolute" style="top: 20%; left: 50%; transform: translate(-50%, -50%); padding: 20px; width: 50%; height: auto; max-width: 600px;">
        <div class="icon-container chakra-petch-regular" style="margin-bottom: 15px;">
            <div class="icon-item" style="flex: 1; padding: 5px;">
                <img src="<?= base_url('assets/img/pay-tv/icons-tv.png') ?>" alt="Seamless" style="max-width: 40px; margin-bottom: 5px;">
                <h3 style="font-size: 1rem; margin-bottom: 5px;">Seamless</h3>
            </div>
            <div class="icon-item" style="flex: 1; padding: 5px;">
                <img src="<?= base_url('assets/img/pay-tv/icons1-tv.png') ?>" alt="Clear" style="max-width: 40px; margin-bottom: 5px;">
                <h3 style="font-size: 1rem; margin-bottom: 5px;">Clear</h3>
            </div>
            <div class="icon-item" style="flex: 1; padding: 5px;">
                <img src="<?= base_url('assets/img/pay-tv/icons2-tv.png') ?>" alt="Immersive" style="max-width: 40px; margin-bottom: 5px;">
                <h3 style="font-size: 1rem; margin-bottom: 5px;">Immersive</h3>
            </div>
            <div class="icon-item" style="flex: 1; padding: 5px;">
                <img src="<?= base_url('assets/img/pay-tv/icons3-tv.png') ?>" alt="Extensive" style="max-width: 40px; margin-bottom: 5px;">
                <h3 style="font-size: 1rem; margin-bottom: 5px;">Extensive</h3>
            </div>
        </div>
        <!-- <div class="separator-line rounded-1" style="width: 50%; margin: 15px auto;"></div> -->
        <section class="darker-grotesque-regular" style="font-size: 0.9rem; line-height: 1.4;">
            <p>Our Pay TV Services leverage leading FTTH</p>
            <br>
            <p>(Fiber To The Home) technology to deliver amazing</p>
            <br>
            <p>digital television experiences directly to your doorstep.</p>
        </section>
    </div>
</section>
<section>
    <div class="container-fluid">
        <!-- <div class="separator-arrow-down-subtractive align-self-end" ></div> -->
        <div class="row">
            <div class="col-sm-6 p-0">
                <!-- <div class="separator-wave"></div> -->
                <img src="<?= base_url('assets/img/Frame.png') ?>" alt="Frame" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="col-sm-6 d-flex align-items-center justify-content-center bg-white">
                <h1 class="text-end me-5 mb-3 fs-1 chakra-petch-bold" style="color: #b71c1c; position: relative; top: -200px; font-weight:700;">Why?</h1>
                <div class="text-box p-4 rounded-0 position-box">

                    <p class="chakra-petch-light">
                        With a vast array of Free To Air channels alongside an enticing selection of Premium channels,
                        our service ensures that you have access to a diverse range of high-quality content,
                        catering to every interest and preference.
                    </p>
                    <button class="btn btn-outline-dark">SELENGKAPNYA</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid gradient" style="background-color:#000; padding: 60px 0; z-index:1000;">
        <div class="row">
            <div class="col text-center">
                <h1 class="title">GET READY</h1>
                <p class="subtitle">Experience the future of television</p>
                <button class="cta-button">GAME ON</button>
            </div>
        </div>
    </div>
</section>
<div class="container mt-5">
        <h1 class="text-center">Paket Pembelian Pay TV Service</h1>

        <div class="row mt-4 d-flex align-items-stretch">
            <!-- Paket Silver -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Paket Silver</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp 200.000/bulan</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">100+ Channel TV</li>
                            <li class="list-group-item">Streaming HD</li>
                            <li class="list-group-item">Akses Film dan Serial</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                       <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>

            <!-- Paket Gold -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Paket Gold</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp 350.000/bulan</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">200+ Channel TV</li>
                            <li class="list-group-item">Streaming UHD</li>
                            <li class="list-group-item">Akses Film dan Serial</li>
                            <li class="list-group-item">Fitur Rekaman</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>

            <!-- Paket Platinum -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Paket Platinum</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp 500.000/bulan</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">300+ Channel TV</li>
                            <li class="list-group-item">Streaming 4K</li>
                            <li class="list-group-item">Akses Film dan Serial</li>
                            <li class="list-group-item">Fitur Rekaman & Pause TV</li>
                            <li class="list-group-item">Dukungan Multi-Perangkat</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    document.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
<?= $this->endSection() ?>