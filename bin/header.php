<header class="main-header clearfix">
    <div class="main-header__top">
        <div class="container">
            <div class="main-header__top-inner clearfix">
                <div class="main-header__logo">
                    <a href="<?php echo $ROOT_PATH; ?>/">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/logo-1.png" alt="" class="dark-logo">
                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/resources/logo-2.png" alt="" class="light-logo">
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
                                        <p>Av. Guadalupe Victoria #1560 Col, Prados Verdes, 58110</p>
                                        <h5>Morelia, michoacán.</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right-social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
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
                <div class="main-menu__wrapper-inner clearfix" style="display: flex; justify-content: center;">
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list" style="display: flex; gap: 20px; padding: 0; margin: 0; list-style: none;">
                            <?php
                            $current_uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/').'/';
                            // Define los items del menú
                            $menu_items = [
                                '/' => ['url' => '/', 'title' => 'Inicio'],
                                '/productos/' => ['url' => '/productos/', 'title' => 'Productos'],
                                '/decorador_virtual/' => ['url' => '/decorador_virtual/', 'title' => 'Simulador Virtual'],
                                '/calcular_m2/' => ['url' => '/calcular_m2/', 'title' => 'Calcular Material'],
                                '/quienes_somos/' => ['url' => '/quienes_somos/', 'title' => 'Nosotros'],
                                '/contacto/' => ['url' => '/contacto/', 'title' => 'Contacto']
                            ];
                            foreach ($menu_items as $path => $item) {
                                $is_current = ($current_uri === $path) ? 'current' : '';
                                echo '<li class="'.$is_current.'">';
                                echo '<a href="'.$ROOT_PATH.$item['url'].'">'.$item['title'].'</a>';
                                echo '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- ✅ CSS del menú activo -->
<style>
.main-menu__list li.current a {
    color: #e5383b; /* Color activo */
    font-weight: bold;
}
.main-menu__list li a {
    text-decoration: none;
    color: #333; /* Color base del menú */
}
</style>
