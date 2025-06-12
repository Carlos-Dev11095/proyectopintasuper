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

        <br>
        <!-- Quienes Somos Start -->
        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="about-three__content">
                            <div class="section-title text-center">
                                <span class="section-title__tagline">nuestra historia</span>
                                <h2 class="section-title__title">¿Quiénes Somos?</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="about-three__text">
                                Pinta Super es una empresa fundada en 1993, dedicada a la comercialización de todo tipo de pinturas (línea doméstica, línea decorativa, impermeabilizantes, línea automotiva, línea para maderas y línea industrial) y complementos para pintar (desde un pincel hasta sofisticados equipos para la aplicación profesional de pintura); al mayoreo y al menudeo. Así como la aplicación de los mismos materiales que vende.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Quienes Somos End -->


        <!-- Mision Vision Valores Start -->
        <section class="mission-values">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="mission-values__single">
                            <div class="mission-values__icon">
                                <span class="icon-target"></span>
                            </div>
                            <h3 class="mission-values__title">Misión</h3>
                            <p class="mission-values__text">
                                Ser una empresa exitosa dedicada a la comercialización de pinturas y complementos que busca atender las necesidades y problemáticas de nuestros clientes proporcionándoles soluciones, servicios y productos de gran calidad que superen las expectativas del cliente, brindándoles así la satisfacción total mediante el trabajo en equipo.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="mission-values__single">
                            <div class="mission-values__icon">
                                <span class="icon-eye"></span>
                            </div>
                            <h3 class="mission-values__title">Visión</h3>
                            <p class="mission-values__text">
                                Posicionarnos como una de las mejores empresas de venta y distribución de pinturas y complementos para pintar a nivel local y regional, enfocada al cliente ofreciendo una amplia gama de soluciones y productos de gran calidad a un precio justo, comprometidos con la mejora continua y el desarrollo de nuestro personal.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="mission-values__single">
                            <div class="mission-values__icon">
                                <span class="icon-values"></span>
                            </div>
                            <h3 class="mission-values__title">Valores</h3>
                            <ul class="mission-values__list">
                                <li>Honestidad</li>
                                <li>Trabajo en Equipo</li>
                                <li>Responsabilidad</li>
                                <li>Actitud de servicio</li>
                                <li>Calidad</li>
                                <li>Responsabilidad social</li>
                                <li>Confianza</li>
                                <li>Aprendizaje</li>
                                <li>Compromiso con el Cliente</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mision Vision Valores End -->

        <br>

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