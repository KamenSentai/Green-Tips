<?php
get_header();

?>

<main id="content">

<div class="popup-tips">
<?php $tipsday = array(
            'post_type' => 'tips',
            'posts_per_page' => 1,
         );
         $the_query = new WP_Query( $tipsday );
         if($the_query -> have_posts())
         {
             while($the_query -> have_posts())
            {
                 $the_query -> the_post();
                 ?>
    <div class="popup-tips-content">
    <div class="popup-close">
        <img src="<?php echo THEME_URL; ?>/assets/images/popup-close.png" alt="Close popup">
      </div>
      <div class="popup-tips-infos">
        <div class="popup-tips-top">
          <h2 class="popup-tips-top__title">
          <?php the_title();?>
          </h2>
          <div class="popup-tips-top-more">
            <span></span>
              <span></span>
            <span></span>
          </div>
        </div>
        <div class="popup-tips__resume">
        <?php the_field('tips_main_content');?> </div>
        <div class="popup-tips__image">
        <?php
                 $image = get_field('tips_image');
                 $size = 'large';
                     if( $image ) {
                         echo wp_get_attachment_image( $image, $size );
                     }
                     else{
                      echo "<img src=\"localhost:8888/wordpress-climate/public/wp-content/themes/green-tips/assets/images/logo.svg\">";
                     }?>
        </div>
      </div>
    </div>
    <?php }}else{
            echo "no result";}
         ?>
  </div>

<?php

include LAYOUTS_PATH . '/jumbotron.php';
include LAYOUTS_PATH . '/tips_day.php';
include LAYOUTS_PATH . '/slider.php';
include LAYOUTS_PATH . '/collection.php';

?>

</main>

<?php

get_footer();
