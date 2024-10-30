<?= $this->extend('layout/frontend_template') ?>
<?= $this->section('style') ?>
<style>
    /* .navbar {
        background-color: transparent;
        border-bottom: none;
        transition: background-color 0.3s ease;
    }

    .navbar.navbar-dark .navbar-nav .nav-link {
        color: white !important;
    }

    .navbar.navbar-dark .navbar-toggler {
        background-color: white !important;
    }

    .navbar.scrolled {
        background-color: rgba(0, 0, 0, 0.8) !important;
    } */

    .hero-section {
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('<?= base_url('assets/img/Blog/Frame Blog.png') ?>');
        background-size: cover;
        background-position: center;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);

    }

    .hero-content h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .hero-content p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }

    .rounded-button {
        border-radius: 50px;
    }

    .button-group .btn.active {
        background: linear-gradient(135deg, #ff416c, #4688f1);
        color: white;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .input-group .form-control {
        border-radius: 20px 0 0 20px;
    }

    .input-group .btn {
        border-radius: 0 20px 20px 0;
        background: linear-gradient(135deg, #ff416c, #4688f1);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        border: none;
    }

    .page-item .page-link {
        border-radius: 50%;
        border: 2px solid #ddd;
        padding: 10px 15px;
        color: #333;
        font-weight: bold;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .page-item.active .page-link {
        background: linear-gradient(135deg, #ff416c, #4688f1);
        color: white;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .page-item .page-link:hover {
        background: rgba(70, 136, 241, 0.1);
    }

    .page-item .page-link:focus {
        outline: none;
        box-shadow: 0 0 6px rgba(70, 136, 241, 0.5);
    }

    .pagination .page-link {
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
        margin: 0 5px;
        border: none;
    }

    .pagination .active .page-link {
        border: none;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<header class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="col">
                <span class="badge badge-pill badge-light text-dark mb-3 px-3 py-2" style="border-radius:50px;">News</span>
                <div class="hero-content">
                    <p class="chakra-petch-bold"> 1st May 2024</p>
                    <h1>PT SIMS has become the tenth decacorn company in Indonesia</h1>
                    <p class="chakra-petch-bold">Digital TV service employs FTTH (fiber To The Home) technology and offers numerous Free To Air and Premium channels.</p>
                    <a href="<?= base_url('blog_item'); ?>" class="btn btn-outline-light btn-lg chakra-petch-medium" data-mdb-ripple-init>Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-auto">
                <div class="button-group" role="group" aria-label="Filter Options">
                    <button type="button" class="btn rounded-button ">Event</button>
                    <button type="button" class="btn active rounded-button">News</button>
                    <button type="button" class="btn rounded-button">Article</button>
                </div>
            </div>
            <div class="col"></div>

            <div class="col-auto ">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="button" style="width: 50px;">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
</br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow rounded-0" style="width: 100%;">
                    <img class="card-img-top rounded-0" src="<?= base_url('assets/img/Blog/Media.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">PT SIMS Bekerja Sama dengan Harvard Univ...</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow rounded-0" style="width: 100%;">
                    <img class="card-img-top rounded-0" src="<?= base_url('assets/img/Blog/Media 2.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">PT SIMS Bekerja Sama dengan Harvard Univ...</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow rounded-0" style="width: 100%;">
                    <img class="card-img-top rounded-0" src="<?= base_url('assets/img/Blog/Media 3.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">PT SIMS Bekerja Sama dengan Harvard Univ...</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card shadow rounded-0 " style="width: 100%;">
                    <img class="card-img-top rounded-0" src="<?= base_url('assets/img/Blog/Media 4.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">PT SIMS Bekerja Sama dengan Harvard Univ...</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow rounded-0" style="width: 100%;">
                    <img class="card-img-top rounded-0" src="<?= base_url('assets/img/Blog/Media 5.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">PT SIMS Bekerja Sama dengan Harvard Univ...</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow rounded-0" style="width: 100%;">
                    <img class="card-img-top rounded-0" src="<?= base_url('assets/img/Blog/Media 6.png') ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">PT SIMS Bekerja Sama dengan Harvard Univ...</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</br>]

<!-- Pagination -->
<nav aria-label="Page navigation example">
    <ul class="pagination" style="margin-left:100px;">
        <li class="page-item active">
            <a class="page-link" href="#" style="background: linear-gradient(to right, #a12d45, #4660e6); color: white; border-radius: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.2); width: 70px; height: 40px;">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" style="border-radius: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 70px; height: 40px;">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" style="border-radius: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 70px; height: 40px;">></a>
        </li>
    </ul>
</nav>

<?= $this->endSection() ?>