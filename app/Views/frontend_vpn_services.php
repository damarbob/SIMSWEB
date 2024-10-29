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
    <!-- VPN Packages -->
     <section class="py-5">
    <div class="package-container">
        <div class="package-box">
            <h3>Essential Plan</h3>
            <p>10 Mbps Bandwidth</p>
            <p class="package-price">Rp 100,000 / month</p>
            <button class="cta-button" onclick="openModal()">Choose Plan</button>
        </div>
        <div class="package-box">
            <h3>Business Plan</h3>
            <p>100 Mbps Bandwidth</p>
            <p class="package-price">Rp 300,000 / month</p>
            <button class="cta-button" onclick="openModal()">Choose Plan</button>
        </div>
        <div class="package-box">
            <h3>Enterprise Plan</h3>
            <p>500 Mbps Bandwidth</p>
            <p class="package-price">Rp 1,000,000 / month</p>
            <button class="cta-button" onclick="openModal()">Choose Plan</button>
        </div>
    </div>
</section>

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

<?= $this->endSection() ?>