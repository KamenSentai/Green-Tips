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
<section id="tips-day">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="tips-day">
        <h2 class="tips-day__title">
          Le tips du jour
        </h2>
        <p class="tips-day__resume">
          <b style="font-size:1.3em">
          <?php the_title();?>
          </b>
          <br /><br />
          <?php
          $field = get_field('tips_main_content');
          $field = preg_replace(
            '#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i',
            "<a href=\"$1\" target=\"_blank\" alt=\"$3\">$3</a>$4",
            $field
          );
          $words = explode(' ', $field);
          $numberWords = 50;
          for ($i = 0; $i < $numberWords; $i++) {
            echo $words[$i];
            if ($i == $numberWords) {
              echo '...';
            } else {
              echo ' ';
            }
          }
          ?>
        </p>
        <div class="tips-day-bottom">
          <a class="button-primary tips-day-bottom__more" href="#" title="<?php the_title();?>">
            Lire la suite
            </a>
          <div class="tips-day-bottom-like">
          <a class="like" rel="<?php echo $post->ID; ?>"><?php echo likeCount($post->ID); ?> <img src="<?php echo THEME_URL; ?>/assets/images/heart.svg"> </a>
          </div>
        </div>
      </div>
            </div>
      <div class="col-12 col-md-6">
        <div class="tips-day__image">
           <?php
                 $image = get_field('tips_image');
                 $size = 'large';
                     if( $image ) {
                         echo wp_get_attachment_image( $image, $size );
                     }
                     else{
                      echo IMAGES_URL . "/logo.svg\">";
                     }?>
        </div>
      </div>
    </div>
  </div>
</section>
          <?php }}else{
            echo "no result";}
         ?>

