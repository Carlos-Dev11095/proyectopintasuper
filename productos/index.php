<?php $ROOT_PATH = '/proyectopintasuper'; ?>

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

    <?php include_once __DIR__ . '/../bin/css.php'; ?>

    <style>
        :root {
            --primary-color: #2a5f8b;
            --secondary-color: #f7931e;
            --light-color: #f8f9fa;
            --dark-color: #343a40;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
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
        }

        .gallery-page__single:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .gallery-page__img {
            position: relative;
            overflow: hidden;
            height: 250px;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
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
            padding: 15px 10px 0;
        }

        .product-price {
            font-size: 1.4em;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 5px;
        }

        .product-stars {
            color: #ffc107;
            font-size: 1.2em;
        }

        .product-technical {
            font-size: 0.85em;
            color: #666;
            margin-top: 10px;
            text-align: left;
            padding: 0 15px;
        }

        .product-technical p {
            margin: 5px 0;
            line-height: 1.4;
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
            flex: 0 0 280px;
            max-width: 280px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
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
            background-color: var(--dark-color);
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
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
            background-color: var(--primary-color);
            color: white;
        }
        
        .main-content {
            flex-grow: 1;
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
        }

        /* Estilos para el modal de imagen */
.mfp-title {
    padding: 10px 0;     /* Padding reducido */
    margin-top: 10px;    /* Margen superior reducido */
}
        
.mfp-title h3 {
    color: var(--secondary-color);
    margin-bottom: 5px;  /* Reducido de 10px */
    font-size: 1.5em;    /* Tamaño ajustado */
    line-height: 1.2;    /* Interlineado más compacto */
    padding: 0;          /* Eliminamos el padding */
    background: none;    /* Eliminamos el fondo */
    text-shadow: none;   /* Eliminamos la sombra */
    display: block;      /* Cambiamos a bloque */
}
    </style>
</head>

<body class="custom-cursor">
            <?php require_once __DIR__ . '/../bin/header.php'; // Usa __DIR__ para ruta absoluta ?>

    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg);"></div>
        </div>
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
                            <input type="text" placeholder="Buscar producto...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    
                    <div class="sidebar-widget price-filter">
                        <h4>Filtrar por Precio</h4>
                        <div class="price-range">
                            <span>$500</span>
                            <input type="range" min="500" max="3500" value="2000" class="slider" id="priceRange">
                            <span>$3,500</span>
                        </div>
                        <button class="filter-button">Aplicar Filtro</button>
                    </div>

                    <div class="sidebar-widget categories-list">
                        <h4>Categorías</h4>
                        <ul>
                            <li><a href="#" class="active">Todas las categorías</a></li>
                            <li><a href="#">Pinturas Arquitectónicas</a></li>
                            <li><a href="#">Impermeabilizantes</a></li>
                            <li><a href="#">Esmaltes</a></li>
                        </ul>
                    </div>
                    
                    <div class="sidebar-widget">
                        <h4>Sobre Pinta Super</h4>
                        <p>Empresa fundada en 1993 en Morelia, Michoacán, especializada en la comercialización de pinturas y complementos de la más alta calidad.</p>
                    </div>
                </div>

                <div class="main-content">
                    <div class="product-header-controls">
                        <span class="results-count">Mostrando 12 productos</span>
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

                    <div class="row">
                        <?php
                        $productos = [
                            [
                                'imagen' => 'platino_gold.png',
                                'nombre' => 'Platino Gold',
                                'precio' => 2992,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de categoría Premium para superficies interiores y exteriores, con acabado satinado brillante.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Colores' => '13 colores disponibles',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '10-12 m² por litro',
                                    'Duración' => '10-12 años',
                                    'Acabado' => 'Satinado brillante'
                                ]
                            ],
                            [
                                'imagen' => 'dorada.png',
                                'nombre' => 'Dorada',
                                'precio' => 2025,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de gran desempeño para superficies interiores y exteriores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Colores' => '32 colores disponibles',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '7-9 m² por litro',
                                    'Duración' => '7 años',
                                    'Acabado' => 'Mate'
                                ]
                            ],
                            [
                                'imagen' => 'onix.png',
                                'nombre' => 'Onix',
                                'precio' => 1458,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica de buen desempeño para decorar superficies en interiores y exteriores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Colores' => '33 colores disponibles',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '6-8 m² por litro (a dos manos)',
                                    'Duración' => '4 años',
                                    'Acabado' => 'Mate'
                                ]
                            ],
                            [
                                'imagen' => 'zafiro.png',
                                'nombre' => 'Zafiro',
                                'precio' => 733,
                                'tipo' => 'pintura',
                                'categoria' => 'Pinturas Arquitectónicas',
                                'descripcion' => 'Pintura arquitectónica Vinil-Acrítica para decorar superficies en interiores, con acabado mate.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Colores' => '26 colores disponibles',
                                    'Tiempo de secado' => '30 minutos al tacto',
                                    'Rendimiento' => '4-6 m² por litro (a dos manos)',
                                    'Duración' => '2 años',
                                    'Acabado' => 'Mate'
                                ]
                            ],
                            [
                                'imagen' => 'imper_multi_premium.png',
                                'nombre' => 'Imper Multi Premium',
                                'precio' => 2391,
                                'tipo' => 'impermeabilizante',
                                'categoria' => 'Impermeabilizantes',
                                'descripcion' => 'Impermeabilizante premium con resistencia de 7 años, elaborado a base de resinas estiren-acrílicas, pigmentos inorgánicos y micro fibra de poliéster.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '1 m² por litro',
                                    'Resistencia' => '7 años',
                                    'Aplicación' => 'Techos y superficies exteriores'
                                ]
                            ],
                            [
                                'imagen' => 'imper_multi_pro_fibrantado.png',
                                'nombre' => 'Imper Multi Pro Fibrantado',
                                'precio' => 2120,
                                'tipo' => 'impermeabilizante',
                                'categoria' => 'Impermeabilizantes',
                                'descripcion' => 'Impermeabilizante fibrantado color terracota, con atributos acrílico elastoméricos creado en base agua.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '1 m² por litro',
                                    'Resistencia' => '10 años',
                                    'Aplicación' => 'Techos con fisuras'
                                ]
                            ],
                            [
                                'imagen' => 'impertek_19.png',
                                'nombre' => 'Imper-Tek',
                                'precio' => 1300,
                                'tipo' => 'impermeabilizante',
                                'categoria' => 'Impermeabilizantes',
                                'descripcion' => 'Impermeabilizante elaborado a base de resinas estiren-acrílicas y pigmentos inorgánicos.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros',
                                    'Colores' => 'Terracota / Blanco',
                                    'Tiempo de secado' => '45 minutos al tacto',
                                    'Rendimiento' => '1 m² por litro',
                                    'Resistencia' => '5 años',
                                    'Aplicación' => 'Techos planos'
                                ]
                            ],
                            [
                                'imagen' => 'super_rap_ultra.png',
                                'nombre' => 'Super Rap Ultra',
                                'precio' => 3254.99,
                                'tipo' => 'esmalte',
                                'categoria' => 'Esmaltes',
                                'descripcion' => 'Esmalte alquidálico modificado con estireno de secado rápido. Ideal para trabajos donde el secado de la pintura sea un factor fundamental.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón / Litro',
                                    'Colores' => '25 colores disponibles',
                                    'Tiempo de secado' => '10 minutos al tacto',
                                    'Rendimiento' => '8-10 m² por litro',
                                    'Acabados' => 'Brillante, satinado, metálico y mate',
                                    'Aplicación' => 'Muebles y superficies metálicas'
                                ]
                            ],
                            [
                                'imagen' => 'kiviforte.png',
                                'nombre' => 'Kivi Forte',
                                'precio' => 3090,
                                'tipo' => 'esmalte',
                                'categoria' => 'Esmaltes',
                                'descripcion' => 'Esmalte alquídico anticorrosivo de excelente rendimiento. Produce un acabado duro con máxima retención de color y resistencia a la intemperie.',
                                'detalles' => [
                                    'Presentación' => 'Cubeta de 19 litros / Galón / Litro',
                                    'Colores' => '19 colores disponibles',
                                    'Tiempo de secado' => '4 horas al tacto',
                                    'Rendimiento' => '7-9 m² por litro (a dos manos)',
                                    'Acabados' => 'Brillante, semimate, mate y metálico',
                                    'Aplicación' => 'Estructuras metálicas exteriores'
                                ]
                            ]
                        ];

                        foreach ($productos as $producto) {
                            $nombreMostrar = $producto['nombre'];
                            $precioFormateado = number_format($producto['precio'], 2);
                            
                            // Generar detalles técnicos para el modal
                            $detallesTecnicos = '';
                            foreach ($producto['detalles'] as $key => $value) {
                                $detallesTecnicos .= "<p><strong>$key:</strong> $value</p>";
                            }
                            
                            // Vista previa de detalles (mostrar solo los primeros 3)
                            $detallesPreview = '';
                            $counter = 0;
                            foreach ($producto['detalles'] as $key => $value) {
                                if ($counter < 3) {
                                    $detallesPreview .= "<p><strong>$key:</strong> $value</p>";
                                    $counter++;
                                } else {
                                    break;
                                }
                            }
                            
                            echo '
                            <div class="col-xl-3 col-lg-4 col-md-6" data-category="'.strtolower(str_replace(' ', '-', $producto['categoria'])).'" data-price="'.$producto['precio'].'">
                                <div class="gallery-page__single">
                                    <div class="gallery-page__img">
                                        <img src="'.$ROOT_PATH.'/assets/images/gallery/productos/'.$producto['imagen'].'" alt="'.$nombreMostrar.'">
                                        <div class="gallery-page__overlay">
                                            <div class="gallery-page__title">
                                                <h3>'.$nombreMostrar.'</h3>
                                            </div>
                                        </div>
                                        <div class="gallery-page__icon">
                                            <a class="img-popup" href="'.$ROOT_PATH.'/assets/images/gallery/productos/'.$producto['imagen'].'" 
                                               title="'.$nombreMostrar.'" 
                                               data-caption="<h3>'.$nombreMostrar.'</h3><p>'.$producto['descripcion'].'</p>'.$detallesTecnicos.'">
                                                <span class="icon-plus-symbol"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <div class="product-price">$'.$precioFormateado.'</div>
                                        <div class="product-technical">
                                            '.$detallesPreview.'
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
    
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
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
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300
                }
            });
            
            // Filtrado por categoría
            $('.categories-list a').click(function(e) {
                e.preventDefault();
                $('.categories-list a').removeClass('active');
                $(this).addClass('active');
                
                var category = $(this).text().toLowerCase().replace(' ', '-');
                if (category === 'todas-las-categorías') {
                    $('.col-xl-3').show();
                } else {
                    $('.col-xl-3').hide();
                    $('.col-xl-3[data-category="'+category+'"]').show();
                }
            });
            
            // Filtrado por precio
            $('.filter-button').click(function() {
                var maxPrice = $('#priceRange').val();
                $('.col-xl-3').each(function() {
                    var price = parseFloat($(this).data('price'));
                    if (price <= maxPrice) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
                $('.results-count').text('Mostrando productos hasta $'+maxPrice);
            });
            
            // Ordenar productos
            $('#sort').change(function() {
                var sortBy = $(this).val();
                var $container = $('.row');
                var $items = $('.col-xl-3');
                
                $items.sort(function(a, b) {
                    var aPrice = parseFloat($(a).data('price'));
                    var bPrice = parseFloat($(b).data('price'));
                    var aDuration = $(a).find('.product-technical').text().match(/Duración|Resistencia.*?(\d+)/);
                    var bDuration = $(b).find('.product-technical').text().match(/Duración|Resistencia.*?(\d+)/);
                    aDuration = aDuration ? parseInt(aDuration[1]) : 0;
                    bDuration = bDuration ? parseInt(bDuration[1]) : 0;
                    
                    switch(sortBy) {
                        case 'price_asc':
                            return aPrice - bPrice;
                        case 'price_desc':
                            return bPrice - aPrice;
                        case 'duration':
                            return bDuration - aDuration;
                        default:
                            return 0;
                    }
                }).appendTo($container);
            });
        });
    </script>
</body>
</html>