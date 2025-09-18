<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper - Contacto</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/proyectopintasuper/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/proyectopintasuper/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/proyectopintasuper/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/proyectopintasuper/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Pintasuper - Tienda de pinturas en Morelia con múltiples sucursales" />
    
    <style>
        /* Estilos generales */
        .page-wrapper {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            overflow-x: hidden;
        }

        .contact-page {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .banner_title {
            color: #f7931e !important;
        }
        
        /* Estilos para pestañas de sucursales - MEJORADO PARA MÓVIL */
        .sucursales-tabs {
            margin-top: 40px;
            position: relative;
        }
        
        .nav-tabs-container {
            position: relative;
            margin-bottom: 20px;
        }
        
        .nav-tabs-scroll {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none; /* Firefox */
            scroll-behavior: smooth;
            padding-bottom: 5px; /* Espacio para el indicador de scroll */
        }
        
        .nav-tabs-scroll::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Edge */
        }
        
        .nav-tabs {
            border-bottom: 2px solid #2a5f8b;
            display: inline-flex;
            flex-wrap: nowrap;
            min-width: 100%;
            position: relative;
        }
        
        .nav-tabs .nav-item {
            margin-bottom: -2px;
            flex-shrink: 0;
        }
        
        .nav-tabs .nav-link {
            border: none;
            border-bottom: 3px solid transparent;
            color: #555;
            font-weight: 600;
            padding: 12px 16px;
            transition: all 0.3s ease;
            white-space: nowrap;
            font-size: 14px;
            position: relative;
        }
        
        /* Indicador de que hay más pestañas en móvil */
        .scroll-indicator {
            position: absolute;
            top: 0;
            right: 0;
            width: 30px;
            height: 100%;
            background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 100%);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 5px;
        }
        
        .scroll-indicator.left {
            left: 0;
            right: auto;
            background: linear-gradient(270deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 100%);
            justify-content: flex-start;
            padding-left: 5px;
        }
        
        .scroll-indicator i {
            color: #2a5f8b;
            font-size: 16px;
        }
        
        .nav-tabs .nav-link:hover {
            border-color: #f7931e;
            color: #2a5f8b;
        }
        
        .nav-tabs .nav-link.active {
            color: #2a5f8b;
            background-color: transparent;
            border-color: #2a5f8b;
        }
        
        /* Mejorar la interacción táctil */
        .nav-tabs .nav-link:active {
            background-color: rgba(247, 147, 30, 0.1);
            transform: scale(0.98);
        }
        
        .tab-content {
            padding: 30px 0;
        }
        
        /* Estilos para el contenido de cada sucursal */
        .sucursal-content {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: flex-start;
        }
        
        .sucursal-info {
            flex: 1;
            min-width: 300px;
        }
        
        .sucursal-image {
            flex: 1;
            min-width: 300px;
        }
        
        .sucursal-thumbnail {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        
        .sucursal-thumbnail:hover {
            transform: scale(1.03);
        }
        
        .whatsapp-btn {
            display: inline-flex;
            align-items: center;
            background-color: #25D366;
            color: white !important;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: 600;
            margin-top: 15px;
            transition: background-color 0.3s ease;
            text-decoration: none !important;
        }
        
        .whatsapp-btn:hover {
            background-color: #128C7E;
            color: white;
        }
        
        .whatsapp-btn i {
            margin-right: 8px;
            font-size: 1.2rem;
        }
        
        /* Estilos para el mapa general */
        .general-map-section {
            margin: 60px 0;
        }
        
        .general-map {
            width: 100%;
            height: 450px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
            margin-top: 20px;
        }
        
        .general-map iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* Estilos para la compra en línea - ACTUALIZADO */
        .online-purchase {
            background-color: #f9f9f9;
            padding: 40px;
            border-radius: 10px;
            margin: 40px 0;
        }
        
        .product-category {
            margin-bottom: 30px;
        }
        
        .category-title {
            color: #2a5f8b;
            border-bottom: 2px solid #f7931e;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .product-card {
            background: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }
        
        .product-name {
            font-weight: 600;
            color: #2a5f8b;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        
        .btn-compra {
            display: block;
            background-color: #2a5f8b;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.3s ease;
            text-align: center;
            margin-top: 10px;
        }
        
        .btn-compra:hover {
            background-color: #1a3a5a;
            color: white;
        }
        
        .mercado-logo {
            max-width: 200px;
            margin: 0 auto 20px;
            display: block;
        }
        
        /* Estilos para enlaces de dirección */
        .direccion-link {
            color: #2a5f8b;
            text-decoration: none;
            transition: color 0.3s ease;
            display: inline-block;
            margin-top: 5px;
        }
        
        .direccion-link:hover {
            color: #f7931e;
            text-decoration: underline;
        }
        
        .direccion-link i {
            margin-right: 5px;
        }
        
        /* Estilos para mapas individuales */
        .sucursal-map {
            width: 100%;
            height: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        
        .sucursal-map iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .map-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2a5f8b;
            margin-top: 25px;
            margin-bottom: 10px;
        }
        
        /* Ajustes responsivos */
        @media (max-width: 768px) {
            .nav-tabs-container {
                margin-bottom: 25px;
            }
            
            .nav-tabs .nav-link {
                padding: 10px 12px;
                font-size: 13px;
            }
            
            .sucursal-content {
                flex-direction: column;
            }
            
            .general-map {
                height: 300px;
            }
            
            .sucursal-map {
                height: 250px;
            }
            
            .online-purchase {
                padding: 25px 20px;
            }
            
            .product-grid {
                grid-template-columns: 1fr;
            }
            
            /* Mostrar indicadores de scroll en móvil */
            .scroll-indicator {
                opacity: 1;
            }
        }
        
        @media (max-width: 480px) {
            .nav-tabs .nav-link {
                padding: 8px 10px;
                font-size: 12px;
            }
            
            .sucursal-info, 
            .sucursal-image {
                min-width: 100%;
            }
        }
    </style>
    
    <?php include_once __DIR__ . '/../bin/css.php'; ?>
</head>

<body>

    <?php require '../bin/preloader.php'; ?>

    <div class="page-wrapper">
        <?php require_once __DIR__ . '/../bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        
        <!-- Sección de encabezado -->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>/">INICIO</a></li>
                        <li><span>/</span></li>
                        <li>CONTACTO</li>
                    </ul>
                    <h2 class="banner_title">CONTACTO</h2>
                </div>
            </div>
        </section>
        
        <!-- Sección de contacto -->
        <section class="contact-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact-page__right">
                            <div class="contact-page__details">
                                
                                <!-- Mapa general con todas las sucursales -->
                                <div class="general-map-section">
                                    <div class="section-title text-center">
                                        <h3 class="section-title__title" style="color: #000081;">Ubicación de todas nuestras sucursales</h3>
                                    </div>

                                </div>
                                
                                <!-- Pestañas de sucursales - MEJORADO -->
                                <div class="sucursales-tabs">
                                    <div class="nav-tabs-container">
                                        <div class="scroll-indicator left">
                                            <i class="fas fa-chevron-left"></i>
                                        </div>
                                        <div class="nav-tabs-scroll" id="tabsScroll">
                                            <ul class="nav nav-tabs" id="sucursalesTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="matriz-tab" data-bs-toggle="tab" data-bs-target="#matriz" type="button" role="tab" aria-controls="matriz" aria-selected="true">Matríz</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="jardines-tab" data-bs-toggle="tab" data-bs-target="#jardines" type="button" role="tab" aria-controls="jardines" aria-selected="false">Jardines</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="lomas-tab" data-bs-toggle="tab" data-bs-target="#lomas" type="button" role="tab" aria-controls="lomas" aria-selected="false">Lomas del Valle</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="realito-tab" data-bs-toggle="tab" data-bs-target="#realito" type="button" role="tab" aria-controls="realito" aria-selected="false">Realito</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="loma-real-tab" data-bs-toggle="tab" data-bs-target="#loma-real" type="button" role="tab" aria-controls="loma-real" aria-selected="false">Loma Real</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="scroll-indicator">
                                            <i class="fas fa-chevron-right"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="tab-content" id="sucursalesTabContent">
                                        <!-- Sucursal Matríz -->
                                        <div class="tab-pane fade show active" id="matriz" role="tabpanel" aria-labelledby="matriz-tab">
                                            <div class="sucursal-content">
                                                <div class="sucursal-info">
                                                    <h3>Matríz Prados Verdes</h3>
                                                    <p><strong>Dirección:</strong> Av. Guadalupe Victoria #1560 Col. Prados Verdes</p>
                                                    <a href="https://maps.app.goo.gl/gxspcPhUfVaDTrpg6" class="direccion-link" target="_blank">
                                                        <i class="fas fa-map-marker-alt"></i> Ver en Google Maps
                                                    </a>
                                                    <p><strong>Teléfono:</strong> <a href="tel:4431618135">(443) 161 81 35</a></p>
                                                    <p><strong>Horario:</strong> Lunes a Viernes: 8:30 am - 6:30 pm, Sábado: 8:30 am - 2:30 pm</p>
                                                    
                                                    <a href="https://wa.me/524431618135?text=Hola,%20me%20interesa%20obtener%20más%20información%20sobre%20sus%20productos" class="whatsapp-btn" target="_blank">
                                                        <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                                                    </a>
                                                </div>
                                                <div class="sucursal-image">
                                                    <a href="https://maps.app.goo.gl/gxspcPhUfVaDTrpg6" target="_blank">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_matriz.png" alt="Sucursal Matríz" class="sucursal-thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="map-title">Ubicación en el mapa:</div>
                                            <div class="sucursal-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.885839554273!2d-101.196944!3d19.717483899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e5d42f5ee23%3A0x5707f91f3774bb87!2sAv.%20Guadalupe%20Victoria%201560%2C%20Prados%20Verdes%2C%2058110%20Morelia%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1757029816522!5m2!1ses-419!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                        
                                        <!-- Sucursal Jardines -->
                                        <div class="tab-pane fade" id="jardines" role="tabpanel" aria-labelledby="jardines-tab">
                                            <div class="sucursal-content">
                                                <div class="sucursal-info">
                                                    <h3>Jardines</h3>
                                                    <p><strong>Dirección:</strong> Av. Prol. Fuentes de Villalongín #232 Local 2 Col. Fuentes de Morelia</p>
                                                    <a href="https://maps.app.goo.gl/aAonfsjbqBxusgK6A" class="direccion-link" target="_blank">
                                                        <i class="fas fa-map-marker-alt"></i> Ver en Google Maps
                                                    </a>
                                                    <p><strong>Teléfono:</strong> <a href="tel:4432733218">(443) 273 32 18</a></p>
                                                    <p><strong>Horario:</strong> Lunes a Viernes: 8:30 am - 6:30 pm, Sábado: 8:30 am - 2:30 pm</p>
                                                    
                                                    <a href="https://wa.me/524432733218?text=Hola,%20me%20interesa%20obtener%20más%20información%20sobre%20sus%20productos" class="whatsapp-btn" target="_blank">
                                                        <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                                                    </a>
                                                </div>
                                                <div class="sucursal-image">
                                                    <a href="https://maps.app.goo.gl/aAonfsjbqBxusgK6A" target="_blank">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_jardines.png" alt="Sucursal Jardines" class="sucursal-thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="map-title">Ubicación en el mapa:</div>
                                            <div class="sucursal-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.965561317032!2d-101.2011499!3d19.6714746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0d942e9253e9%3A0x1671b927f30cf917!2sPinta%20Super%20Jardines!5e0!3m2!1ses-419!2smx!4v1757030321582!5m2!1ses-419!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                        
                                        <!-- Sucursal Lomas del Valle -->
                                        <div class="tab-pane fade" id="lomas" role="tabpanel" aria-labelledby="lomas-tab">
                                            <div class="sucursal-content">
                                                <div class="sucursal-info">
                                                    <h3>Lomas del Valle</h3>
                                                    <p><strong>Dirección:</strong> Av. Siervo de la Nación #500-1 Col. Lomas del Valle</p>
                                                    <a href="https://maps.app.goo.gl/n4kUKSzB6yHxhMUG6" class="direccion-link" target="_blank">
                                                        <i class="fas fa-map-marker-alt"></i> Ver en Google Maps
                                                    </a>
                                                    <p><strong>Teléfono:</strong> <a href="tel:4431287064">(443) 128 70 64</a></p>
                                                    <p><strong>Horario:</strong> Lunes a Viernes: 8:30 am - 6:30 pm, Sábado: 8:30 am - 2:30 pm</p>
                                                    
                                                    <a href="https://wa.me/524431287064?text=Hola,%20me%20interesa%20obtener%20más%20información%20sobre%20sus%20productos" class="whatsapp-btn" target="_blank">
                                                        <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                                                    </a>
                                                </div>
                                                <div class="sucursal-image">
                                                    <a href="https://maps.app.goo.gl/n4kUKSzB6yHxhMUG6" target="_blank">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_lomas_del_valle.png" alt="Sucursal Lomas del Valle" class="sucursal-thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="map-title">Ubicación en el mapa:</div>
                                            <div class="sucursal-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.5607357306476!2d-101.2290199!3d19.6887372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0c202fe394bf%3A0x14eea922c5409583!2sPinta%20Super%20Lomas%20del%20Valle!5e0!3m2!1ses-419!2smx!4v1757030445586!5m2!1ses-419!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                        
                                        <!-- Sucursal Realito -->
                                        <div class="tab-pane fade" id="realito" role="tabpanel" aria-labelledby="realito-tab">
                                            <div class="sucursal-content">
                                                <div class="sucursal-info">
                                                    <h3>Realito</h3>
                                                    <p><strong>Dirección:</strong> Periférico Paseo de la República #4911 Col. Ignacio Zaragoza</p>
                                                    <a href="https://maps.app.goo.gl/tmmamvm7tFd36B3fA" class="direccion-link" target="_blank">
                                                        <i class="fas fa-map-marker-alt"></i> Ver en Google Maps
                                                    </a>
                                                    <p><strong>Teléfono:</strong> <a href="tel:4432259324">(443) 225 93 24</a></p>
                                                    <p><strong>Horario:</strong> Lunes a Viernes: 8:30 am - 6:30 pm, Sábado: 8:30 am - 2:30 pm</p>
                                                    
                                                    <a href="https://wa.me/524432259324?text=Hola,%20me%20interesa%20obtener%20más%20información%20sobre%20sus%20productos" class="whatsapp-btn" target="_blank">
                                                        <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                                                    </a>
                                                </div>
                                                <div class="sucursal-image">
                                                    <a href="https://maps.app.goo.gl/tmmamvm7tFd36B3fA" target="_blank">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_realito.png" alt="Sucursal Realito" class="sucursal-thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="map-title">Ubicación en el mapa:</div>
                                            <div class="sucursal-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60100.17757458397!2d-101.2433213!3d19.701505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e585091311b%3A0x67b2d00361d15547!2sPinta%20Super%20Realito!5e0!3m2!1ses-419!2smx!4v1757031011864!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>  
                                        </div>
                                        
                                        <!-- Sucursal Loma Real -->
                                        <div class="tab-pane fade" id="loma-real" role="tabpanel" aria-labelledby="loma-real-tab">
                                            <div class="sucursal-content">
                                                <div class="sucursal-info">
                                                    <h3>Loma Real</h3>
                                                    <p><strong>Dirección:</strong> Av. Torreón Nuevo #560 Col. Loma Real</p>
                                                    <a href="https://maps.app.goo.gl/hUvd2dHyK6tSQW7fA" class="direccion-link" target="_blank">
                                                        <i class="fas fa-map-marker-alt"></i> Ver en Google Maps
                                                    </a>
                                                    <p><strong>Teléfono:</strong> <a href="tel:4431000259">(443) 100 02 59</a></p>
                                                    <p><strong>Horario:</strong> Lunes a Viernes: 8:30 am - 6:30 pm, Sábado: 8:30 am - 2:30 pm</p>
                                                    
                                                    <a href="https://wa.me/524431000259?text=Hola,%20me%20interesa%20obtener%20más%20información%20sobre%20sus%20productos" class="whatsapp-btn" target="_blank">
                                                        <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                                                    </a>
                                                </div>
                                                <div class="sucursal-image">
                                                    <a href="https://maps.app.goo.gl/hUvd2dHyK6tSQW7fA" target="_blank">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_loma_real.png" alt="Sucursal Loma Real" class="sucursal-thumbnail">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="map-title">Ubicación en el mapa:</div>
                                            <div class="sucursal-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.585514293871!2d-101.19873760000002!3d19.7302631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e50f77bf59f%3A0x8dd225f5da5f4062!2sPinta%20Super%20Loma%20Real!5e0!3m2!1ses-419!2smx!4v1757031323331!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Sección de compra en línea - ACTUALIZADA -->
                                <div class="online-purchase">
                                    <div class="section-title text-center">
                                        <h3 class="section-title__title" style="color: #000081;">Compra en Línea</h3>
                                        <p>¿Prefieres comprar desde la comodidad de tu hogar? Visita nuestros productos en Mercado Libre</p>
                                    </div>
                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/gallery/mercado-libre-logo.png" alt="Mercado Libre" class="mercado-logo">
                                    
                                    <!-- Cubetas 19 Litros -->
                                    <div class="product-category">
                                        <h4 class="category-title">CUBETAS 19 LITROS - PINTURAS VINÍLICAS</h4>
                                        <div class="product-grid">
                                            <div class="product-card">
                                                <div class="product-name">PLATINO GOLD CUBETA 19 LITROS</div>
                                                <a href="https://www.mercadolibre.com.mx/cubeta-pintura-vinilica-pinta-super-platino-varios-colores/up/MLMU3063240800?pdp_filters=item_id:MLM3590556910" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">DORADA CUBETA 19 LITROS</div>
                                                <a href="https://www.mercadolibre.com.mx/cubeta-pintura-vinilica-pinta-super-dorada-varios-colores/up/MLMU3063168880?pdp_filters=item_id:MLM3590401512" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">ONIX CUBETA 19 LITROS</div>
                                                <a href="https://www.mercadolibre.com.mx/cubeta-pintura-vinilica-pinta-super-onix-varios-colores/up/MLMU3057867167?pdp_filters=item_id:MLM3590579632" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">ZAFIRO CUBETA 19 LITROS</div>
                                                <a href="https://www.mercadolibre.com.mx/cubeta-pintura-19lt-vinilica-pinta-super-zafiro/up/MLMU3062814638?pdp_filters=item_id:MLM2255268135" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Galones Pintura Vinílica -->
                                    <div class="product-category">
                                        <h4 class="category-title">GALONES - PINTURAS VINÍLICAS</h4>
                                        <div class="product-grid">
                                            <div class="product-card">
                                                <div class="product-name">PLATINO GOLD GALÓN</div>
                                                <a href="https://www.mercadolibre.com.mx/pintura-vinilica-galon-4lt-pinta-super-platino-varios-colores/up/MLMU3078992805?pdp_filters=item_id:MLM3603523854" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">DORADA GALÓN</div>
                                                <a href="https://www.mercadolibre.com.mx/pintura-vinilica-galon-4lt-pinta-super-dorada-varios-colores/up/MLMU3078992805?pdp_filters=item_id:MLM3603523854" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">ONIX GALÓN</div>
                                                <a href="https://www.mercadolibre.com.mx/pintura-vinilica-galon-4lt-pinta-super-onix-varios-colores/up/MLMU3084333274?pdp_filters=item_id:MLM2264010401" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">ZAFIRO GALÓN</div>
                                                <a href="https://www.mercadolibre.com.mx/pintura-vinilica-interiores-galon-4lt-pinta-super-zafiro/up/MLMU3078984153?pdp_filters=item_id:MLM2264022661" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Impermeabilizantes -->
                                    <div class="product-category">
                                        <h4 class="category-title">IMPERMEABILIZANTES - CUBETA 19 LITROS</h4>
                                        <div class="product-grid">
                                            <div class="product-card">
                                                <div class="product-name">IMPER-TEK CUBETA 19 LITROS</div>
                                                <a href="https://www.mercadolibre.com.mx/impermeabilizante-acrilico-rojo-3-anos-pinta-super-impertek/up/MLMU3064874478?pdp_filters=item_id:MLM3591629290" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">IMPER MULTI PREMIUM - 19 LITROS</div>
                                                <a href="https://www.mercadolibre.com.mx/impermeabilizante-premium-3-anos-blancorojo-pinta-super/up/MLMU3059911991?pdp_filters=item_id:MLM3591943804" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">IMPER MULTI PRO FIBRATADO 19 LITROS</div>
                                                <a href="https://www.mercadolibre.com.mx/impermeabilizante-fibratado-10-anos-blancorojo-pinta-super/up/MLMU3064928280?pdp_filters=item_id:MLM3591768586" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Esmaltes -->
                                    <div class="product-category">
                                        <h4 class="category-title">ESMALTE SUPER RAP Y KIVI FORTE</h4>
                                        <div class="product-grid">
                                            <div class="product-card">
                                                <div class="product-name">SUPER RAP CUBETA 19 LITROS</div>
                                                <a href="https://www.mercadolibre.com.mx/pintura-esmalte-secado-rapido-19lt-pinta-super-super-rap/up/MLMU3083620188?pdp_filters=item_id:MLM3603230162" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">SUPER RAP GALÓN</div>
                                                <a href="https://www.mercadolibre.com.mx/pintura-esmalte-secado-rapido-4lt-pinta-super-super-rap/up/MLMU3078270399?pdp_filters=item_id:MLM3603281616" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">KIVI FORTE CUBETA 19 LITROS</div>
                                                <a href="https://www.mercadolibre.com.mx/pintura-esmalte-19lt-pinta-super-kivi-forte/up/MLMU3078210561?pdp_filters=item_id:MLM3603202610" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                            <div class="product-card">
                                                <div class="product-name">KIVI FORTE GALÓN</div>
                                                <a href="https://www.mercadolibre.com.mx/pintura-esmalte-4lt-pinta-super-kivi-forte/up/MLMU3083556182?pdp_filters=item_id:MLM3603293460" class="btn-compra" target="_blank">Comprar ahora</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

        <?php include_once __DIR__ . '/../bin/footer.php'; ?>
    </div>

    <?php require_once __DIR__ . '/../bin/js.php';?>
    
    <script>
    // Script para mejorar la experiencia móvil de las pestañas
    document.addEventListener('DOMContentLoaded', function() {
        const tabsScroll = document.getElementById('tabsScroll');
        const scrollIndicators = document.querySelectorAll('.scroll-indicator');
        
        // Función para verificar la posición del scroll y mostrar/ocultar indicadores
        function checkScrollPosition() {
            if (tabsScroll.scrollLeft <= 10) {
                scrollIndicators[0].style.opacity = '0'; // Ocultar indicador izquierdo
            } else {
                scrollIndicators[0].style.opacity = '1'; // Mostrar indicador izquierdo
            }
            
            if (tabsScroll.scrollWidth - tabsScroll.scrollLeft - tabsScroll.clientWidth <= 10) {
                scrollIndicators[1].style.opacity = '0'; // Ocultar indicador derecho
            } else {
                scrollIndicators[1].style.opacity = '1'; // Mostrar indicador derecho
            }
        }
        
        // Verificar posición inicial
        checkScrollPosition();
        
        // Verificar posición al hacer scroll
        tabsScroll.addEventListener('scroll', checkScrollPosition);
        
        // Ajustar en redimensionamiento de ventana
        window.addEventListener('resize', checkScrollPosition);
        
        // Mejorar la accesibilidad táctil
        const tabLinks = document.querySelectorAll('.nav-link');
        tabLinks.forEach(link => {
            link.addEventListener('touchstart', function() {
                this.style.transform = 'scale(0.98)';
            });
            
            link.addEventListener('touchend', function() {
                this.style.transform = '';
            });
        });
    });
    </script>
</body>
</html>