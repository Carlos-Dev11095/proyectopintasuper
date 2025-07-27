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

    <!-- precarga -->
    <?php require '../bin/preloader.php'; ?>

    <div class="page-wrapper">
        <?php require '../bin/header.php'; ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>

<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>/">INICIO</a></li>
                        <li><span>/</span></li>
                        <li>Calcular Material</li>
                    </ul>
                    <h2 class="banner_title">Calcular material</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!-- Sección Decorador -->
        <section class="decorator">
            <div class="container_dec">
                <h1>Calcule el material</h1>
                
                <div class="panels-grid">
                    <!-- Panel Producto -->
                    <div class="panel panel-producto">
                        <h2>Seleccione el producto</h2>
                        <select id="producto">
                            <option value="">-- Seleccione --</option>
                            
                            <!-- PINTURAS -->
                            <option value="platino_gold" 
                                    data-rendimiento-brocha="10" 
                                    data-rendimiento-rodillo="9.5" 
                                    data-rendimiento-pistola="9" 
                                    data-manos="1" 
                                    data-tipo="pintura">
                                Vinil-Acrílica PLATINO GOLD
                            </option>
                            <option value="dorada" 
                                    data-rendimiento-brocha="7" 
                                    data-rendimiento-rodillo="6.7" 
                                    data-rendimiento-pistola="6.5" 
                                    data-manos="1" 
                                    data-tipo="pintura">
                                Vinil-Acrílica DORADA
                            </option>
                            <option value="onix" 
                                    data-rendimiento-brocha="6" 
                                    data-rendimiento-rodillo="5.7" 
                                    data-rendimiento-pistola="5.5" 
                                    data-manos="2" 
                                    data-tipo="pintura">
                                Vinil-Acrílica ONIX
                            </option>
                            <option value="zafiro" 
                                    data-rendimiento-brocha="4" 
                                    data-rendimiento-rodillo="3.8" 
                                    data-rendimiento-pistola="3.6" 
                                    data-manos="2" 
                                    data-tipo="pintura">
                                Vinil-Acrílica ZAFIRO
                            </option>

                            <!-- ESMALTES -->
                            <option value="super_rap_ultra" 
                                    data-rendimiento-brocha="8" 
                                    data-rendimiento-rodillo="7.6" 
                                    data-rendimiento-pistola="7.2" 
                                    data-manos="1" 
                                    data-tipo="esmalte"
                                    data-secado="10">
                                SUPER RAP ULTRA
                            </option>
                            
                            <option value="kivi_forte" 
                                    data-rendimiento-brocha="7" 
                                    data-rendimiento-rodillo="6.6" 
                                    data-rendimiento-pistola="6.2" 
                                    data-manos="2" 
                                    data-tipo="esmalte"
                                    data-secado="240">
                                KIVI FORTE
                            </option>
                        </select>
                    </div>

                    <!-- Panel Superficie -->
                    <div class="panel panel-superficie">
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

                    <!-- Panel Restar Superficie -->
                    <div class="panel panel-restar">
                        <h2>Restar superficie - Puertas</h2>
                        <select id="num-puertas">
                            <option value="0">0 puertas</option>
                            <option value="1">1 puerta</option>
                            <option value="2">2 puertas</option>
                            <option value="3">3 puertas</option>
                        </select>
                        <div id="puertas-container"></div>
                        
                        <h2>Restar superficie - Ventanas</h2>
                        <select id="num-ventanas">
                            <option value="0">0 ventanas</option>
                            <option value="1">1 ventana</option>
                            <option value="2">2 ventanas</option>
                            <option value="3">3 ventanas</option>
                        </select>
                        <div id="ventanas-container"></div>
                    </div>

                    <!-- Panel Opciones -->
                    <div class="panel panel-opciones">
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
                </div>

                <!-- Botones -->
                <div class="button-container">
                    <button id="calcular" class="btn btn-primary">Calcular</button>
                    <button id="resetear" class="btn btn-secondary">Reiniciar</button>
                </div>

                <!-- Panel Resultados -->
                <div id="resultados" class="panel panel-resultados hidden">
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
        </section>
        <!-- Fin Sección Decorador -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <?php require '../bin/footer.php'; ?>
        <?php require '../bin/js.php'; ?>
        <!-- JavaScript minificado y al final del body -->
        <script src="script.min.js" defer></script>
    </div>
</body>
</html>