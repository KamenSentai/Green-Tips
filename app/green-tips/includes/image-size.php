<?php
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'tips_tl', 1300, 450, false );
   
}