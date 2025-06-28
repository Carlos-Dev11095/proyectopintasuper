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
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <?php include '../bin/css.php'; ?>

    <!-- Preload de recursos críticos -->
    <link rel="preload" href="styles.min.css" as="style">
    <link rel="preload" href="script.min.js" as="script">
    <link rel="preload" href="images/habitacion.png" as="image">
    <link rel="preload" href="images/sala.png" as="image">
    <link rel="preload" href="images/bano.png" as="image">
    <!-- CSS combinado y minificado -->
    <link rel="stylesheet" href="styles.min.css">
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- precarga -->
    <?php require '../bin/preloader.php'; ?>

    <div class="page-wrapper">
        <?php require '../bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>">Home</a></li>
                        <li><span>/</span></li>
                        <li>Simulador Virtual</li>
                    </ul>
                    <h2>Simulador Virtual</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Sección Decorador Modificada -->
<section class="decorator-simplified">
    <div class="image-container">
        <div class="wall-container">
            <div id="wall" class="wall"></div>
            <img id="room-image" alt="Ambiente seleccionado" class="room-image">
        </div>
        
        <!-- Botones flotantes -->
        <div class="fab-container">
            <button class="fab-decorator" id="room-selector-fab" title="Cambiar ambiente">
                <i class="fas fa-couch"></i>
            </button>
            <button class="fab-decorator" id="color-selector-fab" title="Seleccionar color" disabled>
                <i class="fas fa-palette"></i>
            </button>
        </div>
        
        <!-- Panel selector de ambiente -->
        <div class="floating-panel" id="room-selector-panel">
            <h3>Seleccionar Ambiente</h3>
            <div class="room-options">
                <div class="room-option" data-room="">
                    <i class="fas fa-times"></i> Selecciona escena
                </div>
                <div class="room-option" data-room="habitacion">
                    <i class="fas fa-bed"></i> Habitación
                </div>
                <div class="room-option" data-room="sala">
                    <i class="fas fa-couch"></i> Sala
                </div>
                <div class="room-option" data-room="bano">
                    <i class="fas fa-bath"></i> Baño
                </div>
            </div>
        </div>
        
        <!-- Panel selector de color -->
        <div class="floating-panel" id="color-selector-panel">
            <div class="color-panel-header">
                <h3>Seleccionar Línea de Color</h3>
                <select id="palette-selector" class="palette-selector">
                    <option value="">-- Elegir línea --</option>
                    <option value="zafiro">Línea Zafiro</option>
                    <option value="dorada">Línea Dorada</option>
                    <option value="onix">Línea Ónix</option>
                </select>
            </div>
            <div id="color-palette" class="color-palette-grid">
                <!-- Contenido cargado dinámicamente -->
            </div>
        </div>
    </div>
</section>
        <!-- Fin Sección Decorador -->

        <?php require '../bin/footer.php'; ?>
        <?php require '../bin/js.php'; ?>
        <!-- JavaScript minificado y al final del body -->
        <script src="script.min.js" defer></script>
    </div>
</body>
</html>