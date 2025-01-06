<x-home>
    <!-- hero  -->
    <section class="hero pt-120 pb-120">
        <div class="hero-inner">
            <div class="bar d-none d-md-flex flex-column justify-content-between gap-4">
                <div class="d-flex flex-column align-items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 22px" viewBox="0 0 256 256">
                        <rect width="256" height="256" fill="none" />
                        <circle cx="64" cy="48" r="16" />
                        <circle cx="128" cy="48" r="16" />
                        <circle cx="192" cy="48" r="16" />
                        <circle cx="64" cy="104" r="16" />
                        <circle cx="128" cy="104" r="16" />
                        <circle cx="192" cy="104" r="16" />
                        <circle cx="64" cy="160" r="16" />
                        <circle cx="128" cy="160" r="16" />
                        <circle cx="128" cy="216" r="16" />
                        <circle cx="192" cy="160" r="16" />
                    </svg>
                    <a href="tel:+910369201003" class="vertical-text fw-semibold">+91 0369 201 003</a>
                </div>
                <div class="d-flex flex-column align-items-center gap-3">
                    <p class="vertical-text fw-semibold text-uppercase">Scroll</p>
                    <img src="{{ asset('frontend//assets/images/arrow.png') }}" width="24" alt="" />
                </div>
            </div>
            @foreach ($slider as $item)
                <div class="container flex-grow-1">
                    <div class="row g-4 align-items-center">


                        <div class="col-lg-6">


                            <h5 class="text-uppercase fade_up_anim">Selamat <span class="text-uppercase text-primary">Datang
                                di    
                                </span></h5>
                            <h1 data-delay="0.15" class="display-1 hero-name fade_up_anim"><span
                                    class="first">SMK</span>
                                <span class="last">Mathar</span>
                            </h1>
                            <h3 data-delay="0.3" class="mb-3 fade_up_anim">{{ $item->judul }}</h3>
                            <p data-delay="0.45" class="mb-3 mb-xl-4 pb-xl-3 fade_up_anim">{!! $item->deskripsi !!}</p>
                            <div data-delay=".6" class="d-flex flex-wrap align-items-center gap-4 fade_up_anim">
                                <a href="contact-me.html" class="btn btn-primary text-white d-inline-flex">Hubungi Kami</a>
                                <div class="d-flex flex-wrap align-items-center gap-4">
                                    <div class="users-group">
                                        <img width="60" src="{{ asset('frontend/assets/images/user-1.png ') }}"
                                            alt="" />
                                        <img width="60" src="{{ asset('frontend/assets/images/user-2.png') }}"
                                            alt="" />
                                        <img width="60" src="{{ asset('frontend/assets/images/user-3.png') }}"
                                            alt="" />
                                        <img width="60" src="{{ asset('frontend/assets/images/user-4.png') }}"
                                            alt="" />
                                        <span><i class="ph ph-arrow-right"></i></span>
                                    </div>
                                    <div class="ps-4">
                                        <h4 class="mb-1">10k+</h4>
                                        <p>Real Customers</p>
                                    </div>
                                </div>
                            </div>




                        </div>


                        <div class="col-lg-6">
                            <img src="{{ $item->picture }}" class="img-fluid fade_up_anim" alt="" />
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="bar d-none d-md-flex flex-column align-items-center justify-content-between gap-4">
            <p class="vertical-text fw-semibold text-uppercase">Follow Me</p>
            <img src="{{ asset('frontend/assets/images/arrow.png') }}" width="24" alt="" />
            <ul class="social-links">
                <li>
                    <a href="#"><i class="ph-fill ph-facebook-logo"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ph-fill ph-twitter-logo"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ph ph-behance-logo"></i></a>
                </li>
                <li>
                    <a href="#"><i class="ph ph-dribbble-logo"></i></a>
                </li>
            </ul>
        </div>
        </div>
    </section>


    <!-- video intro -->
    <section class="video-intro overflow-visible">
        <div class="video-inner">
            <div class="container">
                <div class="intro-content">
                    <div class="fade_up_anim d-flex align-items-center gap-3 justify-content-center mb-4 mb-xl-5">
                        <img src="{{ asset('frontend/assets/images/mark-enzo.png') }}" width="80" height="80"
                            class="img-fluid rounded-circle" alt="" />
                        <div class="intro-content-text">
                            <h4 class="text-white mb-1">Mark Engo</h4>
                            <p>Website Designer</p>
                        </div>
                    </div>
                    <p data-delay=".1" class="fade_up_anim text-center about-me">I am a Product designer,
                        specialising in crafting user-friendly, immersive online experiences. I create seamless
                        brand experiences for a global client base.</p>
                </div>
            </div>
        </div>
        <div class="watch-video">
            <a href="https://www.youtube.com/watch?v=yCyE91-D-KI" class="img-wrapper video">
                <img src="{{ asset('frontend/assets/images/watch-video.png') }}" alt="" />
                <i class="ph-fill ph-play"></i>
            </a>
        </div>
    </section>


    <!-- digital experience -->
    <section class="experience pb-120 pt-120 mt-xl-5">
        <div class="container">
            <h2 class="title-anim text-center mb-4 mb-xl-5 max-w-700">I craft wonderful digital experiences for
                brands</h2>
            <div class="card-container">
                <div class="exp-card-wrapper">
                    <img src="{{ asset('frontend/assets/images/shape-top.png') }}" alt="" />
                    <div class="experience-card">
                        <h6 class="my-4">## 1 ##</h6>
                        <div class="card-inner">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/figma.png') }}" width="24"
                                    alt="" />
                            </div>
                            <p class="percent">90%</p>
                        </div>
                        <h6 class="my-4 d-none d-sm-block">Figma</h6>
                    </div>
                    <img src="{{ asset('frontend/assets/images/shape-bottom.png') }}" alt="" />
                </div>
                <div class="exp-card-wrapper">
                    <img src="{{ asset('frontend/assets/images/shape-top.png') }}" alt="" />
                    <div class="experience-card">
                        <h6 class="my-4">## 1 ##</h6>
                        <div class="card-inner">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/xd.png') }}" width="32"
                                    alt="" />
                            </div>
                            <p class="percent">80%</p>
                        </div>
                        <h6 class="my-4 d-none d-sm-block">Adobe XD</h6>
                    </div>
                    <img src="{{ asset('frontend/assets/images/shape-bottom.png') }}" alt="" />
                </div>
                <div class="exp-card-wrapper">
                    <img src="{{ asset('frontend/assets/images/shape-top.png') }}" alt="" />
                    <div class="experience-card">
                        <h6 class="my-4">## 1 ##</h6>
                        <div class="card-inner">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/wordpress.png') }}" width="32"
                                    alt="" />
                            </div>
                            <p class="percent">90%</p>
                        </div>
                        <h6 class="my-4 d-none d-sm-block">Wordpress</h6>
                    </div>
                    <img src="{{ asset('frontend/assets/images/shape-bottom.png') }}" alt="" />
                </div>
                <div class="exp-card-wrapper">
                    <img src="{{ asset('frontend/assets/images/shape-top.png') }}" alt="" />
                    <div class="experience-card">
                        <h6 class="my-4">## 1 ##</h6>
                        <div class="card-inner">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/html.png') }}" width="28"
                                    alt="" />
                            </div>
                            <p class="percent">85%</p>
                        </div>
                        <h6 class="my-4 d-none d-sm-block">HTML</h6>
                    </div>
                    <img src="{{ asset('frontend/assets/images/shape-bottom.png') }}" alt="" />
                </div>
                <div class="exp-card-wrapper">
                    <img src="{{ asset('frontend/assets/images/shape-top.png') }}" alt="" />
                    <div class="experience-card">
                        <h6 class="my-4">## 1 ##</h6>
                        <div class="card-inner">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/bootstrap.png') }}" width="32"
                                    alt="" />
                            </div>
                            <p class="percent">70%</p>
                        </div>
                        <h6 class="my-4 d-none d-sm-block">Bootstrap</h6>
                    </div>
                    <img src="{{ asset('frontend/assets/images/shape-bottom.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>


    <!-- Service section -->
    <section class="service pt-120">
        <div class="container-black cb-padd">
            <div class="container overflow-hidden">
                <div class="d-flex heading justify-content-between align-items-center gap-3">
                    <p class="text-uppercase text-white fw-semibold">(Service we offer)</p>
                    <a href="what-i-do.html" class="text-uppercase fw-semibold">Services all <i
                            class="ph ph-arrow-right"></i></a>
                </div>
                <div class="service-container position-relative">
                    <img src="{{ asset('frontend/assets/images/service-img.png') }}"
                        class="service-img d-none d-xl-block img-fluid" alt="" />
                    <div data-img="project-1"
                        class="fade_up_anim service d-flex justify-content-between align-items-center">
                        <a href="service-details.html" class="service-left">
                            <p class="text-white fs-5">I</p>
                            <h2 class="text-white">UI &amp; Visual Design</h2>
                        </a>
                        <button>
                            <i class="ph ph-plus-circle"></i>
                        </button>
                    </div>
                    <div data-img="project-2"
                        class="fade_up_anim service d-flex justify-content-between align-items-center">
                        <a href="service-details.html" class="service-left">
                            <p class="text-white fs-5">II</p>
                            <h2 class="text-white">Branding Solutions</h2>
                        </a>
                        <button>
                            <i class="ph ph-plus-circle"></i>
                        </button>
                    </div>
                    <div data-img="project-3"
                        class="fade_up_anim service d-flex justify-content-between align-items-center">
                        <a href="service-details.html" class="service-left">
                            <p class="text-white fs-5">III</p>
                            <h2 class="text-white">Digital Marketing</h2>
                        </a>
                        <button>
                            <i class="ph ph-plus-circle"></i>
                        </button>
                    </div>
                    <div data-img="project-4"
                        class="fade_up_anim service d-flex justify-content-between align-items-center">
                        <a href="service-details.html" class="service-left">
                            <p class="text-white fs-5">IV</p>
                            <h2 class="text-white">Web Development</h2>
                        </a>
                        <button>
                            <i class="ph ph-plus-circle"></i>
                        </button>
                    </div>
                    <div data-img="project-5"
                        class="fade_up_anim service d-flex justify-content-between align-items-center">
                        <a href="service-details.html" class="service-left">
                            <p class="text-white fs-5">V</p>
                            <h2 class="text-white">Application Design</h2>
                        </a>
                        <button>
                            <i class="ph ph-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- selected projects -->
    <section class="projects pt-120 pb-120">
        <div class="swiper project-title">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <h2 class="project-name fw-bolder">This is Mark Engo -&nbsp;</h2>
                </div>
                <div class="swiper-slide">
                    <h2 class="project-name fw-bolder">I am professional Online developer -&nbsp;</h2>
                </div>
                <div class="swiper-slide">
                    <h2 class="project-name fw-bolder">I live in USA -&nbsp;</h2>
                </div>
            </div>
        </div>
        <div class="container pt-120">
            <div class="d-flex heading justify-content-between align-items-center gap-3">
                <p class="text-uppercase fw-semibold text-black">(Selected Works)</p>
                <a href="portfolio.html" class="text-uppercase fw-semibold">See All Projects <i
                        class="ph ph-arrow-right"></i></a>
            </div>
            <div class="project-container">
                <div class="apear-down project-card">
                    <div>
                        <div class="top d-flex justify-content-between gap-2 align-items-center">
                            <p>01</p>
                            <div class="line"></div>
                            <p>2024</p>
                        </div>
                        <a href="portfolio-details.html" class="img-wrapper">
                            <img src="{{ asset('frontend/assets/images/project-1.png') }}" class="img-fluid"
                                alt="" />
                        </a>
                        <h3 class="mb-3">Book Covers Design</h3>
                        <div class="bottom d-flex overflow-hidden">
                            <div class="tags">
                                <a href="#" class="tag">Desgin</a>
                                <a href="#" class="tag">Art Direction</a>
                            </div>
                            <a href="portfolio-details.html" class="arrow">
                                <div class="inner fs-3">
                                    <i class="ph ph-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-delay=".2" class="apear-down project-card">
                    <div>
                        <div class="top d-flex justify-content-between gap-2 align-items-center">
                            <p>02</p>
                            <div class="line"></div>
                            <p>2024</p>
                        </div>
                        <a href="portfolio-details.html" class="img-wrapper">
                            <img src="{{ asset('frontend/assets/images/project-2.png') }}" class="img-fluid"
                                alt="" />
                        </a>
                        <h3 class="mb-3">Art of Graphic</h3>
                        <div class="bottom d-flex overflow-hidden">
                            <div class="tags">
                                <a href="#" class="tag">Desgin</a>
                                <a href="#" class="tag">Art Direction</a>
                            </div>
                            <a href="portfolio-details.html" class="arrow">
                                <div class="inner fs-3">
                                    <i class="ph ph-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="apear-down project-card">
                    <div>
                        <div class="top d-flex justify-content-between gap-2 align-items-center">
                            <p>03</p>
                            <div class="line"></div>
                            <p>2023</p>
                        </div>
                        <a href="portfolio-details.html" class="img-wrapper">
                            <img src="{{ asset('frontend/assets/images/project-3.png') }}" class="img-fluid"
                                alt="" />
                        </a>
                        <h3 class="mb-3">Product Mockup Design</h3>
                        <div class="bottom d-flex overflow-hidden">
                            <div class="tags">
                                <a href="#" class="tag">Desgin</a>
                                <a href="#" class="tag">Art Direction</a>
                            </div>
                            <a href="portfolio-details.html" class="arrow">
                                <div class="inner fs-3">
                                    <i class="ph ph-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-delay=".2" class="apear-down project-card">
                    <div>
                        <div class="top d-flex justify-content-between gap-2 align-items-center">
                            <p>04</p>
                            <div class="line"></div>
                            <p>2023</p>
                        </div>
                        <a href="portfolio-details.html" class="img-wrapper">
                            <img src="{{ asset('frontend/assets/images/project-4.png') }}" class="img-fluid"
                                alt="" />
                        </a>
                        <h3 class="mb-3">Branded Packing</h3>
                        <div class="bottom d-flex overflow-hidden">
                            <div class="tags">
                                <a href="#" class="tag">Desgin</a>
                                <a href="#" class="tag">Art Direction</a>
                            </div>
                            <a href="portfolio-details.html" class="arrow">
                                <div class="inner fs-3">
                                    <i class="ph ph-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="apear-down project-card">
                    <div>
                        <div class="top d-flex justify-content-between gap-2 align-items-center">
                            <p>05</p>
                            <div class="line"></div>
                            <p>2022</p>
                        </div>
                        <a href="portfolio-details.html" class="img-wrapper">
                            <img src="{{ asset('frontend/assets/images/project-5.png') }}" class="img-fluid"
                                alt="" />
                        </a>
                        <h3 class="mb-3">Product Mockup Design</h3>
                        <div class="bottom d-flex overflow-hidden">
                            <div class="tags">
                                <a href="#" class="tag">Desgin</a>
                                <a href="#" class="tag">Art Direction</a>
                            </div>
                            <a href="portfolio-details.html" class="arrow">
                                <div class="inner fs-3">
                                    <i class="ph ph-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-delay=".2" class="apear-down project-card">
                    <div>
                        <div class="top d-flex justify-content-between gap-2 align-items-center">
                            <p>06</p>
                            <div class="line"></div>
                            <p>2022</p>
                        </div>
                        <a href="portfolio-details.html" class="img-wrapper">
                            <img src="{{ asset('frontend/assets/images/project-6.png') }}" class="img-fluid"
                                alt="" />
                        </a>
                        <h3 class="mb-3">App Development</h3>
                        <div class="bottom d-flex overflow-hidden">
                            <div class="tags">
                                <a href="#" class="tag">Desgin</a>
                                <a href="#" class="tag">Art Direction</a>
                            </div>
                            <a href="portfolio-details.html" class="arrow">
                                <div class="inner fs-3">
                                    <i class="ph ph-arrow-up-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- experience -->
    <section class="experience">
        <div class="container-black">
            <div class="container">
                <img src="{{ asset('frontend/assets/images/mark-enzo.png') }}"
                    class="fade_up_anim rounded-circle mx-auto mb-4" alt="" />
                <p data-delay=".2" class="fade_up_anim text-center text-white fw-bolder fs-1 pb-120 exp-heading">
                    Mark Engo is one of the most precious in our industry, the way he approaches projects is an
                    inspiration.</p>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-5">
                        <img src="{{ asset('frontend/assets/images/experience.png') }}" class="img-fluid"
                            alt="" />
                    </div>
                    <div class="col-lg-6 offset-xl-1" id="exp-accordion">
                        <div class="experience-item">
                            <div data-bs-toggle="collapse" data-bs-target="#exp" class="top">
                                <h4 class="text-white">My Experience</h4>
                                <button class="bg-transparent fs-4 border-0 f-center text-white">
                                    <i class="ph ph-plus"></i>
                                    <i class="ph ph-minus"></i>
                                </button>
                            </div>
                            <div id="exp" class="exp-body collapse show" data-bs-parent="#exp-accordion">
                                <div class="single-experience">
                                    <div class="inner-card">
                                        <span>2021 - Present</span>
                                        <div>
                                            <h4 class="text-white fw-bold mb-2">Framer Designer &amp; Develper</h4>
                                            <p>(Bronudee Agency)</p>
                                        </div>
                                    </div>
                                    <div class="inner-card">
                                        <span>2018 - 2020</span>
                                        <div>
                                            <h4 class="text-white fw-bold mb-2">Develper &amp; Co-founder</h4>
                                            <p>(Bronudee Agency)</p>
                                        </div>
                                    </div>
                                    <div class="inner-card">
                                        <span>2016 - 2018</span>
                                        <div>
                                            <h4 class="text-white fw-bold mb-2">Front-end Develper</h4>
                                            <p>(Bronudee Agency)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="experience-item">
                            <div data-bs-toggle="collapse" data-bs-target="#edu" class="top collapsed">
                                <h4 class="text-white">My Education</h4>
                                <button class="bg-transparent fs-4 border-0 f-center text-white">
                                    <i class="ph ph-plus"></i>
                                    <i class="ph ph-minus"></i>
                                </button>
                            </div>
                            <div id="edu" class="exp-body collapse" data-bs-parent="#exp-accordion">
                                <div class="single-experience">
                                    <div class="inner-card">
                                        <span>2014 - 2016</span>
                                        <div>
                                            <h4 class="text-white fw-bold mb-2">MSC in CSE</h4>
                                            <p>(University of Tech)</p>
                                        </div>
                                    </div>
                                    <div class="inner-card">
                                        <span>2011 - 2014</span>
                                        <div>
                                            <h4 class="text-white fw-bold mb-2">BSC In CSE</h4>
                                            <p>(Daffodil University)</p>
                                        </div>
                                    </div>
                                    <div class="inner-card">
                                        <span>2009 - 2011</span>
                                        <div>
                                            <h4 class="text-white fw-bold mb-2">High School Diploma</h4>
                                            <p>(Local High School)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- clients review -->
    <section class="clients pt-120 pb-120">
        <div class="container">
            <h2 class="title-anim text-center mb-4 mb-xl-5 pb-3 display-3 fw-bolder">Our clients loved working with
                us, and we are confident you will too!</h2>
            <div class="reviews" id="review-accordion">
                <div class="apear-down review">
                    <span class="d-inline-block me-2 me-xxl-4">I</span>
                    <div
                        class="d-flex gap-3 gap-lg-4 flex-wrap flex-md-nowrap gap-xxl-5 flex-grow-1 align-items-center">
                        <img src="{{ asset('frontend/assets/images/client-1.png') }}"
                            class="client-img flex-shrink-0" alt="" />
                        <div>
                            <div id="client1" class="collapse show" data-bs-parent="#review-accordion">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/assets/images/quote.png') }}" class="mb-3"
                                        alt="" />
                                    <p class="fw-semibold h4">Neque porro quisquam est, qui dolorem ipsum quia
                                        dolor sit amet consectetur, adipisci velit, sed quia non numquam eius
                                        tempora in labore et dolore magnam aliquam quaerat voluptatem. minima a quis
                                        nostrum exercitationem ullam</p>
                                </div>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-2">Robert Alikson</h3>
                                <p>CEO at Envato</p>
                            </div>
                        </div>
                    </div>


                    <button class="bg-transparent border-0 flex-shrink-0 f-center gap-1 fs-6"
                        data-bs-toggle="collapse" data-bs-target="#client1">
                        <span class="close">Close</span>
                        <span class="read">Read Review</span>
                        <i class="ph ph-arrow-up"></i>
                    </button>
                </div>
                <div class="apear-down review">
                    <span class="d-inline-block me-2 me-xxl-4">I</span>
                    <div
                        class="d-flex gap-3 gap-lg-4 flex-wrap flex-md-nowrap gap-xxl-5 flex-grow-1 align-items-center">
                        <img src="{{ asset('frontend/assets/images/client-2.png') }}"
                            class="client-img flex-shrink-0" alt="" />
                        <div>
                            <div id="client2" class="collapse" data-bs-parent="#review-accordion">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/assets/images/quote.png') }}" class="mb-3"
                                        alt="" />
                                    <p class="fw-semibold h4">Neque porro quisquam est, qui dolorem ipsum quia
                                        dolor sit amet consectetur, adipisci velit, sed quia non numquam eius
                                        tempora in labore et dolore magnam aliquam quaerat voluptatem. minima a quis
                                        nostrum exercitationem ullam</p>
                                </div>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-2">Mac Alister Roy</h3>
                                <p>CEO at Envato</p>
                            </div>
                        </div>
                    </div>


                    <button class="bg-transparent collapsed border-0 flex-shrink-0 f-center gap-1 fs-6"
                        data-bs-toggle="collapse" data-bs-target="#client2">
                        <span class="close">Close</span>
                        <span class="read">Read Review</span>
                        <i class="ph ph-arrow-up"></i>
                    </button>
                </div>
                <div class="apear-down review">
                    <span class="d-inline-block me-2 me-xxl-4">I</span>
                    <div
                        class="d-flex gap-3 gap-lg-4 flex-wrap flex-md-nowrap gap-xxl-5 flex-grow-1 align-items-center">
                        <img src="{{ asset('frontend/assets/images/client-3.png') }}"
                            class="client-img flex-shrink-0" alt="" />
                        <div>
                            <div id="client3" class="collapse" data-bs-parent="#review-accordion">
                                <div class="mb-4">
                                    <img src="{{ asset('frontend/assets/images/quote.png') }}" class="mb-3"
                                        alt="" />
                                    <p class="fw-semibold h4">Neque porro quisquam est, qui dolorem ipsum quia
                                        dolor sit amet consectetur, adipisci velit, sed quia non numquam eius
                                        tempora in labore et dolore magnam aliquam quaerat voluptatem. minima a quis
                                        nostrum exercitationem ullam</p>
                                </div>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-2">Nikolas Johnson</h3>
                                <p>CEO at Envato</p>
                            </div>
                        </div>
                    </div>


                    <button class="bg-transparent collapsed border-0 flex-shrink-0 f-center gap-1 fs-6"
                        data-bs-toggle="collapse" data-bs-target="#client3">
                        <span class="close">Close</span>
                        <span class="read">Read Review</span>
                        <i class="ph ph-arrow-up"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- global clients -->
    <section class="global-client">
        <div class="container-black">
            <h3 class="text-center text-white mb-4 mb-xl-5 pb-1 pb-xl-3 title-anim">I've 1100+ Global Clients &amp;
                lot's of Project Complete</h3>
            <div class="brand-container">
                <div class="container">
                    <div class="swiper brand-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('frontend/assets/images/brand-1.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('frontend/assets/images/brand-2.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('frontend/assets/images/brand-3.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('frontend/assets/images/brand-4.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('frontend/assets/images/brand-5.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('frontend/assets/images/brand-2.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-logo">
                                    <img src="{{ asset('frontend/assets/images/brand-3.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- blog section -->
    <section class="blogs pt-120 pb-120">
        <div class="container">
            <h2 class="text-center display-3 fw-bolder mb-60 title-anim">Informasi Terbaru SMK MATHAR</h2>
            <div class="row gy-4">
                @foreach ($artikel as $item)
                    
                
                <div class="col-md-6 col-xl-4">
                    <div class="blog-card fade_up_anim">
                        <div class="inner">
                            <div class="d-flex align-items-center gap-3 mb-30">
                                <p>UI Design</p>
                                <p>—</p>
                                <p>{{ $item->created_at->format('d-m-y') }}</p>
                            </div>
                            <h3 class="mb-30 fw-bolder h3">{{ $item->judul }}</h3>
                            <a href="{{ route('artikeldetail', $item->slug) }}" class="img-wrapper rounded-3 mb-30">
                                <img src="{{ $item->picture }}" style="height: 346px; width: 194px;" class="img-fluid w-100 rounded-3" alt="" />

                            </a>
                            <p class="mb-30">{!! \Illuminate\Support\Str::limit($item->des, 100, '...') !!}</p>
                            <a href="{{ route('artikeldetail', $item->slug) }}" class="d-flex fw-semibold align-items-center gap-2">Read
                                More <i class="ph ph-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach

               
            </div>
        </div>
    </section>
</x-home>



