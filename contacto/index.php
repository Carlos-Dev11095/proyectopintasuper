<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <!-- iconos favoritos -->
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
/* Estilos para cada elemento de la lista (cada tarjeta de sucursal) */
        .contact-page__details-list li {
            flex: 1;
            min-width: 300px;
            max-width: 400px;
            /* ... other styles ... */

            /* APLICAMOS FLEXBOX AL CONTENIDO INTERNO DEL LI */
            display: flex; /* Convierte el li en un contenedor flex */
            flex-direction: column; /* Apila los elementos hijos verticalmente */
            align-items: center; /* Centra los elementos hijos horizontalmente */
            gap: 5px; /* Controla el espacio vertical entre los elementos dentro de CADA TARJETA */
        }
    /* Estilos para cada elemento de la lista (cada tarjeta de sucursal) */
/* Estilos para cada elemento de la lista (cada tarjeta de sucursal) */
/* Estilos para la lista de detalles de contacto */
.contact-page__details-list {
    display: flex;
    flex-wrap: wrap; /* This ensures items wrap to the next line if there isn't enough space */
    justify-content: center; /* This centers the items in the row */
    gap: 20px; /* Adjust this value to control the space *between* the cards */
    padding: 0;
    list-style: none;
}

/* Estilos para cada elemento de la lista (cada tarjeta de sucursal) */
.contact-page__details-list li {
    /* flex: 1; /* This was making them all try to take equal space, sometimes pushing them to new lines unnecessarily */
    flex-basis: 300px; /* Gives a preferred width, allowing them to wrap and not stretch too much */
    max-width: 380px; /* Slightly reduce max-width to encourage more items per row if space allows */
    background: #f9f9f9;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;

    /* APLICAMOS FLEXBOX AL CONTENIDO INTERNO DEL LI (esto es para el contenido *dentro* de cada tarjeta) */
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px; /* Space *inside* each card between its elements */
}

/* Rest of your CSS remains the same */
    .contact-page__details-list li:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    /* Estilo para la imagen del mapa */
    .sucursal-thumbnail {
        width: 80px;
        height: 80px;
        margin: 0; /* Eliminamos el margen superior/inferior para que el gap del LI lo controle */
        display: block;
    }
            
    .sucursal-thumbnail:hover {
        transform: scale(1.03);
    }

    /* Estilos para los modales */
    .modal-dialog {
        max-width: 90%;
        margin: 2rem auto;
    }

    .modal-content {
        border-radius: 15px;
        overflow: hidden;
    }

    .modal-body img {
        width: 100%;
        height: auto;
        max-height: 70vh;
        object-fit: contain;
    }

    /* Ajustes para dispositivos móviles */
    @media (max-width: 768px) {
        .contact-page__details-list li {
            min-width: 100%;
        }
        
        .modal-dialog {
            max-width: 95%;
            margin: 1rem auto;
        }
    }
    
    /* Estilo para el título de sucursal */
    .contact-page__details-list li span {
        display: block;
        font-size: 1.5rem;
        font-weight: bold;
        color: #2a5f8b;
        margin-bottom: 0; /* Ajustado para que el 'gap' del LI maneje el espacio */
    }
    
    /* Estilo para la información de contacto */
    .contact-page__details-list li p {
        margin: 0; /* Ajustado para que el 'gap' del LI maneje el espacio */
        color: #555;
        text-align: center; /* Centra el texto dentro de los párrafos */
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
        margin-top: 0; /* Ajustado para que el 'gap' del LI maneje el espacio */
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
</style>
    <?php include_once __DIR__ . '/../bin/css.php'; ?>
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- style switcher -->
    <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Layout Options</h3>
        <div class="layout-feature" id="colorMode">
            <a href="" class="dark-switcher" data-theme="ambed-dark">Dark</a>
            <a href="" class="light-switcher" data-theme="ambed-light">Light</a>
            <button class="boxed-switcher">Boxed</button>
        </div>
    </div>
    <!-- end style switcher -->

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="container">
                    <div class="main-header__top-inner clearfix">
                        <div class="main-header__logo">
                            <a href="index.html">
                                <img src="/proyectopintasuper/assets/images/resources/logo-1.png" alt="" class="dark-logo">
                                <img src="/proyectopintasuper/assets/images/resources/logo-2.png" alt="" class="light-logo">
                            </a>
                        </div>
                        <div class="main-header__top-right">
                            <div class="main-header__top-right-content">
                                <div class="main-header__top-address-box">
                                    <ul class="list-unstyled main-header__top-address">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <div class="content">
                                                <p>Llame en cualquier momento</p>
                                                <h5><a href="tel:980009630">+ 98 (000) - 9630</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-message"></span>
                                            </div>
                                            <div class="content">
                                                <p>Envíe un correo</p>
                                                <h5><a href="mailto:ambed@company.com">ambed@company.com</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon icon--location">
                                                <span class="icon-location"></span>
                                            </div>
                                            <div class="content">
                                                <p>380 St Kilda Road</p>
                                                <h5>Melbourne, Australia</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-header__top-right-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__left">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown current megamenu">
                                            <a href="/proyectopintasuper/">Inicio</a>
                                        </li>
                                        <li>
                                            <a href="/proyectopintasuper/quienes_somos/">Nosotros</a>
                                        </li>
                                        <li>
                                            <a href="/proyectopintasuper/decorador_virtual/">Simulador Virtual</a>
                                        </li>
                                        <li>
                                            <a href="/proyectopintasuper/calcular_m2/">Calcular Materal</a>
                                        </li>
                                        <li>
                                            <a href="/proyectopintasuper/galeria/">Galeria</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">+ Páginas</a>
                                            <ul>
                                                <li><a href="team.html">Equipo</a></li>
                                                <li><a href="team-carousel.html">Carrusel de Equipo</a></li>
                                                <li><a href="team-details.html">Detalles del Equipo</a></li>
                                                <li><a href="testimonials.html">Testimonios</a></li>
                                                <li><a href="testimonials-carousel.html">Carrusel de Testimonios</a></li>
                                                <li><a href="gallery.html">Galería</a></li>
                                                <li><a href="gallery-carousel.html">Carrusel de Galería</a></li>
                                                <li><a href="faq.html">Preguntas Frecuentes</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="projects.html">Proyectos</a>
                                            <ul>
                                                <li><a href="projects.html">Nuestros Proyectos</a></li>
                                                <li><a href="projects-carousel.html">Carrusel de Proyectos</a></li>
                                                <li><a href="project-details.html">Detalles del Proyecto</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="services.html">Servicios</a>
                                            <ul>
                                                <li><a href="services.html">Servicios</a></li>
                                                <li><a href="services-carousel.html">Carrusel de Servicios</a></li>
                                                <li><a href="room-wallpapers.html">Papeles Pintados</a></li>
                                                <li><a href="wall-sheets.html">Planchas de Pared</a></li>
                                                <li><a href="wall-painting.html">Pintura de Pared</a></li>
                                                <li><a href="interior-designing.html">Diseño de Interiores</a></li>
                                                <li><a href="pvc-panels.html">Paneles de PVC</a></li>
                                                <li><a href="outdoor-design.html">Diseño Exterior</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Tienda</a>
                                            <ul>
                                                <li><a href="products.html">Productos</a></li>
                                                <li><a href="product-details.html">Detalles del Producto</a></li>
                                                <li><a href="cart.html">Carrito</a></li>
                                                <li><a href="checkout.html">Pago</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="blog.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-carousel.html">Carrusel de Blog</a></li>
                                                <li><a href="blog-sidebar.html">Barra Lateral del Blog</a></li>
                                                <li><a href="blog-sidebar-two.html">Barra Lateral del Blog 02</a></li>
                                                <li><a href="blog-sidebar-left.html">Barra Lateral Izquierda del Blog</a></li>
                                                <li><a href="blog-details.html">Detalles del Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/proyectopintasuper/contacto/">Contacto</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(/proyectopintasuper/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/proyectopintasuper">Inicio</a></li>
                        <li><span>/</span></li>
                        <li>Contacto</li>
                    </ul>
                    <h2>Contacto</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-page__right">
                            <div class="contact-page__details">
                                <div class="section-title text-center">
                                    <h2 class="section-title__title">Nuestras Sucursales</h2>
                                    <p>en la Ciudad de Morelia, Mich.</p>
                                    <p>Horario de atención: Lunes a Viernes de 8:30 am a 6:30 pm y Sábado de 8:30 am a 3:00 pm</p>
                                </div>
                                <ul class="list-unstyled contact-page__details-list">
                                    <!-- Sucursal Matríz -->
                                    <li>
                                        <span>Matríz</span>
                                        <p>Av. Guadalupe Victoria No.1560 Col. Prados Verdes.</p>
                                        <p><a href="tel:4433171400">Tel. (443) 3171400</a></p>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalMatriz">
                                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/mapa.png" alt="Sucursal Matríz" class="sucursal-thumbnail">
                                            <small class="text-muted">(Click para ampliar)</small>
                                        </a>
                                    </li>
                                    
                                    <!-- Sucursal Torreón -->
                                    <li>
                                        <span>Torreón</span>
                                        <p>Av. Torreón Nuevo No.560 Col. Loma Real.</p>
                                        <p><a href="tel:4432752004">Tel. (443) 2752004</a></p>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalTorreon">
                                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/mapa.png" alt="Sucursal Torreón" class="sucursal-thumbnail">
                                            <small class="text-muted">(Click para ampliar)</small>
                                        </a>
                                    </li>
                                    
                                    <!-- Sucursal Realito -->
                                    <li>
                                        <span>Realito</span>
                                        <p>Periférico Paseo de la República No.4911 (Frente al Realito).</p>
                                        <p><a href="tel:443275589">Tel. (443) 275589</a></p>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalRealito">
                                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/mapa.png" alt="Sucursal Realito" class="sucursal-thumbnail">
                                            <small class="text-muted">(Click para ampliar)</small>
                                        </a>
                                    </li>
                                </ul>
                                
                                <!-- Redes sociales -->
                                <div class="contact-page__social text-center mt-4">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!-- Modales para las imágenes -->
        <!-- Modal Matríz -->
        <div class="modal fade" id="modalMatriz" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sucursal Matríz</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/matriz.jpg" alt="Sucursal Matríz" class="img-fluid">
                        <p class="mt-3">Av. Guadalupe Victoria No.1560 Col. Prados Verdes</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Torreón -->
        <div class="modal fade" id="modalTorreon" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sucursal Torreón</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/torreon.jpg" alt="Sucursal Torreón" class="img-fluid">
                        <p class="mt-3">Av. Torreón Nuevo No.560 Col. Loma Real</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Realito -->
        <div class="modal fade" id="modalRealito" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sucursal Realito</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/sucursales/realito.jpg" alt="Sucursal Realito" class="img-fluid">
                        <p class="mt-3">Periférico Paseo de la República No.4911 (Frente al Realito)</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="index.html" aria-label="logo image"><img src="/proyectopintasuper/assets/images/resources/footer-logo.png" width="155" alt="" /></a>
                </div>
                <div class="mobile-nav__container"></div>
                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:needhelp@packageName__.com">needhelp@ambed.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:666-888-0000">666 888 0000</a>
                    </li>
                </ul>
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label>
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="icon-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

        <section class="newsletter">
            <div class="container">
                <div class="newsletter__inner wow fadeInUp" data-wow-delay="100ms">
                    <div class="newsletter-shape-1" style="background-image: url(/proyectopintasuper/assets/images/shapes/newsletter-shape-1.png);"></div>
                    <div class="newsletter__left">
                        <h3 class="newsletter__title">¡Descubre Nuestras Últimas Novedades!</h3>
                        <p class="newsletter__text">Explora nuestra colección de papeles pintados y pinturas de alta calidad.</p>
                    </div>
                </div>
            </div>
        </section>

        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(/proyectopintasuper/assets/images/backgrounds/site-footer-bg.jpg);"></div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.html"><img src="/proyectopintasuper/assets/images/resources/footer-logo.png" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">Trabajamos con pasión asumiendo desafíos y creando nuevos en el sector publicitario.</p>
                                </div>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Explorar</h3>
                                <ul class="footer-widget__explore-list list-unstyled clearfix">
                                    <li><a href="about.html">Nosotros</a></li>
                                    <li><a href="contact.html">Contacto</a></li>
                                    <li><a href="team.html">Nuestro equipo</a></li>
                                    <li><a href="services.html">Nuestros servicios</a></li>
                                    <li><a href="projects.html">Proyectos recientes</a></li>
                                    <li><a href="contact.html">Precios y planes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__services clearfix">
                                <h3 class="footer-widget__title">Servicios</h3>
                                <ul class="footer-widget__services-list list-unstyled clearfix">
                                    <li><a href="room-wallpapers.html">Papel tapiz para habitaciones</a></li>
                                    <li><a href="wall-painting.html">Pintura mural</a></li>
                                    <li><a href="wall-sheets.html">Láminas para pared</a></li>
                                    <li><a href="outdoor-design.html">Diseños exteriores</a></li>
                                    <li><a href="pvc-panels.html">Paneles de PVC</a></li>
                                    <li><a href="interior-designing.html">Diseño de interiores</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Contacto</h3>
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <div class="text">
                                            <h5>Llama en cualquier momento</h5>
                                            <p><a href="tel:980009630">+ 98 (000) - 9630</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-message"></span>
                                        </div>
                                        <div class="text">
                                            <h5>Envía un correo</h5>
                                            <p><a href="mailto:ambed@company.com">ambed@company.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <div class="text">
                                            <h5>380 St Kilda Road</h5>
                                            <p>Melbourne, Australia</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2022 por <a href="#">Plantilla Ambed</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <?php require_once __DIR__ . '/../bin/js.php';?>
</body>
</html>