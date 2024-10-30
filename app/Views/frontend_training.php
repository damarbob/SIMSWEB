<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
      body {
        overflow-x: hidden;
    }

    .hero {
        background-image: url('<?= base_url('assets/img/training.png') ?>');
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

    .highlight {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .highlight h4 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #007bff;
            font-weight: bold;
        }
        .highlight p {
            font-size: 1.2rem;
            color: #555;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 30px;
            padding: 10px 30px;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
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
            background-color: #28a745; /* Warna latar belakang header */
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            text-align: left; /* Rata kiri untuk isi body */
        }
        .card-body ul {
            list-style: none; /* Menghilangkan bullet */
            padding: 0;
        }
        .card-body ul li {
            padding: 5px 0;
            border-bottom: 1px solid #ddd; /* Garis pemisah antar item */
        }
    </style>
    <?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <p class="arcade-interlaced-semibold" style="font-size: 55px;">It is Consultation and Assistance </p>
                <h4 class=" chakra-petch-regular ">Perencanaan dan Pengembangan Smart City/Solusi Digital Government</h4>
            </div>
        </div>
    </div>
</div>

        <!-- Highlight Section -->
        <div class="highlight">
            <h4>Mengapa Memilih Pelatihan Kami?</h4>
            <p>Kami menyediakan layanan konsultasi dan pendampingan dalam perencanaan dan pengembangan smart city serta solusi digital government. Dengan pengalaman dan keahlian kami, Anda akan mendapatkan pelatihan yang sesuai dengan kebutuhan dan tantangan di era digital ini.</p>
            <p><strong>Bergabunglah dengan kami untuk membangun masa depan yang lebih baik!</strong></p>
        </div>

        <!-- Paket Pelatihan Section -->
        <h2 class="text-center mb-4">Pilih Paket Pelatihan Anda</h2>
        <div class="row d-flex align-items-stretch">
            <!-- Paket Dasar -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 class="card-title">Paket Dasar</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: <strong>Rp 1.500.000</strong></h6>
                        <ul class="list-group">
                            <li class="list-group-item">Durasi: 1 Hari</li>
                            <li class="list-group-item">Materi: Pengenalan Smart City</li>
                            <li class="list-group-item">Format: Kelas Online</li>
                            <li class="list-group-item">Sertifikat: Tersedia</li>
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
                        <h6 class="card-subtitle mb-2 text-muted">Harga: <strong>Rp 3.000.000</strong></h6>
                        <ul class="list-group">
                            <li class="list-group-item">Durasi: 2 Hari</li>
                            <li class="list-group-item">Materi: Implementasi Solusi Digital</li>
                            <li class="list-group-item">Format: Kelas Online</li>
                            <li class="list-group-item">Sertifikat: Tersedia</li>
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
                        <h6 class="card-subtitle mb-2 text-muted">Harga: <strong>Rp 5.000.000</strong></h6>
                        <ul class="list-group">
                            <li class="list-group-item">Durasi: 3 Hari</li>
                            <li class="list-group-item">Materi: Pengembangan Kapasitas UMKM</li>
                            <li class="list-group-item">Format: Kelas Online dan Pendampingan</li>
                            <li class="list-group-item">Sertifikat: Tersedia</li>
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
