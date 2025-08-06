<?php $ROOT_PATH = '/proyectopintasuper'; ?>


<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Expertos a tu Servicio - Pintasuper</title>
    <!-- iconos favoritos -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Asesoramiento experto en pintura - Pintasuper" />

    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/css.php'; ?>



</head>


<body class="custom-cursor">


    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>


    <!-- precarga -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/preloader.php'; ?>


    <div class="page-wrapper">


        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/header.php'; ?>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <!-- Page Header Start -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg-4-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Expertos a tu Servicio</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                    <li><span>Expertos a tu Servicio</span></li>
                </ul>
            </div>
        </section>
        <!-- Page Header End -->

        <!-- Intro Section Start -->
        <section class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="intro-title">Asesoría Profesional para que tus proyectos se vuelvan mágicos</h2>
                        <p class="intro-text">En Pinta Super, sabemos que cada proyecto es único. Por eso, nuestro equipo de expertos está listo para brindarte la asesoría profesional que necesitas. Con años de experiencia en el sector, nuestros especialistas te guiarán en cada paso, desde la elección del producto ideal hasta las técnicas de aplicación más efectivas.</p>
                        <p class="intro-text">¿Dudas sobre qué tipo de pintura usar para tu fachada o cómo preparar una superficie de madera? ¿Necesitas la mejor solución para impermeabilizar tu techo y protegerlo de la humedad? ¡No te preocupes! Nuestros trabajadores están capacitados para resolver todas tus inquietudes y ofrecerte las mejores recomendaciones en pinturas e impermeabilizantes, garantizando resultados duraderos y de alta calidad.</p>
                        <p class="intro-text">Confía en la experiencia de Pinta Super y logra acabados perfectos en todos tus proyectos.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Intro Section End -->

        <!-- Experts Section Start -->
        <section class="experts-section">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Nuestro Equipo de Expertos</h2>
                    <p class="section-title__text">Profesionales con años de experiencia listos para ayudarte</p>
                </div>
                
                <div class="row">
                    <!-- Expert 1 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="expert-card">
                            <div class="expert-card__img">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/team/expert-1.jpg" alt="Carlos Martínez">
                            </div>
                            <h3 class="expert-card__name">Carlos Martínez</h3>
                            <p class="expert-card__position">Especialista en Color</p>
                            <p class="expert-card__bio">15 años ayudando a clientes a encontrar la paleta perfecta para cada espacio.</p>
                            <div class="expert-card__contact">
                                <a href="mailto:carlos@pintasuper.com">carlos@pintasuper.com</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Expert 2 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="expert-card">
                            <div class="expert-card__img">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/team/expert-2.jpg" alt="Ana Rodríguez">
                            </div>
                            <h3 class="expert-card__name">Ana Rodríguez</h3>
                            <p class="expert-card__position">Técnica de Aplicación</p>
                            <p class="expert-card__bio">Especialista en técnicas avanzadas de pintura y acabados decorativos.</p>
                            <div class="expert-card__contact">
                                <a href="mailto:ana@pintasuper.com">ana@pintasuper.com</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Expert 3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="expert-card">
                            <div class="expert-card__img">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/team/expert-3.jpg" alt="Luis Fernández">
                            </div>
                            <h3 class="expert-card__name">Luis Fernández</h3>
                            <p class="expert-card__position">Ingeniero de Producto</p>
                            <p class="expert-card__bio">Conoce cada detalle técnico de nuestras formulaciones y aplicaciones.</p>
                            <div class="expert-card__contact">
                                <a href="mailto:luis@pintasuper.com">luis@pintasuper.com</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Expert 4 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="expert-card">
                            <div class="expert-card__img">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/team/expert-4.jpg" alt="María González">
                            </div>
                            <h3 class="expert-card__name">María González</h3>
                            <p class="expert-card__position">Asesora Comercial</p>
                            <p class="expert-card__bio">Te guiará para encontrar las mejores soluciones según tu presupuesto.</p>
                            <div class="expert-card__contact">
                                <a href="mailto:maria@pintasuper.com">maria@pintasuper.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Experts Section End -->


        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/footer.php'; ?>


        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/js.php'; ?>


    </div> <!-- close page-wrapper -->



</body>


</html>
