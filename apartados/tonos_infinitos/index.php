<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tonos Infinitos - Pintasuper</title>
    <!-- iconos favoritos -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Explora nuestra amplia gama de colores y texturas en Pintasuper" />

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
            <div class="page-header__bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <div class="container">
                <h2 class="page-header__title">Tonos Infinitos</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                    <li><span>Tonos Infinitos</span></li>
                </ul>
            </div>
        </section>
        <!-- Page Header End -->

        <!-- Intro Section Start -->
        <section class="intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="intro-title">¡En Pinta Super, tu color ideal sí existe!</h2>
                        <p class="intro-text">En Pinta Super, tu imaginación es el límite. Contamos con una cantidad inmensa de tonos listos para transformar cualquier espacio, desde los neutros más serenos hasta los más vibrantes y atrevidos.</p>
                        <p class="intro-text">Pero eso no es todo. Si tienes en mente un color único que no encuentras en ningún catálogo, ¡nosotros lo hacemos realidad! Ofrecemos igualación de colores profesional. Solo trae una muestra de ese tono que tanto te gusta (una tela, un objeto, o incluso una foto) y nuestro equipo experto creará la pintura perfecta para ti.</p>
                        <p class="intro-text">¡No te conformes con menos! Ven a Pinta Súper y descubre un universo de posibilidades para darle vida a tus ideas.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Intro Section End -->

        <!-- Color Gallery Start -->
        <section class="color-gallery">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Explora Nuestra Paleta de Colores</h2>
                    <p class="section-title__text">Descubre la perfecta combinación para cada espacio</p>
                </div>
                
                <div class="row">
                    <!-- Color Item 1 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/dorada.jpg" alt="Dorada" class="color-item__img">
                            <h3 class="color-item__title">Dorada</h3>
                            <p class="color-item__code">Código: DOR-2023</p>
                        </div>
                    </div>
                    
                    <!-- Color Item 2 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/onix.jpg" alt="Ónix" class="color-item__img">
                            <h3 class="color-item__title">Ónix</h3>
                            <p class="color-item__code">Código: ONX-2023</p>
                        </div>
                    </div>
                    
                    <!-- Color Item 3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/platino-gold.jpg" alt="Platino Gold" class="color-item__img">
                            <h3 class="color-item__title">Platino Gold</h3>
                            <p class="color-item__code">Código: PLG-2023</p>
                        </div>
                    </div>
                    
                    <!-- Color Item 4 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/zafiro.jpg" alt="Zafiro" class="color-item__img">
                            <h3 class="color-item__title">Zafiro</h3>
                            <p class="color-item__code">Código: ZAF-2023</p>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="<?php echo $ROOT_PATH; ?>/contacto" class="thm-btn">Solicitar Catálogo Completo</a>
                </div>
            </div>
        </section>
        <!-- Color Gallery End -->

        <!-- Color Matching Section Start -->
        <section class="color-matching" style="background-color: #f8f8f8; padding: 80px 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/color-matching.jpg" alt="Igualación de Colores" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section-title">Servicio de Igualación de Colores</h2>
                        <p>¿Tienes un color específico en mente? Nuestro sistema computarizado de igualación de colores puede mezclar cualquier tono que necesites.</p>
                        <ul class="feature-list">
                            <li><i class="fas fa-check"></i> Precisión en la reproducción del color</li>
                            <li><i class="fas fa-check"></i> Tecnología avanzada</li>
                            <li><i class="fas fa-check"></i> Resultados garantizados</li>
                        </ul>
                        <a href="<?php echo $ROOT_PATH; ?>/contacto" class="thm-btn">Más información</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Color Matching Section End -->

        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/footer.php'; ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/js.php'; ?>
</body>
</html>