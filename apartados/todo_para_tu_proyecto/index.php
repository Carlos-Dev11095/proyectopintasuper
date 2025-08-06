<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Todo para tu Proyecto - Pintasuper</title>
    <!-- iconos favoritos -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Todo lo que necesitas para tus proyectos de pintura en Pintasuper" />

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
            <div class="page-header__bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg-2-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Todo para tu Proyecto</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                    <li><span>Todo para tu Proyecto</span></li>
                </ul>
            </div>
        </section>
        <!-- Page Header End -->

        <!-- Tools Section Start -->
        <section class="tools-section">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Herramientas Profesionales</h2>
                    <p class="section-title__text">Equípate con lo mejor para obtener resultados perfectos</p>
                </div>
                
                <div class="row">
                    <!-- Tool Category 1 -->
                    <div class="col-md-4">
                        <div class="tool-category">
                            <div class="tool-category__icon">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/brush-icon.png" alt="Pinceles y Rodillos">
                            </div>
                            <h3 class="tool-category__title">Pinceles y Rodillos</h3>
                            <ul class="tool-category__list">
                                <li>Pinceles sintéticos varios tamaños</li>
                                <li>Rodillos de lana y fibra</li>
                                <li>Rodillos especiales texturizados</li>
                                <li>Kits completos para principiantes</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Tool Category 2 -->
                    <div class="col-md-4">
                        <div class="tool-category">
                            <div class="tool-category__icon">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/spray-icon.png" alt="Equipo de Pintura">
                            </div>
                            <h3 class="tool-category__title">Equipo de Pintura</h3>
                            <ul class="tool-category__list">
                                <li>Pistolas de pintura eléctricas</li>
                                <li>Compresores profesionales</li>
                                <li>Equipos airless de alta presión</li>
                                <li>Accesorios y repuestos</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Tool Category 3 -->
                    <div class="col-md-4">
                        <div class="tool-category">
                            <div class="tool-category__icon">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/tools-icon.png" alt="Accesorios">
                            </div>
                            <h3 class="tool-category__title">Accesorios</h3>
                            <ul class="tool-category__list">
                                <li>Cintas de enmascarar</li>
                                <li>Lijas de diferentes gramajes</li>
                                <li>Espátulas y masillas</li>
                                <li>Protectores y cubiertas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tools Section End -->

        <!-- Materials Section Start -->
        <section class="materials-section" style="background-color: #f5f5f5; padding: 80px 0;">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Materiales de Preparación</h2>
                    <p class="section-title__text">La base para un acabado perfecto</p>
                </div>
                
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="material-card">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/material-1.jpg" alt="Imprimaciones" class="material-card__img">
                            <h3 class="material-card__title">Imprimaciones</h3>
                            <p class="material-card__text">Prepara cualquier superficie para obtener la mejor adherencia.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="material-card">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/material-2.jpg" alt="Masillas" class="material-card__img">
                            <h3 class="material-card__title">Masillas</h3>
                            <p class="material-card__text">Repara imperfecciones antes de pintar.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="material-card">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/material-3.jpg" alt="Selladores" class="material-card__img">
                            <h3 class="material-card__title">Selladores</h3>
                            <p class="material-card__text">Protege y prepara superficies porosas.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="material-card">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/material-4.jpg" alt="Diluyentes" class="material-card__img">
                            <h3 class="material-card__title">Diluyentes</h3>
                            <p class="material-card__text">Ajusta la viscosidad de tus pinturas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Materials Section End -->

        <!-- Project Guide Start -->
        <section class="project-guide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="project-guide__content">
                            <h2 class="project-guide__title">Guía para tu Proyecto</h2>
                            <p class="project-guide__text">Descarga nuestra guía completa paso a paso para realizar proyectos de pintura profesional.</p>
                            <ul class="project-guide__list">
                                <li>Preparación de superficies</li>
                                <li>Técnicas de aplicación</li>
                                <li>Consejos para acabados perfectos</li>
                                <li>Mantenimiento y cuidado</li>
                            </ul>
                            <a href="#" class="thm-btn">Descargar Guía</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="project-guide__img">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/project-guide.jpg" alt="Guía de Proyectos">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Guide End -->

        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/footer.php'; ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/js.php'; ?>
</body>
</html>