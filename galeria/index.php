<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galería de Productos || Pintasuper</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Descubre nuestra completa línea de pinturas y recubrimientos de alta calidad" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <?php include_once __DIR__ . '/../bin/css.php'; ?>

    <style>
        :root {
            --primary-color: #2a5f8b;
            --secondary-color: #f7931e; /* Color naranja */
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        
        /* Estilos para la galería de productos */
        .gallery-page {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .page-header__inner h2 {
            font-size: 2.5rem;
            color: var(--secondary-color);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .gallery-page__single {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: var(--transition);
            background: white;
        }
        
        .gallery-page__single:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .gallery-page__img {
            position: relative;
            overflow: hidden;
            height: 250px;
        }
        
        .gallery-page__img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }
        
        .gallery-page__single:hover .gallery-page__img img {
            transform: scale(1.05);
        }
        
        .gallery-page__overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            opacity: 1;
        }
        
        .gallery-page__title {
            color: var(--secondary-color); /* Cambiado a naranja */
            margin-bottom: 10px;
            text-align: center;
        }
        
.gallery-page__title h3 {
    margin: 0;
    font-size: 20px; /* Tamaño ligeramente aumentado */
    font-weight: 700; /* Negrita */
    color: var(--secondary-color); /* ¡Aquí se aplica el color naranja! */
    text-shadow: 2px 2px 4px rgba(0,0,0,0.8); /* Sombra más pronunciada */
    letter-spacing: 0.5px;
    padding: 5px 10px;
    background-color: rgba(0,0,0,0.5); /* Fondo semitransparente */
    border-radius: 4px;
    display: inline-block;
}
        
        .gallery-page__icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            opacity: 0;
            transition: var(--transition);
        }
        
        .gallery-page__single:hover .gallery-page__icon {
            opacity: 1;
        }
        
        .gallery-page__icon:hover {
            background: var(--secondary-color); /* Naranja al hacer hover */
            color: white;
        }
        
        @media (max-width: 767px) {
            .gallery-page__img {
                height: 200px;
            }
            
            .gallery-page__title h3 {
                font-size: 18px;
            }
        }
    </style>
</head>

<body class="custom-cursor">
    <!-- [Resto del código anterior (header, preloader, etc.) permanece igual] -->
    
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>Productos </li>
                </ul>
                <h2>Nuestros Productos</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Gallery Page Start-->
    <section class="gallery-page">
        <div class="container">
            <div class="row">
                <?php
                $imagenes = [
                    'dorada.png',
                    'dorada_19.png',
                    'imper_multi_premium.png',
                    'imper_multi_pro_fibrantado.png',
                    'impertek_19.png',
                    'kivi_forte_19.png',
                    'kiviforte.png',
                    'onix.png',
                    'onix_19.png',
                    'platino_gold.png',
                    'super_rap_ultra.png',
                    'superrap.png',
                    'zafiro.png',
                    'zafiro_19.png'
                ];

                foreach ($imagenes as $imagen) {
                    // Extraer el nombre para mostrar (sin extensión y con formato)
                    $nombreMostrar = ucfirst(str_replace(['_', '.png'], [' ', ''], pathinfo($imagen, PATHINFO_FILENAME)));
                    
                    echo '
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="'.$ROOT_PATH.'/assets/images/gallery/productos/'.$imagen.'" alt="'.$nombreMostrar.'">
                                <div class="gallery-page__overlay">
                                    <div class="gallery-page__title">
                                        <h3>'.$nombreMostrar.'</h3>
                                    </div>
                                </div>
                                <div class="gallery-page__icon">
                                    <a class="img-popup" href="'.$ROOT_PATH.'/assets/images/gallery/productos/'.$imagen.'" title="'.$nombreMostrar.'">
                                        <span class="icon-plus-symbol"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </section>
    <!--Gallery Page End-->

    <!-- [Resto del código (footer, scripts, etc.) permanece igual] -->
    <?php include_once __DIR__ . '/../bin/footer.php'; ?>
    <?php include_once __DIR__ . '/../bin/js.php'; ?>
</body>
</html>