<?php $ROOT_PATH = '/proyectopintasuper'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pintasuper</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo $ROOT_PATH; ?>/assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Plantilla HTML 5 Ambed" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <?php include '../bin/css.php'; ?>

    <link rel="preload" href="styles.min.css" as="style">
    <link rel="preload" href="script.min.js" as="script">
    <link rel="preload" href="images/seleccione-escena.png" as="image">
    <link rel="preload" href="images/habitacion.png" as="image">
    <link rel="preload" href="images/sala.png" as="image">
    <link rel="preload" href="images/bano.png" as="image">
    <link rel="stylesheet" href="styles.min.css">

    <style>
        /* --- ESTILOS GENERALES Y LAYOUT --- */
        .user-instructions-message {
            background-color: #f7f7f7;
            border-left: 5px solid #ff7f00;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 4px;
            font-family: Arial, sans-serif;
            color: #333;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .user-instructions-message p {
            font-size: 1.2em;
            margin-top: 0;
        }

        .user-instructions-message ol {
            margin-bottom: 0;
            padding-left: 25px;
        }

        .user-instructions-message li {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .user-instructions-message .highlight-orange {
            color: #ff7f00;
        }

        .decorator-simplified {
            position: relative;
            min-height: 80vh;
        }

        .image-container {
            min-height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .wall-container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wall {
            position: absolute;
            z-index: 1;
            pointer-events: none;
        }

        .room-image,
        .placeholder-image {
            display: block;
            max-width: 100%;
            height: auto;
            position: relative;
            z-index: 2;
        }

        /* Botones flotantes y sus nombres */
        .fab-group-container {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 100;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .fab-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .fab-title {
            font-size: 14px;
            font-weight: 600;
            color: #333;
            text-transform: uppercase;
        }

        .fab-decorator {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background-color: rgba(253, 78, 1, 0.9);
            color: white;
            border: none;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .fab-decorator:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
            background-color: rgba(253, 78, 1, 1);
        }

        .fab-decorator:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            background-color: rgba(253, 78, 1, 0.5);
        }

        .fab-decorator:disabled:hover {
            transform: none;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
        }

        /* Paneles flotantes */
        .floating-panel {
            position: absolute;
            top: 90px;
            right: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 15px;
            max-width: 300px;
            z-index: 99;
            display: none;
            max-height: 70vh;
            overflow-y: auto;
        }

        #room-selector-panel {
            width: 250px;
        }

        #color-selector-panel {
            width: 300px;
        }

        .color-panel-header {
            margin-bottom: 15px;
        }

        .palette-selector {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            font-size: 14px;
            margin-top: 10px;
        }

        /* Opciones de ambiente */
        .room-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .room-option {
            padding: 12px;
            border-radius: 6px;
            background: #f5f5f5;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.2s ease;
        }

        .room-option:hover {
            background: #e0e0e0;
        }

        .room-option i {
            width: 20px;
            text-align: center;
        }

        /* Paleta de colores */
        .color-palette-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
            gap: 10px;
            margin-top: 15px;
        }

        .color-swatch {
            width: 100%;
            aspect-ratio: 1/1;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            border: 1px solid #e0e0e0;
            transition: all 0.2s ease;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            padding-bottom: 5px;
            overflow: hidden;
        }

        .color-swatch:hover {
            transform: scale(1.05);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        }

        .color-name {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 2px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 8px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.2s ease;
            pointer-events: none;
        }

        .color-swatch:hover .color-name {
            opacity: 1;
        }

        /* Indicador de color seleccionado */
        .selected-color-info {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            font-size: 1.1em;
            font-weight: bold;
            text-align: center;
            transition: all 0.3s ease;
        }

        .color-name-display {
            color: #ff7f00;
        }

        /* Colores de las paletas */
        .color-platino-1 {background-color:#ffffff}.color-platino-2{background-color:#1d1d1b}.color-platino-3{background-color:#ffbb00}.color-platino-4{background-color:#312780}.color-platino-5{background-color:#2e8966}.color-platino-6{background-color:#c00613}.color-platino-7{background-color:#ec6c23}.color-platino-8{background-color:#28235d}.color-platino-9{background-color:#662380}.color-platino-10{background-color:#960019}.color-platino-11{background-color:#683d13}.color-platino-12{background-color:#801711}.color-platino-13{background-color:#a18000}
        .color-zafiro-1 {background-color:#faf8f4}.color-zafiro-2{background-color:#e7e1d1}.color-zafiro-3{background-color:#eee4cf}.color-zafiro-4{background-color:#d1c7b1}.color-zafiro-5{background-color:#cbb795}.color-zafiro-6{background-color:#eabd99}.color-zafiro-7{background-color:#f4aead}.color-zafiro-8{background-color:#d280b3}.color-zafiro-9{background-color:#baaac2}.color-zafiro-10{background-color:#a081a3}.color-zafiro-11{background-color:#7dc3a5}.color-zafiro-12{background-color:#a8c69a}.color-zafiro-13{background-color:#8ec47d}.color-zafiro-14{background-color:#a0c64b}.color-zafiro-15{background-color:#9daa70}.color-zafiro-16{background-color:#87bec3}.color-zafiro-17{background-color:#f9d49f}.color-zafiro-18{background-color:#f7b466}.color-zafiro-19{background-color:#f8d96b}.color-zafiro-20{background-color:#ca9647}.color-zafiro-21{background-color:#f4a784}.color-zafiro-22{background-color:#da7a60}.color-zafiro-23{background-color:#e77355}.color-zafiro-24{background-color:#6c4841}.color-zafiro-25{background-color:#67adcb}.color-zafiro-26{background-color:#3490ca}
        .color-dorada-1 {background-color:#cfe1e5}.color-dorada-2{background-color:#a7cfdf}.color-dorada-3{background-color:#009dad}.color-dorada-4{background-color:#343a5d}.color-dorada-5{background-color:#d6c3d6}.color-dorada-6{background-color:#bab1d4}.color-dorada-7{background-color:#c86a87}.color-dorada-8{background-color:#3d3d3a}.color-dorada-9{background-color:#fefefe}.color-dorada-10{background-color:#f5ebd7}.color-dorada-11{background-color:#f6e7ca}.color-dorada-12{background-color:#e3dfd3}.color-dorada-13{background-color:#e5ccb9}.color-dorada-14{background-color:#cbb6a2}.color-dorada-15{background-color:#d0aa87}.color-dorada-16{background-color:#af6e50}.color-dorada-17{background-color:#e5b8a8}.color-dorada-18{background-color:#ecad5e}.color-dorada-19{background-color:#f9d7a2}.color-dorada-20{background-color:#edab95}.color-dorada-21{background-color:#fcbe0c}.color-dorada-22{background-color:#ad7a3a}.color-dorada-23{background-color:#bbbdb9}.color-dorada-24{background-color:#db7f5c}.color-dorada-25{background-color:#6d443c}.color-dorada-26{background-color:#5f504a}.color-dorada-27{background-color:#d14629}.color-dorada-28{background-color:#ae382d}.color-dorada-29{background-color:#02634d}.color-dorada-30{background-color:#88a869}.color-dorada-31{background-color:#a2c64a}.color-dorada-32{background-color:#99af5e}
        .color-onix-1 {background-color:#79adc8}.color-onix-2{background-color:#a8c693}.color-onix-3{background-color:#a8c693}.color-onix-4{background-color:#299190}.color-onix-5{background-color:#7dbe79}.color-onix-6{background-color:#aab966}.color-onix-7{background-color:#135847}.color-onix-8{background-color:#323230}.color-onix-9{background-color:#fefefe}.color-onix-10{background-color:#e3dfd3}.color-onix-11{background-color:#d6ccb8}.color-onix-12{background-color:#f9d5aa}.color-onix-13{background-color:#f4b69a}.color-onix-14{background-color:#f6d18d}.color-onix-15{background-color:#f4ac73}.color-onix-16{background-color:#e1a358}.color-onix-17{background-color:#f5a84e}.color-onix-18{background-color:#fcc719}.color-onix-19{background-color:#af9983}.color-onix-20{background-color:#b88554}.color-onix-21{background-color:#ce7244}.color-onix-22{background-color:#6c3c33}.color-onix-23{background-color:#533f35}.color-onix-24{background-color:#9f5237}.color-onix-25{background-color:#a33c2f}.color-onix-26{background-color:#d6675a}.color-onix-27{background-color:#de767e}.color-onix-28{background-color:#bf4a87}.color-onix-29{background-color:#b2a0cb}.color-onix-30{background-color:#6b4b80}.color-onix-31{background-color:#2e4266}.color-onix-32{background-color:#33a7d1}.color-onix-33{background-color:#63bfd8}

        /* Media Queries para móviles */
        @media (max-width: 768px) and (orientation: portrait) {
            .fab-group-container {
                flex-direction: row;
                top: 10px;
                left: 10px;
                right: auto;
            }

            .fab-group {
                flex-direction: row;
                align-items: center;
                gap: 5px;
            }

            .fab-title {
                display: none;
            }

            .floating-panel {
                top: 68px;
                left: 50%;
                transform: translateX(-50%);
                width: 90%;
                max-width: 300px;
                right: auto;
            }

            #room-selector-panel {
                width: 280px;
            }

            #color-selector-panel {
                max-height: 60vh;
                padding-bottom: 15px;
            }

            .color-palette-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 8px;
                margin-bottom: 10px;
            }

            .color-swatch {
                min-height: 50px;
            }
        }

        @media (max-width: 480px) and (orientation: portrait) {
            .fab-group-container {
                top: 5px;
            }

            .fab-decorator {
                width: 42px;
                height: 42px;
            }

            .floating-panel {
                top: 62px;
                width: 95%;
            }

            #color-selector-panel {
                width: 95vw;
                left: 2.5vw;
                transform: none;
            }

            .color-palette-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .color-name {
                display: none;
            }

            .selected-color-info {
                font-size: 0.9em;
                padding: 8px 15px;
                bottom: 10px;
            }
        }
    </style>
</head>

<body>

    <?php require '../bin/preloader.php'; ?>


    <div class="page-wrapper">
        <?php require '../bin/header.php'; ?>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>


        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $ROOT_PATH; ?>/assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $ROOT_PATH; ?>/">INICIO</a></li>
                        <li><span>/</span></li>
                        <li>Simulador Virtual</li>
                    </ul>
                    <h2 class="banner_title">SIMULADOR VIRTUAL</h2>
                </div>
            </div>
        </section>

        <div class="user-instructions-message">
            <p><strong class="highlight-orange">¡Bienvenido al Simulador Virtual Pintasuper!</strong></p>
            <ol>
                <li>Para empezar, haz clic en el botón de la esquina inferior izquierda <i class="fas fa-couch"></i> para <strong>seleccionar un ambiente</strong> (habitación, sala, etc.).</li>
                <li>Una vez que elijas tu ambiente, se activará el botón de la paleta <i class="fas fa-palette"></i>. Haz clic en él para <strong>elegir una línea de colores</strong> y ver todas las opciones disponibles.</li>
                <li>Finalmente, haz clic en cualquier color de la paleta para <strong>pintar la pared</strong> y ver cómo se vería en tu espacio.</li>
            </ol>
        </div>

        <section class="decorator-simplified">
            <div class="image-container">
                <div class="wall-container">
                    <div id="wall" class="wall"></div>
                    <img id="room-image" alt="Ambiente seleccionado" class="room-image">
                    <img id="placeholder-image" src="images/seleccione-escena.png" alt="Seleccione una escena" class="placeholder-image">
                </div>


                <div class="fab-group-container">
                    <div class="fab-group">
                        <span class="fab-title">Ambientes</span>
                        <button class="fab-decorator" id="room-selector-fab" title="Cambiar ambiente">
                            <i class="fas fa-couch"></i>
                        </button>
                    </div>
                    <div class="fab-group">
                        <span class="fab-title">Colores</span>
                        <button class="fab-decorator" id="color-selector-fab" title="Seleccionar color" disabled>
                            <i class="fas fa-palette"></i>
                        </button>
                    </div>
                </div>


                <div class="floating-panel" id="room-selector-panel">
                    <h3>Seleccionar Ambiente</h3>
                    <div class="room-options">
                        <div class="room-option" data-room="">
                            <i class="fas fa-times"></i> Selecciona escena
                        </div>
                        <div class="room-option" data-room="fachada">
                            <i class="fas fa-house"></i> Fachada
                        </div>
                        <div class="room-option" data-room="habitacion">
                            <i class="fas fa-bed"></i> Habitación
                        </div>
                        <div class="room-option" data-room="sala">
                            <i class="fas fa-couch"></i> Sala
                        </div>
                        <div class="room-option" data-room="bano">
                            <i class="fas fa-bath"></i> Baño
                        </div>
                    </div>
                </div>


                <div class="floating-panel" id="color-selector-panel">
                    <div class="color-panel-header">
                        <h3>Seleccionar Línea de Color</h3>
                        <select id="palette-selector" class="palette-selector">
                            <option value="">-- Elegir línea --</option>
                            <option value="zafiro">Línea Zafiro</option>
                            <option value="dorada">Línea Dorada</option>
                            <option value="onix">Línea Ónix</option>
                        </select>
                    </div>
                    <div id="color-palette" class="color-palette-grid">
                    </div>
                </div>
            </div>
        </section>

        <div id="selected-color-info" class="selected-color-info">
            <span>Color seleccionado:</span>
            <span id="selected-color-name" class="color-name-display">Ninguno</span>
        </div>

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <?php require '../bin/footer.php'; ?>
        <?php require '../bin/js.php'; ?>
        <script src="script.min.js"></script>
    </div>
</body>

</html>