<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <!-- iconos favoritos -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Plantilla HTML 5 Ambed" />

    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php include '../bin/css.php'; ?>

    <!-- Preload de recursos críticos -->
    <link rel="preload" href="styles.min.css" as="style">
    <link rel="preload" href="script.min.js" as="script">
    <!-- CSS combinado y minificado -->
    <link rel="stylesheet" href="styles.min.css">
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- selector de estilo -->
    <div class="style-switcher">
        <a href="#" id="switcher-toggler"><i class="fa fa-cog"></i></a>
        <h3>Opciones de Diseño</h3>
        <div class="layout-feature" id="colorMode">
            <a href="" class="dark-switcher" data-theme="ambed-dark">Oscuro</a>
            <a href="" class="light-switcher" data-theme="ambed-light">Claro</a>
            <button class="boxed-switcher">En Caja</button>
        </div>
    </div>
    <!-- fin selector de estilo -->

    <!-- precarga -->
    <?php require '../bin/preloader.php'; ?>

    <div class="page-wrapper">
        <?php require '../bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>">Home</a></li>
                        <li><span>/</span></li>
                        <li>Decorador Virtual</li>
                    </ul>
                    <h2>Decorador Virtual</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Sección Decorador -->
        <section class="decorator">
            <div class="container_dec">
                 <div class="container_dec">
        <h1>Simulador de Pintura</h1>
        
        <div class="panel">
            <h2>Seleccione el producto</h2>
            <select id="producto">
                <option value="">-- Seleccione --</option>
                <option value="vinilica_std" data-rendimiento="10">Pintura Vinílica Standard (10 m²/L)</option>
                <option value="vinilica_prem" data-rendimiento="8">Pintura Vinílica Premium (8 m²/L)</option>
                <option value="esmalte_acu" data-rendimiento="12">Esmalte Acrílico (12 m²/L)</option>
                <option value="sellador" data-rendimiento="15">Sellador (15 m²/L)</option>
            </select>
        </div>

        <div class="panel">
            <h2>Superficie a pintar</h2>
            <div class="input-group">
                <label for="alto-pared">Alto (metros):</label>
                <input type="number" id="alto-pared" step="0.01" min="0.1">
            </div>
            <div class="input-group">
                <label for="ancho-pared">Ancho (metros):</label>
                <input type="number" id="ancho-pared" step="0.01" min="0.1">
            </div>
        </div>

        <div class="panel">
            <h2>Restar superficie - Puertas</h2>
            <select id="num-puertas">
                <option value="0">0 puertas</option>
                <option value="1">1 puerta</option>
                <option value="2">2 puertas</option>
                <option value="3">3 puertas</option>
            </select>
            <div id="puertas-container"></div>
        </div>

        <div class="panel">
            <h2>Restar superficie - Ventanas</h2>
            <select id="num-ventanas">
                <option value="0">0 ventanas</option>
                <option value="1">1 ventana</option>
                <option value="2">2 ventanas</option>
                <option value="3">3 ventanas</option>
            </select>
            <div id="ventanas-container"></div>
        </div>

        <div class="panel">
            <h2>Opciones de aplicación</h2>
            <div class="option-group">
                <h3>Superficie:</h3>
                <label><input type="radio" name="superficie" value="1.2" checked> Nueva</label>
                <label><input type="radio" name="superficie" value="1.0"> Mantenimiento</label>
            </div>
            <div class="option-group">
                <h3>Textura:</h3>
                <label><input type="radio" name="textura" value="1.0" checked> Lisa</label>
                <label><input type="radio" name="textura" value="1.3"> Rugosa</label>
            </div>
            <div class="option-group">
                <h3>Técnica:</h3>
                <label><input type="radio" name="tecnica" value="1.15" checked> Brocha</label>
                <label><input type="radio" name="tecnica" value="1.05"> Rodillo</label>
                <label><input type="radio" name="tecnica" value="0.95"> Pistola</label>
            </div>
        </div>

        <div class="button-group">
            <button id="calcular">Calcular</button>
            <button id="resetear">Resetear</button>
        </div>

        <div id="resultados" class="results-panel hidden">
            <h2>Resultados</h2>
            <table>
                <tr>
                    <th>Producto</th>
                    <td id="res-producto"></td>
                </tr>
                <tr>
                    <th>Superficie neta</th>
                    <td id="res-superficie"></td>
                </tr>
                <tr>
                    <th>Pintura necesaria</th>
                    <td id="res-litros"></td>
                </tr>
                <tr>
                    <th>Cubetas (19L)</th>
                    <td id="res-cubetas"></td>
                </tr>
                <tr>
                    <th>Galones (3.785L)</th>
                    <td id="res-galones"></td>
                </tr>
                <tr>
                    <th>Sobrante</th>
                    <td id="res-sobrante"></td>
                </tr>
            </table>
            <p class="note">* Los resultados son aproximados y pueden variar según las condiciones de aplicación.</p>
        </div>
    </div>
            </div>
        </section>
        <!-- Fin Sección Decorador -->

        <?php require '../bin/footer.php'; ?>
        <?php require '../bin/js.php'; ?>
        <!-- JavaScript minificado y al final del body -->
        <script src="script.min.js" defer></script>
    </div>
</body>
</html>