<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    body {
        overflow-x: hidden;
    }

    .hero {
        background-image: url('<?= base_url('assets/img/centerdata.png') ?>');
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

    .data-center-section {
        padding: 60px 0;
        background: linear-gradient(to right, #FFFFFF, #E6E6FA);
    }

    .data-center-section h2 {
        text-align: center;
        margin-bottom: 50px;
        font-weight: bold;
        font-size: 36px;
        letter-spacing: 1px;
    }

    .data-center-section p {
        font-size: 16px;
        line-height: 1.8;
    }

    .feature-card {
        background-color: #E6E6FA;
        border-radius: 20px;
        border: 1px solid #800080;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }

    .feature-icon {
        font-size: 50px;
        background: linear-gradient(45deg, #007bff, #00d2ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        .feature-card {
            margin-bottom: 20px;
        }
    }

    .col-lg-6 h4 {
        font-weight: bold;
        font-size: 24px;
    }

    .cta-section {
        margin-top: 60px;
        text-align: center;
    }

    .cta-button {
        background-color: #007bff;
        color: #fff;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        text-transform: uppercase;
        font-size: 14px;
    }

    .cta-button:hover {
        background-color: #0056b3;
    }
    @media (max-width: 768px) {
    .feature-card {
        margin-bottom: 20px;
    }
    
    .data-center-section h2 {
        font-size: 28px; /* Ukuran lebih kecil untuk mobile */
    }
    
    .hero p {
        font-size: 40px; /* Ukuran teks lebih kecil untuk mobile */
    }
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
        .card:hover {
            transform: scale(1.05); /* Efek zoom saat hover */
        }
        .card-footer {
            text-align: center; /* Menyusun teks footer di tengah */
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
                <p class="arcade-interlaced-semibold" style="font-size: 55px;">DATA CENTER</p>
                <h4 class=" chakra-petch-regular ">Server Collocation Equipped with Electrical Protection</h4>
            </div>
        </div>
    </div>
</div>

<section class="data-center-section">
<div class="container"style="overflow: hidden;">
            <div class="row mb-5 align-items-center">
                <div class="col-md-6 d-flex align-items-center justify-content-center text-center ">
                    <div>
                        <h4 class="text-experience mb-4 arcade-interlaced-semibold"  style="font-size: 30px;">WHY</h4>
                        <P class="inter-bold text-start" style="font-size: 25px;">
                        Server collocation equipped with electrical <br> protection in the form generators,<br> UPS, and spark arrester are provided
                        </P>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <img src="<?= base_url ('assets/img/datacenter-konten.png') ?> " alt=""  class="img-fluid" style="object-fit: cover;">
                </div>
            </div>
        </div>

            <!-- Electrical Protection Features -->
            <div class="container py-3">
                 <h2 class="mb-4 chakra-petch-bold" style="padding: 30px;">Keunggulan</h2>
                <div class="row justify-content-center">
                    <!-- Genset -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="feature-card text-center p-4 text-dark">
                            <i class="bi bi-lightning-charge feature-icon"></i>
                            <h5>Genset</h5>
                            <p>Backup power yang selalu tersedia untuk menjaga server tetap aktif selama pemadaman listrik.</p>
                        </div>
                    </div>
                    <!-- UPS -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="feature-card text-center p-4 text-dark">
                            <i class="bi bi-battery-charging feature-icon"></i>
                            <h5>UPS</h5>
                            <p>Uninterruptible Power Supply untuk memastikan pasokan listrik tidak terputus.</p>
                        </div>
                    </div>
                    <!-- Spark Arrester -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="feature-card text-center p-4 text-dark">
                            <i class="bi bi-shield feature-icon"></i>
                            <h5>Spark Arrester</h5>
                            <p>Perlindungan dari lonjakan tegangan untuk menjaga perangkat dari kerusakan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="cta-section">
                <a href="#" class="cta-button">Pelajari Lebih Lanjut</a>
            </div>
        </div>
</section>

<div class="container mt-5">
        <h1 class="text-center">Paket Data Center</h1>

        <div class="row mt-4 d-flex align-items-stretch">
            <!-- Paket Dasar -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Paket Dasar</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp 1.500.000/bulan</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Server Collocation: 1U</li>
                            <li class="list-group-item">Perlindungan Genset</li>
                            <li class="list-group-item">Perlindungan UPS</li>
                            <li class="list-group-item">Spark Arrester</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>

            <!-- Paket Menengah -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Paket Menengah</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp 2.500.000/bulan</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Server Collocation: 2U</li>
                            <li class="list-group-item">Perlindungan Genset</li>
                            <li class="list-group-item">Perlindungan UPS</li>
                            <li class="list-group-item">Spark Arrester</li>
                            <li class="list-group-item">Bandwidth 1 Gbps</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>

            <!-- Paket Premium -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Paket Premium</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp 5.000.000/bulan</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Server Collocation: 4U</li>
                            <li class="list-group-item">Perlindungan Genset</li>
                            <li class="list-group-item">Perlindungan UPS</li>
                            <li class="list-group-item">Spark Arrester</li>
                            <li class="list-group-item">Bandwidth 10 Gbps</li>
                            <li class="list-group-item">Dukungan 24/7</li>
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