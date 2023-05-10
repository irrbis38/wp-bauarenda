<?php


function bauarenda_scripts() {
	wp_enqueue_style( 'bauarenda-main-style', get_template_directory_uri() . '/assets/css/main.min.css', array(), 1.0 );

	wp_enqueue_script( 'bauarenda-main-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'bauarenda_scripts' );

?>