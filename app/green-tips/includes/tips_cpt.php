<?php // register_post_type( $post_type, $args );

function ajout_cpt_tips() {
    $post_type_tips = "tips";
$labels = array(
        'name'               => 'tips',
        'singular_name'      => 'tips',
        'all_items'          => 'Tous les Tips',
        'add_new'            => 'Ajouter un Tips',
        'add_new_item'       => 'Ajouter un Tips',
        'edit_item'          => "Modifier un Tips",
        'new_item'           => 'Ajouter un Tips',
        'view_item'          => "Voir Tips",
        'search_items'       => 'Chercher Tips',
        'not_found'          => 'Pas de tips',
        'not_found_in_trash' => 'Pas de tips',
        'parent_item_colon'  => 'Parent model:',
        'menu_name'          => 'Tips',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-thumbs-up',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => string,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );

    register_post_type($post_type_tips, $args );
    $taxonomy = "tags";
    $object_type = array("tips");
    $args = array(
        'label' => __( 'tags' ),
        'rewrite' => array( 'slug' => 'tags' ),
        'hierarchical' => false,
    );
    register_taxonomy( $taxonomy, $object_type, $args );
}
add_action( 'init', 'ajout_cpt_tips' );

