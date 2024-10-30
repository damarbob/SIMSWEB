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
        background-image: url('<?= base_url('assets/img/about-us/Hero-About.png') ?>');
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
        /* z-index: 1; */
    }

    .hero-content h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .hero-content p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }

    .line {
        width: 7%;
        height: 5px;
        background-color: white;
        margin-top: 1px;
    }

    .title {
        font-size: 4rem;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
        margin-left: 50px;
    }


    .subtitle {
        margin-left: 50px;
        font-family: 'Chakra Petch', sans-serif;
    }

    .gradient {
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

    .black-background {
        background-color: black;
        height: 128px;
        width: 100%;
    }

    .text-box {
        display: flex;
        margin-left: -300px;
    }

    .about-us {
        background-image: url('<?= base_url('assets/img/about-us/image 39.png') ?>');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 400px;
    }

    .text-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 30%;
        /* Gradient height, adjust as needed */
        display: flex;
        align-items: flex-end;
    }

    .gradient-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
    }

    .gradient-overlay-right {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        pointer-events: none;
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
                <div class="hero-content">
                    <p>Unveiling Our Journey: Nurturing Connectivity, Inspiring Futures</p>
                    <h1 class="chakra-petch-bold">Bridging Communities</h1>
                    <h1 class="chakra-petch-bold">Enriching Lives</h1>
                    <a href="#" class="btn btn-outline-light btn-lg chakra-petch-medium" data-mdb-ripple-init>Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container-fluid gradient" style="background-color:#000; padding: 60px 0;">
        <div class="row">
            <div class="col text-start" style="width: 100%; max-width: 800px; margin: 0 auto;">
                <h1 class="title chakra-petch-bold" style="margin-bottom: 20px;">A BRIEF STORY</h1>
                <p class="subtitle text-white chakra-petch-regular" style="text-align: justify; line-height: 1.8;">
                    PT. SaranaInsan MudaSelaras, a company that provides multimedia services, debuted the brand Jogja Medianet in Yogyakarta and its environs to support the vision of the city of Jogja, namely "Jogja Never Ending Asia."
                </p>
                <p class="subtitle text-white chakra-petch-regular" style="text-align: justify; line-height: 1.8;">
                    In August of 2001, Jogja Medianet established a presence in Yogyakarta by conducting a survey and designing infrastructure development based on the findings of a Marketing Research study on multimedia services.
                </p>
                <p class="subtitle text-white chakra-petch-regular" style="text-align: justify; line-height: 1.8;">
                    Due to the demand for Multimedia Services, which is the convergence of Data, Voice, and Image services, Hybrid Fiber Coax (HFC) technology, a combination of fiber optic cable and coaxial cable technology, has been chosen. Several European and North American nations have evaluated this Broadband Access technology.
                </p>
                <p class="subtitle text-white chakra-petch-regular" style="text-align: justify; line-height: 1.8;">
                    Construction of the HFC Network infrastructure began in October 2001 using RF equipment from Scientific Atlanta (SA), the primary HFC Network equipment supplier in the United States.
                </p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid p-0 position-relative">
        <div class="row">
            <div class="col">
                <div class="position-relative">
                    <!-- Gambar Latar -->
                    <img src="<?= base_url("assets/img/about-us/image 39.png") ?>" alt="About Us Image" class="img-fluid w-100" style="object-fit: cover; height: 100vh;">

                    <!-- Gradient overlay -->
                    <div class="gradient-overlay position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0)); z-index: 1;"></div>

                    <!-- Teks Overlay -->
                    <div class="text-overlay position-absolute bottom-0 start-0 w-100" style="height: auto; padding-bottom: 100px; z-index: 2;">
                        <div class="container text-white" style="max-width: 800px;">
                            <h1 class="subtitle text-white chakra-petch-bold" style="text-align: start; margin-bottom:40px;">The basic configuration of the Jogja Medianet HFC network</h1>
                            <p class="subtitle text-white chakra-petch-regular" style="text-align: start;">
                                In January 2002, during the ATF (Asean Tourism Forum) international event held at the Jogja Expo Center (JEC), Jogja Medianet began offering its services.
                            </p>
                            <p class="subtitle text-white chakra-petch-regular" style="text-align: start;">
                                The JEC Building has then become Multimedia Services Ready supported by the HFC infrastructure of Jogja Medianet.
                            </p>
                            <p class="subtitle text-white chakra-petch-regular" style="text-align: start;">
                                In accordance with the progression of telecommunications technology, PT SIMS is migrating its services to FTTH (Fiber To The Home).
                            </p>
                            <p class="subtitle text-white chakra-petch-regular" style="text-align: start;">
                                Infrastructure. Currently, Jogja’s entire service infrastructure utilizes Fiber Optics to reach residences, in an endeavor to introduce new products and services with a new vision as the leading digital lifestyle in Yogyakarta, the new Lifemedia Brand is introduced.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="row">
    <div class="col">
        <div class="black-background"></div>
    </div>
</div>

<section>
    <div class="row">
        <div class="col-sm-6 p-0" style="margin-top:-5px;">
            <img src=" <?= base_url("assets/img/about-us/vision.png") ?>" alt="Vision & Mission img" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="col-sm-6 d-flex align-items-center justify-content-center bg-black">
            <div class="text-box p-4 rounded-0 position-box">
                <h1 class="text-white chakra-petch-bold " style="font-size: 80px;">Vision & Mission</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid gradient" style="background-color:#000; padding: 60px 0;">
        <div class="row">
            <div class="col text-start" style="width: 100%; max-width: 800px; margin: 0 auto;">
                <h1 class="title chakra-petch-bold" style="margin-bottom: 20px; font-size: 48px;">Vision</h1>
                <p class="subtitle text-white chakra-petch-regular" style="text-align: justify;">
                    The vision is the preeminent provider of multimedia/broadband networks and services in terms of content quality and breadth by offering sustainable ecosystem solution services.
                </p>
                <h1 class="title chakra-petch-bold" style="margin-top: 30px; margin-bottom: 20px; font-size: 48px;">Mission</h1>
                <ul class="subtitle text-white chakra-petch-regular" style="text-align: justify;">
                    <li>Providing network solutions, services, and multimedia products with a focus on ecosystems with added value and the best quality.</li>
                    <li>Becoming a profitable, advanced, and learning company.</li>
                    <li>Providing network solutions, services, and multimedia products with smart, fast, and right quality as well as prices.</li>
                    <li>Creating trend services and enriching multimedia content in the context of ecosystem growth with continuous development and innovation processes.</li>
                    <li>Encouraging the transformation of information society towards knowledge by strengthening culture, productivity, growth, moral intelligence, and noble character.</li>
                    <li>Establishing synergies and partnerships with local and national ecosystem participants in the development of competitive multimedia products and services.</li>
                    <li>Providing the best care and support for human resources who strive to be the best professionals in multimedia products and services.</li>
                    <li>Becoming a government partner in creating a favorable climate for the development of ecosystems in Indonesia and accelerating the implementation of multimedia services and networks in society.</li>
                </ul>

                <h1 class="title chakra-petch-bold" style="margin-top: 30px; margin-bottom: 20px; font-size: 48px;">Business Strategies</h1>
                <ul class="subtitle text-white chakra-petch-regular" style="text-align: justify;">
                    <li>Partnering strategically with respected local and national companies.</li>
                    <li>Investing in advanced infrastructure to enhance business services development and multimedia platforms across the nation.</li>
                    <li>Becoming a prominent partner in creating favorable investment conditions for multimedia service and network society.</li>
                    <li>Utilizing and maximizing the quality of the broadband service system and technology for customers.</li>
                </ul>
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
<?= $this->endSection() ?>