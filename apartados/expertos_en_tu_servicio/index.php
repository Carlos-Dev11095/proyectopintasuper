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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
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
        
        .page-header__title {
            font-size: 48px;
            margin-bottom: 20px;
            color: white;
            position: relative;
            display: inline-block;
        }
        
        .page-header__title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary-color);
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
        
        /* Sección de expertos */
        .experts-section {
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
        
        .expert-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .expert-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .expert-card__img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
            border: 5px solid var(--light-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .expert-card__img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .expert-card__name {
            font-size: 22px;
            margin-bottom: 5px;
            color: var(--dark-color);
        }
        
        .expert-card__position {
            font-size: 16px;
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 15px;
        }
        
        .expert-card__bio {
            color: #666;
            margin-bottom: 20px;
        }
        
        .expert-card__contact a {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .expert-card__contact a:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
        }
        
        /* Sección de servicios */
        .services-section {
            padding: 80px 0;
            background-color: white;
        }
        
        .service-card {
            background: var(--light-color);
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            text-align: center;
            border-left: 4px solid var(--primary-color);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            background: white;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-card__icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .service-card__title {
            font-size: 20px;
            margin-bottom: 15px;
        }
        
        .service-card__text {
            color: #666;
        }
        
        /* Responsive */
        @media (max-width: 991px) {
            .page-header__title {
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
            
            .page-header__title {
                font-size: 28px;
            }
            
            .intro-title, .section-title__title {
                font-size: 26px;
            }
            
            .intro-text {
                font-size: 16px;
            }
        }
    </style>

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
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/resources/expertos_a_tu_servicio/pagina_web_expertos_servicio.png);"></div>
                <div class="page-header__inner">
                    <h2 class="page-header__title">Expertos a tu Servicio</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                        <li><span>/</span></li>
                        <li>Expertos a tu Servicio</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header End -->

        <!-- Intro Section Start -->
        <section class="intro-section section-padding">
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

        <!-- Services Section Start -->
<section class="services-section section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title__title">Nuestros Servicios de Asesoría</h2>
                <p class="section-title__text">Cómo podemos ayudarte a lograr los mejores resultados</p>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-card__icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3 class="service-card__title">Selección de Color</h3>
                        <p class="service-card__text">Te ayudamos a elegir la combinación perfecta de colores para tu espacio, considerando iluminación, estilo y ambiente deseado.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-card__icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3 class="service-card__title">Preparación de Superficies</h3>
                        <p class="service-card__text">Asesoría profesional sobre cómo preparar diferentes superficies para obtener los mejores resultados al pintar.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-card__icon">
                            <i class="fas fa-tint-slash"></i>
                        </div>
                        <h3 class="service-card__title">Soluciones Impermeables</h3>
                        <p class="service-card__text">Asesoría especializada en productos y técnicas para proteger tus superficies de humedad y filtraciones.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-card__icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3 class="service-card__title">Proyectos Residenciales</h3>
                        <p class="service-card__text">Recomendaciones personalizadas para pintura interior y exterior de viviendas.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-card__icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="service-card__title">Proyectos Comerciales</h3>
                        <p class="service-card__text">Soluciones profesionales para negocios, oficinas y espacios comerciales.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-card__icon">
                            <i class="fas fa-paint-roller"></i>
                        </div>
                        <h3 class="service-card__title">Productos Especializados</h3>
                        <p class="service-card__text">Guía para seleccionar los productos más adecuados según el tipo de superficie y condiciones ambientales.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Services Section End -->

        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/footer.php'; ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/js.php'; ?>
</body>
</html>