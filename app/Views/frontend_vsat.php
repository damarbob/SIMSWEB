<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
     body {
        overflow-x: hidden;
    }

    .hero {
        background-image: url('<?= base_url('assets/img/vsat.png') ?>');
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

    .card {
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: transform 0.2s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-header {
            background-color: #007bff; /* Warna latar belakang header */
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn {
            width: 100%;
        }
        .highlight {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
</style>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <h1 class="fw-bold">Very Small Aperture</h1>
                <p class="fs-6 my-3 arcade-interlaced-regular">Solusi layanan untuk mengakomodasi kobutuhan telekomunikas</p>
                <a href="#" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
        <h1 class="text-center mb-4">Paket VSAT</h1>

        <div class="highlight">
            <h4>Solusi Komunikasi Tanpa Batas</h4>
            <p>VSAT (Very Small Aperture Terminal) adalah solusi layanan untuk mengakomodasi kebutuhan telekomunikasi di wilayah yang tidak terjangkau oleh jaringan terrestrial. Dengan VSAT, pengguna dapat terhubung di lokasi tetap (fixed), bergerak (moving), maupun mobile dengan keandalan tinggi.</p>
        </div>

        <div class="row d-flex align-items-stretch">
            <!-- Paket Dasar -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Paket Dasar</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: <strong>Rp 2.000.000/bulan</strong></h6>
                        <ul class="list-group">
                            <li class="list-group-item">Bandwidth: 1 Mbps</li>
                            <li class="list-group-item">Jarak: Hingga 50 km dari hub</li>
                            <li class="list-group-item">Dukungan: 8/5</li>
                            <li class="list-group-item">Instalasi: Termasuk</li>
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
                        <h6 class="card-subtitle mb-2 text-muted">Harga: <strong>Rp 3.500.000/bulan</strong></h6>
                        <ul class="list-group">
                            <li class="list-group-item">Bandwidth: 3 Mbps</li>
                            <li class="list-group-item">Jarak: Hingga 100 km dari hub</li>
                            <li class="list-group-item">Dukungan: 8/5</li>
                            <li class="list-group-item">Instalasi: Termasuk</li>
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
                        <h6 class="card-subtitle mb-2 text-muted">Harga: <strong>Rp 5.000.000/bulan</strong></h6>
                        <ul class="list-group">
                            <li class="list-group-item">Bandwidth: 5 Mbps</li>
                            <li class="list-group-item">Jarak: Hingga 150 km dari hub</li>
                            <li class="list-group-item">Dukungan: 24/7</li>
                            <li class="list-group-item">Instalasi: Termasuk</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>