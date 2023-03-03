<?php
/*
Plugin Name: Guarderia-cpt
Description: Plugin de CUSTOM POST TYPE PROFESORES guarderia estrella
Author: Angeles Sevilla
Version: 1.0
Author URI: https://github.com/angelessevilla
*/

function register_groups_cpt() {
 
    register_post_type( 'profesores',
    // CPT opciones
        array(
            'labels' => array(
                'name' => 'Profesores',
                'singular_name' => 'Profesor',
				'add_new' => 'Nuevo Profesor ',
				'add_new_item' => 'Añadir nuevo Profesor',
				'edit_item' => 'Editar Profesor',
				'new_item' => 'Nuevo Profesor',
				'view_item' => 'Ver Profesor',
				'view_items' => 'Ver Profesores',
				'search_items' => 'Buscar Profesores',
				'not_found' => 'No se han encontrado Profesores',
				'not_found_in_trash' => 'No se han encontrado Profesores en la papelera',
				'parent_item_colon' => 'Profesor padre:',
				'all_items  ' => 'Todos los Profesores',
            ),
        	'show_ui' => true,
			  'menu_position' => 5,
			  'menu_icon' => 'dashicons-groups',
			  'capability_type' => 'post',
            'public' => false,
            'has_archive' => false,
            'rewrite' => array('slug' => 'Profesores'),
            'show_in_rest' => true,
			      'supports' => array(
        'title',
		'custom-fields'
      ),
 
        )
    );
}
// Enganche de hook
add_action( 'init', 'register_groups_cpt' );



