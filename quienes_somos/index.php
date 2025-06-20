<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobre Nosotros | PinturaSuper | Expertos en Pintura y Decoración</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="PinturaSuper: Tu socio experto en soluciones de pintura residencial, comercial, decorativa e industrial. Calidad, experiencia y compromiso desde 1993." />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php include_once __DIR__ . '/../bin/css.php'; // Usa __DIR__ para ruta absoluta ?>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Opciones de Color</h3>
        <div class="layout-feature" id="colorMode">
            <a href="#" class="dark-switcher" data-theme="pintura-dark">Oscuro</a>
            <a href="#" class="light-switcher" data-theme="pintura-light">Claro</a>
            <button class="boxed-switcher">Modo Compacto</button>
        </div>
    </div>
    <?php require_once __DIR__ . '/../bin/preloader.php'; // Usa __DIR__ para ruta absoluta ?>

    <div class="page-wrapper">
        <?php require_once __DIR__ . '/../bin/header.php'; // Usa __DIR__ para ruta absoluta ?>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div></div><section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/pintura-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>/index.html">Inicio</a></li>
                        <li><span>/</span></li>
                        <li>Sobre Nosotros</li>
                    </ul>
                    <h2>Sobre Nosotros</h2>
                </div>
            </div>
        </section>
        <br>
        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="about-three__content">
                            <div class="section-title text-center">
                                <span class="section-title__tagline">Nuestra Historia</span>
                                <h2 class="section-title__title">¿Quiénes Somos?</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="about-three__text">
                                **PINTA SUPER** es una empresa fundada en 1993, dedicada a la comercialización de todo tipo de pinturas (línea doméstica, línea decorativa, impermeabilizantes, línea automotiva, línea para maderas y línea industrial) y complementos para pintar (desde un pincel hasta sofisticados equipos para la aplicación profesional de pintura); al mayoreo y al menudeo. Así como la aplicación de los mismos materiales que vende.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>

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
                                <li>Aprendizaje</li>
                                <li>Compromiso con el Cliente</li>
                                <li>Actitud de servicio</li>
                                <li>Calidad</li>
                                <li>Responsabilidad</li>
                                <li>Responsabilidad social</li>
                                <li>Confianza</li> </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>

        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Conoce nuestra empresa</span>
                                <h2 class="section-title__title">Transformamos Espacios con Color y Calidad</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="about-two__text-1">Más de 30 años de experiencia en pintura y decoración nos respaldan desde nuestra fundación en 1993.</p>
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
                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/ffa420.png" alt="Transformación de espacio con pintura residencial">
                                </div>
                                <div class="about-two__img-2">
                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/slide-5.jpg" alt="Proyecto de pintura en local comercial">
                                </div>
                                <div class="about-two__dot">
                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/shapes/about-two-dots.png" alt="Detalle decorativo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="leading">
            <div class="leading-bg-box">
                <div class="leading-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/pintura-profesional-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="leading__left">
                            <div class="leading__video-link">
                                <a href="https://www.youtube.com/watch?v=YOUR_YOUTUBE_VIDEO_ID" class="video-popup">
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
        <?php require_once __DIR__ . '/../bin/footer.php'; // Usa __DIR__ para ruta absoluta ?>
        </div><div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php echo $ROOT_PATH; ?>/index.html" aria-label="logo image"><img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/logo-pintura.png" width="155" alt="PinturaSuper logo" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:contacto@pinturasuper.com">contacto@pinturasuper.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:800-123-4567">800 123 4567</a>
                </li>
            </ul><div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-facebook-square" aria-label="Facebook"></a>
                    <a href="#" class="fab fa-instagram" aria-label="Instagram"></a>
                    <a href="#" class="fab fa-pinterest-p" aria-label="Pinterest"></a>
                </div></div></div>
        </div>
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">Buscar aquí</label><input type="text" id="search" placeholder="Buscar servicios..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <?php require_once __DIR__ . '/../bin/js.php'; // Usa __DIR__ para ruta absoluta ?>
</body>
</html>