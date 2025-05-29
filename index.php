<?php $ROOT_PATH = '/pintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <!-- iconos favoritos -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Plantilla HTML 5 Ambed" />

    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php include 'bin/css.php'; ?>

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- selector de estilo -->
    <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Opciones de Diseño</h3>
        <div class="layout-feature" id="colorMode">
            <a href="" class="dark-switcher" data-theme="ambed-dark">Oscuro</a>
            <a href="" class="light-switcher" data-theme="ambed-light">Claro</a>
            <button class="boxed-switcher">En Caja</button>
        </div>
    </div>
    <!-- fin selector de estilo -->

    <!-- precarga -->
    <?php include 'bin/preloader.php'; ?>

    <div class="page-wrapper">

        <?php include 'bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <!--Inicio del Slider Principal-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__icon">
                                            <img src="assets/images/shapes/main-slider-icon.png" alt="">
                                        </div>
                                        <div class="main-slider__sub-title-box">
                                            <p class="main-slider__sub-title">Bienvenido a Pintasuper</p>
                                            <div class="main-slider__border-left"></div>
                                            <div class="main-slider__border-right"></div>
                                        </div>
                                        <h2 class="main-slider__title">Papeles <br> Pintados <span>&</span> <br>
                                            Pintura de Calidad Para el Hogar</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Descubre Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__icon">
                                            <img src="assets/images/shapes/main-slider-icon.png" alt="">
                                        </div>
                                        <div class="main-slider__sub-title-box">
                                            <p class="main-slider__sub-title">Bienvenido a Pintasuper</p>
                                            <div class="main-slider__border-left"></div>
                                            <div class="main-slider__border-right"></div>
                                        </div>
                                        <h2 class="main-slider__title">Papeles <br> Pintados <span>&</span> <br>
                                            Pintura de Calidad Para el Hogar</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Descubre Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <div class="main-slider__icon">
                                            <img src="assets/images/shapes/main-slider-icon.png" alt="">
                                        </div>
                                        <div class="main-slider__sub-title-box">
                                            <p class="main-slider__sub-title">Bienvenido a Pintasuper</p>
                                            <div class="main-slider__border-left"></div>
                                            <div class="main-slider__border-right"></div>
                                        </div>
                                        <h2 class="main-slider__title">Papeles <br> Pintados <span>&</span> <br>
                                            Pintura de Calidad Para el Hogar</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Descubre Más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botones de navegación -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Fin del Slider Principal-->

        <!--Inicio Sobre Nosotros-->
        <section class="about-one">
            <div class="about-one-shape-2 float-bob-x"></div>
            <div class="about-one-wall">
                <img src="assets/images/shapes/about-one-wall.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Sobre la empresa</span>
                                <h2 class="section-title__title">Ofrecemos Diseños de Paredes de Calidad</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="about-one__text-1">Tenemos más de 30 años de experiencia para ofrecerte resultados de mejor calidad.</p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="about-one__points-content-box">
                                        <div class="about-one__points-icon">
                                            <span class="icon-wallpaper"></span>
                                        </div>
                                        <div class="about-one__points-text-box">
                                            <p class="about-one__points-text">Trabajos de Pared Inteligentes y Únicos</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-one__points-content-box">
                                        <div class="about-one__points-icon">
                                            <span class="icon-high-quality"></span>
                                        </div>
                                        <div class="about-one__points-text-box">
                                            <p class="about-one__points-text">Los Mejores Estándares de Calidad</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="about-one__text-2">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm andhn. Aenean tincidunt id mauris id auctor donec at ligula lacus.</p>
                            <div class="about-one__contact-us">
                                <div class="about-one__btn-box">
                                    <a href="about.html" class="thm-btn about-one__btn">Leer Más</a>
                                </div>
                                <div class="about-one__call">
                                    <div class="about-one__call-icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="about-one__call-text">
                                        <p>Llame en cualquier momento</p>
                                        <a href="tel:980009630">+ 98 (000) - 9630</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__small-img">
                                    <img src="assets/images/resources/about-one-small-img.jpg" alt="">
                                </div>
                                <div class="about-one__project">
                                    <div class="about-one__project-icon">
                                        <span class="icon-wallpaper-1"></span>
                                    </div>
                                    <div class="about-one__project-content">
                                        <h3 class="odometer" data-count="3690">00</h3>
                                        <p class="about-one__project-text">Proyectos Exitosos</p>
                                    </div>
                                </div>
                                <div class="about-one__shape-1 float-bob-y"></div>
                                <div class="about-one__dot">
                                    <img src="assets/images/shapes/about-one-dots.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fin Sobre Nosotros-->

        <!--Inicio de Características-->
        <section class="feature-one">
            <div class="container">
                <ul class="list-unstyled feature-one__list">
                    <!--Característica Individual-->
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="100ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-mind"></span>
                            </div>
                            <h3 class="feature-one__title"><a href="about.html">Trabajo Inteligente</a></h3>
                            <p class="feature-one__text">Hay muchas variaciones de lorem ipsum disponibles, pero la mayoría.</p>
                            <div class="feature-one__arrow">
                                <a href="about.html"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <!--Característica Individual-->
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="200ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-wallpaper-2"></span>
                            </div>
                            <h3 class="feature-one__title"><a href="about.html">Diseños Únicos</a></h3>
                            <p class="feature-one__text">Hay muchas variaciones de lorem ipsum disponibles, pero la mayoría.</p>
                            <div class="feature-one__arrow">
                                <a href="about.html"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <!--Característica Individual-->
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="300ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-programmer"></span>
                            </div>
                            <h3 class="feature-one__title"><a href="team.html">Equipo Calificado</a></h3>
                            <p class="feature-one__text">Hay muchas variaciones de lorem ipsum disponibles, pero la mayoría.</p>
                            <div class="feature-one__arrow">
                                <a href="team.html"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <!--Característica Individual-->
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="400ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-best-price"></span>
                            </div>
                            <h3 class="feature-one__title"><a href="contact.html">Mejores Precios</a></h3>
                            <p class="feature-one__text">Hay muchas variaciones de lorem ipsum disponibles, pero la mayoría.</p>
                            <div class="feature-one__arrow">
                                <a href="contact.html"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Fin de Características-->

        <!--Inicio de Servicios-->
        <section class="services-one">
            <div class="services-one-bg-box">
                <div class="services-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(assets/images/backgrounds/services-one-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Nuestros Servicios</span>
                    <h2 class="section-title__title">Servicios que Ofrecemos</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Servicio Individual-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__img">
                                <img src="assets/images/services/services-1-1.jpg" alt="">
                                <div class="services-one__icon">
                                    <span class="icon-wallpaper-3"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="room-wallpapers.html">Papeles Pintados para Habitaciones</a></h3>
                                <p class="services-one__text">Morbi feugiat porta purus, at eleifend dolor posuere ac.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Servicio Individual-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__img">
                                <img src="assets/images/services/services-1-2.jpg" alt="">
                                <div class="services-one__icon">
                                    <span class="icon-wallpaper-4"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="wall-sheets.html">Planchas para Paredes</a></h3>
                                <p class="services-one__text">Morbi feugiat porta purus, at eleifend dolor posuere ac.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Servicio Individual-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__img">
                                <img src="assets/images/services/services-1-3.jpg" alt="">
                                <div class="services-one__icon">
                                    <span class="icon-paint"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="wall-painting.html">Pintura de Paredes</a></h3>
                                <p class="services-one__text">Morbi feugiat porta purus, at eleifend dolor posuere ac.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fin de Servicios-->

        <!--Inicio de Trabajo de Calidad-->
        <section class="quality-work">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="quality-work__left">
                            <div class="quality-work__img-box">
                                <div class="quality-work__img">
                                    <img src="assets/images/resources/quality-work-img-1.png" alt="">
                                </div>
                                <div class="quality-work__small-img">
                                    <img src="assets/images/resources/quality-work-small-img.jpg" alt="">
                                </div>
                                <div class="quality-work__video-box">
                                    <div class="quality-work__curved-circle-box">
                                        <div class="curved-circle">
                                            <span class="curved-circle--item">NUEVA COLECCIÓN 2022.</span>
                                        </div>
                                        <div class="quality-work__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="quality-work__video-icon">
                                                    <span class="fa fa-play"></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="quality-work__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Diseño de interiores</span>
                                <h2 class="section-title__title">Trabajo de Calidad que Cumple tus Expectativas</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="quality-work__text-1">Hay muchas variaciones de pasajes de lorem ipsum disponibles pero la mayoría han sufrido.</p>
                            <ul class="list-unstyled quality-work__feature">
                                <li>
                                    <div class="icon">
                                        <span class="icon-image-gallery1"></span>
                                    </div>
                                    <div class="text">
                                        <p>Diseños Innovadores <br> de Papel Pintado</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-wallpaper-5"></span>
                                    </div>
                                    <div class="text">
                                        <p>Materiales de Pared <br> de Alta Calidad</p>
                                    </div>
                                </li>
                            </ul>
                            <p class="quality-work__text-2">Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría han sufrido alteración en alguna forma, por humor inyectado, o palabras aleatorias que no parecen ni siquiera.</p>
                            <div class="quality-work__progress">
                                <div class="quality-work__progress-single">
                                    <h4 class="quality-work__progress-title">Diseño de Paredes Interiores</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="88%">
                                            <div class="count-text">88%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quality-work__progress-single">
                                    <h4 class="quality-work__progress-title">Pintura Exterior</h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="60%">
                                            <div class="count-text">60%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fin de Trabajo de Calidad-->

        <!--Inicio de Proyectos-->
        <section class="project-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Proyectos Exitosos</span>
                    <h2 class="section-title__title">Mantén tu Ojo en Nuestros <br> Últimos Proyectos</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="project-one__inner">
                    <div class="project-one__main-content">
                        <div class="swiper-container" id="project-one__carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="project-one__left">
                                                <div class="project-one__img">
                                                    <img src="assets/images/project/project-1-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="project-one__right">
                                                <div class="project-one__content-box">
                                                    <div class="project-one__content">
                                                        <h4 class="project-one__title">Diseño de Pared para Dormitorio</h4>
                                                        <p class="project-one__text">Quisque sit amet tincidunt enim. Sed dignissim vulputate orci, non lobortis turpis luctus eget. Sed sit amet pharetra felis. Nulla semper velit non tempus sollicitudin.</p>
                                                        <a href="project-details.html" class="thm-btn project-one__btn">Leer Más</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Más slides de proyectos... -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-one__more-project">
                            <div class="project-one__more-project-content">
                                <p>Siempre estamos listos para servirte. <a href="project-details.html">Ver más proyectos</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fin de Proyectos-->

        <!--Inicio de Equipo-->
        <section class="team-one">
            <div class="container">
                <div class="team-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="team-one__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">Miembros del equipo</span>
                                    <h2 class="section-title__title">Conoce al Equipo de Expertos</h2>
                                    <div class="section-title__line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="team-one__top-right">
                                <p class="team-one__top-text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor to incidut labore et dolore magna for aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-one__bottom">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <!--Miembro del Equipo-->
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-1.jpg" alt="">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__title-box">
                                        <div class="team-one__title-shape">
                                            <img src="assets/images/shapes/team-one-title-box-shape.png" alt="">
                                            <div class="team-one__title-text">
                                                <p class="team-one__title">Diseñador</p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="team-one__name"><a href="team-details.html">David Cooper</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- Más miembros del equipo... -->
                    </div>
                </div>
            </div>
        </section>
        <!--Fin de Equipo-->

        <!--Inicio de Testimonios-->
        <section class="testimonial-one">
            <div class="testimonial-one-bg-box">
                <div class="testimonial-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(assets/images/backgrounds/testimonial-one-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Testimonios</span>
                                <h2 class="section-title__title">¿Qué Dicen Nuestros Clientes?</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="testimonial-one__text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor to incidut labore et dolore magna for aliqua.</p>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="testimonial-one__right">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel">
                                <!--Testimonio Individual-->
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor to incidut labore et dolore magna for aliqua. Quis ipsum suspendisse.</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name">John Smith</h4>
                                            <p class="testimonial-one__client-title">Nuestro Cliente</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Más testimonios... -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fin de Testimonios-->

        <!--Inicio de Marcas-->
        <section class="brand-one">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="brand-one__title">
                                <h2>Confían en nosotros más de 8800 marcas populares</h2>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="brand-one__main-content">
                                <div class="thm-swiper__slider swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-1.png" alt="">
                                        </div>
                                        <!-- Más slides de marcas... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fin de Marcas-->

        <!--Inicio de Blog-->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Noticias y Actualizaciones</span>
                    <h2 class="section-title__title">Noticias y Artículos</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Artículo de Blog-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                <a href="blog-details.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__date">
                                    <p>20 Feb, 2022</p>
                                </div>
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> por Admin </a></li>
                                    <li><span>/</span></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comentarios</a></li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details.html">Aprende la Forma Correcta de Usar Planchas de Pared</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- Más artículos de blog... -->
                </div>
            </div>
        </section>
        <!--Fin de Blog-->

    <?php include 'bin/footer.php'; ?>

    <?php include 'bin/js.php'; ?>

</body>

</html>