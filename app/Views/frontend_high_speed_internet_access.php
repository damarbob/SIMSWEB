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
        background-image: url('assets/img/high-speed/Media.png');
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-content h1 {
        margin: 0;
        font-size: 4rem;
        font-weight: bold;
        text-transform: uppercase;
        animation: fadeInDown 1.5s ease-in-out;
    }

    .hero-content p {
        margin-top: 20px;
        font-size: 1.2rem;
        letter-spacing: 1px;
        animation: fadeInUp 1.5s ease-in-out;
    }

    /* Animations */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
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
        animation: fadeInUp 2s ease-in-out;
    }

    .cta-button:hover {
        background-color: transparent;
        color: #000;
    }

    /* Paket Layanan Section */
    .paket-section {
        padding: 50px 0;
        background-color: #f7f7f7;
        text-align: center;
    }

    .paket-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .paket-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .paket-card {
        background: #fff;
        padding: 20px;
        margin: 15px;
        width: 25%;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .paket-card:hover {
        transform: translateY(-10px);
    }

    .paket-card h3 {
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 10px;
    }

    .paket-card p {
        font-size: 1.1rem;
        color: #666;
    }

    .paket-card .price {
        font-size: 2.5rem;
        font-weight: bold;
        color: #000;
        margin-bottom: 20px;
    }

    .paket-card .btn-pilih {
        background-color: #000;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-transform: uppercase;
        transition: background-color 0.3s ease;
    }

    .paket-card .btn-pilih:hover {
        background-color: #333;
    }

    /* Testimonial Section */
    .testimonial-section {
        background-color: #222;
        padding: 60px 0;
        color: white;
    }

    .testimonial-title {
        font-size: 2.5rem;
        color: white;
        text-align: center;
        margin-bottom: 30px;
    }

    .testimonial-container {
        display: flex;
        justify-content: space-around;
        align-items: stretch;
        /* Pastikan semua card memiliki tinggi yang sama */
        flex-wrap: wrap;
        text-align: center;
    }

    .testimonial-card {
        background: #333;
        padding: 30px;
        border-radius: 10px;
        width: 30%;
        margin: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        /* Untuk menjaga jarak antara konten */
        height: 100%;
        /* Pastikan card memiliki tinggi penuh sesuai container */
    }

    .testimonial-card:hover {
        transform: translateY(-10px);
    }

    .testimonial-card img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        margin: 0 auto 15px auto;
        /* Atur margin otomatis di kiri dan kanan */
        display: block;
        /* Pastikan gambar diperlakukan sebagai elemen block agar margin auto bekerja */
        object-fit: cover;
    }

    .testimonial-card p {
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .testimonial-card h4 {
        margin-top: auto;
        /* Memastikan nama muncul di bagian bawah card */
        font-size: 1.2rem;
        color: #f7c946;
    }

    /* FAQ Section */
    .faq-section {
        padding: 60px 0;
        background-color: #f9f9f9;
    }

    .faq-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-bottom: 40px;
    }

    .accordion-button {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
        background-color: #fff;
        border: none;
        outline: none;
        padding: 20px;
        text-align: left;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .accordion-button:hover {
        background-color: #f7f7f7;
    }

    .accordion-item {
        border: none;
        border-bottom: 1px solid #ddd;
        margin-bottom: 15px;
    }

    .accordion-body {
        background-color: #fff;
        padding: 20px;
        border: none;
        font-size: 1rem;
        color: #666;
        line-height: 1.6;
    }

    .internet-section {
        padding: 60px 0;
        background-color: #f5f5f5;
    }

    .internet-column {
        padding: 20px;
    }

    .internet-column .content {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
    }

    .internet-column h2 {
        font-size: 1.8rem;
        color: #333333;
        margin-bottom: 15px;
    }

    .internet-column p {
        font-size: 1rem;
        color: #666666;
        margin-bottom: 20px;
    }

    .internet-column ul {
        list-style: none;
        padding-left: 0;
    }

    .internet-column ul li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
        font-size: 1rem;
        color: #555555;
    }

    .internet-column ul li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 6px;
        width: 12px;
        height: 12px;
        background-color: #E70051;
        /* Warna aksen */
        border-radius: 50%;
    }

    /* Responsive */
    @media (max-width: 767px) {
        .internet-column {
            margin-bottom: 30px;
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
<section class="hero-section">
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="col">
                <div class="hero-content">
                    <h1 class="chakra-petch-bold">Unleash the Power of Speed</h1>
                    <p class="arcade-interlaced-regular">Fast, reliable, and secure internet connection for all your needs</p>
                    <br>
                    <a href="#" class="btn btn-outline-light btn-lg chakra-petch-medium cta-button">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="internet-section">
    <div class="container">
        <div class="row">
            <!-- Kolom Kiri: FTTH -->
            <div class="col-md-6 col-sm-12 internet-column">
                <div class="content">
                    <h2>FTTH (Fiber to the Home)</h2>
                    <p>FTTH menyediakan koneksi internet melalui serat optik langsung ke rumah Anda, memberikan kecepatan tinggi dan stabilitas yang luar biasa.</p>
                    <ul>
                        <li>Koneksi kabel langsung ke rumah (fiber optik)</li>
                        <li>Kecepatan tinggi dan latensi rendah</li>
                        <li>Cocok untuk rumah dan kantor</li>
                        <li>Stabil, terutama untuk streaming dan gaming</li>
                    </ul>
                </div>
            </div>
            <!-- Kolom Kanan: Koneksi Nirkabel -->
            <div class="col-md-6 col-sm-12 internet-column">
                <div class="content">
                    <h2>Koneksi Nirkabel (Wireless)</h2>
                    <p>Koneksi nirkabel menawarkan fleksibilitas tanpa kabel, ideal untuk area yang sulit dijangkau oleh infrastruktur kabel.</p>
                    <ul>
                        <li>Tidak memerlukan kabel</li>
                        <li>Instalasi lebih cepat dan mudah</li>
                        <li>Cocok untuk area terpencil atau sulit dijangkau</li>
                        <li>Dapat digunakan oleh pengguna rumahan atau bisnis kecil</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container mt-5">
        <h1 class="text-center">Paket High Speed Internet</h1>

        <div class="row mt-4 d-flex align-items-stretch">
            <!-- Paket Dasar -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title">Paket Dasar</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp 300.000/bulan</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kecepatan: 10 Mbps</li>
                            <li class="list-group-item">Koneksi: Shared (FTTH)</li>
                            <li class="list-group-item">Layanan: Pre-Paid</li>
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
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp 500.000/bulan</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kecepatan: 25 Mbps</li>
                            <li class="list-group-item">Koneksi: Shared (FTTH)</li>
                            <li class="list-group-item">Layanan: Post-Paid</li>
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
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp 1.000.000/bulan</h6>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kecepatan: 100 Mbps</li>
                            <li class="list-group-item">Koneksi: Dedicated (Optical Fiber)</li>
                            <li class="list-group-item">Layanan: Post-Paid</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-primary mt-auto w-100" onclick="openModal()" >Beli Paket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Testimonial Section -->
<section class="testimonial-section">
    <h2 class="testimonial-title">What Our Customers Say</h2>
    <div class="testimonial-container">
        <div class="testimonial-card">
            <img src="assets/img/high-speed/cust1.jpg" alt="User 1">
            <p>"Amazing service! Fast and reliable, perfect for my daily needs."</p>
            <h4>John Doe</h4>
        </div>
        <div class="testimonial-card">
            <img src="assets/img/high-speed/cust3.jpg" alt="User 2">
            <p>"The best internet I've ever used, and the support team is great."</p>
            <h4>Jane Smith</h4>
        </div>
        <div class="testimonial-card">
            <img src="assets/img/high-speed/cust2.jpg" alt="User 3">
            <p>"Super fast internet with no downtime, perfect for streaming."</p>
            <h4>Alex Johnson</h4>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        Bagaimana cara saya memasang layanan internet ini di rumah?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Untuk memasang layanan internet kami di rumah, Anda cukup menghubungi tim pemasaran atau mendaftar melalui situs web kami. Setelah itu, teknisi kami akan mengunjungi lokasi Anda untuk pemasangan perangkat dan mengaktifkan layanan internet dengan cepat.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Apakah layanan internet tersedia di seluruh wilayah Indonesia?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Layanan internet kami saat ini tersedia di sebagian besar wilayah Indonesia. Namun, untuk memastikan bahwa layanan tersedia di wilayah Anda, silakan periksa dengan memasukkan kode pos Anda di situs web kami atau hubungi tim layanan pelanggan.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Apa yang membedakan layanan ini dari penyedia lain?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Layanan internet kami unggul karena kecepatan tinggi, koneksi yang stabil, keamanan data terbaik, dan dukungan pelanggan yang responsif. Kami juga menawarkan harga kompetitif dengan berbagai pilihan paket yang sesuai dengan kebutuhan pengguna.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<script>
    // Ensure Bootstrap Accordion functionality works
    const accordion = document.querySelectorAll('.accordion-button');
    accordion.forEach(button => {
        button.addEventListener('click', () => {
            const accordionCollapse = button.nextElementSibling;

            accordion.forEach(otherButton => {
                if (otherButton !== button) {
                    otherButton.classList.add('collapsed');
                    otherButton.nextElementSibling.classList.remove('show');
                }
            });

            if (!accordionCollapse.classList.contains('show')) {
                accordionCollapse.classList.add('show');
            }
        });
    });
</script>
<?= $this->endSection() ?>