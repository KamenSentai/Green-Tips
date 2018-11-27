<?php 
// Display or Count how many times a post has been viewed.
// id = the post id and action = display or count function arixWp_PostViews( $id, $action ) { $axCountMeta = 'ax_post_views'; 
// Your Custom field that stores the views $axCount = get_post_meta($id, $axCountMeta, true); if ( $axCount == '' ) { if ( $action == 'count' ) { $axCount = 0; } delete_post_meta( $id, $axCountMeta ); add_post_meta( $id, $axCountMeta, 0 ); if ( $action == 'display' ) { echo "0 Views"; } } else { if ( $action == 'count' ) { $axCount++; update_post_meta( $id, $axCountMeta, $axCount ); } else { echo $axCount . ' Views'; } } }
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Vue";
    }
    return $count.' Vues';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);