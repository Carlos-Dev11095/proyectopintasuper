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

    <?php include '../bin/css.php'; ?>

    <!-- Preload de recursos críticos -->
    <link rel="preload" href="styles.min.css" as="style">
    <link rel="preload" href="script.min.js" as="script">
    <link rel="preload" href="images/fachada.webp" as="image">
    <link rel="preload" href="images/habitacion.webp" as="image">
    <link rel="preload" href="images/comedor.webp" as="image">
    <link rel="preload" href="images/cocina.webp" as="image">
    <link rel="preload" href="images/sala.webp" as="image">
    <link rel="preload" href="images/bano.webp" as="image">
    <!-- CSS combinado y minificado -->
    <link rel="stylesheet" href="styles.min.css">
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- selector de estilo -->
    <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Opciones de Diseño</h3>
        <div class="layout-feature" id="colorMode">
            <a href="" class="dark-switcher" data-theme="ambed-dark">Oscuro</a>
            <a href="" class="light-switcher" data-theme="ambed-light">Claro</a>
            <button class="boxed-switcher">En Caja</button>
        </div>
    </div>
    <!-- fin selector de estilo -->

    <!-- precarga -->
    <?php require '../bin/preloader.php'; ?>

    <div class="page-wrapper">
        <?php require '../bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <!--Inicio de Servicios-->
        <section class="services-one">
            <div class="services-one-bg-box">
                <div class="services-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/services-one-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Nuestros Servicios</span>
                    <h2 class="section-title__title">Servicios que Ofrecemos</h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Servicio Individual-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="room-wallpapers.html">Papeles Pintados para Habitaciones</a></h3>
                                <p class="services-one__text">Morbi feugiat porta purus, at eleifend dolor posuere ac.</p>
                                <div class="panel left-panel">
                                    <h2>Selecciona un ambiente</h2>
                                    <select id="room-selector" class="room-selector">
                                        <option value="">-- Elige un ambiente --</option>
                                        <option value="fachada">Fachada de casa</option>
                                        <option value="habitacion">Habitación con cama</option>
                                        <option value="comedor">Comedor</option>
                                        <option value="cocina">Cocina</option>
                                        <option value="sala">Sala de estar</option>
                                        <option value="bano">Baño</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Servicio Individual-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="200ms">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="wall-sheets.html">Planchas para Paredes</a></h3>
                                <p class="services-one__text">Morbi feugiat porta purus, at eleifend dolor posuere ac.</p>
                                <div class="panel center-panel">
                                    <div id="wall" class="wall">
                                        <img id="room-image" src="" alt="Ambiente seleccionado" class="room-image" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Servicio Individual-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="300ms">
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="wall-painting.html">Pintura de Paredes</a></h3>
                                <p class="services-one__text">Morbi feugiat porta purus, at eleifend dolor posuere ac.</p>
                                <div class="panel right-panel">
                                    <h2>Selecciona un color</h2>
                                    <select id="palette-selector" class="palette-selector">
                                        <option value="">-- Elige una paleta --</option>
                                        <option value="zafiro">Línea Zafiro</option>
                                        <option value="dorada">Línea Dorada</option>
                                        <option value="onix">Línea Ónix</option>
                                        <option value="natura">Línea Natura</option>
                                    </select>
                                    <div id="color-palette" class="color-palette">
                                        <!-- Contenido cargado dinámicamente por JS -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fin de Servicios-->


        <?php require '../bin/footer.php'; ?>
        <?php require '../bin/js.php'; ?>
        <!-- JavaScript minificado y al final del body -->
        <script src="script.min.js" defer></script>
    </div>
</body>
</html>