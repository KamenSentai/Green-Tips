<?php 
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
function wp_nav_menu_no_ul_header()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'header-menu',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}
function wp_nav_menu_no_ul_footer()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'footer-menu',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}