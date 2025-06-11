<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Sobre Nosotros || PinturaSuper || Expertos en Pintura y Decoración </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="PinturaSuper - Expertos en pintura residencial, comercial y decorativa" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php include '../bin/css.php'; ?>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- style switcher -->
    <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Opciones de Color</h3>
        <div class="layout-feature" id="colorMode">
            <a href="" class="dark-switcher" data-theme="pintura-dark">Oscuro</a>
            <a href="" class="light-switcher" data-theme="pintura-light">Claro</a>
            <button class="boxed-switcher">Modo Compacto</button>
        </div>
    </div>
    <!-- end style switcher -->

    <?php require '../bin/preloader.php'; ?>

    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php require '../bin/header.php'; ?>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/pintura-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Inicio</a></li>
                        <li><span>/</span></li>
                        <li>Sobre Nosotros</li>
                    </ul>
                    <h2>Sobre Nosotros</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Two Start-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">conoce nuestra empresa</span>
                                <h2 class="section-title__title">Transformamos Espacios con Color y Calidad</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="about-two__text-1">Más de 20 años de experiencia en pintura y decoración nos respaldan.</p>
                            <p class="about-two__text-2">En PinturaSuper nos especializamos en brindar soluciones integrales de pintura para hogares, oficinas y espacios comerciales. Nuestro equipo de profesionales garantiza resultados impecables.</p>
                            <div class="about-two__points-box">
                                <div class="about-two__points-left">
                                    <ul class="list-unstyled about-two__points">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="text">
                                                <p>Materiales de Primera</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="about-two__points-text">Trabajamos con las mejores marcas del mercado.</p>
                                </div>
                                <div class="about-two__points-right">
                                    <ul class="list-unstyled about-two__points">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="text">
                                                <p>Técnicas Innovadoras</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="about-two__points-text">Aplicamos las últimas técnicas de pintura.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="about-two__right">
                            <div class="about-two__img-box wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="about-two__img-1">
                                    <img src="assets/images/resources/pintura-antes-despues-1.jpg" alt="Proyecto de pintura residencial">
                                </div>
                                <div class="about-two__img-2">
                                    <img src="assets/images/resources/pintura-comercial-1.jpg" alt="Proyecto de pintura comercial">
                                </div>
                                <div class="about-two__dot">
                                    <img src="assets/images/shapes/about-two-dots.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->

        <!--Brand One Start-->
        <section class="brand-one brand-two">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="brand-one__title">
                                <h2>Marcas de pintura con las que trabajamos</h2>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="brand-one__main-content">
                                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                           "0": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "375": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "575": {
                               "spaceBetween": 30,
                               "slidesPerView": 3
                           },
                           "767": {
                               "spaceBetween": 50,
                               "slidesPerView": 4
                           },
                           "991": {
                               "spaceBetween": 50,
                               "slidesPerView": 5
                           },
                           "1199": {
                               "spaceBetween": 100,
                               "slidesPerView": 5
                           }
                       }}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/sherwin-williams-logo.png" alt="Sherwin Williams">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/benjamin-moore-logo.png" alt="Benjamin Moore">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/ppg-logo.png" alt="PPG">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/behr-logo.png" alt="Behr">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/valentine-logo.png" alt="Valentine">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="testimonial-two-bg" style="background-image: url(assets/images/backgrounds/testimonial-pintura-bg.jpg);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">testimonios</span>
                    <h2 class="section-title__title">¿Qué dicen nuestros clientes?</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-two__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": false,
                                "margin": 30,
                                "nav": false,
                                "dots": true,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 3
                                    }
                                }
                            }'>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Contraté a PinturaSuper para pintar mi casa y quedé impresionado con la calidad del trabajo. Puntuales, limpios y profesionales.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/cliente-1.jpg" alt="Carlos Méndez">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Carlos Méndez</h4>
                                            <p class="testimonial-one__client-title">Cliente Residencial</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Excelente servicio para nuestra oficina. Cumplieron con los plazos y el resultado superó nuestras expectativas.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/cliente-2.jpg" alt="Laura González">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Laura González</h4>
                                            <p class="testimonial-one__client-title">Cliente Comercial</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Los recomiendo totalmente. Hicieron un trabajo impecable en mi restaurante con pinturas especiales para áreas con humo.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/cliente-3.jpg" alt="Roberto Sánchez">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">Roberto Sánchez</h4>
                                            <p class="testimonial-one__client-title">Cliente Comercial</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->

        <!--Leading Start-->
        <section class="leading">
            <div class="leading-bg-box">
                <div class="leading-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(assets/images/backgrounds/pintura-profesional-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="leading__left">
                            <div class="leading__video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="leading__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <h3 class="leading__title">Líderes en Pintura <br> y Decoración</h3>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="leading__right">
                            <ul class="list-unstyled leading__points">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Pintores certificados y con experiencia</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Materiales ecológicos y de alta calidad</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Atención personalizada a cada cliente</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Técnicas innovadoras de aplicación</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Leading End-->

        <!--Team One Start-->
        <section class="team-one team-two">
            <div class="container">
                <div class="team-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="team-one__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">nuestro equipo</span>
                                    <h2 class="section-title__title">Conoce a Nuestros Expertos</h2>
                                    <div class="section-title__line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="team-one__top-right">
                                <p class="team-one__top-text">Nuestro equipo de profesionales está comprometido con brindar el mejor servicio en pintura y decoración.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-one__bottom">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <!--Team One single-->
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/pintor-1.jpg" alt="Juan Pérez">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__title-box">
                                        <div class="team-one__title-shape">
                                            <img src="assets/images/shapes/team-one-title-box-shape.png" alt="">
                                            <div class="team-one__title-text">
                                                <p class="team-one__title">Pintor Residencial</p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="team-one__name"><a href="team-details.html">Juan Pérez</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <!--Team One single-->
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/pintor-2.jpg" alt="María Rodríguez">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__title-box">
                                        <div class="team-one__title-shape">
                                            <img src="assets/images/shapes/team-one-title-box-shape.png" alt="">
                                            <div class="team-one__title-text">
                                                <p class="team-one__title">Diseñadora de Color</p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="team-one__name"><a href="team-details.html">María Rodríguez</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <!--Team One single-->
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/pintor-3.jpg" alt="Pedro Gómez">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__title-box">
                                        <div class="team-one__title-shape">
                                            <img src="assets/images/shapes/team-one-title-box-shape.png" alt="">
                                            <div class="team-one__title-text">
                                                <p class="team-one__title">Pintor Industrial</p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="team-one__name"><a href="team-details.html">Pedro Gómez</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team One End-->
        
        <!--Site Footer Start-->
        <?php require '../bin/footer.php'; ?>
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-pintura.png" width="155" alt="PinturaSuper" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:contacto@pinturasuper.com">contacto@pinturasuper.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:800-123-4567">800 123 4567</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">Buscar aquí</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Buscar servicios..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <?php require '../bin/js.php'; ?>
</body>
</html>