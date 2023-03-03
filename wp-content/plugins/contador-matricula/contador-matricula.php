
<?php

/*
Plugin Name: Contador Matricula
Description: Plugin de contador de matricula guarderia estrella
Author: Angeles Sevilla
Version: 1.0
Author URI: https://github.com/angelessevilla
*/

add_shortcode('contador_matricula', 'contador_matricula_func');
function contador_matricula_func()
{

    // Obtener matriculas de "DB"
    $matriculas = file_get_contents(plugin_dir_path(__FILE__) . "/matriculas.json");
    $matriculas = json_decode($matriculas, true);

    // validar
    if (isset($matriculas["matriculas"])) {

        echo
        "<div id='contador-matriculas'>      
            <h2>{$matriculas['matriculas']}</h2>
            <p>Matriculas restantes</p>
        </div>";
    } else {

        echo 'No se han obtenido matriculas.';
    }
}
//Encolar hoja de estilo
function enqueue_plugin_styles()
{
    wp_enqueue_style('contador-styles', "/wp-content/plugins/contador-matricula/style.css");
}
add_action('wp_enqueue_scripts', 'enqueue_plugin_styles');
