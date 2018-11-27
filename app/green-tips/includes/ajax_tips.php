<?php

add_action('wp_ajax_ajax-tips', 'ajax_tips');
add_action('wp_ajax_nopriv_ajax-tips', 'ajax_tips');

function ajax_tips()
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
