<?php

add_action('wp_ajax_ajax-tips', 'ajax_tips');
add_action('wp_ajax_nopriv_ajax-tips', 'ajax_tips');

function ajax_tips()
{
  global $wpdb, $_POST;

	$tipsday = array(
		'post_type'      => 'tips',
		'posts_per_page' => 1,
	);
	$the_query = new WP_Query( $tipsday );
	include LAYOUTS_PATH . '/popup-tips.php';

  die();
}
