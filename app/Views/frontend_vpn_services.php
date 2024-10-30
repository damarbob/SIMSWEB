<?= $this->extend('layout/frontend_template') ?>

<?= $this->section('style') ?>
<style>
    /* Main Styles */
    body {
        overflow-x: hidden;
    }

    .hero {
        background-image: url('<?= base_url('assets/img/vpn.png') ?>');
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



    .vpn-section {
        padding: 60px;
        background-color: #262626;
        text-align: center;
    }

    .vpn-title {
        font-size: 3rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        color: #00b8d4;
    }

    .vpn-subtitle {
        font-size: 1.5rem;
        margin-bottom: 40px;
        color: #ccc;
    }

    .features-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 60px;
    }

    .feature-box {
        background-color: #333;
        border-radius: 10px;
        padding: 20px;
        width: 30%;
    }

    .feature-box h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
        color: #00b8d4;
    }

    .feature-box p {
        font-size: 1rem;
        color: #ccc;
    }

    .package-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 60px;
    }

    .package-box {
        background-color: #333;
        border-radius: 10px;
        padding: 20px;
        width: 30%;
        text-align: center;
    }

    .package-box h3 {
        font-size: 1.5rem;
        color: #00b8d4;
        margin-bottom: 15px;
    }

    .package-box p {
        font-size: 1rem;
        color: #ccc;
        margin-bottom: 15px;
    }

    .package-price {
        font-size: 2rem;
        margin-bottom: 20px;
        color: #fff;
    }

    .cta-button {
        padding: 15px 30px;
        background-color: #00b8d4;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 1.2rem;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .cta-button:hover {
        background-color: #007a8a;
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
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<!-- VPN Section -->
<div class="hero">
    <div class="position-relative z-1 container">
        <div class="row">
            <div class="col">
                <h1 class="fw-bold">Elevate your digital<br>
                    experience to <br>
                    unprecedented heights</h1>
                <p class="fs-6 my-3 arcade-interlaced-regular">Explore our innovative, high-quality superior services</p>
                <a href="#" class="btn">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary">VPN Service</h1>
        <p class="lead text-muted">Solusi Virtual Private Network dengan pilihan bandwidth sesuai kebutuhan Anda</p>
    </div>

    <!-- Features Section -->
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body d-flex">
                    <div class="icon me-3 text-primary">
                        <i class="bi bi-graph-up-arrow fs-2"></i>
                    </div>
                    <div>
                        <h5 class="card-title">Monitoring MRTG</h5>
                        <p class="card-text">Pantau lalu lintas jaringan secara real-time untuk memastikan performa jaringan tetap optimal.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body d-flex">
                    <div class="icon me-3 text-primary">
                        <i class="bi bi-headset fs-2"></i>
                    </div>
                    <div>
                        <h5 class="card-title">Dukungan Teknis 24/7</h5>
                        <p class="card-text">Tim teknis kami selalu siap membantu Anda kapan pun dibutuhkan, memastikan layanan berjalan lancar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image and CTA Section -->
    <div class="row my-5 align-items-center">
        <div class="col-md-6">
            <img src="assets/img/vpn-services/vpn.png" class="img-fluid rounded shadow" alt="VPN Service Image">
        </div>
        <div class="col-md-6">
            <h3 class="fw-semibold text-primary">Keamanan dan Privasi Terjamin</h3>
            <p class="text-muted">Layanan VPN kami ideal untuk menjaga data Anda tetap aman, meningkatkan kecepatan akses, dan memberikan fleksibilitas dalam mengelola aktivitas jaringan di berbagai lokasi.</p>
        </div>
    </div>
</div>

<section class="container py-5">
    <div class="row text-center mb-5">
        <h2>Paket VPN Service + High Speed Internet Access</h2>
    </div>
    <div class="row">

        <!-- Paket Basic Secure Internet -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-primary">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-primary">Paket Basic Secure Internet</h5>
                    <p class="card-text"><strong>VPN Service:</strong></p>
                    <ul>
                        <li>Enkripsi AES-256 untuk keamanan dasar</li>
                        <li>Multi-device support hingga 2 perangkat</li>
                    </ul>
                    <p class="card-text"><strong>High Speed Internet Access:</strong></p>
                    <ul>
                        <li>Kecepatan internet hingga 50 Mbps (shared)</li>
                    </ul>
                    <p class="card-text"><strong>Support:</strong> 24/7 via email</p>
                    <p class="card-text"><strong>Fitur Tambahan:</strong></p>
                    <ul>
                        <li>Monitoring bandwidth dengan MRTG</li>
                        <li>Akses aman ke jaringan perusahaan dari lokasi mana saja</li>
                    </ul>
                    <h5 class="text-primary">Harga: IDR X / bulan</h5>
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                </div>
            </div>
        </div>

        <!-- Paket Business Secure Internet -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-success">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-success">Paket Business Secure Internet</h5>
                    <p class="card-text"><strong>VPN Service:</strong></p>
                    <ul>
                        <li>Enkripsi AES-256 dengan IPSec untuk keamanan tambahan</li>
                        <li>Dukungan hingga 10 perangkat per akun</li>
                        <li>Static IP untuk akses stabil</li>
                    </ul>
                    <p class="card-text"><strong>High Speed Internet Access:</strong></p>
                    <ul>
                        <li>Kecepatan internet hingga 100 Mbps (dedicated)</li>
                    </ul>
                    <p class="card-text"><strong>Support:</strong> 24/7 via email dan chat</p>
                    <p class="card-text"><strong>Fitur Tambahan:</strong></p>
                    <ul>
                        <li>Firewall management</li>
                        <li>QoS untuk memastikan bandwidth prioritas</li>
                    </ul>
                    <h5 class="text-success">Harga: IDR Y / bulan</h5>
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                </div>
            </div>
        </div>

        <!-- Paket Enterprise Secure Internet -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-danger">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-danger">Paket Enterprise Secure Internet</h5>
                    <p class="card-text"><strong>VPN Service:</strong></p>
                    <ul>
                        <li>Enkripsi AES-256 dengan IPSec dan SSL/TLS</li>
                        <li>Support multi-device hingga 50 perangkat</li>
                        <li>Integrasi dengan Active Directory</li>
                        <li>Dedicated VPN server dan Static IP block</li>
                    </ul>
                    <p class="card-text"><strong>High Speed Internet Access:</strong></p>
                    <ul>
                        <li>Kecepatan internet hingga 300 Mbps (dedicated)</li>
                    </ul>
                    <p class="card-text"><strong>Support:</strong> 24/7 priority support, SLA uptime 99.9%</p>
                    <p class="card-text"><strong>Fitur Tambahan:</strong></p>
                    <ul>
                        <li>DDoS protection</li>
                        <li>Network monitoring real-time dengan MRTG</li>
                        <li>Traffic prioritization dan VLAN untuk isolasi jaringan</li>
                    </ul>
                    <h5 class="text-danger">Harga: IDR Z / bulan</h5>
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                </div>
            </div>
        </div>

    </div>
</section>



<?= $this->endSection() ?>