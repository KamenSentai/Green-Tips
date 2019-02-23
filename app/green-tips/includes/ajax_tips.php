<?php

add_action('wp_ajax_ajax-tips', 'ajax_tips');
add_action('wp_ajax_nopriv_ajax-tips', 'ajax_tips');

function ajax_tips() {
  global $wpdb, $_POST;
  $pagination = $_POST['pagination'];

  $enquetes = array(
    'post_type' => 'enquete',
    'posts_per_page' => 6,
    'paged' => $pagination,
  );
  $the_query = new WP_Query( $enquetes );
  include LAYOUTS_PATH . '/card-tips.php';

  die();
}