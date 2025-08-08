document.addEventListener('DOMContentLoaded', function() {
    // Función para obtener parámetros de la URL
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    // Obtener parámetros de la URL
    var presetRoom = getUrlParameter('room');
    var presetPalette = getUrlParameter('palette');
    var presetColor = getUrlParameter('color');

    // Si hay parámetros, configurar el simulador
    if (presetRoom && presetPalette && presetColor) {
        // Esperar a que el simulador original esté listo
        setTimeout(function() {
            // Seleccionar la sala
            var roomOption = document.querySelector('.room-option[data-room="' + presetRoom + '"]');
            if (roomOption) roomOption.click();

            // Esperar a que la imagen se cargue
            setTimeout(function() {
                // Seleccionar la paleta
                var paletteSelector = document.getElementById('palette-selector');
                if (paletteSelector) {
                    paletteSelector.value = presetPalette;
                    var event = new Event('change');
                    paletteSelector.dispatchEvent(event);
                }

                // Esperar a que la paleta se cargue
                setTimeout(function() {
                    // Seleccionar el color
                    var colorSwatch = document.querySelector('.color-swatch[data-color="' + presetColor + '"]');
                    if (colorSwatch) colorSwatch.click();

                    // Abrir el panel de colores si está cerrado
                    var colorPanel = document.getElementById('color-selector-panel');
                    if (colorPanel && colorPanel.style.display !== 'block') {
                        var colorFab = document.getElementById('color-selector-fab');
                        if (colorFab) colorFab.click();
                    }
                }, 500);
            }, 500);
        }, 1000);
    }
});