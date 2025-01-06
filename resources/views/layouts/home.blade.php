<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico ') }}" type="image/x-icon" />
    <title>Uniqeme - Personal Portfolio HTML Bootstrap Template</title>
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>


<body>
    <!-- go to top -->
    <button class="go-to-top">
        <i class="ph-bold ph-arrow-up"></i>
    </button>


    <!-- loader -->
    <div class="loader-wrapper">
        <span class="loader"></span>
    </div>


    <!-- Header -->
    <nav class="navbar-top">
        <div class="navbar-wrapper d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo d-inline-flex">
                <img src="{{ asset('frontend/assets/images/logo.png') }}" class="img-fluid" alt="" />
            </a>
            <div class="menu-wrapper">
                <ul class="menu-list d-none d-lg-flex">
                    <li><a href="{{ route('home') }}" class="menu-link">Beranda</a></li>
                    <li><a href="index.html" class="menu-link">Kegiatan</a></li>
                    <li><a href="index.html" class="menu-link">Siswa</a></li>
                    <li><a href="index.html" class="menu-link">Gallery</a></li>
                    <li><a href="{{ route('artikel') }}" class="menu-link">Informasi</a></li>
                    <li><a href="index.html" class="menu-link">Hubungi Kami</a></li>
                   
            </div>
            <button class="d-lg-none menu-toggle-btn fs-3 f-center bg-transparent"><i class="ph ph-list"></i></button>
        </div>
        <div class="mobile-menu d-lg-none">
            <div class="d-flex justify-content-between align-items-center gap-2 mb-4 d-lg-none">
                <img src="{{ asset('frontend/assets/images/logo.png ') }}" alt="" />
                <button class="menu-close-btn bg-transparent f-center fs-4"><i class="ph ph-x"></i></button>
            </div>
            <ul class="menu-list" id="mobile-menu">
                <li><a href="index.html" class="menu-link active">Home</a></li>
                <li><a href="about-me.html" class="menu-link">About Me</a></li>
                <li class="submenu">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#mservice">Service <i
                            class="ph ph-caret-up"></i></button>
                    <div id="mservice" class="collapse" data-bs-parent="#mobile-menu">
                        <ul class="submenu-dropdown">
                            <li><a href="services.html">Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </div>
                </li>
                <li class="submenu">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#mport">Portfolio <i
                            class="ph ph-caret-up"></i></button>
                    <div id="mport" class="collapse" data-bs-parent="#mobile-menu">
                        <ul class="submenu-dropdown">
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        </ul>
                    </div>
                </li>
                <li class="submenu">
                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#mblog">Blog <i
                            class="ph ph-caret-up"></i></button>
                    <div id="mblog" class="collapse" data-bs-parent="#mobile-menu">
                        <ul class="submenu-dropdown">
                            <li><a href="blogs.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="contact-me.html" class="menu-link">Contact Me</a></li>
            </ul>
        </div>
    </nav>




    <main>
       {{ $slot }}


     


        <!-- footer -->
        <footer class="footer pt-120">
            <div class="container">
                <h2 class="title-anim display-3 text-center text-white fw-bolder mb-30">
                    Reach out and <br />
                    let's create something great together
                </h2>
                <a class="fade_up_anim h4 fw-semibold mx-auto d-block mb-60 text-white text-center"
                    href="mailto:markcontact@example.com">contact@example.com</a>
                <div class="pb-120 d-flex justify-content-center">
                    <a href="contact-me.html" class="connect">
                        <span class="fs-4 fw-semibold z-3">Connect Me</span>
                        <i class="ph ph-arrow-up-right-bold fs-5 z-3"></i>
                        <div class="ball"></div>
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-6 px-md-0">
                        <div class="footer-box border-start-0 border-bottom-0 apear-down">
                            <p class="text-uppercase">phone</p>
                            <a href="tel:+4407557623301">+44 07557 623 301</a>
                        </div>
                        <div class="footer-box border-start-0 border-bottom-0 apear-down">
                            <p class="text-uppercase">email</p>
                            <a href="mailto:mail@example.com">mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-md-6 px-md-0">
                        <div class="footer-box border-start-0 border-end-0 h-100 border-bottom-0 apear-down">
                            <div class="d-flex flex-column justify-content-between h-100">
                                <p class="text-uppercase">Social</p>
                                <div>
                                    <a class="d-flex align-items-center gap-1 justify-content-end"
                                        href="#">Twitter <i class="ph ph-arrow-up-right"></i></a>
                                    <a class="d-flex align-items-center gap-1 justify-content-end"
                                        href="#">Facebook <i class="ph ph-arrow-up-right"></i></a>
                                    <a class="d-flex align-items-center gap-1 justify-content-end"
                                        href="#">Behance <i class="ph ph-arrow-up-right"></i></a>
                                    <a class="d-flex align-items-center gap-1 justify-content-end"
                                        href="#">Linkedin <i class="ph ph-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright d-flex justify-content-center">
                    <p class="text-center">© <span id="year"></span> All You Can Design. All Rights Reserved.</p>
                </div>
            </div>
        </footer>


    </main>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script defer src="{{ asset('frontend/assets/js/app.js') }}"></script>
</body>


</html>





