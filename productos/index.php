<?php 
// Configuración de rutas
$ROOT_PATH = '';
$IMAGE_DIR = $_SERVER['DOCUMENT_ROOT'] . $ROOT_PATH . '/assets/images/gallery/productos/';

// Función para mostrar productos
function mostrarProducto($producto, $ROOT_PATH) {
    $nombreMostrar = $producto['nombre'];
    $imagenPath = $ROOT_PATH . '/assets/images/gallery/productos/' . $producto['imagen'];
    $imagenExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $imagenPath);
    
    // Generar detalles técnicos unificados
    $detallesTecnicos = '';
    $detallesTecnicos .= isset($producto['detalles']['Presentación']) ? "<p><strong>Presentación:</strong> " . $producto['detalles']['Presentación'] . "</p>" : "";
    $detallesTecnicos .= isset($producto['detalles']['Colores disponibles']) ? "<p><strong>Colores disponibles:</strong> " . $producto['detalles']['Colores disponibles'] . "</p>" : "";
    $detallesTecnicos .= isset($producto['detalles']['Tiempo de secado']) ? "<p><strong>Tiempo de secado:</strong> " . $producto['detalles']['Tiempo de secado'] . "</p>" : "";
    $detallesTecnicos .= isset($producto['detalles']['Rendimiento']) ? "<p><strong>Rendimiento (a dos manos):</strong> " . $producto['detalles']['Rendimiento'] . "</p>" : "";
    $detallesTecnicos .= isset($producto['detalles']['Duración']) ? "<p><strong>Duración:</strong> " . $producto['detalles']['Duración'] . "</p>" : "";
    $detallesTecnicos .= isset($producto['detalles']['Acabado']) ? "<p><strong>Acabado:</strong> " . $producto['detalles']['Acabado'] . "</p>" : "";
    $detallesTecnicos .= isset($producto['detalles']['Resistencia']) ? "<p><strong>Resistencia:</strong> " . $producto['detalles']['Resistencia'] . "</p>" : "";
    
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
                <div class="product-technical">
                    '.$detallesTecnicos.'
                </div>';
                
    // Botón de descarga de ficha técnica si existe
    if (isset($producto['ficha_tecnica']) && !empty($producto['ficha_tecnica'])) {
        echo '<div class="download-ficha">
                <a href="'.$ROOT_PATH.'/assets/fichas_tecnicas/'.$producto['ficha_tecnica'].'" 
                   class="ficha-btn" download>
                   <i class="fas fa-download"></i> Descargar Ficha Técnica
                </a>
              </div>';
    }
    
    echo '  </div>
        </div>
    </div>';
}
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

        /* Estilos para el lightbox */
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

        /* Nuevos estilos para la organización por secciones */
        .product-section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 1.8rem;
            color: var(--color-brand-dark);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 10px;
            margin-bottom: 25px;
            position: relative;
            cursor: pointer;
        }

        .section-title:after {
            content: '\f078';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.8em;
            transition: transform 0.3s ease;
        }

        .section-title.collapsed:after {
            transform: translateY(-50%) rotate(-90deg);
        }

        .section-content {
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .section-subtitle {
            font-size: 1.4rem;
            color: var(--primary-color);
            margin: 25px 0 15px;
            padding-left: 15px;
            border-left: 4px solid var(--color-brand);
        }

        /* Estilos para botón de descarga de ficha técnica */
        .download-ficha {
            margin-top: 15px;
            padding: 0 15px;
        }

        .ficha-btn {
            display: inline-block;
            background-color: var(--color-brand-dark);
            color: white;
            padding: 8px 15px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.9em;
            transition: background-color 0.3s ease;
        }

        .ficha-btn:hover {
            background-color: var(--color-brand);
            color: white;
        }

        .ficha-btn i {
            margin-right: 5px;
        }

        /* Estilos para secciones informativas */
        .info-section {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            border-top: 4px solid var(--color-brand);
        }

        .info-section h3 {
            color: var(--color-brand-dark);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        .info-section p {
            color: #666;
            line-height: 1.6;
        }

        .catalog-download {
            text-align: center;
            padding: 40px 0;
            background-color: var(--light-color);
            border-radius: 8px;
            margin-top: 40px;
        }

        .catalog-download h3 {
            color: var(--color-brand-dark);
            margin-bottom: 20px;
        }

        .catalog-btn {
            display: inline-block;
            background-color: var(--color-brand);
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        .catalog-btn:hover {
            background-color: var(--color-brand-dark);
            color: white;
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
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .section-subtitle {
                font-size: 1.2rem;
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
                    
                    <div class="sidebar-widget categories-list">
                        <h4>Categorías</h4>
                        <ul>
                            <li><a href="#" class="active category-filter" data-category="all">Todas las categorías</a></li>
                            <li><a href="#" class="category-filter" data-category="pinturas-arquitectónicas">Pinturas Arquitectónicas</a></li>
                            <li><a href="#" class="category-filter" data-category="vinilicas">Vinílicas</a></li>
                            <li><a href="#" class="category-filter" data-category="esmaltes">Esmaltes</a></li>
                            <li><a href="#" class="category-filter" data-category="impermeabilizantes">Impermeabilizantes</a></li>
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
                                <option value="duration">Mayor duración</option>
                                <option value="name">Nombre A-Z</option>
                            </select>
                        </div>
                    </div>

                    <!-- Secciones informativas -->
                    <div class="info-section">
                        <h3>Maderas</h3>
                        <p>Contamos con una amplia gama de productos especializados para el tratamiento y protección de maderas, incluyendo barnices, lacas y protectores que realzan la belleza natural de la madera mientras la protegen de los elementos.</p>
                    </div>

                    <div class="info-section">
                        <h3>Automotivo</h3>
                        <p>Ofrecemos pinturas y recubrimientos de alta calidad para el sector automotriz, con colores exactos y acabados duraderos que resisten las condiciones más exigentes.</p>
                    </div>

                    <div class="info-section">
                        <h3>Industrial</h3>
                        <p>Nuestra línea industrial incluye recubrimientos especializados para protección contra corrosión, altas temperaturas y químicos, diseñados para cumplir con los estándares más rigurosos.</p>
                    </div>

                    <div class="info-section">
                        <h3>Complementos</h3>
                        <p>Completa tus proyectos con nuestra variedad de complementos: diluyentes, removedores, masillas y herramientas especializadas para obtener resultados profesionales.</p>
                    </div>

                    <div class="info-section">
                        <h3>Equipo de Repintados</h3>
                        <p>Ofrecemos equipos especializados para repintado automotriz e industrial, incluyendo pistolas, compresores y accesorios de las mejores marcas.</p>
                    </div>

                    <!-- Catálogo para descargar -->
                    <div class="catalog-download">
                        <h3>Consulta Nuestro Catálogo Completo 2025</h3>
                        <a href="<?php echo $ROOT_PATH; ?>/assets/catalogos/catalogo_2025.pdf" class="catalog-btn" download>
                            <i class="fas fa-download"></i> Descargar Catálogo Completo
                        </a>
                    </div>

                    <!-- Sección para Pinturas Arquitectónicas -->
                    <div class="product-section">
                        <h3 class="section-title" data-target="arquitectonicos">Pinturas Arquitectónicas</h3>
                        <div class="section-content" id="arquitectonicos">
                            <div class="row">
                                <?php
                                $pinturasArquitectonicas = [
                                    // PINTURAS ARQUITECTÓNICAS - PLATINO GOLD (Cubeta)
                                    [
                                        'imagen' => 'platino_gold_19_litros.png',
                                        'nombre' => 'Platino Gold',
                                        'tipo' => 'pintura',
                                        'categoria' => 'Pinturas Arquitectónicas',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de categoría Premium.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => '13 colores',
                                            'Tiempo de secado' => '45 minutos al tacto',
                                            'Rendimiento' => '7-9 m² por litro',
                                            'Duración' => '10-12 años',
                                            'Acabado' => 'Mate'
                                        ],
                                        'ficha_tecnica' => 'ficha_platino_gold.pdf'
                                    ],
                                    
                                    // PINTURAS ARQUITECTÓNICAS - DORADA (Cubeta)
                                    [
                                        'imagen' => 'dorada_19_litros.png',
                                        'nombre' => 'Dorada',
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
                                        ],
                                        'ficha_tecnica' => 'ficha_dorada.pdf'
                                    ],
                                    
                                    // PINTURAS ARQUITECTÓNICAS - ONIX (Cubeta)
                                    [
                                        'imagen' => 'onix_19_litros.png',
                                        'nombre' => 'Onix',
                                        'tipo' => 'pintura',
                                        'categoria' => 'Pinturas Arquitectónicas',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de buen desempeño.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => '33 colores',
                                            'Tiempo de secado' => '30 minutos al tacto',
                                            'Rendimiento' => '7-9 m² por litro',
                                            'Duración' => '4 años',
                                            'Acabado' => 'Mate'
                                        ],
                                        'ficha_tecnica' => 'ficha_onix.pdf'
                                    ],
                                    
                                    // PINTURAS ARQUITECTÓNICAS - ZAFIRO (Cubeta)
                                    [
                                        'imagen' => 'zafiro_19_litros.png',
                                        'nombre' => 'Zafiro',
                                        'tipo' => 'pintura',
                                        'categoria' => 'Pinturas Arquitectónicas',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Pintura arquitectónica Vinil-Acrítica para interiores.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => '26 colores',
                                            'Tiempo de secado' => '30 minutos al tacto',
                                            'Rendimiento' => '7-9 m² por litro',
                                            'Duración' => '2 años',
                                            'Acabado' => 'Mate'
                                        ],
                                        'ficha_tecnica' => 'ficha_zafiro.pdf'
                                    ]
                                ];
                                
                                foreach ($pinturasArquitectonicas as $producto) {
                                    mostrarProducto($producto, $ROOT_PATH);
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Sección para Vinílicas y Selladores -->
                    <div class="product-section">
                        <h3 class="section-title" data-target="vinilicas">Vinílicas y Selladores</h3>
                        <div class="section-content" id="vinilicas">
                            <div class="row">
                                <?php
                                $vinilicasSelladores = [
                                    // SELLADOR - MULTI PREMIUM (Cubeta)
                                    [
                                        'imagen' => 'sellador_multi_premium_19_litros.png',
                                        'nombre' => 'Sellador Multi Premium',
                                        'tipo' => 'sellador',
                                        'categoria' => 'Vinílicas',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Sellador premium de alta penetración y adherencia.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => 'Transparente / Blanco',
                                            'Tiempo de secado' => '30 minutos al tacto',
                                            'Rendimiento' => '10-12 m² por litro',
                                            'Duración' => '5 años'
                                        ],
                                        'ficha_tecnica' => 'ficha_sellador_multi.pdf'
                                    ],
                                    
                                    // SELLADOR - PRO FIBRANTADO (Cubeta)
                                    [
                                        'imagen' => 'sellador_pro_fibrantado_19_litros.png',
                                        'nombre' => 'Sellador Pro Fibrantado',
                                        'tipo' => 'sellador',
                                        'categoria' => 'Vinílicas',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Sellador con fibras para mayor resistencia.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => 'Transparente / Blanco',
                                            'Tiempo de secado' => '45 minutos al tacto',
                                            'Rendimiento' => '8-10 m² por litro',
                                            'Duración' => '7 años'
                                        ],
                                        'ficha_tecnica' => 'ficha_sellador_pro.pdf'
                                    ]
                                ];
                                
                                foreach ($vinilicasSelladores as $producto) {
                                    mostrarProducto($producto, $ROOT_PATH);
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Sección para Esmaltes -->
                    <div class="product-section">
                        <h3 class="section-title" data-target="esmaltes">Esmaltes</h3>
                        <div class="section-content" id="esmaltes">
                            <div class="row">
                                <?php
                                $esmaltes = [
                                    // ESMALTES - KIVI FORTE (Cubeta)
                                    [
                                        'imagen' => 'kivi_forte_19_litros.png',
                                        'nombre' => 'Kivi Forte',
                                        'tipo' => 'esmalte',
                                        'categoria' => 'Esmaltes',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Esmalte alquídico anticorrosivo de excelente rendimiento.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => '19 colores',
                                            'Tiempo de secado' => '4 horas al tacto',
                                            'Rendimiento' => '12-14 m² por litro',
                                            'Acabado' => 'Brillante'
                                        ],
                                        'ficha_tecnica' => 'ficha_kivi_forte.pdf'
                                    ],
                                    
                                    // ESMALTES - SUPER RAP ULTRA (Cubeta)
                                    [
                                        'imagen' => 'super_rap_ultra_19_litros.png',
                                        'nombre' => 'Super Rap Ultra',
                                        'tipo' => 'esmalte',
                                        'categoria' => 'Esmaltes',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Esmalte alquidálico modificado con estireno de secado rápido.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => '25 colores',
                                            'Tiempo de secado' => '10 minutos al tacto',
                                            'Rendimiento' => '10-12 m² por litro',
                                            'Acabado' => 'Semi-brillante'
                                        ],
                                        'ficha_tecnica' => 'ficha_super_rap.pdf'
                                    ]
                                ];
                                
                                foreach ($esmaltes as $producto) {
                                    mostrarProducto($producto, $ROOT_PATH);
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- Sección para Impermeabilizantes -->
                    <div class="product-section">
                        <h3 class="section-title" data-target="impermeabilizantes">Impermeabilizantes</h3>
                        <div class="section-content" id="impermeabilizantes">
                            <div class="row">
                                <?php
                                $impermeabilizantes = [
                                    // IMPERMEABILIZANTES - MULTI PREMIUM (Cubeta)
                                    [
                                        'imagen' => 'imper_multi_premium_19_litros.png',
                                        'nombre' => 'Imper Multi Premium',
                                        'tipo' => 'impermeabilizante',
                                        'categoria' => 'Impermeabilizantes',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Impermeabilizante premium con resistencia de 7 años.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => 'Terracota / Blanco',
                                            'Tiempo de secado' => '45 minutos al tacto',
                                            'Rendimiento' => '4-5 m² por litro',
                                            'Resistencia' => '7 años'
                                        ],
                                        'ficha_tecnica' => 'ficha_imper_multi.pdf'
                                    ],
                                    
                                    // IMPERMEABILIZANTES - MULTI PRO FIBRANTADO (Cubeta)
                                    [
                                        'imagen' => 'imper_multi_pro_fibrantado_19_litros.png',
                                        'nombre' => 'Imper Multi Pro Fibrantado',
                                        'tipo' => 'impermeabilizante',
                                        'categoria' => 'Impermeabilizantes',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Impermeabilizante fibrantado color terracota.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => 'Terracota / Blanco',
                                            'Tiempo de secado' => '45 minutos al tacto',
                                            'Rendimiento' => '4-5 m² por litro',
                                            'Resistencia' => '10 años'
                                        ],
                                        'ficha_tecnica' => 'ficha_imper_pro.pdf'
                                    ],
                                    
                                    // IMPERMEABILIZANTES - IMPER-TEK (Cubeta)
                                    [
                                        'imagen' => 'impertek_19_litros.png',
                                        'nombre' => 'Imper-Tek',
                                        'tipo' => 'impermeabilizante',
                                        'categoria' => 'Impermeabilizantes',
                                        'presentacion' => 'Cubeta 19L',
                                        'descripcion' => 'Impermeabilizante elaborado a base de resinas.',
                                        'detalles' => [
                                            'Presentación' => 'Cubeta de 19 litros',
                                            'Colores disponibles' => 'Terracota / Blanco',
                                            'Tiempo de secado' => '45 minutos al tacto',
                                            'Rendimiento' => '4-5 m² por litro',
                                            'Resistencia' => '5 años'
                                        ],
                                        'ficha_tecnica' => 'ficha_imper_tek.pdf'
                                    ]
                                ];
                                
                                foreach ($impermeabilizantes as $producto) {
                                    mostrarProducto($producto, $ROOT_PATH);
                                }
                                ?>
                            </div>
                        </div>
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
            
            // Funcionalidad para expandir/colapsar secciones
            $('.section-title').click(function() {
                const target = $(this).data('target');
                const $content = $('#' + target);
                
                $(this).toggleClass('collapsed');
                $content.slideToggle(300);
            });
            
            // Inicializar secciones colapsadas
            $('.section-title').addClass('collapsed');
            $('.section-content').hide();
            
            // Filtrado por categoría
            $('.category-filter').click(function(e) {
                e.preventDefault();
                $('.category-filter').removeClass('active');
                $(this).addClass('active');
                
                const category = $(this).data('category');
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
                const searchTerm = $('#searchInput').val().toLowerCase();
                const activeCategory = $('.category-filter.active').data('category');
                
                let visibleCount = 0;
                
                $('.product-item').each(function() {
                    const name = $(this).data('name');
                    const category = $(this).data('category');
                    
                    const matchesSearch = name.includes(searchTerm) || searchTerm === '';
                    const matchesCategory = activeCategory === 'all' || category === activeCategory;
                    
                    if (matchesSearch && matchesCategory) {
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
                const $container = $('.row');
                const $items = $('.product-item:visible');
                
                $items.sort(function(a, b) {
                    const aName = $(a).data('name');
                    const bName = $(b).data('name');
                    const aDuration = parseInt($(a).data('duration'));
                    const bDuration = parseInt($(b).data('duration'));
                    
                    switch(sortBy) {
                        case 'name':
                            return aName.localeCompare(bName);
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