<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
    }

    .hero {
        background-image: url('<?= base_url('assets/img/kontenbts.png') ?>');
        background-size: cover;
        background-position: center;
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        position: relative;
    }

    .hero a {
        padding: 12px 30px;
        background-color: #fff;
        color: #000;
        text-decoration: none;
        font-size: 18px;
        border-radius: 5px;
    }

    .hero::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
        position: relative;
        z-index: 1;
    }

    .hero .btn {
        background-color: transparent;
        border: 1px solid white;
        color: white;
        padding: 0.75rem 2rem;
        text-transform: uppercase;
    }

    .hero .btn:hover {
        background-color: #0056b3;
    }

    .description-section {
        background-image: linear-gradient(180deg,
                rgba(255, 255, 255, 0.01),
                rgba(255, 255, 255, 0) 85%),
            radial-gradient(ellipse at center left,
                rgba(128, 0, 128, 0.15),
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 128, 0, 0.15),
                transparent 50%),
            radial-gradient(ellipse at center right,
                rgba(0, 0, 255, 0.15),
                transparent 50%),
            radial-gradient(ellipse at center left,
                rgba(255, 192, 203, 0.15),
                transparent 50%);
        padding: 96px 0;
    }

    .description-section h2 {
        text-align: center;
        color: #d9534f;
        font-size: 2.5rem;
        margin-bottom: 30px;
        position: relative;
    }

    .description-section h2::before {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        width: 60px;
        height: 4px;
        background-color: #d9534f;
        transform: translateX(-50%);
    }

    .description-section p {
        font-size: 1.2rem;
        text-align: justify;
        line-height: 1.8;
        color: #555;
    }

    .description-section .icon-box {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .description-section .icon-box i {
        font-size: 2rem;
        color: #d9534f;
        margin-right: 15px;
    }

    .feature-list {
        margin-top: 40px;
    }

    .feature-list li {
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

    .feature-list li::before {
        content: '✔️';
        margin-right: 10px;
        color: #5bc0de;
    }

    .table-section {
        background-color: #f9f9f9;
        padding: 60px 0;
    }

    .table-section h3 {
        color: #5bc0de;
        margin-bottom: 30px;
    }

    .gallery-section {
        padding: 60px 0;
    }

    .gallery-section h2 {
        text-align: center;
        color: #d9534f;
        margin-bottom: 40px;
    }

    .gallery-section img {
        width: 100%;
        border-radius: 10px;
        transition: all 0.3s ease-in-out;
    }

    .gallery-section img:hover {
        transform: scale(1.05);
    }

    .cta-section {
        background-color: #333;
        color: white;
        padding: 60px 0;
        text-align: center;
    }

    .cta-section h2 {
        font-size: 2.5rem;
        margin-bottom: 30px;
    }

    .cta-section a {
        background-color: #d9534f;
        color: white;
        padding: 15px 50px;
        text-decoration: none;
        border-radius: 50px;
        font-weight: bold;
        transition: background-color 0.3s ease-in-out;
    }

    .cta-section a:hover {
        background-color: #c9302c;
    }
    
    .card {
            border: 1px solid #ddd; /* Menambahkan border */
            border-radius: 10px; /* Membuat sudut kartu membulat */
            transition: transform 0.2s; /* Efek transisi saat hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
        }
        .card:hover {
            transform: scale(1.05); /* Efek zoom saat hover */
        }
        .card-header {
            background-color: #007bff; /* Warna latar belakang header */
            color: white; /* Warna teks header */
            border-top-left-radius: 10px; /* Menjaga sudut atas kartu membulat */
            border-top-right-radius: 10px; /* Menjaga sudut atas kartu membulat */
        }
        .btn {
            width: 100%; /* Mengatur lebar tombol agar memenuhi ruang footer */
        }

</style>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <p class="arcade-interlaced-semibold" style="font-size: 30px;">BTS Hotel / Multimedia Micro Cell Pole</p>
                <h4 class=" chakra-petch-regular ">Koneksi PTP dari MSC sampai ke Multimedia Micro Cell Pole</h4>
            </div>
        </div>
    </div>
</div>

<section class="description-section">
    <div class="container">
        <h2>Layanan Kami</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="icon-box">
                    <i class="fa fa-network-wired"></i>
                    <p>
                        Kami menyediakan solusi jaringan yang andal untuk menghubungkan MSC hingga ke Multimedia Micro Cell Pole. Layanan kami didesain untuk meningkatkan kecepatan dan stabilitas konektivitas PTP.
                    </p>
                </div>
                <div class="icon-box">
                    <i class="fa fa-wifi"></i>
                    <p>
                        Dengan BTS Hotel, area yang sebelumnya sulit dijangkau kini dapat dilayani dengan konektivitas berkualitas tinggi yang memberikan jangkauan luas dan efisien.
                    </p>
                </div>
                <div class="icon-box">
                    <i class="fa fa-satellite-dish"></i>
                    <p>
                        Teknologi terbaru kami memungkinkan kemudahan instalasi dan pemeliharaan dengan infrastruktur yang fleksibel dan dapat diadaptasi sesuai kebutuhan spesifik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mt-5">
        <h1 class="text-center mb-4">Paket BTS Hotel / Multimedia Micro Cell Pole</h1>

        <div class="row d-flex align-items-stretch">
            <!-- Paket Dasar -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Paket Dasar</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: <strong>Rp 1.500.000/bulan</strong></h6>
                        <ul class="list-group">
                            <li class="list-group-item">Koneksi: PTP</li>
                            <li class="list-group-item">Jarak: Hingga 5 km</li>
                            <li class="list-group-item">Bandwidth: 100 Mbps</li>
                            <li class="list-group-item">Dukungan: 8/5</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>

            <!-- Paket Menengah -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Paket Menengah</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: <strong>Rp 2.500.000/bulan</strong></h6>
                        <ul class="list-group">
                            <li class="list-group-item">Koneksi: PTP</li>
                            <li class="list-group-item">Jarak: Hingga 10 km</li>
                            <li class="list-group-item">Bandwidth: 500 Mbps</li>
                            <li class="list-group-item">Dukungan: 8/5</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>

            <!-- Paket Premium -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Paket Premium</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: <strong>Rp 4.000.000/bulan</strong></h6>
                        <ul class="list-group">
                            <li class="list-group-item">Koneksi: PTP</li>
                            <li class="list-group-item">Jarak: Hingga 20 km</li>
                            <li class="list-group-item">Bandwidth: 1 Gbps</li>
                            <li class="list-group-item">Dukungan: 24/7</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Gallery Section -->
<section class="gallery-section">
    <div class="container">
        <h2>Galeri Proyek</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300" alt="Gallery Image 1">
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300" alt="Gallery Image 2">
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/400x300" alt="Gallery Image 3">
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Dapatkan Solusi Terbaik untuk Koneksi Anda</h2>
        <a href="#">Hubungi Kami Sekarang</a>
    </div>
</section>



<?= $this->endSection() ?>