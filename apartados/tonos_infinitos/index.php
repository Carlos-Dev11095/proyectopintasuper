<?php $ROOT_PATH = ''; ?>

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
    <meta name="description" content="Descubre nuestra gama infinita de colores y servicio de igualación personalizado - Pintasuper" />

    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>

        .banner_title {
        color: #f7931e !important;
        } 

        /* Estilos generales */
        :root {
            --primary-color: #E74C3C;
            --secondary-color: #3498DB;
            --dark-color: #2C3E50;
            --light-color: #ECF0F1;
            --accent-color: #F39C12;
            --success-color: #2ECC71;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f9f9f9;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: var(--dark-color);
        }
        
        a {
            color: var(--primary-color);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        a:hover {
            color: var(--secondary-color);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        /* Estilos para el encabezado de página */
        .page-header {
            position: relative;
            padding: 120px 0 80px;
            text-align: center;
            background-size: cover;
            background-position: center;
            color: white;
            overflow: hidden;
        }
        
        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
        
        .page-header__inner {
            position: relative;
            z-index: 2;
        }
        
        .page-header h2 {
            font-size: 48px;
            margin-bottom: 20px;
            color: white;
        }
        
        .thm-breadcrumb {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }
        
        .thm-breadcrumb li {
            margin: 0 10px;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .thm-breadcrumb li a {
            color: white;
        }
        
        .thm-breadcrumb li span {
            margin-left: 5px;
        }
        
        /* Sección de introducción */
        .intro-section {
            padding: 80px 0;
            background-color: white;
            position: relative;
        }
        
        .intro-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        }
        
        .intro-title {
            font-size: 36px;
            margin-bottom: 30px;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
        }
        
        .intro-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
        }
        
        .intro-text {
            font-size: 18px;
            margin-bottom: 20px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Galería de colores */
        .color-gallery {
            padding: 80px 0;
            background-color: var(--light-color);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title__title {
            font-size: 36px;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .section-title__text {
            font-size: 18px;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .color-line {
            margin-bottom: 60px;
        }
        
        .color-line__title {
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
            color: var(--dark-color);
            position: relative;
            padding-bottom: 15px;
        }
        
        .color-line__title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--primary-color);
        }
        
        .color-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .color-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .color-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .color-item__img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .color-item__info {
            padding: 15px;
            text-align: center;
        }
        
        .color-item__name {
            font-weight: 600;
            margin-bottom: 5px;
            color: var(--dark-color);
        }
        
        /* Sección de igualación */
        .color-matching {
            padding: 80px 0;
            background-color: white;
            position: relative;
        }
        
        .color-matching::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(to right, var(--secondary-color), var(--primary-color));
        }
        
        .matching-feature {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            background: rgba(236, 240, 241, 0.5);
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .matching-feature:hover {
            transform: translateX(10px);
            background: rgba(236, 240, 241, 0.9);
        }
        
        .matching-feature__icon {
            color: var(--accent-color);
            font-size: 24px;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .matching-feature__content h3 {
            font-size: 20px;
            margin-bottom: 5px;
            color: var(--dark-color);
        }
        
        .matching-feature__content p {
            margin-bottom: 0;
            color: #666;
        }
        
        /* Efectos visuales */
        .hover-shadow {
            transition: all 0.3s ease;
        }
        
        .hover-shadow:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        /* Responsive */
        @media (max-width: 991px) {
            .page-header h2 {
                font-size: 36px;
            }
            
            .intro-title, .section-title__title {
                font-size: 30px;
            }
            
            .section-padding {
                padding: 60px 0;
            }
        }
        
        @media (max-width: 767px) {
            .page-header {
                padding: 80px 0 60px;
            }
            
            .page-header h2 {
                font-size: 28px;
            }
            
            .intro-title, .section-title__title {
                font-size: 26px;
            }
            
            .intro-text {
                font-size: 16px;
            }
            
            .color-grid {
                grid-template-columns: 1fr;
            }
            
            .matching-feature {
                flex-direction: column;
            }
            
            .matching-feature__icon {
                margin-bottom: 10px;
            }
        }

        /* Estilos para los iconos */
        .feature-icon {
            color: white;
        }
        
        /* Manteniendo el fondo del círculo */
        .feature-circle {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
    </style>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/css.php'; ?>
</head>

<body>

    <!-- precarga -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/preloader.php'; ?>

    <div class="page-wrapper">
        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>">Inicio</a></li>
                        <li><span>/</span></li>
                        <li>Tonos Infinitos</li>
                    </ul>
                    <h2 class="banner_title">TONOS INFINITOS</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Intro Section Start -->
        <section class="intro-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="intro-title" style="color: #000081;">¡En Pinta Super, tu color ideal sí existe!</h2>
                        <p class="intro-text">
                            En Pinta Super, tu imaginación es el límite. Contamos con una cantidad inmensa de tonos listos para transformar cualquier espacio, desde los neutros más serenos hasta los más vibrantes y atrevidos.
                        </p>
                        <p class="intro-text">
                            Pero eso no es todo. Si tienes en mente un color único que no encuentras en ningún catálogo, ¡nosotros lo hacemos realidad! Ofrecemos igualación de colores profesional. Solo trae una muestra de ese tono que tanto te gusta (una tela, un objeto, o incluso una foto) y nuestro equipo experto creará la pintura perfecta para ti.
                        </p>
                        <p class="intro-text">
                            ¡No te conformes con menos! Ven a Pinta Súper y descubre un universo de posibilidades para darle vida a tus ideas.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Intro Section End -->

        <!-- Color Gallery Start -->
        <section class="color-gallery section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Nuestras Líneas de Color</h2>
                    <p class="section-title__text">Explora nuestras exclusivas colecciones cromáticas</p>
                </div>
                
                <!-- Línea Dorada -->
                <div class="color-line">
                    <h3 class="color-line__title">Línea Dorada</h3>
                    <div class="color-grid">
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/DORADA_COLORES.png" alt="Dorada 1" class="color-item__img">
                            <div class="color-item__info">
                                <h4 class="color-item__name">Oro Antiguo</h4>
                            </div>
                        </div>
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/DORADA_COLORES 2.png" alt="Dorada 2" class="color-item__img">
                            <div class="color-item__info">
                                <h4 class="color-item__name">Amarillo Sol</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Línea Onix -->
                <div class="color-line">
                    <h3 class="color-line__title">Línea Onix</h3>
                    <div class="color-grid">
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/ONIX_COLORES.png" alt="Onix 1" class="color-item__img">
                            <div class="color-item__info">
                                <h4 class="color-item__name">Grafito Profundo</h4>
                            </div>
                        </div>
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/ONIX_COLORES 2.png" alt="Onix 2" class="color-item__img">
                            <div class="color-item__info">
                                <h4 class="color-item__name">Negro Azabache</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Línea Platino Gold -->
                <div class="color-line">
                    <h3 class="color-line__title">Línea Platino Gold</h3>
                    <div class="color-grid">
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/PLATINO GOLD_COLORES.png" alt="Platino Gold" class="color-item__img">
                            <div class="color-item__info">
                                <h4 class="color-item__name">Platino Gold</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Línea Zafiro -->
                <div class="color-line">
                    <h3 class="color-line__title">Línea Zafiro</h3>
                    <div class="color-grid">
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/ZAFIRO_COLORES.png" alt="Zafiro 1" class="color-item__img">
                            <div class="color-item__info">
                                <h4 class="color-item__name">Azul Cobalto</h4>
                            </div>
                        </div>
                        <div class="color-item">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/ZAFIRO_COLORES 2.png" alt="Zafiro 2" class="color-item__img">
                            <div class="color-item__info">
                                <h4 class="color-item__name">Azul Noche</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Color Gallery End -->

        <!-- Color Matching Section Start -->
        <section class="color-matching section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="hover-shadow">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/tonos_infinitos.jpg" alt="Igualación de color" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section-title__title mb-4">Servicio de Igualación de Color</h2>
                        <p class="section-title__text mb-5">¿Tienes un color específico en mente? Nuestro sistema de igualación profesional puede recrear cualquier tono que desees:</p>
                        
                        <div class="matching-feature">
                            <div class="matching-feature__icon">
                                <i class="fas fa-palette"></i>
                            </div>
                            <div class="matching-feature__content">
                                <h3>Precisión Cromática</h3>
                                <p>Tecnología avanzada que analiza y reproduce cualquier color con exactitud milimétrica.</p>
                            </div>
                        </div>
                        
                        <div class="matching-feature">
                            <div class="matching-feature__icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <div class="matching-feature__content">
                                <h3>Múltiples Formatos</h3>
                                <p>Aceptamos muestras en tela, objetos, fotografías o códigos de color para crear tu tono perfecto.</p>
                            </div>
                        </div>
                        
                        <div class="matching-feature">
                            <div class="matching-feature__icon">
                                <i class="fas fa-tint"></i>
                            </div>
                            <div class="matching-feature__content">
                                <h3>Resultados Garantizados</h3>
                                <p>Si el color no coincide exactamente con tu muestra, lo corregimos sin costo adicional.</p>
                            </div>
                        </div>
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