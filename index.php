<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <!-- iconos favoritos -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Plantilla HTML 5 Ambed" />

    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php include 'bin/css.php'; ?>

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- precarga -->
    <?php include 'bin/preloader.php'; ?>

    <div class="page-wrapper">

        <?php include 'bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
    </div>

<!--Main Slider Start-->
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
                    style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/shapes/slide-1.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <div class="main-slider__icon">
                                    <img src="assets/images/shapes/main-slider-icon.png" alt="">
                                </div>
                                <div class="main-slider__sub-title-box">
                                    <p class="main-slider__sub-title">Bienvenido a Pinta Super</p>
                                    <div class="main-slider__border-left"></div>
                                    <div class="main-slider__border-right"></div>
                                </div>
                                <h2 class="main-slider__title">Expertos en <br> Pintura <span>&</span> <br>
                                    Decoración</h2>
                                <div class="main-slider__btn-box">
                                    <a href="about.html" class="thm-btn main-slider__btn">Conoce Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/shapes/slide-2.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <div class="main-slider__icon">
                                    <img src="assets/images/shapes/main-slider-icon.png" alt="">
                                </div>
                                <div class="main-slider__sub-title-box">
                                    <p class="main-slider__sub-title">Soluciones integrales</p>
                                    <div class="main-slider__border-left"></div>
                                    <div class="main-slider__border-right"></div>
                                </div>
                                <h2 class="main-slider__title">Materiales de <br> la más alta <span>calidad</span> <br>
                                    para tus proyectos</h2>
                                <div class="main-slider__btn-box">
                                    <a href="productos.html" class="thm-btn main-slider__btn">Nuestros Productos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/shapes/slide-3.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <div class="main-slider__icon">
                                    <img src="assets/images/shapes/main-slider-icon.png" alt="">
                                </div>
                                <div class="main-slider__sub-title-box">
                                    <p class="main-slider__sub-title">Servicio profesional</p>
                                    <div class="main-slider__border-left"></div>
                                    <div class="main-slider__border-right"></div>
                                </div>
                                <h2 class="main-slider__title">Aplicación <br> profesional <span>&</span> <br>
                                    asesoría técnica</h2>
                                <div class="main-slider__btn-box">
                                    <a href="servicios.html" class="thm-btn main-slider__btn">Nuestros Servicios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- If we need navigation buttons -->
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
<!--Main Slider End-->

        <!--Inicio del Slider Principal-->
<section class="feature-one">
    <div class="container">
        <ul class="list-unstyled feature-one__list">
            <li class="feature-one__single wow fadeInLeft" data-wow-delay="100ms">
                <div class="feature-one__content">
                    <div class="feature-one__shape-1">
                        <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                    </div>
                    <div class="feature-one__shape-2">
                        <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                    </div>
                    <div class="feature-one__icon">
                        <span class="fas fa-palette"></span>
                    </div>
                    <h3 class="feature-one__title"><a href="products.html#colores">Tonos Infinitos</a></h3>
                    <p class="feature-one__text">Explora nuestra vasta gamma de colores y texturas para darle vida a cada rincón de tu hogar u oficina.</p>
                    <div class="feature-one__arrow">
                        <a href="products.html#colores"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
            <li class="feature-one__single wow fadeInLeft" data-wow-delay="200ms">
                <div class="feature-one__content">
                    <div class="feature-one__shape-1">
                        <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                    </div>
                    <div class="feature-one__shape-2">
                        <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                    </div>
                    <div class="feature-one__icon">
                        <span class="fas fa-paint-roller"></span>
                    </div>
                    <h3 class="feature-one__title"><a href="products.html#herramientas">Todo para tu Proyecto</a></h3>
                    <p class="feature-one__text">Encuentra todas las herramientas y materiales necesarios para un acabado profesional.</p>
                    <div class="feature-one__arrow">
                        <a href="products.html#herramientas"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
            <li class="feature-one__single wow fadeInLeft" data-wow-delay="300ms">
                <div class="feature-one__content">
                    <div class="feature-one__shape-1">
                        <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                    </div>
                    <div class="feature-one__shape-2">
                        <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                    </div>
                    <div class="feature-one__icon">
                        <span class="fas fa-shield-alt"></span>
                    </div>
                    <h3 class="feature-one__title"><a href="brands.html">Calidad Garantizada en todo momento</a></h3>
                    <p class="feature-one__text">Solo trabajamos con productos de calidad superior, asegurando durabilidad y rendimiento.</p>
                    <div class="feature-one__arrow">
                        <a href="brands.html"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
            <li class="feature-one__single wow fadeInLeft" data-wow-delay="400ms">
                <div class="feature-one__content">
                    <div class="feature-one__shape-1">
                        <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                    </div>
                    <div class="feature-one__shape-2">
                        <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                    </div>
                    <div class="feature-one__icon">
                        <span class="fas fa-comments"></span>
                    </div>
                    <h3 class="feature-one__title"><a href="contact.html">Expertos a tu Servicio</a></h3>
                    <p class="feature-one__text">Recibe asesoramiento experto para elegir la pintura ideal y resolver cualquier duda.</p>
                    <div class="feature-one__arrow">
                        <a href="contact.html"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
        <!--Fin del Slider Principal-->

<!--Inicio Nuestros Servicios-->
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
                        <span class="section-title__tagline">Nuestros Servicios</span>
                        <h2 class="section-title__title">Soluciones Creativas para Cada Espacio</h2>
                        <div class="section-title__line"></div>
                    </div>
                    <p class="about-one__text-1">En Pintasuper, ofrecemos una amplia gama de servicios de pintura y decoración que se adaptan a tus necesidades y estilo.</p>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="about-one__points-content-box">
                                <div class="about-one__points-icon">
                                    <span class="icon-paint"></span>
                                </div>
                                <div class="about-one__points-text-box">
                                    <p class="about-one__points-text">Pintura Interior y Exterior Profesional</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="about-one__points-content-box">
                                <div class="about-one__points-icon">
                                    <span class="icon-high-quality"></span> <!-- Restaurado -->
                                </div>
                                <div class="about-one__points-text-box">
                                    <p class="about-one__points-text">Calidad Garantizada en Cada Proyecto</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p class="about-one__text-2">Nuestro compromiso es brindar acabados impecables, uso de materiales de primera calidad y asesoría personalizada para cada proyecto residencial o comercial.</p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__img">
                            <img src="assets/images/resources/soluciones.png" alt="Imagen principal servicios">
                        </div>
                        <div class="about-one__small-img">
                            <img src="assets/images/resources/pared.jpg" alt="Imagen secundaria servicios">
                        </div>
                        <div class="about-one__project">
                            <div class="about-one__project-icon">
                                <span class="icon-brush"></span>
                            </div>
                            <div class="about-one__project-content">
                                <p class="about-one__project-text">Resultados Profesionales</p>
                            </div>
                        </div>
                        <div class="about-one__shape-1 float-bob-y"></div>
                        <div class="about-one__dot">
                            <img src="assets/images/resources/pared2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Fin Nuestros Servicios-->


        <!--Inicio de Características-->
        <section class="feature-one">
            <div class="container">
                <ul class="list-unstyled feature-one__list">
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="100ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-mind"></span> </div>
                            <h3 class="feature-one__title"><a href="servicios.html#asesoramiento">Asesoramiento Inteligente</a></h3>
                            <p class="feature-one__text">Te guiamos en la elección perfecta de colores y tipos de pintura para tu hogar u oficina.</p>
                            <!-- <div class="feature-one__arrow">
                                <a href="servicios.html#asesoramiento"><i class="fa fa-arrow-right"></i></a>
                            </div> -->
                        </div>
                    </li>
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="200ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-wallpaper-2"></span> </div>
                            <h3 class="feature-one__title"><a href="portafolio.html">Diseños y Acabados Únicos</a></h3>
                            <p class="feature-one__text">Creamos ambientes excepcionales con técnicas y estilos de pintura innovadores.</p>
                            <!-- <div class="feature-one__arrow">
                                <a href="portafolio.html"><i class="fa fa-arrow-right"></i></a>
                            </div> -->
                        </div>
                    </li>
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="300ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-programmer"></span> </div>
                            <h3 class="feature-one__title"><a href="equipo.html">Equipo de Expertos de Pintura</a></h3>
                            <p class="feature-one__text">Contamos con personal profesional altamente calificado y con amplia experiencia en pintura.</p>
                            <!-- <div class="feature-one__arrow">
                                <a href="equipo.html"><i class="fa fa-arrow-right"></i></a>
                            </div> -->
                        </div>
                    </li>
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="400ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <span class="icon-best-price"></span> </div>
                            <h3 class="feature-one__title"><a href="calidad.html">Calidad Cuidando tu Economía</a></h3>
                            <p class="feature-one__text">Utilizamos materiales de calidad y técnicas avanzadas para resultados duraderos.</p>
                            <!--<div class="feature-one__arrow">
                                <a href="calidad.html"><i class="fa fa-arrow-right"></i></a>
                            </div> -->
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
                    style="background-image: url(assets/images/backgrounds/pared_pintada.jpg);"></div>
                    </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Nuestra Especialidad</span>
                    <h2 class="section-title__title">Soluciones Completas de Pintura</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__img">
                                <img src="assets/images/services/pared_pintada.jpg" alt="Pinturas y esmaltes de alta calidad">
                                <div class="services-one__icon">
                                    <span class="icon-wallpaper-3"></span> </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="productos-pinturas.html">Amplia Gama de Pinturas</a></h3>
                                <p class="services-one__text">Descubre nuestra gamma de pinturas para interiores y exteriores, en todos los acabados y colores.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__img">
                                <img src="assets/images/services/herramientas.png" alt="Herramientas y preparación de superficies">
                                <div class="services-one__icon">
                                    <span class="icon-wallpaper-4"></span> </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="herramientas.html">Herramientas y Preparación</a></h3>
                                <p class="services-one__text">Encuentra todo lo necesario para preparar y aplicar pintura: brochas, rodillos, lijas, selladores, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__img">
                                <img src="assets/images/services/asesoramiento.png" alt="Asesoramiento experto en color">
                                <div class="services-one__icon">
                                    <span class="icon-paint"></span> </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="asesoramiento-color.html">Asesoramiento de Color</a></h3>
                                <p class="services-one__text">Nuestros expertos te guiarán para elegir la paleta de colores perfecta para cada ambiente.</p>
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
                                    <img src="assets/images/resources/pinturasuper.jpg" alt="Pintor profesional trabajando">
                                    </div>
                                <div class="quality-work__small-img">
                                    <img src="assets/images/resources/baño.jpg" alt="Detalle de pintura de alta calidad">
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="quality-work__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Expertos en Pintura</span>
                                <h2 class="section-title__title">Calidad y Profesionalismo en Cada Proyecto</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="quality-work__text-1">Transformamos tus espacios con acabados impecables y duraderos.</p>
                            <ul class="list-unstyled quality-work__feature">
                                <li>
                                    <div class="icon">
                                        <span class="icon-image-gallery1"></span> </div>
                                    <div class="text">
                                        <p>Técnicas Innovadoras <br> y Creativas</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-wallpaper-5"></span> </div>
                                    <div class="text">
                                        <p>Materiales Premium <br> para un Acabado Superior</p>
                                    </div>
                                </li>
                            </ul>
                            <p class="quality-work__text-2">Nos apasiona la pintura y nos comprometemos a superar tus expectativas con cada trabajo.</p>
                            <div class="quality-work__progress">
                                <div class="quality-work__progress-single">
                                    <h4 class="quality-work__progress-title">Pintura Interior Residencial</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%"> <div class="count-text">95%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quality-work__progress-single">
                                    <h4 class="quality-work__progress-title">Pintura Exterior Comercial</h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="85%"> <div class="count-text">85%</div>
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
                    <span class="section-title__tagline">Nuestras Creaciones</span>
                    <h2 class="section-title__title">Proyectos de Pintura que Inspiran <br> y Transforman</h2>
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
                                                    <img src="assets/images/project/chimenea.jpg" alt="Proyecto de pintura de sala de estar">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="project-one__right">
                                                <div class="project-one__content-box">
                                                    <div class="project-one__content">
                                                        <h4 class="project-one__title">Renovación de Sala con Colores Cálidos</h4>
                                                        <p class="project-one__text">Realizamos la transformación completa de esta sala de estar, aplicando una paleta de colores cálidos que aportan luminosidad y confort. Un trabajo detallado que superó las expectativas del cliente.</p>
                                                        <a href="proyecto-sala.html" class="thm-btn project-one__btn">Ver Detalles del Proyecto</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="project-one__left">
                                                <div class="project-one__img">
                                                    <img src="assets/images/project/project-1-2.jpg" alt="Pintura exterior de residencia moderna">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="project-one__right">
                                                <div class="project-one__content-box">
                                                    <div class="project-one__content">
                                                        <h4 class="project-one__title">Pintura Exterior de Residencia Moderna</h4>
                                                        <p class="project-one__text">Abordamos la pintura exterior de esta moderna residencia, utilizando pinturas de alta durabilidad y resistencia a la intemperie. El resultado fue un acabado impecable que realza la arquitectura.</p>
                                                        <a href="proyecto-exterior.html" class="thm-btn project-one__btn">Ver Detalles del Proyecto</a>
                                                    </div>
                                                </div>
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
        <!--Fin de Proyectos-->

        <!--Inicio de Blog-->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Consejos y Tendencias</span>
                    <h2 class="section-title__title">Nuestro Blog de Pintura</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/casita.jpg" alt="Elegir colores para tu hogar">
                                <a href="blog-details-colores.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__date">
                                    <p>15 May, 2025</p>
                                </div>
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details-colores.html"><i class="far fa-user-circle"></i> por Equipo Experto </a></li>
                                    <li><span>/</span></li>
                                    <li><a href="blog-details-colores.html"><i class="far fa-comments"></i> 04 Comentarios</a></li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details-colores.html">Guía Definitiva para Elegir los Colores de tu Hogar</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/salita.jpg" alt="Tendencias de pintura exterior">
                                <a href="blog-details-tendencias.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__date">
                                    <p>01 Abr, 2025</p>
                                </div>
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details-tendencias.html"><i class="far fa-user-circle"></i> por Nuestro Diseñador </a></li>
                                    <li><span>/</span></li>
                                    <li><a href="blog-details-tendencias.html"><i class="far fa-comments"></i> 06 Comentarios</a></li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details-tendencias.html">Las Últimas Tendencias en Pintura Exterior para 2025</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/cama.jpg" alt="Consejos para pintar tú mismo">
                                <a href="blog-details-hazlotumismo.html">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__date">
                                    <p>10 Mar, 2025</p>
                                </div>
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details-hazlotumismo.html"><i class="far fa-user-circle"></i> por Asesor Técnico </a></li>
                                    <li><span>/</span></li>
                                    <li><a href="blog-details-hazlotumismo.html"><i class="far fa-comments"></i> 03 Comentarios</a></li>
                                </ul>
                                <h3 class="blog-one__title"><a href="blog-details-hazlotumismo.html">Consejos Esenciales para Pintar tu Casa como un Profesional</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fin de Blog-->



    <?php include 'bin/footer.php'; ?>

    <?php include 'bin/js.php'; ?>

</body>

</html>