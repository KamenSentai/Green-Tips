<?php
/* Template Name: Tips Page */
?>
<?php get_header();?>
<main id="content" class="tips">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-12 col-md-3">
        <aside id="filters">
          <h2 class="filters__title">Filtres</h2>
          <div class="filters-type__title">Tags</div>
          <div class="filters-cat">
          <?php wp_nav_menu_no_ul_filter_tips(); ?>
          </div>
        </aside>
      </div>

      <div class="col-12 col-md-8">
        <?php
        $tips = array(
          'post_type' => 'tips'
        );
        $the_query = new WP_Query( $tips );
        ?>
        <?php if($the_query -> have_posts()): ?>
          <?php while($the_query -> have_posts()): ?>
            <?php $the_query -> the_post(); 
            
             ?>
            <div class="card-tips" data-id="<?php the_id();?>"> 
              <div class="card-tips-top">
                <h2 class="card-tips-top__title">
                  <?php the_title();?>
                </h2>
              </div>
              <p class="card-tips__resume">
                <?php helper_concat_text(get_field('tips_main_content'), 50); ?>
              </p>
              <div class="card-tips__like">           <a class="like" rel="<?php echo $post->ID; ?>"><?php echo likeCount($post->ID); ?> <img src="<?php echo THEME_URL; ?>/assets/images/heart.svg"> </a>
</div>
            </div>
          <?php endwhile; ?>
        <?php else: echo "no result"; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>

</main>
<?php get_footer();?>
