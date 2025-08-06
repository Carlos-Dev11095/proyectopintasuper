<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <!-- iconos favoritos -->
    <link rel="apple-touch-icon" sizes="180x180" href="/proyectopintasuper/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/proyectopintasuper/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/proyectopintasuper/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/proyectopintasuper/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Plantilla HTML 5 Ambed" />
    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <?php include '../bin/css.php'; ?>

    <!-- Preload de recursos críticos -->
    <link rel="preload" href="styles.min.css" as="style">
    <link rel="preload" href="script.min.js" as="script">
    <!-- CSS combinado y minificado -->
    <link rel="stylesheet" href="styles.min.css">
    <style>
        :root {
            --primary-color: #2a5f8b;
            --secondary-color: #f7931e;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --color-brand: #fd4e01;
            --color-brand-dark: #000082;
        }

        /* Estilo para el título principal "Sobre Nosotros" */
        .page-header__inner h2 {
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary-color);
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .page-header__inner h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--color-brand);
            border-radius: 2px;
        }

        /* Estilo para "Nuestra Historia" */
        .section-title__tagline {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--color-brand);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 10px;
            display: block;
        }

        /* Estilo para "¿Quiénes Somos?" */
        .section-title__title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--color-brand-dark);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
            line-height: 1.2;
        }

        .section-title__title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--color-brand);
            border-radius: 3px;
        }

        /* Efecto hover para interactividad */
        .page-header__inner h2:hover,
        .section-title__title:hover {
            transform: translateY(-2px);
            transition: var(--transition);
        }

        /* Estilos para secciones de contenido */
        .about-three__text,
        .mission-values__text,
        .about-two__text-1,
        .about-two__text-2 {
            font-size: 1.1rem;
            line-height: 1.7;
            color: var(--dark-color);
        }

        .mission-values__single {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: var(--transition);
            border-top: 4px solid var(--color-brand);
            height: 100%;
        }

        .mission-values__single:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .mission-values__icon span {
            color: var(--color-brand);
            font-size: 2.5rem;
        }

        .leading__title {
            font-size: 2.8rem;
            color: white;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.8);
            line-height: 1.2;
        }

        .leading__points li {
            color: white;
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .leading__points .icon {
            color: var(--color-brand);
            font-size: 1.3rem;
            margin-right: 10px;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .mission-values__single {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 768px) {
            .page-header__inner h2 {
                font-size: 2.2rem;
            }
            
            .section-title__title {
                font-size: 2rem;
            }
            
            .section-title__tagline {
                font-size: 1.1rem;
            }
            
            .leading__title {
                font-size: 2rem;
                margin-bottom: 30px;
            }
        }

        .color-box {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid #ddd;
        }

        .color-box.primary {
            background-color: var(--color-brand);
        }

        .color-box.secondary {
            background-color: var(--color-brand-dark);
        }
    </style>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- precarga -->
    <?php require '../bin/preloader.php'; ?>

    <div class="page-wrapper">
        <?php require '../bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg);"></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>Sobre Nosotros</li>
                </ul>
                <h2 class="page-header__title">Sobre Nosotros</h2>
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
                                <li>Confianza</li>
                            </ul>
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
                                        <p>Amplia gama de colores y acabados</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Pinturas de alta durabilidad y rendimiento</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Asesoría para elección de tonos y combinaciones</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Acabados profesionales para interiores y exteriores</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require '../bin/footer.php'; ?>
    </div>

    <?php require '../bin/js.php'; ?>
</body>
</html>