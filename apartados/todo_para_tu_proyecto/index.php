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
    <meta name="description" content="Encuentra todo lo necesario para tus proyectos de pintura - herramientas, accesorios y materiales de calidad profesional - Pintasuper" />

    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Estilos generales */
        .banner_title {
        color: #f7931e !important;
        } 

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
        
        /* Galería de herramientas */
        .tools-gallery {
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
        
        .tool-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .tool-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-align: center;
            padding: 30px 20px;
        }
        
        .tool-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .tool-icon {
            font-size: 50px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .tool-item h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .tool-item p {
            color: #666;
        }
        
        /* Sección de imagen destacada */
        .featured-image-section {
            padding: 80px 0;
            background-color: white;
            position: relative;
        }
        
        .featured-image-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(to right, var(--secondary-color), var(--primary-color));
        }
        
        .featured-image-container {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .featured-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .image-caption {
            margin-top: 20px;
            font-style: italic;
            color: #666;
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
            
            .tool-grid {
                grid-template-columns: 1fr;
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

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>">Inicio</a></li>
                        <li><span>/</span></li>
                        <li>Todo para tu Proyecto</li>
                    </ul>
                    <h2 class="banner_title">TODO PARA TU PROYECTO</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Intro Section Start -->
        <section class="intro-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="intro-title">¡Pinta tus ideas con nosotros!</h2>
                        <p class="intro-text">
                            Desde brochas de precisión hasta escaleras seguras, rodillos eficientes y charolas prácticas, tenemos todas las herramientas y complementos que necesitas para pintar tu casa como un profesional.
                        </p>
                        <p class="intro-text">
                            ¿Tu madera necesita un cambio? Contamos con productos especializados para pintar madera . 
                            ¿Quieres darle un nuevo look a tu auto? Descubra nuestra gama de pinturas para automóviles . 
                            ¿Buscas proteger tus superficies de la humedad, el sol y la lluvia? También tenemos soluciones para impermeabilizar.
                        </p>
                        <p class="intro-text">
                            ¡Visítanos y convierte tus proyectos en obras de arte!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Intro Section End -->

        <!-- Tools Gallery Start -->
        <section class="tools-gallery section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Herramientas y Materiales</h2>
                    <p class="section-title__text">Todo lo necesario para proyectos perfectos</p>
                </div>
                
                <div class="tool-grid">
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3>Herramientas de Precisión</h3>
                        <p>Brochas, rodillos y accesorios de la más alta calidad para acabados profesionales.</p>
                    </div>
                    
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Equipo de Seguridad</h3>
                        <p>Todo para protegerte durante tus proyectos, desde escaleras hasta equipo de protección personal.</p>
                    </div>
                    
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fas fa-tree"></i>
                        </div>
                        <h3>Productos para Madera</h3>
                        <p>Barnices, tintes y protectores especializados para todo tipo de superficies de madera.</p>
                    </div>
                    
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h3>Pintura Automotriz</h3>
                        <p>Colores y acabados profesionales para darle un nuevo look a tu vehículo.</p>
                    </div>
                    
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fas fa-umbrella"></i>
                        </div>
                        <h3>Impermeabilizantes</h3>
                        <p>Soluciones avanzadas para proteger tus superficies de los elementos.</p>
                    </div>
                    
                    <div class="tool-item">
                        <div class="tool-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3>Accesorios</h3>
                        <p>Cintas, lijas, removedores y todo lo necesario para preparar y finalizar tu proyecto.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tools Gallery End -->

        <!-- Featured Image Section Start -->
        <section class="featured-image-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="featured-image-container">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/todo_para_tu_proyecto/pagina_web_todo_para_tu_proyecto.png" alt="Kit completo para proyectos de pintura" class="featured-image">
                            <p class="image-caption">Todo lo que necesitas en un solo lugar para tus proyectos de pintura</p>
                        </div>
                        
                        <div class="text-center">
                            <h2 class="section-title__title mb-4">¿Listo para comenzar tu próximo proyecto?</h2>
                            <p class="section-title__text mb-5">
                                En Pinta Super no solo te proporcionamos los materiales de la más alta calidad, sino también el conocimiento y asesoría para que tus proyectos superen todas tus expectativas. Visita nuestra tienda y descubre por qué somos el destino preferido de profesionales.
                            </p>
                            <a href="<?php echo $ROOT_PATH; ?>/contacto" class="thm-btn">Contáctanos para asesoría</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Image Section End -->

        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/footer.php'; ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/js.php'; ?>
</body>
</html>