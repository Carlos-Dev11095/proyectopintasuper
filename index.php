<?php $ROOT_PATH = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Ambed HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php include 'bin/css.php'; ?>
<style>
/* Estilos para mostrar los 4 elementos en una sola fila */
.feature-one__list {
  display: flex;
  justify-content: space-between;
  flex-wrap: nowrap;
  padding: 0;
  list-style: none;
  gap: 20px;
  margin: 0 auto;
  max-width: 1200px;
}

.feature-one__single {
  flex: 1;
  min-width: 250px;
  background: #fff;
  border-radius: 15px;
  padding: 30px 25px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  text-align: center;
  transition: all 0.3s ease;
}

.feature-one__single:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.feature-one__icon {
  margin: 0 auto 25px;
  width: 150px;
  height: 150px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.feature-one__icon img {
  max-width: 155%;
  max-height: 155%;
  object-fit: contain;
  border-radius: 10px;
}

.feature-one__title {
  font-size: 22px;
  font-weight: 700;
  margin: 15px 0;
  color: #2a2a2a;
  font-family: 'Poppins', sans-serif;
}

.feature-one__title a {
  color: inherit;
  text-decoration: none;
  transition: color 0.3s ease;
}

.feature-one__title a:hover {
  color: #e53e3e;
}

.feature-one__text {
  color: #666;
  font-size: 15px;
  line-height: 1.6;
  margin-bottom: 25px;
  min-height: 70px;
}

.feature-one__arrow a {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  background: #f8f8f8;
  color: #e53e3e;
  border-radius: 50%;
  font-size: 16px;
  transition: all 0.3s ease;
}

.feature-one__arrow a:hover {
  background: #e53e3e;
  color: #fff;
  transform: translateX(5px);
}

/* Responsive */
@media (max-width: 1200px) {
  .feature-one__list {
    flex-wrap: wrap;
    justify-content: center;
  }
  .feature-one__single {
    flex: 0 0 calc(50% - 20px);
    max-width: calc(50% - 20px);
    margin-bottom: 20px;
  }
}

@media (max-width: 768px) {
  .feature-one__single {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

.services-one__content {
    position: relative;
    padding-left: 40px; /* Espacio para el icono */
}

.services-one__icon-left {
    position: absolute;
    left: 0;
    top: 5px;
    color: #ffb400;
}

</style>
</head>

<body>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>

    <?php include 'bin/header.php'; ?>

        <!--Main Slider Start-->
<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/shapes/slide-1.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <div class="main-slider__icon">
                                    <img src="assets/images/shapes/main-slider-icon.png" alt="">
                                </div>
                                <div class="main-slider__sub-title-box">
                                    <p class="main-slider__sub-title">Bienvenido a Pinta Super</p>
                                    <div class="main-slider__border-left"></div>
                                    <div class="main-slider__border-right"></div>
                                </div>
                                <h2 class="main-slider__title">Expertos en <br> Pintura <span>&</span> <br>
                                    Decoración</h2>
                                <div class="main-slider__btn-box">
                                    <a href="<?php echo $ROOT_PATH; ?>/nosotros/" class="thm-btn main-slider__btn" target="_blank">Conócenos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/shapes/slide-2.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <div class="main-slider__icon">
                                    <img src="assets/images/shapes/main-slider-icon.png" alt="">
                                </div>
                                <div class="main-slider__sub-title-box">
                                    <p class="main-slider__sub-title">Soluciones integrales</p>
                                    <div class="main-slider__border-left"></div>
                                    <div class="main-slider__border-right"></div>
                                </div>
                                <h2 class="main-slider__title">Materiales de <br> la más alta <span>calidad</span> <br>
                                    para tus proyectos</h2>
                                <div class="main-slider__btn-box">
                                    <a href="<?php echo $ROOT_PATH; ?>/productos/" class="thm-btn main-slider__btn" target="_blank">Nuestros Productos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(assets/images/shapes/slide-3.jpg);"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-slider__content">
                                <div class="main-slider__icon">
                                    <img src="assets/images/shapes/main-slider-icon.png" alt="">
                                </div>
                                <div class="main-slider__sub-title-box">
                                    <p class="main-slider__sub-title">Servicio profesional</p>
                                    <div class="main-slider__border-left"></div>
                                    <div class="main-slider__border-right"></div>
                                </div>
                                <h2 class="main-slider__title">Aplicación <br> profesional <span>&</span> <br>
                                    asesoría técnica</h2>
                                <div class="main-slider__btn-box">
                                    <a href="<?php echo $ROOT_PATH; ?>/apartados/expertos_en_tu_servicio" class="thm-btn main-slider__btn" target="_blank">Nuestros Servicios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>

    </div>
</section>
        <!--Main Slider End-->

<!--Sección de 4 elementos en hilera-->
<section class="feature-one">
    <div class="container">
        <ul class="list-unstyled feature-one__list">
            <li class="feature-one__single wow fadeInLeft" data-wow-delay="100ms">
                <div class="feature-one__content">
                    <div class="feature-one__icon">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/tonos_infinitos.jpg" alt="Tonos Infinitos">
                    </div>
                    <h3 class="feature-one__title"><a href="<?php echo $ROOT_PATH; ?>/apartados/tonos_infinitos">Tonos Infinitos</a></h3>
                    <p class="feature-one__text">Explora nuestra vasta gamma de colores y texturas para darle vida a cada rincón de tu hogar u oficina.</p>
                    <div class="feature-one__arrow">
                        <a href="<?php echo $ROOT_PATH; ?>/apartados/tonos_infinitos"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
            
            <li class="feature-one__single wow fadeInLeft" data-wow-delay="200ms">
                <div class="feature-one__content">
                    <div class="feature-one__icon">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/todo_para_tu_proyecto/todo_para_tu_proyecto.png" alt="Todo para tu Proyecto">
                    </div>
                    <h3 class="feature-one__title"><a href="<?php echo $ROOT_PATH; ?>/apartados/todo_para_tu_proyecto">Todo para tu Proyecto</a></h3>
                    <p class="feature-one__text">Encuentra todas las herramientas y materiales necesarios para un acabado profesional.</p>
                    <div class="feature-one__arrow">
                        <a href="<?php echo $ROOT_PATH; ?>/apartados/todo_para_tu_proyecto"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
            
            <li class="feature-one__single wow fadeInLeft" data-wow-delay="300ms">
                <div class="feature-one__content">
                    <div class="feature-one__icon">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/calidad_garantizada/pagina_web_calidad_garantizada_.png" alt="Calidad Garantizada">
                    </div>
                    <h3 class="feature-one__title"><a href="<?php echo $ROOT_PATH; ?>/apartados/calidad_garantizada">Calidad Garantizada</a></h3>
                    <p class="feature-one__text">Solo trabajamos con productos de calidad superior, asegurando durabilidad y rendimiento.</p>
                    <div class="feature-one__arrow">
                        <a href="<?php echo $ROOT_PATH; ?>/apartados/calidad_garantizada"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
            
            <li class="feature-one__single wow fadeInLeft" data-wow-delay="400ms">
                <div class="feature-one__content">
                    <div class="feature-one__icon">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/expertos_a_tu_servicio/pagina_web_expertos_servicios.png" alt="Expertos a tu Servicio">
                    </div>
                    <h3 class="feature-one__title"><a href="<?php echo $ROOT_PATH; ?>/apartados/expertos_en_tu_servicio">Expertos a tu Servicio</a></h3>
                    <p class="feature-one__text">Recibe asesoramiento experto para elegir la pintura ideal y resolver cualquier duda.</p>
                    <div class="feature-one__arrow">
                        <a href="<?php echo $ROOT_PATH; ?>/apartados/expertos_en_tu_servicio"><i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="about-one">
    <div class="about-one-shape-2 float-bob-x"></div>
    <div class="about-one-wall">
        <img src="assets/images/shapes/about-one-wall.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Nuestros Servicios</span>
                        <h2 class="section-title__title">Soluciones Creativas para Cada Espacio</h2>
                        <div class="section-title__line"></div>
                    </div>
                    <p class="about-one__text-1">En Pintasuper, ofrecemos una amplia gama de servicios de pintura y decoración que se adaptan a tus necesidades y estilo.</p>
                    <ul class="list-unstyled about-one__points">
                        <li>
                            <div class="about-one__points-content-box">
                                <div class="about-one__points-icon">
                                    <span class="icon-paint"></span>
                                </div>
                                <div class="about-one__points-text-box">
                                    <p class="about-one__points-text">Pintura Interior y Exterior Profesional</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="about-one__points-content-box">
                                <div class="about-one__points-icon">
                                    <span class="icon-high-quality"></span> <!-- Restaurado -->
                                </div>
                                <div class="about-one__points-text-box">
                                    <p class="about-one__points-text">Calidad Garantizada en Cada Proyecto</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p class="about-one__text-2">Nuestro compromiso es brindar acabados impecables, uso de materiales de primera calidad y asesoría personalizada para cada proyecto residencial o comercial.</p>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-one__right">
                    <div class="about-one__img-box wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
                        <div class="about-one__img">
                            <img src="assets/images/resources/soluciones.png" alt="Imagen principal servicios">
                        </div>
                        <div class="about-one__small-img">
                            <img src="assets/images/resources/pared.jpg" alt="Imagen secundaria servicios">
                        </div>
                        <div class="about-one__project">
                            <div class="about-one__project-icon">
                                <span class="icon-brush"></span>
                            </div>
                            <div class="about-one__project-content">
                                <p class="about-one__project-text">Resultados Profesionales</p>
                            </div>
                        </div>
                        <div class="about-one__shape-1 float-bob-y"></div>
                        <div class="about-one__dot">
                            <img src="assets/images/resources/pared2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!--About One End-->



        <!--Services One Start-->
<section class="services-one">

            <div class="services-one-bg-box">
                <div class="services-one-bg jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%" style="background-image: none;" data-jarallax-original-styles="background-image: url(assets/images/backgrounds/pared_pintada.jpg);"><div id="jarallax-container-0" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;"><div style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://pintasuper.com/assets/images/backgrounds/pared_pintada.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 747px; height: 855.025px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -124.512px; transform: translate3d(0px, 151.644px, 0px);"></div></div></div>
                    </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Nuestra Especialidad</span>
                    <h2 class="section-title__title">Soluciones Completas de Pintura</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-one__single wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                            <div class="services-one__img">
                                <img src="assets/images/services/pared_pintada.jpg" alt="Pinturas y esmaltes de alta calidad">
                                <div class="services-one__icon">
                                    <span class="fas fa-paint-roller fa-sm"></span> </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="productos-pinturas.html">Amplia Gama de Pinturas</a></h3>
                                <p class="services-one__text">Descubre nuestra gamma de pinturas para interiores y exteriores, en todos los acabados y colores.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-one__single wow fadeInUp" data-wow-delay="200ms" style="visibility: hidden; animation-delay: 200ms; animation-name: none;">
                            <div class="services-one__img">
                                <img src="assets/images/services/herramientas.png" alt="Herramientas y preparación de superficies">
                                <div class="services-one__icon">
                                    <span class="fas fa-tools fa-sm"></span> </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a>Herramientas y Preparación</a></h3>
                                <p class="services-one__text">Encuentra todo lo necesario para preparar y aplicar pintura: brochas, rodillos, lijas, selladores, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="services-one__single wow fadeInUp" data-wow-delay="300ms" style="visibility: hidden; animation-delay: 300ms; animation-name: none;">
                            <div class="services-one__img">
                                <img src="assets/images/services/asesoramiento.png" alt="Asesoramiento experto en color">
                                <div class="services-one__icon">
                                    <span class="fas fa-palette fa-sm"></span> </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a>Asesoramiento de Color</a></h3>
                                <p class="services-one__text">Nuestros expertos te guiarán para elegir la paleta de colores perfecta para cada ambiente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--Quality Work Start-->

        <section class="quality-work">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="quality-work__left">
                            <div class="quality-work__img-box">
                                <div class="quality-work__img">
                                    <img src="assets/images/resources/pinturasuper.jpg" alt="Pintor profesional trabajando">
                                    </div>
                                <div class="quality-work__small-img">
                                    <img src="assets/images/resources/baño.jpg" alt="Detalle de pintura de alta calidad">
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="quality-work__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Expertos en Pintura</span>
                                <h2 class="section-title__title">Calidad y Profesionalismo en Cada Proyecto</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="quality-work__text-1">Transformamos tus espacios con acabados impecables y duraderos.</p>
                            <ul class="list-unstyled quality-work__feature">
                                <li>
                                    <div class="icon">
                                        <span class="icon-image-gallery1"></span> </div>
                                    <div class="text">
                                        <p>Técnicas Innovadoras <br> y Creativas</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-wallpaper-5"></span> </div>
                                    <div class="text">
                                        <p>Materiales Premium <br> para un Acabado Superior</p>
                                    </div>
                                </li>
                            </ul>
                            <p class="quality-work__text-2">Nos apasiona la pintura y nos comprometemos a superar tus expectativas con cada trabajo.</p>
                            <div class="quality-work__progress">
                                <div class="quality-work__progress-single">
                                    <h4 class="quality-work__progress-title">Pintura Interior Residencial</h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="95%"> <div class="count-text">95%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quality-work__progress-single">
                                    <h4 class="quality-work__progress-title">Pintura Exterior Comercial</h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="85%"> <div class="count-text">85%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Quality Work End-->

        <!--Project One Start-->

        <section class="project-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Nuestras Creaciones</span>
                    <h2 class="section-title__title">Proyectos de Pintura que Inspiran <br> y Transforman</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="project-one__inner">
                    <div class="project-one__main-content">
                        <div class="swiper-container" id="project-one__carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="project-one__left">
                                                <div class="project-one__img">
                                                    <img src="assets/images/project/chimenea.jpg" alt="Proyecto de pintura de sala de estar">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="project-one__right">
                                                <div class="project-one__content-box">
                                                    <div class="project-one__content">
                                                        <h4 class="project-one__title">Renovación de Sala con Colores Cálidos</h4>
                                                        <p class="project-one__text">Realizamos la transformación completa de esta sala de estar, aplicando una paleta de colores cálidos que aportan luminosidad y confort. Un trabajo detallado que superó las expectativas del cliente.</p>
                                                        <a href="/simulador_virtual/?room=sala&amp;palette=dorada&amp;color=color-dorada-3" class="thm-btn project-one__btn" target="_blank">Ver Detalles del Proyecto</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></section>
        <!--Project One End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="brand-one__main-content">
                                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "767": {
                                "spaceBetween": 50,
                                "slidesPerView": 4
                            },
                            "991": {
                                "spaceBetween": 50,
                                "slidesPerView": 5
                            },
                            "1199": {
                                "spaceBetween": 100,
                                "slidesPerView": 5
                            }
                        }}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-1.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-2.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-3.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-4.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-5.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-1.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-2.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-3.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-4.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="assets/images/brand/brand-1-5.png" alt="">
                                        </div><!-- /.swiper-slide -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->

        <?php include 'bin/footer.php'; ?>

    </div><!-- /.page-wrapper -->


       <?php include 'bin/js.php'; ?>

</body>

</html>