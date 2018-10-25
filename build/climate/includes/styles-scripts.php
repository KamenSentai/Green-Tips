<?php

function add_styles_scripts() {
	wp_register_style('style', CSS_URL.'/app.css');
	wp_enqueue_style('style');

	wp_register_script('main', JS_URL . '/app.js', array(),'1.0', true);
	wp_enqueue_script('main');
}

add_action( 'wp_enqueue_scripts', 'add_styles_scripts' );