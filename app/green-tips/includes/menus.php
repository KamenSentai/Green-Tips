<?php 
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'filter-tips-menu' => __( 'Filter tips Menu'),
      'filter-enquetes-menu' => __( 'Filter enquetes Menu')
    )
  );
}
add_action( 'init', 'register_my_menus' );
function wp_nav_menu_no_ul_filter_enquetes()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'filter-enquetes-menu',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}
function wp_nav_menu_no_ul_filter_tips()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'filter-tips-menu',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}
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