<?php

/* user can create and add custom.css if desired. */

function startwordpress_scripts() {
	wp_enqueue_style( 'customcss', get_template_directory_uri() . '/css/custom.css');
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// add custom title to each page 
add_theme_support( 'title-tag' );
