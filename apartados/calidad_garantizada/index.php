<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calidad Garantizada - Pintasuper</title>
    <!-- iconos favoritos -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Calidad garantizada en todos nuestros productos - Pintasuper" />

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
            <div class="page-header__bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg-3-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Calidad Garantizada</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                    <li><span>Calidad Garantizada</span></li>
                </ul>
            </div>
        </section>
        <!-- Page Header End -->

        <!-- Intro Section Start -->
        <section class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="intro-title">¡Pinta Super: Calidad que se ve y se siente!</h2>
                        <p class="intro-text">En Pinta Super, no solo vendemos pintura, ofrecemos calidad superior que transforma tus espacios. Nuestros productos están formulados con los más altos estándares, garantizando colores vibrantes que perduran y un acabado impecable en cada aplicación.</p>
                        <p class="intro-text">Ya sea que estés pintando tu hogar, renovando muebles de madera o herrería, o tal vez dándole un nuevo aire a tu auto, con Pinta Super obtendrás una cobertura excepcional y durabilidad garantizada. Olvídate de retoques constantes y disfruta de resultados profesionales que resisten el paso del tiempo y las inclemencias del clima.</p>
                        <p class="intro-text">Elige Pinta Super y descubre la diferencia de una calidad que no solo embellece, sino que protege y perdura.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Intro Section End -->

        <!-- Quality Standards Start -->
        <section class="quality-standards">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Nuestros Estándares de Calidad</h2>
                    <p class="section-title__text">Comprometidos con la excelencia en cada producto</p>
                </div>
                
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="quality-card">
                            <div class="quality-card__icon">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/quality-icon-1.png" alt="Materiales Premium">
                            </div>
                            <h3 class="quality-card__title">Materiales Premium</h3>
                            <p class="quality-card__text">Utilizamos solo las materias primas de más alta calidad en todos nuestros productos.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="quality-card">
                            <div class="quality-card__icon">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/quality-icon-2.png" alt="Proceso Riguroso">
                            </div>
                            <h3 class="quality-card__title">Proceso Riguroso</h3>
                            <p class="quality-card__text">Cada lote pasa por estrictos controles de calidad en todas las etapas de producción.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="quality-card">
                            <div class="quality-card__icon">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/quality-icon-3.png" alt="Innovación Constante">
                            </div>
                            <h3 class="quality-card__title">Innovación Constante</h3>
                            <p class="quality-card__text">Invertimos en investigación para ofrecer productos vanguardistas.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="quality-card">
                            <div class="quality-card__icon">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/quality-icon-4.png" alt="Certificaciones">
                            </div>
                            <h3 class="quality-card__title">Certificaciones</h3>
                            <p class="quality-card__text">Cumplimos con los más altos estándares internacionales de calidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Quality Standards End -->

        <!-- Warranty Section Start -->
        <section class="warranty-section" style="background-color: #f9f9f9; padding: 80px 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/warranty.jpg" alt="Garantía Pintasuper" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section-title">Nuestra Garantía</h2>
                        <p class="section-text">En Pintasuper respaldamos la calidad de nuestros productos con una garantía excepcional:</p>
                        
                        <div class="warranty-feature">
                            <div class="warranty-feature__icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="warranty-feature__content">
                                <h3>Garantía de Durabilidad</h3>
                                <p>Hasta 10 años en productos para exteriores, resistentes a condiciones climáticas extremas.</p>
                            </div>
                        </div>
                        
                        <div class="warranty-feature">
                            <div class="warranty-feature__icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="warranty-feature__content">
                                <h3>Garantía de Color</h3>
                                <p>Los colores no se desvanecen gracias a nuestros pigmentos de última generación.</p>
                            </div>
                        </div>
                        
                        <div class="warranty-feature">
                            <div class="warranty-feature__icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="warranty-feature__content">
                                <h3>Satisfacción 100%</h3>
                                <p>Si no está satisfecho con nuestro producto, lo reemplazamos o devolvemos su dinero.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Warranty Section End -->

        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/footer.php'; ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/js.php'; ?>
</body>
</html>