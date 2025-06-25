<?php
// functions.php

// Encola tu estilo principal usando filemtime() para cache-busting.
function landing_theme_scripts() {
    wp_enqueue_style(
        'landing-style',
        get_template_directory_uri() . '/style.css',
        [],
        filemtime( get_template_directory() . '/style.css' )
    );
}
add_action( 'wp_enqueue_scripts', 'landing_theme_scripts' );


