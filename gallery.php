<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Abaft</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/fav.svg">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nouislider.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/elegant-icon.css">
    <link rel="stylesheet" href="assets/css/hover-reveal.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="assets/css/aos.css" rel="stylesheet">
</head>

<body>

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="preloader__content text-center">
                    <div class="preloader__logo">
                        <img src="assets/img/logo-footer.png" alt="">
                    </div>
                    <div id="tp-loading-bar" class="preloader__bar">
                        <div id="tp-loading-line" class="preloader__bar-inner"></div>
                    </div>

                    <p class="preloader__loading">Loading</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>

    
    <section class="about__heading about__heading-overlay about__spacing include-bg jarallax"
        data-background="assets/img/breadcrumb/breadcrumb-bg-5.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="about__heading-content text-center p-relative z-index-1">
                        <h3 class="about__heading-title">Our Portfolios</h3>
                        <span class="about__heading-subtitle"><a href="#">Home</a> / Portfolios</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'header.php';?>


    <main>

        <section class="portfolio__area pt-110 pb-75 p-relative fix">
            <div class="portfolio__shape">
                <img class="portfolio__shape-13" src="assets/img/portfolio/shape/circle-1.png" alt="">
                <img class="portfolio__shape-14" src="assets/img/portfolio/shape/circle-2.png" alt="">
                <img class="portfolio__shape-15" src="assets/img/portfolio/shape/circle-sm.png" alt="">
                <img class="portfolio__shape-16" src="assets/img/portfolio/shape/polygon-yellow.png" alt="">
                <img class="portfolio__shape-17" src="assets/img/portfolio/shape/polygon-pink.png" alt="">
                <img class="portfolio__shape-18" src="assets/img/portfolio/shape/polygon-green.png" alt="">
                <img class="portfolio__shape-19" src="assets/img/portfolio/shape/polygon-green-2.png" alt="">
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="portfolio__masonary-btn text-center mb-40">
                            <div class="masonary-menu filter-button-group">
                                <button class="active" data-filter="*">All</button>
                                <button data-filter=".cat1">Apps</button>
                                <button data-filter=".cat2">Branding</button>
                                <button data-filter=".cat3">Creative</button>
                                <button data-filter=".cat4">Packaging</button>
                                <button data-filter=".cat5">Mockup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tp-gx-4 grid tp-portfolio-load-more" data-show="9" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat1 cat4 cat2">
                        <div class="portfolio__grid-item mb-40">
                            <div class="portfolio__grid-thumb w-img fix">
                           
                                    <img src="assets/img/portfolio/portfolio-grid-1.jpg" alt="">
                             
                                <div class="portfolio__grid-popup">
                                    <a href="assets/img/portfolio/portfolio-grid-1.jpg" class="popup-image">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1667 8.33341H0.833333C0.377778 8.33341 0 7.95564 0 7.50008C0 7.04453 0.377778 6.66675 0.833333 6.66675H14.1667C14.6222 6.66675 15 7.04453 15 7.50008C15 7.95564 14.6222 8.33341 14.1667 8.33341Z"
                                                fill="currentColor" />
                                            <path
                                                d="M7.4974 15C7.04184 15 6.66406 14.6222 6.66406 14.1667V0.833333C6.66406 0.377778 7.04184 0 7.4974 0C7.95295 0 8.33073 0.377778 8.33073 0.833333V14.1667C8.33073 14.6222 7.95295 15 7.4974 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                   Magazine Cover
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>Creative</span>
                                    </div>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat3 cat4 cat5">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                          
                                    <img src="assets/img/portfolio/portfolio-grid-2.jpg" alt="">
                             
                                <div class="portfolio__grid-popup">
                                    <a href="assets/img/portfolio/portfolio-grid-2.jpg" class="popup-image">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1667 8.33341H0.833333C0.377778 8.33341 0 7.95564 0 7.50008C0 7.04453 0.377778 6.66675 0.833333 6.66675H14.1667C14.6222 6.66675 15 7.04453 15 7.50008C15 7.95564 14.6222 8.33341 14.1667 8.33341Z"
                                                fill="currentColor" />
                                            <path
                                                d="M7.4974 15C7.04184 15 6.66406 14.6222 6.66406 14.1667V0.833333C6.66406 0.377778 7.04184 0 7.4974 0C7.95295 0 8.33073 0.377778 8.33073 0.833333V14.1667C8.33073 14.6222 7.95295 15 7.4974 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                   Logo Mockups
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                          Productshot
                                        </span>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat2 cat1 cat5">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                              
                                    <img src="assets/img/portfolio/portfolio-grid-3.jpg" alt="">
                           
                                <div class="portfolio__grid-popup">
                                    <a href="assets/img/portfolio/portfolio-grid-3.jpg" class="popup-image">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1667 8.33341H0.833333C0.377778 8.33341 0 7.95564 0 7.50008C0 7.04453 0.377778 6.66675 0.833333 6.66675H14.1667C14.6222 6.66675 15 7.04453 15 7.50008C15 7.95564 14.6222 8.33341 14.1667 8.33341Z"
                                                fill="currentColor" />
                                            <path
                                                d="M7.4974 15C7.04184 15 6.66406 14.6222 6.66406 14.1667V0.833333C6.66406 0.377778 7.04184 0 7.4974 0C7.95295 0 8.33073 0.377778 8.33073 0.833333V14.1667C8.33073 14.6222 7.95295 15 7.4974 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                  Pattern Inspired
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                         Packaging
                                        </span>
                                    </div>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat4 cat2 cat3">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                            
                                    <img src="assets/img/portfolio/portfolio-grid-4.jpg" alt="">
                            
                                <div class="portfolio__grid-popup">
                                    <a href="assets/img/portfolio/portfolio-grid-4.jpg" class="popup-image">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1667 8.33341H0.833333C0.377778 8.33341 0 7.95564 0 7.50008C0 7.04453 0.377778 6.66675 0.833333 6.66675H14.1667C14.6222 6.66675 15 7.04453 15 7.50008C15 7.95564 14.6222 8.33341 14.1667 8.33341Z"
                                                fill="currentColor" />
                                            <path
                                                d="M7.4974 15C7.04184 15 6.66406 14.6222 6.66406 14.1667V0.833333C6.66406 0.377778 7.04184 0 7.4974 0C7.95295 0 8.33073 0.377778 8.33073 0.833333V14.1667C8.33073 14.6222 7.95295 15 7.4974 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                  Product Design
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                           Apps
                                        </span>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat1 cat3 cat4">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                              
                                    <img src="assets/img/portfolio/portfolio-grid-5.jpg" alt="">
                                
                                <div class="portfolio__grid-popup">
                                    <a href="assets/img/portfolio/portfolio-grid-5.jpg" class="popup-image">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1667 8.33341H0.833333C0.377778 8.33341 0 7.95564 0 7.50008C0 7.04453 0.377778 6.66675 0.833333 6.66675H14.1667C14.6222 6.66675 15 7.04453 15 7.50008C15 7.95564 14.6222 8.33341 14.1667 8.33341Z"
                                                fill="currentColor" />
                                            <path
                                                d="M7.4974 15C7.04184 15 6.66406 14.6222 6.66406 14.1667V0.833333C6.66406 0.377778 7.04184 0 7.4974 0C7.95295 0 8.33073 0.377778 8.33073 0.833333V14.1667C8.33073 14.6222 7.95295 15 7.4974 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                   Branding Design
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                           Branding
                                        </span>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat3 cat2 cat5">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                               
                                    <img src="assets/img/portfolio/portfolio-grid-6.jpg" alt="">
                             
                                <div class="portfolio__grid-video">
                                    <a href="https://www.youtube.com/watch?v=1gyTUHP6ne8"
                                        class="portfolio-play-btn popup-video">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                   Original Coffee
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                          Photography
                                        </span>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat3 cat2 cat5">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                               
                                    <img src="assets/img/portfolio/portfolio-grid-7.jpg" alt="">
                             
                                <div class="portfolio__grid-popup">
                                    <a href="assets/img/portfolio/portfolio-grid-7.jpg" class="popup-image">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1667 8.33341H0.833333C0.377778 8.33341 0 7.95564 0 7.50008C0 7.04453 0.377778 6.66675 0.833333 6.66675H14.1667C14.6222 6.66675 15 7.04453 15 7.50008C15 7.95564 14.6222 8.33341 14.1667 8.33341Z"
                                                fill="currentColor" />
                                            <path
                                                d="M7.4974 15C7.04184 15 6.66406 14.6222 6.66406 14.1667V0.833333C6.66406 0.377778 7.04184 0 7.4974 0C7.95295 0 8.33073 0.377778 8.33073 0.833333V14.1667C8.33073 14.6222 7.95295 15 7.4974 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                  Visual Identity
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                           Branding
                                        </span>
                                    </div>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat3 cat2 cat5">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                               
                                    <img src="assets/img/portfolio/portfolio-grid-8.jpg" alt="">
                              
                                <div class="portfolio__grid-video">
                                    <a href="https://www.youtube.com/watch?v=1gyTUHP6ne8"
                                        class="portfolio-play-btn popup-video">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                  UX Web Design
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                           Packaging
                                        </span>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat3 cat2 cat5">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                              
                                    <img src="assets/img/portfolio/portfolio-grid-9.jpg" alt="">
                              
                                <div class="portfolio__grid-popup">
                                    <a href="assets/img/portfolio/portfolio-grid-9.jpg" class="popup-image">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1667 8.33341H0.833333C0.377778 8.33341 0 7.95564 0 7.50008C0 7.04453 0.377778 6.66675 0.833333 6.66675H14.1667C14.6222 6.66675 15 7.04453 15 7.50008C15 7.95564 14.6222 8.33341 14.1667 8.33341Z"
                                                fill="currentColor" />
                                            <path
                                                d="M7.4974 15C7.04184 15 6.66406 14.6222 6.66406 14.1667V0.833333C6.66406 0.377778 7.04184 0 7.4974 0C7.95295 0 8.33073 0.377778 8.33073 0.833333V14.1667C8.33073 14.6222 7.95295 15 7.4974 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                  Magazine Cover
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                          Creative
                                        </span>
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat3 cat2 cat5">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                              
                                    <img src="assets/img/portfolio/portfolio-grid-10.jpg" alt="">
                               
                                <div class="portfolio__grid-popup">
                                    <a href="assets/img/portfolio/portfolio-grid-10.jpg" class="popup-image">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1667 8.33341H0.833333C0.377778 8.33341 0 7.95564 0 7.50008C0 7.04453 0.377778 6.66675 0.833333 6.66675H14.1667C14.6222 6.66675 15 7.04453 15 7.50008C15 7.95564 14.6222 8.33341 14.1667 8.33341Z"
                                                fill="currentColor" />
                                            <path
                                                d="M7.4974 15C7.04184 15 6.66406 14.6222 6.66406 14.1667V0.833333C6.66406 0.377778 7.04184 0 7.4974 0C7.95295 0 8.33073 0.377778 8.33073 0.833333V14.1667C8.33073 14.6222 7.95295 15 7.4974 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                   Visual Identity
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                            Branding
                                        </span>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat3 cat2 cat5">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                             
                                    <img src="assets/img/portfolio/portfolio-grid-11.jpg" alt="">
                              
                                <div class="portfolio__grid-video">
                                    <a href="https://www.youtube.com/watch?v=1gyTUHP6ne8"
                                        class="portfolio-play-btn popup-video">
                                        <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 11L0 21.3923V0.607696L18 11Z" fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                   UX Web Design
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                          Packaging
                                        </span>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 tp-portfolio grid-item cat3 cat2 cat5">
                        <div class="portfolio__grid-item mb-40" data-aos="fade-up" data-aos-duration="1500">
                            <div class="portfolio__grid-thumb w-img fix">
                              
                                    <img src="assets/img/portfolio/portfolio-grid-12.jpg" alt="">
                               
                                <div class="portfolio__grid-popup">
                                    <a href="assets/img/portfolio/portfolio-grid-12.jpg" class="popup-image">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.1667 8.33341H0.833333C0.377778 8.33341 0 7.95564 0 7.50008C0 7.04453 0.377778 6.66675 0.833333 6.66675H14.1667C14.6222 6.66675 15 7.04453 15 7.50008C15 7.95564 14.6222 8.33341 14.1667 8.33341Z"
                                                fill="currentColor" />
                                            <path
                                                d="M7.4974 15C7.04184 15 6.66406 14.6222 6.66406 14.1667V0.833333C6.66406 0.377778 7.04184 0 7.4974 0C7.95295 0 8.33073 0.377778 8.33073 0.833333V14.1667C8.33073 14.6222 7.95295 15 7.4974 15Z"
                                                fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio__grid-content">
                                <h3 class="portfolio__grid-title">
                                  Magazine Cover
                                </h3>
                                <div class="portfolio__grid-bottom">
                                    <div class="portfolio__grid-category">
                                        <span>
                                          Creative
                                        </span>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="portfolio__load-more text-center">
                            <button id="tp-load-more" type="button" class="tp-load-more-btn load-more mt-30 mb-50">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 8.5C1 4.36 4.33 1 8.5 1C13.5025 1 16 5.17 16 5.17M16 5.17V1.42M16 5.17H12.67"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M15.9175 8.5C15.9175 12.64 12.5575 16 8.4175 16C4.2775 16 1.75 11.83 1.75 11.83M1.75 11.83H5.14M1.75 11.83V15.58"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                Load more Post
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <?php include("footer.php") ?>

    
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/waypoints.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/meanmenu.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/nouislider.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
  AOS.init();
</script>
</body>

</html>