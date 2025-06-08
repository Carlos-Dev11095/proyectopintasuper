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

    <?php include '../bin/css.php'; ?>

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
    <?php require '../bin/preloader.php'; ?>

    <div class="page-wrapper">

        <?php require '../bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <!--Inicio de Características-->
        <section class="feature-one">
            <div class="container">
                <ul class="list-unstyled feature-one__list">
                    <!--Característica Individual-->
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="100ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/shapes/feature-one-shape-2.png" alt="">
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
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/shapes/feature-one-shape-2.png" alt="">
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
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/shapes/feature-one-shape-2.png" alt="">
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
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/shapes/feature-one-shape-2.png" alt="">
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
                    style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/services-one-bg.jpg);"></div>
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
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/services/services-1-1.jpg" alt="">
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
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/services/services-1-2.jpg" alt="">
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
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/services/services-1-3.jpg" alt="">
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

    <?php require '../bin/footer.php'; ?>

    <?php require '../bin/js.php'; ?>

</body>

</html>