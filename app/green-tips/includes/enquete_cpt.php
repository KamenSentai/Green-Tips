<?php // register_post_type( $post_type, $args );

function ajout_cpt_enquete() {
    $post_type_enquete = "enquete";
$labels = array(
        'name'               => 'enquete',
        'singular_name'      => 'enquete',
        'all_items'          => 'Toutes les Enquêtes',
        'add_new'            => 'Ajouter une Enquête',
        'add_new_item'       => 'Ajouter une Enquête',
        'edit_item'          => "Modifier une Enquête",
        'new_item'           => 'Ajouter une Enquête',
        'view_item'          => "Voir Enquête",
        'search_items'       => 'Chercher Enquête',
        'not_found'          => 'Pas d\'Enquête',
        'not_found_in_trash' => 'Pas d\'Enquête',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Enquêtes',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-format-aside',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => string,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type_enquete, $args );
    
}
add_action( 'init', 'ajout_cpt_enquete' );
