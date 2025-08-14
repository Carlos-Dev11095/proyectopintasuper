<?php 
// Configuración de rutas
$ROOT_PATH = '/proyectopintasuper';
$IMAGE_DIR = $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/assets/images/gallery/productos/';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galería de Productos || Pintasuper</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Descubre nuestra completa línea de pinturas y recubrimientos de alta calidad" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <?php include_once __DIR__ . '/../bin/css.php'; ?>

    <style>
        :root {
            --primary-color: #2a5f8b;
            --secondary-color: #f7931e;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            --color-brand: #fd4e01;
            --color-brand-dark: #000082;
        }

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
            margin-bottom: 10px;
        }

        .page-header__subtitle {
            color: var(--color-brand);
            font-size: 1.2rem;
            font-weight: 500;
        }

        .gallery-page__single {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: var(--transition);
            background: white;
            padding-bottom: 15px;
            border-top: 4px solid var(--color-brand);
            margin-left: 10px;
            margin-right: 10px;
            width: calc(100% - 20px);
        }

        .gallery-page__single:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .gallery-page__img {
            position: relative;
            overflow: hidden;
            height: 280px;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-page__img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            transition: var(--transition);
            padding: 20px;
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

        .gallery-page__title h3 {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            color: var(--secondary-color);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
            letter-spacing: 0.5px;
            padding: 5px 10px;
            background-color: rgba(0,0,0,0.5);
            border-radius: 4px;
            display: inline-block;
        }

        .product-details {
            text-align: center;
            padding: 20px 15px 0;
        }

        .product-price {
            font-size: 1.4em;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 5px;
        }

        .product-price small {
            font-size: 0.7em;
            color: #666;
            display: block;
        }

        .product-price-gal {
            font-size: 1.1em;
            color: var(--color-brand-dark);
            margin-bottom: 10px;
            font-weight: 600;
        }

        .product-price-gal small {
            font-size: 0.7em;
            color: #666;
        }

        .product-technical {
            font-size: 0.9em;
            color: #666;
            margin-top: 10px;
            text-align: left;
            padding: 0 15px;
            max-height: 180px;
            overflow-y: auto;
        }

        .product-technical p {
            margin: 5px 0;
            line-height: 1.4;
            border-bottom: 1px dashed #eee;
            padding-bottom: 5px;
        }

        .product-technical strong {
            color: var(--primary-color);
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
            z-index: 2;
        }

        .gallery-page__single:hover .gallery-page__icon {
            opacity: 1;
        }

        .gallery-page__icon:hover {
            background: var(--secondary-color);
            color: white;
        }

        .gallery-wrapper {
            display: flex;
            gap: 30px;
        }

        .sidebar {
            flex: 0 0 240px;
            max-width: 240px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            border-top: 4px solid var(--color-brand);
        }

        .sidebar-widget {
            margin-bottom: 30px;
        }

        .sidebar-widget h4 {
            font-size: 1.5rem;
            color: var(--dark-color);
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            color: var(--color-brand-dark);
        }

        .sidebar-search input[type="text"] {
            width: calc(100% - 60px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        .sidebar-search button {
            width: 50px;
            padding: 10px;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .price-filter .price-range {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .price-filter .price-range span {
            font-weight: 600;
            color: var(--primary-color);
        }

        .price-filter .filter-button {
            background-color: var(--color-brand-dark);
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            transition: var(--transition);
        }

        .price-filter .filter-button:hover {
            background-color: var(--color-brand);
        }

        .categories-list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .categories-list li {
            margin-bottom: 10px;
        }

        .categories-list a {
            display: block;
            padding: 8px 10px;
            color: var(--dark-color);
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .categories-list a:hover,
        .categories-list a.active {
            background-color: var(--color-brand);
            color: white;
        }
        
        .main-content {
            flex-grow: 1;
            padding-left: 15px;
            padding-right: 15px;
        }

        .product-header-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 15px 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            border-top: 4px solid var(--color-brand-dark);
        }

        .product-header-controls .results-count {
            font-size: 1.1em;
            color: #555;
        }

        .product-header-controls .sort-by select {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fefefe;
            font-size: 1em;
            color: #555;
        }

        .image-not-found {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: #666;
            font-size: 1.2em;
            text-align: center;
            padding: 20px;
        }
        
        .image-not-found i {
            font-size: 3em;
            margin-bottom: 15px;
            color: #ccc;
        }

        /* Estilos para el lightbox - CORRECCIONES */
        .mfp-wrap {
            z-index: 1042 !important;
        }

        .mfp-container {
            padding: 0 15px !important;
        }

        .mfp-content {
            z-index: 1045 !important;
        }

        .mfp-figure:after {
            box-shadow: none !important;
            background: none !important;
        }

        /* Animaciones más suaves */
        .mfp-zoom-in .mfp-content {
            opacity: 0;
            transition: all 0.3s ease-out;
            transform: scale(0.95);
        }

        .mfp-zoom-in.mfp-ready .mfp-content {
            opacity: 1;
            transform: scale(1);
        }

        .mfp-zoom-in.mfp-removing .mfp-content {
            opacity: 0;
            transform: scale(0.95);
        }

        /* Asegurar que las imágenes no se superpongan */
        .mfp-img {
            padding: 0;
            max-height: calc(100vh - 150px);
        }

        .mfp-figure {
            line-height: 0;
        }

        .mfp-bottom-bar {
            margin-top: 10px;
        }

        .mfp-title {
            text-align: left;
            padding: 10px 0;
            margin-top: 10px;
            line-height: 1.5;
        }
        
        .mfp-title h3 {
            color: var(--secondary-color);
            margin-bottom: 5px;
            font-size: 1.5em;
            line-height: 1.2;
            padding: 0;
            background: none;
            text-shadow: none;
            display: block;
        }

        .mfp-counter {
            color: #fff !important;
        }

        @media (max-width: 991px) {
            .gallery-wrapper {
                flex-direction: column;
            }
            .sidebar {
                flex: none;
                width: 100%;
                max-width: 100%;
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 767px) {
            .gallery-page__img {
                height: 200px;
            }
            
            .gallery-page__title h3 {
                font-size: 18px;
            }
            .product-header-controls {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            /* Ajustes para mobile en el lightbox */
            .mfp-container {
                padding: 0 8px !important;
            }
            
            .mfp-img {
                max-height: calc(100vh - 100px);
            }
            
            .mfp-close {
                font-size: 30px;
                right: 5px;
                top: 5px;
            }
        }

        .color-box {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 1px solid #ddd;
        }

        .color-box.primary {
            background-color: #fd4e01;
        }

        .color-box.secondary {
            background-color: #000082;
        }
    </style>
</head>

<body class="custom-cursor">
    <?php require_once __DIR__ . '/../bin/header.php'; ?>

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg);"></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                    <li><span>/</span></li>
                    <li>Productos</li>
                </ul>
                <h2>Nuestros Productos</h2>
            </div>
        </div>
    </section>
    
    <section class="gallery-page">
        <div class="container">
            <div class="gallery-wrapper">
                <div class="sidebar">
                    <div class="sidebar-widget sidebar-search">
                        <div style="display: flex; align-items: center;">
                            <input type="text" placeholder="Buscar producto..." id="searchInput">
                            <button type="submit" id="searchButton"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    
                    <div class="sidebar-widget price-filter">
                        <h4>Filtrar por Precio</h4>
                        <div class="price-range">
                            <span>$500</span>
                            <input type="range" min="500" max="3500" value="3500" class="slider" id="priceRange">
                            <span>$3,500</span>
                        </div>
                        <div class="current-range" id="currentRange">Hasta: $3,500</div>
                        <button class="filter-button" id="filterButton">Aplicar Filtro</button>
                    </div>

                    <div class="sidebar-widget categories-list">
                        <h4>Categorías</h4>
                        <ul>
                            <li><a href="#" class="active category-filter" data-category="all">Todas las categorías</a></li>
                            <li><a href="#" class="category-filter" data-category="pinturas-arquitectónicas">Pinturas Arquitectónicas</a></li>
                            <li><a href="#" class="category-filter" data-category="impermeabilizantes">Impermeabilizantes</a></li>
                            <li><a href="#" class="category-filter" data-category="esmaltes">Esmaltes</a></li>
                        </ul>
                    </div>
                </div>

                <div class="main-content">
                    <div class="product-header-controls">
                        <span class="results-count" id="resultsCount">Mostrando 9 productos</span>
                        <div class="sort-by">
                            <label for="sort">Ordenar por:</label>
                            <select id="sort">
                                <option value="popular">Más populares</option>
                                <option value="price_asc">Precio: Menor a Mayor</option>
                                <option value="price_desc">Precio: Mayor a Menor</option>
                                <option value="duration">Mayor duración</option>
                            </select>
                        </div>
                    </div>

                    <div class="row" id="productsContainer">
                        <?php
                        $productos = [
                            // PINTURAS ARQUITECTÓNICAS - DORADA
                            [
                                'imagen' => 'dorada_19_litros.png',
                                'nombre' => 'Dorada',
                                'precio' => 2025,
                                'precio_galon' => null,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'presentacion' => 'Cubeta 19L',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de gran desempeño para superficies interiores y exteriores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores disponibles' => '32 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '7-9 m² por litro',
                                    'Duración' => '7 años',
                                    'Acabado' => 'Mate'
                                ]
                            ],
                            [
                                'imagen' => 'dorada_galon.png',
                                'nombre' => 'Dorada',
                                'precio' => 477,
                                'precio_galon' => null,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'presentacion' => 'Galón',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de gran desempeño para superficies interiores y exteriores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '32 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '7-9 m² por litro',
                                    'Duración' => '7 años',
                                    'Acabado' => 'Mate'
                                ]
                            ],

                            // IMPERMEABILIZANTES
                            [
                                'imagen' => 'imper_multi_premium_19_litros.png',
                                'nombre' => 'Imper Multi Premium',
                                'precio' => 2391,
                                'precio_galon' => 546,
                                'tipo' => 'impermeabilizante',
                                'categoria' => 'Impermeabilizantes',
                                'presentacion' => 'Cubeta 19L',
                                'presentacion_galon' => 'Galón',
                                'descripcion' => 'Impermeabilizante premium con resistencia de 7 años.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Precio por galón' => '$546',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Resistencia' => '7 años'
                                ]
                            ],
                            [
                                'imagen' => 'imper_multi_pro_fibrantado_19_litros.png',
                                'nombre' => 'Imper Multi Pro Fibrantado',
                                'precio' => 2120,
                                'precio_galon' => 546,
                                'tipo' => 'impermeabilizante',
                                'categoria' => 'Impermeabilizantes',
                                'presentacion' => 'Cubeta 19L',
                                'presentacion_galon' => 'Galón',
                                'descripcion' => 'Impermeabilizante fibrantado color terracota.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Precio por galón' => '$546',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Resistencia' => '10 años'
                                ]
                            ],
                            [
                                'imagen' => 'impertek_19_litros.png',
                                'nombre' => 'Imper-Tek',
                                'precio' => 1300,
                                'precio_galon' => null,
                                'tipo' => 'impermeabilizante',
                                'categoria' => 'Impermeabilizantes',
                                'presentacion' => 'Cubeta 19L',
                                'descripcion' => 'Impermeabilizante elaborado a base de resinas.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Resistencia' => '5 años'
                                ]
                            ],

                            // ESMALTES - KIVI FORTE
                            [
                                'imagen' => 'kivi_forte_19_litros.png',
                                'nombre' => 'Kivi Forte',
                                'precio' => 3090,
                                'precio_galon' => 702,
                                'tipo' => 'esmalte',
                                'categoria' => 'Esmaltes',
                                'presentacion' => 'Cubeta 19L',
                                'presentacion_galon' => 'Galón',
                                'descripcion' => 'Esmalte alquídico anticorrosivo de excelente rendimiento.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Precio por galón' => '$702',
                                    'Colores disponibles' => '19 colores',
                                    'Tiempo de secado' => '4 horas al tacto'
                                ]
                            ],
                            [
                                'imagen' => 'kivi_forte_galon.png',
                                'nombre' => 'Kivi Forte',
                                'precio' => 702,
                                'precio_galon' => null,
                                'tipo' => 'esmalte',
                                'categoria' => 'Esmaltes',
                                'presentacion' => 'Galón',
                                'descripcion' => 'Esmalte alquídico anticorrosivo de excelente rendimiento.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '19 colores',
                                    'Tiempo de secado' => '4 horas al tacto'
                                ]
                            ],

                            // PINTURAS ARQUITECTÓNICAS - ONIX
                            [
                                'imagen' => 'onix_19_litros.png',
                                'nombre' => 'Onix',
                                'precio' => 1458,
                                'precio_galon' => null,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'presentacion' => 'Cubeta 19L',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de buen desempeño.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores disponibles' => '33 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Duración' => '4 años'
                                ]
                            ],
                            [
                                'imagen' => 'onix_galon.png',
                                'nombre' => 'Onix',
                                'precio' => 335,
                                'precio_galon' => null,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'presentacion' => 'Galón',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de buen desempeño.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '33 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Duración' => '4 años'
                                ]
                            ],

                            // PINTURAS ARQUITECTÓNICAS - PLATINO GOLD
                            [
                                'imagen' => 'platino_gold_19_litros.png',
                                'nombre' => 'Platino Gold',
                                'precio' => 2992,
                                'precio_galon' => 640,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'presentacion' => 'Cubeta 19L',
                                'presentacion_galon' => 'Galón',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de categoría Premium.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Precio por galón' => '$640',
                                    'Colores disponibles' => '13 colores',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Duración' => '10-12 años'
                                ]
                            ],
                            [
                                'imagen' => 'platino_gold_galon.png',
                                'nombre' => 'Platino Gold',
                                'precio' => 640,
                                'precio_galon' => null,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'presentacion' => 'Galón',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de categoría Premium.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '13 colores',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Duración' => '10-12 años'
                                ]
                            ],

                            // ESMALTES - SUPER RAP
                            [
                                'imagen' => 'super_rap_ultra_19_litros.png',
                                'nombre' => 'Super Rap Ultra',
                                'precio' => 3254.99,
                                'precio_galon' => 734,
                                'tipo' => 'esmalte',
                                'categoria' => 'Esmaltes',
                                'presentacion' => 'Cubeta 19L',
                                'presentacion_galon' => 'Galón',
                                'descripcion' => 'Esmalte alquidálico modificado con estireno de secado rápido.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Precio por galón' => '$734',
                                    'Colores disponibles' => '25 colores',
                                    'Tiempo de secado' => '10 minutos al tacto'
                                ]
                            ],
                            [
                                'imagen' => 'superrap_galon.png',
                                'nombre' => 'Super Rap',
                                'precio' => 734,
                                'precio_galon' => null,
                                'tipo' => 'esmalte',
                                'categoria' => 'Esmaltes',
                                'presentacion' => 'Galón',
                                'descripcion' => 'Esmalte alquidálico modificado con estireno de secado rápido.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '25 colores',
                                    'Tiempo de secado' => '10 minutos al tacto'
                                ]
                            ],

                            // PINTURAS ARQUITECTÓNICAS - ZAFIRO
                            [
                                'imagen' => 'zafiro_19_litros.png',
                                'nombre' => 'Zafiro',
                                'precio' => 733,
                                'precio_galon' => null,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'presentacion' => 'Cubeta 19L',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica para interiores.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores disponibles' => '26 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Duración' => '2 años'
                                ]
                            ],
                            [
                                'imagen' => 'zafiro_galon.png',
                                'nombre' => 'Zafiro',
                                'precio' => 184,
                                'precio_galon' => null,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'presentacion' => 'Galón',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica para interiores.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '26 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Duración' => '2 años'
                                ]
                            ]
                        ];

                        foreach ($productos as $producto) {
                            $nombreMostrar = $producto['nombre'];
                            $precioFormateado = number_format($producto['precio'], 2);
                            $precioGalonFormateado = isset($producto['precio_galon']) ? number_format($producto['precio_galon'], 2) : 'N/A';
                            $imagenPath = $ROOT_PATH . '/assets/images/gallery/productos/' . $producto['imagen'];
                            $imagenExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $imagenPath);
                            
                            // Generar detalles técnicos
                            $detallesTecnicos = '';
                            foreach ($producto['detalles'] as $key => $value) {
                                $detallesTecnicos .= "<p><strong>$key:</strong> $value</p>";
                            }
                            
                            // Extraer duración/resistencia para filtrado
                            $duracion = 0;
                            if (isset($producto['detalles']['Duración'])) {
                                $duracion = intval($producto['detalles']['Duración']);
                            } elseif (isset($producto['detalles']['Resistencia'])) {
                                $duracion = intval($producto['detalles']['Resistencia']);
                            }
                            
                            echo '
                            <div class="col-xl-4 col-lg-6 col-md-6 product-item" 
                                 data-category="'.strtolower(str_replace(' ', '-', $producto['categoria'])).'" 
                                 data-price="'.$producto['precio'].'" 
                                 data-duration="'.$duracion.'"
                                 data-name="'.strtolower($producto['nombre']).'">
                                <div class="gallery-page__single">
                                    <div class="gallery-page__img">';
                                    
                            if ($imagenExists) {
                                echo '<img src="'.$imagenPath.'" alt="'.$nombreMostrar.'">';
                            } else {
                                echo '<div class="image-not-found">
                                        <i class="fas fa-image"></i>
                                        <div>Imagen no disponible</div>
                                        <small>'.$producto['imagen'].'</small>
                                      </div>';
                            }
                            
                            echo '      <div class="gallery-page__overlay">
                                            <div class="gallery-page__title">
                                                <h3>'.$nombreMostrar.'</h3>
                                            </div>
                                        </div>
                                        <div class="gallery-page__icon">
                                            <a class="img-popup" href="'.($imagenExists ? $imagenPath : '#').'" 
                                               title="'.$nombreMostrar.'" 
                                               data-caption="<h3>'.$nombreMostrar.'</h3><p>'.$producto['descripcion'].'</p>'.$detallesTecnicos.'">
                                                <span class="icon-plus-symbol"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <div class="product-price">$'.$precioFormateado.' <small>'.$producto['presentacion'].'</small></div>';
                                        
                            if (isset($producto['presentacion_galon'])) {
                                echo '<div class="product-price-gal">$'.$precioGalonFormateado.' <small>'.$producto['presentacion_galon'].'</small></div>';
                            }
                                        
                            echo '      <div class="product-technical">
                                            '.$detallesTecnicos.'
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once __DIR__ . '/../bin/footer.php'; ?>
    <?php include_once __DIR__ . '/../bin/js.php'; ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Limpiar cualquier instancia previa antes de inicializar
            if ($.magnificPopup.instance) {
                $.magnificPopup.close();
            }

            // Inicializar popup de imágenes con configuración mejorada
            $('.img-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        // Usar el atributo data-caption para el título
                        return item.el.attr('data-caption');
                    }
                },
                gallery: {
                    enabled: true, // Habilitar modo galería
                    navigateByImgClick: true,
                    preload: [0,2] // Precargar imágenes adyacentes
                },
                zoom: {
                    enabled: true,
                    duration: 300
                },
                removalDelay: 300, // Retraso para la animación de eliminación
                fixedContentPos: true, // Posición fija del contenido
                callbacks: {
                    beforeOpen: function() {
                        // Limpiar cualquier instancia previa
                        this.st.mainClass = this.st.el.attr('data-effect');
                    },
                    open: function() {
                        // Forzar redibujado para evitar superposiciones
                        $.magnificPopup.instance.updateItemHTML();
                    },
                    close: function() {
                        // Limpiar al cerrar
                        $.magnificPopup.instance.wrap.removeAttr('style');
                    },
                    change: function() {
                        // Limpiar al cambiar de imagen
                        $.magnificPopup.instance.wrap.removeAttr('style');
                    }
                }
            });
            
            // Actualizar rango de precios
            $('#priceRange').on('input', function() {
                const value = $(this).val();
                $('#currentRange').text('Hasta: $' + parseInt(value).toLocaleString());
            });
            
            // Filtrado por categoría
            $('.category-filter').click(function(e) {
                e.preventDefault();
                $('.category-filter').removeClass('active');
                $(this).addClass('active');
                
                const category = $(this).data('category');
                filterProducts();
            });
            
            // Filtrado por precio
            $('#filterButton').click(function() {
                filterProducts();
            });
            
            // Búsqueda de productos
            $('#searchButton').click(function() {
                filterProducts();
            });
            
            $('#searchInput').keyup(function(e) {
                if (e.key === 'Enter') {
                    filterProducts();
                }
            });
            
            // Ordenar productos
            $('#sort').change(function() {
                sortProducts();
            });
            
            function filterProducts() {
                const maxPrice = parseInt($('#priceRange').val());
                const searchTerm = $('#searchInput').val().toLowerCase();
                const activeCategory = $('.category-filter.active').data('category');
                
                let visibleCount = 0;
                
                $('.product-item').each(function() {
                    const price = parseFloat($(this).data('price'));
                    const name = $(this).data('name');
                    const category = $(this).data('category');
                    
                    const matchesPrice = price <= maxPrice;
                    const matchesSearch = name.includes(searchTerm) || searchTerm === '';
                    const matchesCategory = activeCategory === 'all' || category === activeCategory;
                    
                    if (matchesPrice && matchesSearch && matchesCategory) {
                        $(this).show();
                        visibleCount++;
                    } else {
                        $(this).hide();
                    }
                });
                
                $('#resultsCount').text('Mostrando ' + visibleCount + ' productos');
                sortProducts();
            }
            
            function sortProducts() {
                const sortBy = $('#sort').val();
                const $container = $('#productsContainer');
                const $items = $('.product-item:visible');
                
                $items.sort(function(a, b) {
                    const aPrice = parseFloat($(a).data('price'));
                    const bPrice = parseFloat($(b).data('price'));
                    const aDuration = parseInt($(a).data('duration'));
                    const bDuration = parseInt($(b).data('duration'));
                    
                    switch(sortBy) {
                        case 'price_asc':
                            return aPrice - bPrice;
                        case 'price_desc':
                            return bPrice - aPrice;
                        case 'duration':
                            return bDuration - aDuration;
                        default: // popular (orden original)
                            return 0;
                    }
                }).appendTo($container);
            }
            
            // Inicializar filtros
            filterProducts();
        });
    </script>
</body>
</html>