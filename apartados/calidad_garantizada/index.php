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
        
        /* Tarjetas de calidad */
        .quality-standards {
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
        
        .quality-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
            overflow: hidden;
            border-top: 4px solid var(--primary-color);
        }
        
        .quality-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .quality-card__icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        
        .quality-card__icon img {
            width: 40px;
            height: 40px;
            filter: brightness(0) invert(1);
        }
        
        .quality-card__title {
            font-size: 22px;
            margin-bottom: 15px;
            text-align: center;
            color: var(--dark-color);
        }
        
        .quality-card__text {
            text-align: center;
            color: #666;
            margin-bottom: 0;
        }
        
        /* Sección de garantía */
        .warranty-section {
            padding: 80px 0;
            background-color: white;
            position: relative;
        }
        
        .warranty-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(to right, var(--secondary-color), var(--primary-color));
        }
        
        .warranty-feature {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            background: rgba(236, 240, 241, 0.5);
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--success-color);
            transition: all 0.3s ease;
        }
        
        .warranty-feature:hover {
            transform: translateX(10px);
            background: rgba(236, 240, 241, 0.9);
        }
        
        .warranty-feature__icon {
            color: var(--success-color);
            font-size: 24px;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .warranty-feature__content h3 {
            font-size: 20px;
            margin-bottom: 5px;
            color: var(--dark-color);
        }
        
        .warranty-feature__content p {
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
            
            .quality-card {
                padding: 20px;
            }
            
            .warranty-feature {
                flex-direction: column;
            }
            
            .warranty-feature__icon {
                margin-bottom: 10px;
            }
        }

            /* Estilos para los iconos de calidad */
    .quality-card__icon i {
        color: white; /* Cambia el color a blanco */
    }
    
    /* Manteniendo el fondo del círculo (opcional) */
    .quality-card__icon {
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
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/resources/calidad_garantizada/pagina_web_calidad_garantizada.png);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>">Inicio</a></li>
                        <li><span>/</span></li>
                        <li>Calidad Garantizada</li>
                    </ul>
                    <h2>Calidad Garantizada</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Intro Section Start -->
        <section class="intro-section section-padding">
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
        <section class="quality-standards section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Nuestros Estándares de Calidad</h2>
                    <p class="section-title__text">Comprometidos con la excelencia en cada producto</p>
                </div>
                
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="quality-card">
                            <div class="quality-card__icon">
                                <i class="fas fa-gem fa-3x"></i>
                            </div>
                            <h3 class="quality-card__title">Materiales Premium</h3>
                            <p class="quality-card__text">Utilizamos solo las materias primas de más alta calidad en todos nuestros productos.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="quality-card">
                            <div class="quality-card__icon">
                                <i class="fas fa-clipboard-check fa-3x"></i>
                            </div>
                            <h3 class="quality-card__title">Proceso Riguroso</h3>
                            <p class="quality-card__text">Cada lote pasa por estrictos controles de calidad en todas las etapas de producción.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="quality-card">
                            <div class="quality-card__icon">
                                <i class="fas fa-lightbulb fa-3x"></i>
                            </div>
                            <h3 class="quality-card__title">Innovación Constante</h3>
                            <p class="quality-card__text">Invertimos en investigación para ofrecer productos vanguardistas.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="quality-card">
                            <div class="quality-card__icon">
                                <i class="fas fa-award fa-3x"></i>
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
        <section class="warranty-section section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="hover-shadow">
                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/calidad_garantizada/calidad.jpg" alt="Garantía Pintasuper" class="img-fluid rounded">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section-title__title mb-4">Nuestra Garantía de Calidad</h2>
                        <p class="section-title__text mb-5">En Pintasuper respaldamos la calidad de nuestros productos con una garantía excepcional:</p>
                        
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

        <!-- Testimonials Section Start -->
        <section class="testimonials-section section-padding" style="background-color: var(--light-color);">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Lo que dicen nuestros clientes</h2>
                    <p class="section-title__text">Experiencias reales con productos Pintasuper</p>
                </div>
                
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="testimonial-card p-4 bg-white rounded">
                            <div class="testimonial-card__rating mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="testimonial-card__text mb-4">"He usado pinturas de muchas marcas y Pintasuper superó todas mis expectativas. La cobertura es excelente y el color se mantiene como el primer día."</p>
                            <div class="testimonial-card__author d-flex align-items-center">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/testimonial/1.jpg" alt="Cliente" class="rounded-circle mr-3" width="50">
                                <div>
                                    <h5 class="mb-0">Carlos Méndez</h5>
                                    <small>Constructor profesional</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="testimonial-card p-4 bg-white rounded">
                            <div class="testimonial-card__rating mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="testimonial-card__text mb-4">"La pintura para metales de Pintasuper es increíble. Después de 2 años a la intemperie, mi herrería luce como nueva. ¡Totalmente recomendada!"</p>
                            <div class="testimonial-card__author d-flex align-items-center">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/testimonial/3.jpg" alt="Cliente" class="rounded-circle mr-3" width="50">
                                <div>
                                    <h5 class="mb-0">Ana Rodríguez</h5>
                                    <small>Diseñadora de interiores</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <div class="testimonial-card p-4 bg-white rounded">
                            <div class="testimonial-card__rating mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <p class="testimonial-card__text mb-4">"Compré la pintura para mi casa hace 5 años y todavía no necesita retoques. Los colores siguen vibrantes y la superficie protegida."</p>
                            <div class="testimonial-card__author d-flex align-items-center">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/testimonial/2.jpg" alt="Cliente" class="rounded-circle mr-3" width="50">
                                <div>
                                    <h5 class="mb-0">Luis Fernández</h5>
                                    <small>Hogar</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Section End -->

        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/footer.php'; ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/js.php'; ?>
</body>
</html>