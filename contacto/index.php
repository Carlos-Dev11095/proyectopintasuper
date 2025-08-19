<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/proyectopintasuper/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/proyectopintasuper/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/proyectopintasuper/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/proyectopintasuper/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Plantilla HTML 5 Ambed" />
    
    <style>
        /* Estilos generales para centrar contenido */
        .page-wrapper {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            overflow-x: hidden;
        }

        /* Estilos para la sección de contacto */
        .contact-page {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .contact-page__details {
            width: 100%;
            text-align: center;
        }

        /* Estilos para la lista de detalles de contacto */
        .contact-page__details-list li {
            flex: 1;
            min-width: 300px;
            max-width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .contact-page__details-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 0;
            list-style: none;
        }

        .contact-page__details-list li {
            flex-basis: 300px;
            max-width: 380px;
            background: #f9f9f9;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .contact-page__details-list li:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        /* Estilo para la imagen del mapa */
        .sucursal-thumbnail {
            width: 500px;
            height: 500px;
            margin: 0;
            display: block;
        }
                
        .sucursal-thumbnail:hover {
            transform: scale(1.03);
        }

        /* Ajustes para dispositivos móviles */
        @media (max-width: 768px) {
            .contact-page__details-list li {
                min-width: 100%;
            }
        }
        
        /* Estilo para el título de sucursal */
        .contact-page__details-list li span {
            display: block;
            font-size: 1.5rem;
            font-weight: bold;
            color: #2a5f8b;
            margin-bottom: 0;
        }
        
        /* Estilo para la información de contacto */
        .contact-page__details-list li p {
            margin: 0;
            color: #555;
            text-align: center;
        }
        
        .contact-page__details-list li a {
            color: #2a5f8b;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .contact-page__details-list li a:hover {
            color: #1a3a5a;
            text-decoration: underline;
        }
        
        /* Estilo para el texto "Click para ampliar" */
        .text-muted {
            display: block;
            margin-top: 0;
            font-size: 0.85rem;
            color: #777;
        }
        
        /* Estilo para las redes sociales */
        .contact-page__social {
            margin-top: 40px;
        }
        
        .contact-page__social a {
            display: inline-block;
            margin: 0 10px;
            font-size: 1.5rem;
            color: #2a5f8b;
            transition: transform 0.3s ease, color 0.3s ease;
        }
        
        .contact-page__social a:hover {
            transform: translateY(-3px);
            color: #1a3a5a;
        }

        .banner_title {
            color: #f7931e !important;
        }
    </style>
    
    <?php include_once __DIR__ . '/../bin/css.php'; ?>
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

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
                                <div class="section-title text-center">
                                    <h2 class="section-title__title" style="color: #000081;">Nuestras Sucursales</h2>
                                    <p>en la Ciudad de Morelia, Mich.</p>
                                    <p>Horario de atención: Lunes a Viernes de 8:30 am a 6:30 pm y Sábado de 8:30 am a 2:30 pm</p>
                                </div>
                                
                                <!-- Listado de sucursales -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="sucursal-box text-center">
                                            <h3>Matríz Prados Verdes</h3>
                                            <a href="https://maps.app.goo.gl/gxspcPhUfVaDTrpg6" data-bs-target="#sucursalMatriz" target="_blank">
                                            <p>Av. Guadalupe Victoria #1560 Col. Prados Verdes</p>
                                            </a>
                                            <p><a href="tel:4431618135">Tel. (443) 161 81 35</a></p>
                                            <a href="https://maps.app.goo.gl/gxspcPhUfVaDTrpg6" data-bs-target="#sucursalMatriz" target="_blank">
                                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_matriz.png" alt="Sucursal Matríz" class="sucursal-thumbnail img-fluid d-block mx-auto">
                                                <small class="text-muted">(Click para ampliar)</small>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="sucursal-box text-center">
                                            <h3>Jardines</h3>
                                            <a href="https://maps.app.goo.gl/aAonfsjbqBxusgK6A" data-bs-target="#sucursalJardines" target="_blank">
                                            <p>Av. Prol. Fuentes de Villalongín #232 Local 2 Col. Fuentes de Morelia</p>
                                            <p><a href="tel:4432733218">Tel. (443) 273 32 18</a></p>
                                            <a href="https://maps.app.goo.gl/aAonfsjbqBxusgK6A" data-bs-target="#sucursalJardines" target="_blank">
                                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_jardines.png" alt="Sucursal Jardines" class="sucursal-thumbnail img-fluid d-block mx-auto">
                                                <small class="text-muted">(Click para ampliar)</small>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="sucursal-box text-center">
                                            <h3>Lomas del Valle</h3>
                                            <a href="https://maps.app.goo.gl/n4kUKSzB6yHxhMUG6" data-bs-target="#sucursalLomasDelValle" target="_blank">
                                            <p>Av. Siervo de la Nación #500-1 Col. Lomas del Valle</p>
                                            <p><a href="tel:4431287064">Tel. (443) 128 70 64</a></p>
                                            <a href="https://maps.app.goo.gl/n4kUKSzB6yHxhMUG6" data-bs-target="#sucursalLomasDelValle" target="_blank">
                                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_lomas_del_valle.png" alt="Sucursal Lomas del Valle" class="sucursal-thumbnail img-fluid d-block mx-auto">
                                                <small class="text-muted">(Click para ampliar)</small>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="sucursal-box text-center">
                                            <h3>Realito</h3>
                                            <a href="https://maps.app.goo.gl/tmmamvm7tFd36B3fA" data-bs-target="#sucursalRealito" target="_blank">
                                            <p>Periférico Paseo de la República #4911 Col. Ignacio Zaragoza</p>
                                            <p><a href="tel:4432259324">Tel. (443) 225 93 24</a></p>
                                            <a href="https://maps.app.goo.gl/tmmamvm7tFd36B3fA" data-bs-target="#sucursalRealito" target="_blank">
                                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_realito.png" alt="Sucursal Realito" class="sucursal-thumbnail img-fluid d-block mx-auto">
                                                <small class="text-muted">(Click para ampliar)</small>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="sucursal-box text-center">
                                            <h3>Loma Real</h3>
                                            <a href="https://maps.app.goo.gl/hUvd2dHyK6tSQW7fA" data-bs-target="#sucursalLomaReal" target="_blank">
                                            <p>Av. Torreón Nuevo #560 Col. Loma Real</p>
                                            <p><a href="tel:4431000259">Tel. (443) 100 02 59</a></p>
                                            <a href="https://maps.app.goo.gl/hUvd2dHyK6tSQW7fA" data-bs-target="#sucursalLomaReal" target="_blank">
                                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/sucursal_loma_real.png" alt="Sucursal Loma Real" class="sucursal-thumbnail img-fluid d-block mx-auto">
                                                <small class="text-muted">(Click para ampliar)</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Redes sociales -->
                                <div class="contact-page__social text-center mt-5">
                                    <a href="https://www.facebook.com/PintaSuperPinturas" class="fab fa-facebook-square" target="_blank" rel="noopener noreferrer"></a>
                                    <a href="https://www.instagram.com/pintasuper" class="fab fa-instagram" target="_blank" rel="noopener noreferrer"></a>
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
</body>
</html>