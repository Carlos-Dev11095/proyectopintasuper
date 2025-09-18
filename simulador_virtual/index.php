<?php $ROOT_PATH = '/proyectopintasuper'; ?>


<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Plantilla HTML 5 Ambed" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <?php include '../bin/css.php'; ?>


    <link rel="preload" href="styles.min.css" as="style">
    <link rel="preload" href="script.min.js" as="script">
    <link rel="preload" href="images/seleccione-escena.png" as="image">
    <link rel="preload" href="images/habitacion.png" as="image">
    <link rel="preload" href="images/sala.png" as="image">
    <link rel="preload" href="images/bano.png" as="image">
    <link rel="stylesheet" href="styles.min.css">

<style>
    .user-instructions-message {
        background-color: #f7f7f7;
        border-left: 5px solid #ff7f00; /* Borde naranja */
        padding: 20px;
        margin-bottom: 30px;
        border-radius: 4px;
        font-family: Arial, sans-serif;
        color: #333;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .user-instructions-message p {
        font-size: 1.2em;
        margin-top: 0;
    }

    .user-instructions-message ol {
        margin-bottom: 0;
        padding-left: 25px;
    }

    .user-instructions-message li {
        margin-bottom: 10px;
        line-height: 1.6;
    }

    .user-instructions-message .highlight-orange {
        color: #ff7f00; /* Naranja */
    }

    /* --- Soluciones para la superposición del footer --- */

    .decorator-simplified {
        /* Asegura que el contenedor del simulador tenga un mínimo de espacio */
        min-height: 80vh; /* Ajusta este valor si es necesario */
        position: relative;
    }
    
    .image-container {
        /* Permite que el contenedor se adapte a la altura de su contenido */
        min-height: 450px; /* Tamaño mínimo para evitar colapso */
        display: flex;
        justify-content: center; /* CENTRADO HORIZONTAL */
        align-items: center;     /* CENTRADO HORIZONTAL */
        flex-direction: column;
    }
    
    
    .room-image, .placeholder-image {
        display: block;
        max-width: 200%;
        height: auto;
    }
    

    .fab-container {
        position: absolute;
        bottom: 20px;
        left: 20px;
        z-index: 10;
        display: flex;
        gap: 10px;
    }
    
    .floating-panel {
        /* Asegura que los paneles flotantes estén por encima de otros elementos */
        position: absolute;
        bottom: 70px; /* Ajuste la posición para que no se sobreponga con los botones */
        left: 20px;
        z-index: 20;
    }
    
</style>

</head>


<body>

    <?php require '../bin/preloader.php'; ?>


    <div class="page-wrapper">
        <?php require '../bin/header.php'; ?>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>


        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>/">INICIO</a></li>
                        <li><span>/</span></li>
                        <li>Simulador Virtual</li>
                    </ul>
                     <h2 class="banner_title">SIMULADOR VIRTUAL</h2>
                </div>
            </div>
        </section>

        <div class="user-instructions-message">
            <p><strong class="highlight-orange">¡Bienvenido al Simulador Virtual Pintasuper!</strong></p>
            <ol>
                <li>Para empezar, haz clic en el botón de la esquina inferior izquierda <i class="fas fa-couch"></i> para <strong>seleccionar un ambiente</strong> (habitación, sala, etc.).</li>
                <li>Una vez que elijas tu ambiente, se activará el botón de la paleta <i class="fas fa-palette"></i>. Haz clic en él para <strong>elegir una línea de colores</strong> y ver todas las opciones disponibles.</li>
                <li>Finalmente, haz clic en cualquier color de la paleta para <strong>pintar la pared</strong> y ver cómo se vería en tu espacio.</li>
            </ol>
        </div>

        <section class="decorator-simplified">
            <div class="image-container">
                <div class="wall-container">
                    <div id="wall" class="wall"></div>
                    <img id="room-image" alt="Ambiente seleccionado" class="room-image">
                    <img id="placeholder-image" src="images/seleccione-escena.png" alt="Seleccione una escena" class="placeholder-image">
                </div>


                <div class="fab-container">
                    <button class="fab-decorator" id="room-selector-fab" title="Cambiar ambiente">
                        <i class="fas fa-couch"></i>
                    </button>
                    <button class="fab-decorator" id="color-selector-fab" title="Seleccionar color" disabled>
                        <i class="fas fa-palette"></i>
                    </button>
                </div>


                <div class="floating-panel" id="room-selector-panel">
                    <h3>Seleccionar Ambiente</h3>
                    <div class="room-options">
                        <div class="room-option" data-room="">
                            <i class="fas fa-times"></i> Selecciona escena
                        </div>
                        <div class="room-option" data-room="fachada">
                            <i class="fas fa-house"></i> Fachada
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
                        </div>
                </div>
            </div>
        </section>
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <?php require '../bin/footer.php'; ?>
        <?php require '../bin/js.php'; ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Datos de imágenes y colores
                const roomImages = {
                    habitacion: "images/habitacion.png",
                    sala: "images/sala.png",
                    bano: "images/bano.png",
                    fachada: "images/fachada.png"
                };
            
                //IMPORTANTE: Nombres temporales para Platino-Gold (solo etapa de prueba).
                //Pendiente aprobación de nombres oficiales.
                //Fecha: [9/7/2025]
            
                const colorPalettes = {
                    platino: [
                        {name: "PG-001", class: "color-platino-1"}, {name: "PG-002", class: "color-platino-2"},
                        {name: "PG-003", class: "color-platino-3"}, {name: "PG-004", class: "color-platino-4"},
                        {name: "PG-005", class: "color-platino-5"}, {name: "PG-006", class: "color-platino-6"},
                        {name: "PG-007", class: "color-platino-7"}, {name: "PG-008", class: "color-platino-8"},
                        {name: "PG-009", class: "color-platino-9"}, {name: "PG-010", class: "color-platino-10"},
                        {name: "PG-011", class: "color-platino-11"}, {name: "PG-012", class: "color-platino-12"},
                        {name: "PG-013", class: "color-platino-13"}
                    ],
                    zafiro: [
                        {name: "2000 BLANCO", class: "color-zafiro-1"}, {name: "2009 BLANCO OSTION", class: "color-zafiro-2"},
                        {name: "2019 BLANCO PERLA", class: "color-zafiro-3"}, {name: "2078 OSTION", class: "color-zafiro-4"},
                        {name: "2006 ANTE", class: "color-zafiro-5"}, {name: "2034 SALMON", class: "color-zafiro-6"},
                        {name: "2012 ROSA FRESCO", class: "color-zafiro-7"}, {name: "2023 ROSA CLAVEL", class: "color-zafiro-8"},
                        {name: "2016 LILA", class: "color-zafiro-9"}, {name: "2021 MORADO", class: "color-zafiro-10"},
                        {name: "2007 TURQUESA CLARO", class: "color-zafiro-11"}, {name: "2011 VERDE PISTACHE", class: "color-zafiro-12"},
                        {name: "2025 VERDE FRESCO", class: "color-zafiro-13"}, {name: "2035 TUCÁN", class: "color-zafiro-14"},
                        {name: "2017 VERDE MANZANA", class: "color-zafiro-15"}, {name: "2005 AZUL CASCADA", class: "color-zafiro-16"},
                        {name: "2001 MARFIL", class: "color-zafiro-17"}, {name: "2020 NAPOLITANO", class: "color-zafiro-18"},
                        {name: "2010 AMARILLO MEDIO", class: "color-zafiro-19"}, {name: "2013 AMARILLO ÓXIDO", class: "color-zafiro-20"},
                        {name: "2003 MAMEY", class: "color-zafiro-21"}, {name: "2015 MANDARINA", class: "color-zafiro-22"},
                        {name: "2024 NARANJA", class: "color-zafiro-23"}, {name: "2014 ROJO ÓXIDO", class: "color-zafiro-24"},
                        {name: "2002 AZUL OLIMPIA", class: "color-zafiro-25"}, {name: "2022 AZUL CARIBE", class: "color-zafiro-26"}
                    ],
                    dorada: [
                        {name: "4068 BURBUJA", class: "color-dorada-1"}, {name: "4071 AEROLITO", class: "color-dorada-2"},
                        {name: "4059 AZUL RIVERA", class: "color-dorada-3"}, {name: "4029 AZUL INTENSO", class: "color-dorada-4"},
                        {name: "4070 AZUCENA", class: "color-dorada-5"}, {name: "4075 GEMINS", class: "color-dorada-6"},
                        {name: "4074 ROSA ALEBRIJE", class: "color-dorada-7"}, {name: "4099 NEGRO", class: "color-dorada-8"},
                        {name: "4000 BLANCO", class: "color-dorada-9"}, {name: "4062 BLANCO PERLA", class: "color-dorada-10"},
                        {name: "4056 PAJA", class: "color-dorada-11"}, {name: "4040 OSTIÓN", class: "color-dorada-12"},
                        {name: "4066 VICENCA", class: "color-dorada-13"}, {name: "4019 ARENA", class: "color-dorada-14"},
                        {name: "4067 NUEZ", class: "color-dorada-15"}, {name: "4033 CANTERA", class: "color-dorada-16"},
                        {name: "4072 CARTAJENA", class: "color-dorada-17"}, {name: "4034 AMARILLO NAPOLITANO", class: "color-dorada-18"},
                        {name: "4013 MARFIL", class: "color-dorada-19"}, {name: "4012 CORAL", class: "color-dorada-20"},
                        {name: "4028 AMARILLO CANARIO", class: "color-dorada-21"}, {name: "4025 AMARILLO ÓXIDO", class: "color-dorada-22"},
                        {name: "4039 GRIS FRANCES", class: "color-dorada-23"}, {name: "4038 TANGERINA", class: "color-dorada-24"},
                        {name: "4023 ROJO LADRILLO", class: "color-dorada-25"}, {name: "4027 CAFÉ COCOA", class: "color-dorada-26"},
                        {name: "4018 NARANJA", class: "color-dorada-27"}, {name: "4030 ROJO", class: "color-dorada-28"},
                        {name: "4024 VERDE HOJA", class: "color-dorada-29"}, {name: "4065 APIO", class: "color-dorada-30"},
                        {name: "4073 TUCÁN", class: "color-dorada-31"}, {name: "4037 VERDE LIMÓN", class: "color-dorada-32"}
                    ],
                    onix: [
                        {name: "3008 AZUL CIELO", class: "color-onix-1"}, {name: "3004 VERDE LIMÓN", class: "color-onix-2"},
                        {name: "3005 TURQUESA", class: "color-onix-3"}, {name: "3017 AZUL VERDE", class: "color-onix-4"},
                        {name: "3043 ÁRBOL", class: "color-onix-5"}, {name: "3011 VERDE NATURAL", class: "color-onix-6"},
                        {name: "3020 VERDE", class: "color-onix-7"}, {name: "3099 NEGRO", class: "color-onix-8"},
                        {name: "3000 BLANCO", class: "color-onix-9"}, {name: "3001 BLANCO OSTIÓN", class: "color-onix-10"},
                        {name: "3801 OSTION", class: "color-onix-11"}, {name: "3007 MARFIL", class: "color-onix-12"},
                        {name: "3013 MAGNOLIA", class: "color-onix-13"}, {name: "3014 CREMA", class: "color-onix-14"},
                        {name: "3016 DURAZNO", class: "color-onix-15"}, {name: "3015 NAPOLITANO", class: "color-onix-16"},
                        {name: "3023 MANGO", class: "color-onix-17"}, {name: "3036 AMARILLO INTENSO", class: "color-onix-18"},
                        {name: "3018 CAFÉ CAPUCHINO", class: "color-onix-19"}, {name: "3042 AMARILLO ÓXIDO", class: "color-onix-20"},
                        {name: "3021 MANDARINA", class: "color-onix-21"}, {name: "3025 ROJO MEDIA LUNA", class: "color-onix-22"},
                        {name: "3034 CAFÉ", class: "color-onix-23"}, {name: "3044 TEJA", class: "color-onix-24"},
                        {name: "3019 ROJO", class: "color-onix-25"}, {name: "3009 SALMÓN", class: "color-onix-26"},
                        {name: "3003 FLAMINGO", class: "color-onix-27"}, {name: "3038 FIUSHA", class: "color-onix-28"},
                        {name: "3012 LILA MISTIK", class: "color-onix-29"}, {name: "3037 MORA", class: "color-onix-30"},
                        {name: "3022 AZUL REAL", class: "color-onix-31"}, {name: "3041 AZUL PALERMO", class: "color-onix-32"},
                        {name: "3002 AZUL MEDIO", class: "color-onix-33"}
                    ]
                };


                // Elementos del DOM
                const roomImage = document.getElementById("room-image");
                const wall = document.getElementById("wall");
                const roomSelectorFab = document.getElementById("room-selector-fab");
                const colorSelectorFab = document.getElementById("color-selector-fab");
                const roomSelectorPanel = document.getElementById("room-selector-panel");
                const colorSelectorPanel = document.getElementById("color-selector-panel");
                const paletteSelector = document.getElementById("palette-selector");
                const colorPalette = document.getElementById("color-palette");
                const roomOptions = document.querySelectorAll(".room-option");


                // Variables de estado
                let selectedColor = null;
                let currentPalette = null;
                let currentRoom = null;


                // Precargar imágenes
                function preloadImages() {
                    Object.values(roomImages).forEach(src => {
                        const img = new Image();
                        img.src = src;
                    });
                }


                // Mostrar paleta de colores
                function showColorPalette(palette) {
                    if (!palette || !colorPalettes[palette]) {
                        colorPalette.innerHTML = '';
                        colorPalette.style.display = 'none';
                        currentPalette = null;
                        return;
                    }


                    currentPalette = palette;
                    const colors = colorPalettes[palette];
                    let html = '';


                    colors.forEach(color => {
                        html += `
                            <div class="color-swatch ${color.class}" data-color="${color.class}">
                                <span class="color-tooltip">${color.name}</span>
                            </div>
                        `;
                    });


                    colorPalette.innerHTML = html;
                    colorPalette.style.display = 'grid';
                }
                
                // Cargar una imagen de ambiente
                function loadRoomImage(room) {
                    currentRoom = room;
                    const placeholderImage = document.getElementById("placeholder-image");


                    if (!room) {
                        // Resetear cuando se selecciona "Selecciona escena"
                        roomImage.style.display = "none";
                        roomImage.removeAttribute('src');
                        wall.style.backgroundColor = "transparent";
                        selectedColor = null;
                        colorSelectorFab.disabled = true;
                        paletteSelector.value = "";
                        showColorPalette(""); // Limpiar paleta de colores
                        colorSelectorPanel.style.display = "none";
                        
                        // Mostrar placeholder
                        placeholderImage.style.display = "block";
                        return;
                    }


                    // Ocultar placeholder cuando hay una imagen seleccionada
                    placeholderImage.style.display = "none";
                    
                    roomImage.onload = function() {
                        this.style.display = "block";
                        adjustImageSize();
                        colorSelectorFab.disabled = false;
                    };
                    roomImage.onerror = function() {
                        this.style.display = "none";
                        colorSelectorFab.disabled = true;
                    };
                    
                    roomImage.src = roomImages[room];
                }


                // Ajustar tamaño de imagen
                function adjustImageSize() {
                    const img = roomImage;
                    const wallElement = wall;
                    const placeholderImg = document.getElementById("placeholder-image");
                    
                    if (img.src && img.complete) {
                        const renderedWidth = img.clientWidth;
                        const renderedHeight = img.clientHeight;
                        
                        wallElement.style.width = `${renderedWidth}px`;
                        wallElement.style.height = `${renderedHeight}px`;
                        
                        wallElement.style.position = 'absolute';
                        wallElement.style.left = '50%';
                        wallElement.style.top = '50%';
                        wallElement.style.transform = 'translate(-50%, -50%)';
                    }
                    
                    if (placeholderImg.style.display === 'block') {
                        placeholderImg.style.left = '50%';
                        placeholderImg.style.top = '50%';
                        placeholderImg.style.transform = 'translate(-50%, -50%)';
                    }
                }


                // Cerrar todos los paneles
                function closeAllPanels() {
                    roomSelectorPanel.style.display = 'none';
                    colorSelectorPanel.style.display = 'none';
                }


                // Event listeners
                roomSelectorFab.addEventListener('click', function(e) {
                    e.stopPropagation();
                    if (roomSelectorPanel.style.display === 'block') {
                        roomSelectorPanel.style.display = 'none';
                    } else {
                        closeAllPanels();
                        roomSelectorPanel.style.display = 'block';
                    }
                });


                colorSelectorFab.addEventListener('click', function(e) {
                    if (colorSelectorFab.disabled) return;
                    
                    e.stopPropagation();
                    if (colorSelectorPanel.style.display === 'block') {
                        colorSelectorPanel.style.display = 'none';
                    } else {
                        closeAllPanels();
                        colorSelectorPanel.style.display = 'block';
                        // Solo mostrar paleta si hay una selección válida
                        if (paletteSelector.value && colorPalettes[paletteSelector.value]) {
                            showColorPalette(paletteSelector.value);
                        } else {
                            colorPalette.style.display = 'none';
                        }
                    }
                });


                // **DELEGACIÓN DE EVENTOS PARA LOS COLORES DE LA PALETA**
                colorPalette.addEventListener('click', function(e) {
                    const swatch = e.target.closest('.color-swatch');
                    if (swatch) {
                        selectedColor = window.getComputedStyle(swatch).backgroundColor;
                        wall.style.backgroundColor = selectedColor;
                        closeAllPanels();
                    }
                });


                // Seleccionar ambiente
                roomOptions.forEach(option => {
                    option.addEventListener('click', function() {
                        const room = this.dataset.room;
                        loadRoomImage(room);
                        roomSelectorPanel.style.display = 'none';
                    });
                });


                // Seleccionar paleta de colores
                paletteSelector.addEventListener('change', function() {
                    showColorPalette(this.value);
                });


                // Cerrar paneles al hacer clic fuera
                document.addEventListener('click', function(e) {
                    if (!roomSelectorPanel.contains(e.target) && !roomSelectorFab.contains(e.target)) {
                        roomSelectorPanel.style.display = 'none';
                    }
                    
                    if (!colorSelectorPanel.contains(e.target) && !colorSelectorFab.contains(e.target)) {
                        colorSelectorPanel.style.display = 'none';
                    }
                });


                // Manejar redimensionamiento
                window.addEventListener('resize', function() {
                    if (currentRoom) {
                        adjustImageSize();
                    }
                });


                // Inicialización
                function init() {
                    preloadImages();
                    closeAllPanels();
                    roomImage.style.display = "none";
                    roomImage.removeAttribute('src');
                    colorSelectorFab.disabled = true;
                    colorPalette.style.display = 'none';
                }
                
                init();
            });
        </script>
        </div>
</body>
</html>
