<?php

// get_template_directory()

function navutech_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'twentytwenty-style', get_stylesheet_uri(), array(), $theme_version );
	

}

//add_action( 'wp_enqueue_scripts', 'navutech_register_styles' );

/**
 * Register and Enqueue Scripts.
 *
 */
function navutech_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'twentytwenty-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
	wp_script_add_data( 'twentytwenty-js', 'async', true );

}

//add_action( 'wp_enqueue_scripts', 'navutech_register_scripts' );
