
<style>
  /* Íconos sociales del header */
  .main-header__top-right-social a i {
    font-size: 26px;         /* tamaño del icono */
    color: #2f2a27;          /* color normal */
    transition: color 0.3s ease;
  }

  .main-header__top-right-social a {
    margin-left: 12px;       /* separación entre iconos */
    text-decoration: none;   /* por si acaso quita subrayado */
  }

  .main-header__top-right-social a:hover i {
    color: #e6b619;          /* color al pasar el mouse */
  }
  .main-header__logo {
  float: left; /* Mueve el logo a la izquierda */
}

.main-header__logo img {
  width: 250px; /* Ajusta el tamaño del logo, puedes cambiar el valor */
  height: auto; /* Mantiene la proporción de la imagen */
}
</style>

<header class="main-header clearfix">
    <div class="main-header__top">
        <div class="container">
            <div class="main-header__top-inner clearfix">
                <div class="main-header__logo">
                    <a href="<?php echo $ROOT_PATH; ?>/" class="main-header__logo-link">
                        <img src="assets/images/resources/footer-logo.png" alt="" class="dark-logo">
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
                                        <p>Contáctenos</p>
                                        <h5><a href="tel:4431618135">+ 52 (443) - 161 8135</a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-message"></span>
                                    </div>
                                    <div class="content">
                                        <p>Envíe un correo</p>
                                        <h5><a href="mailto:pintasuperoficial@gmail.com">pintasuperoficial@gmail.com</a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon icon--location">
                                        <span class="icon-location"></span>
                                    </div>
                                    <div class="content">
                                        <a href="<?php echo $ROOT_PATH; ?>/contacto/" target="_blank" rel="noopener noreferrer" aria-label="Abrir ubicación en Google Maps">
                                            <p style="font-size: 14px;">ubica tu sucursal <br>más cercana</p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right-social">
                            <a href="https://www.facebook.com/PintaSuperPinturas" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/pintasuper/" target="_blank"><i class="fab fa-instagram"></i></a>
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
                                <!-- <li class="dropdown current megamenu"> -->
                                    <li class="">
                                    <a href="<?php echo $ROOT_PATH; ?>/">Inicio</a>
                                </li>
                                <li>
                                    <a href="<?php echo $ROOT_PATH; ?>/productos/">Productos</a>
                                </li>
                                <li>
                                    <a href="<?php echo $ROOT_PATH; ?>/simulador_virtual/">Simulador virtual</a>
                                </li>
                                <li>
                                    <a href="<?php echo $ROOT_PATH; ?>/calcular_material/">Calcular material</a>
                                </li>
                                <li>
                                    <a href="<?php echo $ROOT_PATH; ?>/nosotros/">Nosotros</a>
                                </li>
                                <li>
                                    <a href="<?php echo $ROOT_PATH; ?>/contacto/">Contacto</a>
                                </li>
                                <li>
                                    <a href="<?php echo $ROOT_PATH; ?>/apartados/tonos_infinitos/">Tonos infinitos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/footer-logo.png"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:pintasuperoficial@gmail.com">pintasuperoficial@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+ 52(443)-161 8135">+ 52(443)-161 8135</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="https://www.facebook.com/PintaSuperPinturas" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/pintasuper/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->