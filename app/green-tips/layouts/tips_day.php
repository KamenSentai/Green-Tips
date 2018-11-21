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
        <h2 class="tips-day__title">
          Le tips du jour
        </h2>
        <p class="tips-day__resume">
          <b style="font-size:1.3em">
          <?php the_title();?>
          </b>
          <br /><br />
          <?php the_field('tips_main_content');?>
        </p>
        <div class="tips-day-bottom">
          <div class="button-primary tips-day-bottom__more">
            Lire la suite
          </div>
          <div class="tips-day-bottom-like">
            140
            <img src="<?php echo THEME_URL; ?>/assets/images/like.svg">
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
      <?php if( get_field('tips_image') ): ?>
        <img src="<?php the_field('tips_image');?>" class="tips-day__image">
            <?php
            else: 
             ?>
        <img src="http://localhost:8888/wordpress-climate/public/wp-content/themes/green-tips/assets/images/logo.svg" class="tips-day__image">
            <?php endif; ?>
      </div>
    </div>
  </div>
</section>
          <?php }}else{
            echo "no result";}
         ?>

