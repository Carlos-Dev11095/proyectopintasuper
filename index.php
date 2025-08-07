<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <!-- iconos favoritos -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Plantilla HTML 5 Ambed" />

    <!-- fuentes -->
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
  max-width: 100%;
  max-height: 100%;
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
</style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- precarga -->
    <?php include 'bin/preloader.php'; ?>

    <div class="page-wrapper">

        <?php include 'bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
    </div>

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
                                    <a href="about.html" class="thm-btn main-slider__btn">Conoce Más</a>
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
                                    <a href="productos.html" class="thm-btn main-slider__btn">Nuestros Productos</a>
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
                                    <a href="servicios.html" class="thm-btn main-slider__btn">Nuestros Servicios</a>
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

<!-- Resto de tu código HTML... -->

<?php include 'bin/footer.php'; ?>

<?php include 'bin/js.php'; ?>

</body>
</html>