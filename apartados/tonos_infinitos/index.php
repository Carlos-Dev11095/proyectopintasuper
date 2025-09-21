<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tonos Infinitos - Pintasuper</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Descubre nuestra gama infinita de colores y servicio de igualación personalizado - Pintasuper" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    
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
        
        /* --- AJUSTES PARA UNA GALERÍA MÁS COMPACTA Y HORIZONTAL --- */
        .color-grid {
            /* Contenedor principal para todas las líneas de color */
            display: flex;
            justify-content: center;
            flex-wrap: wrap; /* Permite que los elementos se envuelvan a la siguiente línea si no hay espacio */
            gap: 20px;
            margin-bottom: 60px; /* Separación entre la galería y la siguiente sección */
        }
        
        .color-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            cursor: pointer; /* Agrega un cursor de puntero para indicar que se puede hacer clic */
            
            /* Hacemos los elementos más pequeños */
            flex: 1 1 200px; /* Crece, se encoge, y tiene un tamaño base de 200px */
            max-width: 250px; /* Tamaño máximo para escritorio */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
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
        }

        .color-item__name {
            font-weight: 600;
            margin: 0;
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
                flex-direction: column;
                align-items: center;
            }
            
            .color-item {
                max-width: 100%;
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

        /* --- Estilos para el Modal de Imagen --- */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed; /* Fijo en la pantalla */
            z-index: 1000; /* Por encima de todo */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            animation: fadeIn 0.3s;
            display: flex; /* Lo mantenemos en flex para centrar */
            align-items: center;
            justify-content: center;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            display: block;
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            /* Eliminamos 'position: absolute' y 'transform' ya que Flexbox lo centra */
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
            z-index: 1001;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* Estilos para las flechas de navegación */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo para mayor visibilidad */
            z-index: 1001; /* Asegura que estén por encima de la imagen */
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev {
            left: 0;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Responsive para las flechas en móviles */
        @media (max-width: 767px) {
            .prev, .next {
                padding: 10px;
                font-size: 16px;
                margin-top: -30px; /* Ajuste para el centrado vertical en móvil */
            }
        }
    </style>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/css.php'; ?>
</head>

<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/preloader.php'; ?>

    <div class="page-wrapper">
        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

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
        <section class="color-gallery section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Nuestras Líneas de Color</h2>
                    <p class="section-title__text">Explora nuestras exclusivas colecciones cromáticas</p>
                </div>
                
                <div class="color-grid">

                    <div class="color-item">
                        <div class="color-item__info">
                            <h4 class="color-item__name">Línea Dorada</h4>
                        </div>
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/DORADA_COLORES.png" alt="Tonos de Línea Dorada" class="color-item__img" data-index="0">
                    </div>
                    
                    <div class="color-item">
                        <div class="color-item__info">
                            <h4 class="color-item__name">Línea Onix</h4>
                        </div>
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/ONIX_COLORES.png" alt="Tonos de Línea Onix" class="color-item__img" data-index="1">
                    </div>
                    
                    <div class="color-item">
                        <div class="color-item__info">
                            <h4 class="color-item__name">Línea Platino Gold</h4>
                        </div>
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/PLATINO GOLD_COLORES.png" alt="Tonos de Línea Platino Gold" class="color-item__img" data-index="2">
                    </div>
                    
                    <div class="color-item">
                        <div class="color-item__info">
                            <h4 class="color-item__name">Línea Zafiro</h4>
                        </div>
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/tonos_infinitos/ZAFIRO_COLORES.png" alt="Tonos de Línea Zafiro" class="color-item__img" data-index="3">
                    </div>
                </div>
            </div>
        </section>
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
        <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/footer.php'; ?>
    </div>

    <div id="myModal" class="modal">
        <span class="close" id="closeModalBtn">&times;</span>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <img class="modal-content" id="img01">
    </div>

    <script>
        const modal = document.getElementById("myModal");
        const modalImg = document.getElementById("img01");
        const closeModalBtn = document.getElementById("closeModalBtn");
        
        // Obtener todas las imágenes con la clase 'color-item__img'
        const galleryImages = document.querySelectorAll('.color-item__img');
        let currentImageIndex;

        // Asignar event listeners a cada imagen para abrir el modal
        galleryImages.forEach((image, index) => {
            image.setAttribute('data-index', index); // Asegurarse de que cada imagen tenga un índice
            image.addEventListener('click', function() {
                openModal(this);
            });
        });

        function openModal(imageElement) {
            modal.style.display = "flex";
            currentImageIndex = parseInt(imageElement.getAttribute('data-index'));
            showSlide(currentImageIndex);
        }

        function showSlide(index) {
            if (index >= galleryImages.length) {
                currentImageIndex = 0;
            } else if (index < 0) {
                currentImageIndex = galleryImages.length - 1;
            }
            modalImg.src = galleryImages[currentImageIndex].src;
        }

        function plusSlides(n) {
            showSlide(currentImageIndex += n);
        }

        closeModalBtn.onclick = function() {
            modal.style.display = "none";
        }

        modal.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }

        // Navegación con teclado (opcional)
        document.addEventListener('keydown', function(event) {
            if (modal.style.display === "flex") { // Solo si el modal está abierto
                if (event.key === "ArrowLeft") {
                    plusSlides(-1);
                } else if (event.key === "ArrowRight") {
                    plusSlides(1);
                } else if (event.key === "Escape") {
                    modal.style.display = "none";
                }
            }
        });

    </script>
    <?php include $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/bin/js.php'; ?>
</body>
</html>