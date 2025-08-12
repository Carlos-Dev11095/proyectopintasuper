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
        padding: 60px 0;
        background-color: #f9f9f9;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    /* ------------------------- */
    /* Estructura Principal */
    /* ------------------------- */
    .gallery-wrapper {
        display: flex;
        gap: 30px;
    }

    .main-content {
        flex: 1;
        overflow: hidden;
    }

    /* ------------------------- */
    /* Barra Lateral de Filtros */
    /* ------------------------- */
    .sidebar {
        flex: 0 0 280px;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        border-top: 4px solid var(--color-brand);
        height: fit-content;
        position: sticky;
        top: 20px;
    }

    .sidebar-widget {
        margin-bottom: 25px;
    }

    .sidebar-widget h4 {
        font-size: 1.4rem;
        color: var(--color-brand-dark);
        margin-bottom: 15px;
        border-bottom: 1px solid #eee;
        padding-bottom: 8px;
    }

    /* ------------------------- */
    /* Filas Horizontales de Productos */
    /* ------------------------- */
    .product-rows-container {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .product-row {
        display: flex;
        flex-direction: column;
    }

    .row-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .row-title {
        font-size: 1.6rem;
        color: var(--color-brand-dark);
        margin: 0;
    }

    .row-nav {
        display: flex;
        gap: 10px;
    }

    .row-nav-button {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: white;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
    }

    .row-nav-button:hover {
        background: var(--color-brand);
        color: white;
        border-color: var(--color-brand);
    }

    .products-scroll-container {
        overflow-x: auto;
        padding-bottom: 20px;
        scrollbar-width: thin;
        scrollbar-color: var(--color-brand) #f1f1f1;
    }

    .products-scroll-container::-webkit-scrollbar {
        height: 6px;
    }

    .products-scroll-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .products-scroll-container::-webkit-scrollbar-thumb {
        background: var(--color-brand);
        border-radius: 10px;
    }

    .products-row {
        display: inline-flex;
        gap: 20px;
        padding: 5px;
    }

    /* ------------------------- */
    /* Tarjetas de Producto */
    /* ------------------------- */
    .gallery-page__single {
        flex: 0 0 260px;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        transition: var(--transition);
        display: flex;
        flex-direction: column;
        border-top: 4px solid var(--color-brand);
    }

    .gallery-page__single:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }

    .gallery-page__img {
        height: 200px;
        background-color: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        position: relative;
        overflow: hidden;
    }

    .gallery-page__img img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
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
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0) 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 15px;
        opacity: 1;
    }

    .gallery-page__title h3 {
        margin: 0;
        font-size: 1.2rem;
        font-weight: 700;
        color: white;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
        letter-spacing: 0.5px;
        padding: 5px 10px;
        background-color: rgba(0,0,0,0.5);
        border-radius: 4px;
        display: inline-block;
    }

    .product-details {
        padding: 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .product-price {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 8px;
    }

    .product-price small {
        font-size: 0.8rem;
        color: #666;
        display: block;
        font-weight: 500;
    }

    .product-price-gal {
        font-size: 1.1rem;
        color: var(--color-brand-dark);
        margin-bottom: 15px;
        font-weight: 600;
    }

    .product-technical {
        font-size: 0.9rem;
        color: #666;
        margin-top: 10px;
        flex: 1;
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
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        opacity: 0;
        transition: var(--transition);
        z-index: 2;
        box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    }

    .gallery-page__single:hover .gallery-page__icon {
        opacity: 1;
    }

    .gallery-page__icon:hover {
        background: var(--secondary-color);
        color: white;
        transform: translate(-50%, -50%) scale(1.1);
    }

    /* ------------------------- */
    /* Controles y Filtros */
    /* ------------------------- */
    .product-header-controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        background-color: white;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border-top: 4px solid var(--color-brand-dark);
    }

    .results-count {
        font-size: 1.1rem;
        color: #555;
    }

    .sort-by {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .sort-by select {
        padding: 8px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: white;
        font-size: 1rem;
    }

    /* ------------------------- */
    /* Estilos del Filtro */
    /* ------------------------- */
    .sidebar-search {
        display: flex;
        margin-bottom: 20px;
    }

    .sidebar-search input {
        flex: 1;
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 5px 0 0 5px;
        outline: none;
    }

    .sidebar-search button {
        padding: 0 15px;
        background-color: var(--secondary-color);
        color: white;
        border: none;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        transition: var(--transition);
    }

    .sidebar-search button:hover {
        background-color: #e07e0c;
    }

    .price-filter .price-range {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .price-filter .price-range input[type="range"] {
        flex: 1;
    }

    .price-filter .current-range {
        text-align: center;
        margin: 10px 0;
        font-weight: 500;
        color: var(--primary-color);
    }

    .price-filter .filter-button {
        width: 100%;
        padding: 10px;
        background-color: var(--color-brand-dark);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
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
        margin-bottom: 8px;
    }

    .categories-list a {
        display: block;
        padding: 8px 12px;
        color: var(--dark-color);
        text-decoration: none;
        border-radius: 5px;
        transition: var(--transition);
    }

    .categories-list a:hover,
    .categories-list a.active {
        background-color: var(--color-brand);
        color: white;
    }

    /* ------------------------- */
    /* Responsividad */
    /* ------------------------- */
    @media (max-width: 992px) {
        .gallery-wrapper {
            flex-direction: column;
        }
        
        .sidebar {
            flex: 0 0 100%;
            position: static;
            margin-bottom: 30px;
        }
        
        .gallery-page__single {
            flex: 0 0 220px;
        }
    }

    @media (max-width: 768px) {
        .gallery-page {
            padding: 40px 0;
        }
        
        .product-header-controls {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
        
        .row-title {
            font-size: 1.4rem;
        }
        
        .gallery-page__img {
            height: 180px;
        }
    }

    @media (max-width: 480px) {
        .row-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        
        .row-nav {
            align-self: flex-end;
        }
        
        .gallery-page__single {
            flex: 0 0 200px;
        }
    }

    /* ------------------------- */
    /* Lightbox (Magnific Popup) */
    /* ------------------------- */
    .mfp-wrap {
        z-index: 1042 !important;
    }

    .mfp-container {
        padding: 0 15px !important;
    }

    .mfp-content {
        z-index: 1045 !important;
        max-width: 900px;
    }

    .mfp-figure:after {
        box-shadow: none !important;
        background: none !important;
    }

    .mfp-img {
        padding: 0;
        max-height: calc(100vh - 150px);
    }

    .mfp-bottom-bar {
        margin-top: 10px;
    }

    .mfp-title {
        text-align: left;
        padding: 10px 0;
        line-height: 1.5;
    }
    
    .mfp-title h3 {
        color: var(--secondary-color);
        margin-bottom: 5px;
        font-size: 1.5em;
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
                            <input type="text" placeholder="Buscar..." id="searchInput">
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
                            <li><a href="#" class="active category-filter" data-category="all">Todos los productos</a></li>
                            <li><a href="#" class="category-filter" data-category="cubetas">Cubetas 19L</a></li>
                            <li><a href="#" class="category-filter" data-category="galones">Galones</a></li>
                            <li><a href="#" class="category-filter" data-category="pinturas">Pinturas</a></li>
                            <li><a href="#" class="category-filter" data-category="impermeabilizantes">Impermeabilizantes</a></li>
                            <li><a href="#" class="category-filter" data-category="esmaltes">Esmaltes</a></li>
                        </ul>
                    </div>
                </div>

                <div class="main-content">
                    <div class="product-header-controls">
                        <span class="results-count" id="resultsCount">Mostrando todos los productos</span>
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
                            // CUBETAS DE 19 LITROS
                            // Pinturas
                            [
                                'imagen' => 'Platino_gold.png',
                                'nombre' => 'Platino Gold',
                                'precio' => 2992,
                                'precio_galon' => 640,
                                'tipo' => 'pintura',
                                'presentacion' => 'cubeta',
                                'categoria' => 'Pinturas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de categoría Premium para superficies interiores y exteriores, con acabado satinado brillante.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores disponibles' => '13 colores',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '10-12 m² por litro',
                                    'Duración' => '10-12 años',
                                    'Acabado' => 'Satinado brillante',
                                    'Recomendación' => 'Ideal para exteriores de alta resistencia'
                                ]
                            ],
                            [
                                'imagen' => 'dorada.png',
                                'nombre' => 'Dorada',
                                'precio' => 2025,
                                'precio_galon' => 477,
                                'tipo' => 'pintura',
                                'presentacion' => 'cubeta',
                                'categoria' => 'Pinturas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de gran desempeño para superficies interiores y exteriores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores disponibles' => '32 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '7-9 m² por litro',
                                    'Duración' => '7 años',
                                    'Acabado' => 'Mate',
                                    'Recomendación' => 'Excelente relación calidad-precio'
                                ]
                            ],
                            [
                                'imagen' => 'onix.png',
                                'nombre' => 'Onix',
                                'precio' => 1458,
                                'precio_galon' => 335,
                                'tipo' => 'pintura',
                                'presentacion' => 'cubeta',
                                'categoria' => 'Pinturas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de buen desempeño para decorar superficies en interiores y exteriores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores disponibles' => '33 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '6-8 m² por litro (a dos manos)',
                                    'Duración' => '4 años',
                                    'Acabado' => 'Mate',
                                    'Recomendación' => 'Perfecta para proyectos residenciales'
                                ]
                            ],
                            [
                                'imagen' => 'zafiro.png',
                                'nombre' => 'Zafiro',
                                'precio' => 733,
                                'precio_galon' => 184,
                                'tipo' => 'pintura',
                                'presentacion' => 'cubeta',
                                'categoria' => 'Pinturas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica para decorar superficies en interiores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores disponibles' => '26 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '4-6 m² por litro (a dos manos)',
                                    'Duración' => '2 años',
                                    'Acabado' => 'Mate',
                                    'Recomendación' => 'Ideal para interiores con bajo tráfico'
                                ]
                            ],
                            
                            // Impermeabilizantes en cubetas
                            [
                                'imagen' => 'imper_multi_premium.png',
                                'nombre' => 'Imper Multi Premium',
                                'precio' => 2391,
                                'precio_galon' => 546,
                                'tipo' => 'impermeabilizante',
                                'presentacion' => 'cubeta',
                                'categoria' => 'Impermeabilizantes',
                                'descripcion' => 'Impermeabilizante premium con resistencia de 7 años, elaborado a base de resinas estiren-acrílicas, pigmentos inorgánicos y micro fibra de poliéster.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '1 m² por litro',
                                    'Resistencia' => '7 años',
                                    'Aplicación' => 'Techos y superficies exteriores',
                                    'Recomendación' => 'Máxima protección contra humedad'
                                ]
                            ],
                            [
                                'imagen' => 'imper_multi_pro_fibrantado.png',
                                'nombre' => 'Imper Multi Pro Fibrantado',
                                'precio' => 2120,
                                'precio_galon' => 546,
                                'tipo' => 'impermeabilizante',
                                'presentacion' => 'cubeta',
                                'categoria' => 'Impermeabilizantes',
                                'descripcion' => 'Impermeabilizante fibrantado color terracota, con atributos acrílico elastoméricos creado en base agua.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '1 m² por litro',
                                    'Resistencia' => '10 años',
                                    'Aplicación' => 'Techos con fisuras',
                                    'Recomendación' => 'Ideal para techos con problemas de fisuras'
                                ]
                            ],
                            [
                                'imagen' => 'impertek_19.png',
                                'nombre' => 'Imper-Tek',
                                'precio' => 1300,
                                'precio_galon' => null,
                                'tipo' => 'impermeabilizante',
                                'presentacion' => 'cubeta',
                                'categoria' => 'Impermeabilizantes',
                                'descripcion' => 'Impermeabilizante elaborado a base de resinas estiren-acrílicas y pigmentos inorgánicos.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '1 m² por litro',
                                    'Resistencia' => '5 años',
                                    'Aplicación' => 'Techos planos',
                                    'Recomendación' => 'Solución económica para techos planos'
                                ]
                            ],
                            
                            // Esmaltes en cubetas
                            [
                                'imagen' => 'super_rap_ultra.png',
                                'nombre' => 'Super Rap Ultra',
                                'precio' => 3254.99,
                                'precio_galon' => 734,
                                'tipo' => 'esmalte',
                                'presentacion' => 'cubeta',
                                'categoria' => 'Esmaltes',
                                'descripcion' => 'Esmalte alquidálico modificado con estireno de secado rápido. Ideal para trabajos donde el secado de la pintura sea un factor fundamental.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores disponibles' => '25 colores',
                                    'Tiempo de secado' => '10 minutos al tacto',
                                    'Rendimiento' => '8-10 m² por litro',
                                    'Acabados' => 'Brillante, satinado, metálico y mate',
                                    'Aplicación' => 'Muebles y superficies metálicas',
                                    'Recomendación' => 'Perfecto para proyectos con tiempos ajustados'
                                ]
                            ],
                            [
                                'imagen' => 'kiviforte.png',
                                'nombre' => 'Kivi Forte',
                                'precio' => 3090,
                                'precio_galon' => 702,
                                'tipo' => 'esmalte',
                                'presentacion' => 'cubeta',
                                'categoria' => 'Esmaltes',
                                'descripcion' => 'Esmalte alquídico anticorrosivo de excelente rendimiento. Produce un acabado duro con máxima retención de color, adherencia y gran resistencia a la intemperie.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores disponibles' => '19 colores',
                                    'Tiempo de secado' => '4 horas al tacto',
                                    'Rendimiento' => '7-9 m² por litro (a dos manos)',
                                    'Acabados' => 'Brillante, semimate, mate y metálico',
                                    'Aplicación' => 'Estructuras metálicas exteriores',
                                    'Recomendación' => 'Protección superior para metal expuesto'
                                ]
                            ],
                            
                            // GALONES
                            // Pinturas en galones
                            [
                                'imagen' => 'Platino_gold.png',
                                'nombre' => 'Platino Gold',
                                'precio' => 640,
                                'precio_galon' => 640,
                                'tipo' => 'pintura',
                                'presentacion' => 'galon',
                                'categoria' => 'Pinturas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de categoría Premium para superficies interiores y exteriores, con acabado satinado brillante.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '13 colores',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '10-12 m² por litro',
                                    'Duración' => '10-12 años',
                                    'Acabado' => 'Satinado brillante',
                                    'Recomendación' => 'Ideal para exteriores de alta resistencia'
                                ]
                            ],
                            [
                                'imagen' => 'dorada.png',
                                'nombre' => 'Dorada',
                                'precio' => 477,
                                'precio_galon' => 477,
                                'tipo' => 'pintura',
                                'presentacion' => 'galon',
                                'categoria' => 'Pinturas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de gran desempeño para superficies interiores y exteriores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '32 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '7-9 m² por litro',
                                    'Duración' => '7 años',
                                    'Acabado' => 'Mate',
                                    'Recomendación' => 'Excelente relación calidad-precio'
                                ]
                            ],
                            [
                                'imagen' => 'onix.png',
                                'nombre' => 'Onix',
                                'precio' => 335,
                                'precio_galon' => 335,
                                'tipo' => 'pintura',
                                'presentacion' => 'galon',
                                'categoria' => 'Pinturas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de buen desempeño para decorar superficies en interiores y exteriores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '33 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '6-8 m² por litro (a dos manos)',
                                    'Duración' => '4 años',
                                    'Acabado' => 'Mate',
                                    'Recomendación' => 'Perfecta para proyectos residenciales'
                                ]
                            ],
                            [
                                'imagen' => 'zafiro.png',
                                'nombre' => 'Zafiro',
                                'precio' => 184,
                                'precio_galon' => 184,
                                'tipo' => 'pintura',
                                'presentacion' => 'galon',
                                'categoria' => 'Pinturas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica para decorar superficies en interiores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '26 colores',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '4-6 m² por litro (a dos manos)',
                                    'Duración' => '2 años',
                                    'Acabado' => 'Mate',
                                    'Recomendación' => 'Ideal para interiores con bajo tráfico'
                                ]
                            ],
                            
                            // Impermeabilizantes en galones
                            [
                                'imagen' => 'imper_multi_premium.png',
                                'nombre' => 'Imper Multi Premium',
                                'precio' => 546,
                                'precio_galon' => 546,
                                'tipo' => 'impermeabilizante',
                                'presentacion' => 'galon',
                                'categoria' => 'Impermeabilizantes',
                                'descripcion' => 'Impermeabilizante premium con resistencia de 7 años, elaborado a base de resinas estiren-acrílicas, pigmentos inorgánicos y micro fibra de poliéster.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '1 m² por litro',
                                    'Resistencia' => '7 años',
                                    'Aplicación' => 'Techos y superficies exteriores',
                                    'Recomendación' => 'Máxima protección contra humedad'
                                ]
                            ],
                            [
                                'imagen' => 'imper_multi_pro_fibrantado.png',
                                'nombre' => 'Imper Multi Pro Fibrantado',
                                'precio' => 546,
                                'precio_galon' => 546,
                                'tipo' => 'impermeabilizante',
                                'presentacion' => 'galon',
                                'categoria' => 'Impermeabilizantes',
                                'descripcion' => 'Impermeabilizante fibrantado color terracota, con atributos acrílico elastoméricos creado en base agua.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '1 m² por litro',
                                    'Resistencia' => '10 años',
                                    'Aplicación' => 'Techos con fisuras',
                                    'Recomendación' => 'Ideal para techos con problemas de fisuras'
                                ]
                            ],
                            
                            // Esmaltes en galones
                            [
                                'imagen' => 'super_rap_ultra.png',
                                'nombre' => 'Super Rap Ultra',
                                'precio' => 734,
                                'precio_galon' => 734,
                                'tipo' => 'esmalte',
                                'presentacion' => 'galon',
                                'categoria' => 'Esmaltes',
                                'descripcion' => 'Esmalte alquidálico modificado con estireno de secado rápido. Ideal para trabajos donde el secado de la pintura sea un factor fundamental.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '25 colores',
                                    'Tiempo de secado' => '10 minutos al tacto',
                                    'Rendimiento' => '8-10 m² por litro',
                                    'Acabados' => 'Brillante, satinado, metálico y mate',
                                    'Aplicación' => 'Muebles y superficies metálicas',
                                    'Recomendación' => 'Perfecto para proyectos con tiempos ajustados'
                                ]
                            ],
                            [
                                'imagen' => 'kiviforte.png',
                                'nombre' => 'Kivi Forte',
                                'precio' => 702,
                                'precio_galon' => 702,
                                'tipo' => 'esmalte',
                                'presentacion' => 'galon',
                                'categoria' => 'Esmaltes',
                                'descripcion' => 'Esmalte alquídico anticorrosivo de excelente rendimiento. Produce un acabado duro con máxima retención de color, adherencia y gran resistencia a la intemperie.',
                                'detalles' => [
                                    'Presentación' => 'Galón',
                                    'Colores disponibles' => '19 colores',
                                    'Tiempo de secado' => '4 horas al tacto',
                                    'Rendimiento' => '7-9 m² por litro (a dos manos)',
                                    'Acabados' => 'Brillante, semimate, mate y metálico',
                                    'Aplicación' => 'Estructuras metálicas exteriores',
                                    'Recomendación' => 'Protección superior para metal expuesto'
                                ]
                            ]
                        ];

                        // Agrupar productos por presentación y categoría
                        $productosAgrupados = [
                            'cubeta' => [
                                'Pinturas' => [],
                                'Impermeabilizantes' => [],
                                'Esmaltes' => []
                            ],
                            'galon' => [
                                'Pinturas' => [],
                                'Impermeabilizantes' => [],
                                'Esmaltes' => []
                            ]
                        ];

                        foreach ($productos as $producto) {
                            $productosAgrupados[$producto['presentacion']][$producto['categoria']][] = $producto;
                        }

                        // Mostrar productos agrupados
                        foreach ($productosAgrupados as $presentacion => $categorias) {
                            $tituloPresentacion = ($presentacion == 'cubeta') ? 'Cubetas de 19 Litros' : 'Galones';
                            
                            echo '<div class="presentation-section" data-presentation="'.$presentacion.'">';
                            echo '<h3 class="presentation-title" style="margin: 30px 0 20px; color: var(--color-brand-dark); border-bottom: 2px solid var(--color-brand); padding-bottom: 10px;">'.$tituloPresentacion.'</h3>';
                            
                            foreach ($categorias as $categoria => $productosCategoria) {
                                if (!empty($productosCategoria)) {
                                    echo '<h4 class="category-title" style="margin: 20px 0 15px; color: var(--secondary-color); font-size: 1.3rem;">'.$categoria.'</h4>';
                                    
                                    foreach ($productosCategoria as $producto) {
                                        $nombreMostrar = $producto['nombre'];
                                        $precioFormateado = number_format($producto['precio'], 2);
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
                                             data-presentation="'.$presentacion.'"
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
                                                    <div class="product-price">$'.$precioFormateado.' <small>'.($presentacion == 'cubeta' ? 'Cubeta 19L' : 'Galón').'</small></div>
                                                    <div class="product-technical">
                                                        '.$detallesTecnicos.'
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    }
                                }
                            }
                            echo '</div>'; // Cierre de presentation-section
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
            // Inicializar popup de imágenes
            $('.img-popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        return item.el.attr('data-caption');
                    }
                },
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,2]
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
                    const presentation = $(this).data('presentation');
                    
                    const matchesPrice = price <= maxPrice;
                    const matchesSearch = name.includes(searchTerm) || searchTerm === '';
                    const matchesCategory = activeCategory === 'all' || 
                                           category === activeCategory || 
                                           (activeCategory === 'cubetas' && presentation === 'cubeta') || 
                                           (activeCategory === 'galones' && presentation === 'galon');
                    
                    if (matchesPrice && matchesSearch && matchesCategory) {
                        $(this).show();
                        visibleCount++;
                    } else {
                        $(this).hide();
                    }
                });
                
                // Mostrar u ocultar secciones según el filtro
                $('.presentation-section').each(function() {
                    const presentation = $(this).data('presentation');
                    const hasVisibleProducts = $(this).find('.product-item:visible').length > 0;
                    
                    if (activeCategory === 'all' || 
                        (activeCategory === 'cubetas' && presentation === 'cubeta') || 
                        (activeCategory === 'galones' && presentation === 'galon') ||
                        $(this).find('.product-item[data-category="'+activeCategory+'"]:visible').length > 0) {
                        $(this).show();
                        $(this).find('.category-title').each(function() {
                            const category = $(this).text().trim().toLowerCase().replace(' ', '-');
                            if ($(this).nextUntil('.category-title').filter('.product-item:visible').length > 0) {
                                $(this).show();
                            } else {
                                $(this).hide();
                            }
                        });
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
                
                $('.presentation-section').each(function() {
                    const $section = $(this);
                    $section.find('.category-title').each(function() {
                        const $categoryTitle = $(this);
                        const $productsContainer = $('<div class="products-row"></div>').insertAfter($categoryTitle);
                        const $products = $categoryTitle.nextUntil('.category-title').filter('.product-item:visible');
                        
                        $products.detach().appendTo($productsContainer);
                        
                        $products.sort(function(a, b) {
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
                        }).appendTo($productsContainer);
                    });
                });
            }
            
            // Inicializar filtros
            filterProducts();
        });
    </script>
</body>
</html>