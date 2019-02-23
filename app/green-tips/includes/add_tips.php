<?php

function gt_my_pre_save_post( $post_id ) {
  // check if this is to be a new post
  if( $post_id != 'new' )
  {
      return $post_id;
  }

  // Create a new post
  $post = array(
      'post_type'  => 'tips',
  );

  // insert the post
  $post_id = wp_insert_post( $post );

  // update $_POST['return']
  $_POST['return'] = add_query_arg( array('post_id' => $post_id), $_POST['return'] );

  // return the new ID
  return $post_id;
}

add_filter('acf/pre_save_post' , 'gt_my_pre_save_post' );

function gt_my_acf_prepare_field( $field ) {
    $field['label'] = "Titre";

    return $field;
}

add_filter('acf/prepare_field/name=_post_title', 'gt_my_acf_prepare_field');