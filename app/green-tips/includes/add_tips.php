<?php
function my_pre_save_post( $post_id ) {
 
 // check if this is to be a new post
 if( $post_id != 'new' )
 {
     return $post_id;
 }

 // Create a new post
 $post = array(
     'post_status'  => 'pending',
     'post_title'    => $_POST['acf']['field_5bec24cc42f40'],
     'post_type'  => 'tips',
 );

 // insert the post
 $post_id = wp_insert_post( $post );

 // update $_POST['return']
 $_POST['return'] = add_query_arg( array('post_id' => $post_id), $_POST['return'] );

 // return the new ID
 return $post_id;
}

add_filter('acf/pre_save_post' , 'my_pre_save_post' );