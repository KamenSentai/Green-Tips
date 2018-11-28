<?php

add_action('wp_ajax_ajax-popup', 'ajax_popup');
add_action('wp_ajax_nopriv_ajax-popup', 'ajax_popup');

function ajax_popup()
{
  global $wpdb, $_POST;
  $id = intval($_POST['id']);

	$tips = array(
    'post_type' => 'tips',
  );
  $the_query = new WP_Query( $tips );
	include LAYOUTS_PATH . '/popup-tips.php';

  die();
}
