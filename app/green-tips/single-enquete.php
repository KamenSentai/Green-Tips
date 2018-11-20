<?php get_header();?>
<main id="content" class="enquete">
<?php if ( have_posts() ) :?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="header">
<img src="<?= IMAGES_URL; ?>/test.jpg" class="header__bg">
  <div class="container">
    <div class="header-top">
      <div class="header-top__badge">
      <?php the_terms( $post->ID, 'tags', '', ' / ' );?>
      </div>
      <div class="header-top__date">
      <?php echo get_the_date();?>
      </div>
    </div>
    <h1 class="header__title">
    <?php the_title();?>
    </h1>
    <div class="header__infos">
      Par <?php echo get_the_author();?> | 1000 vues 
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-11 col-md-7">
      <div class="resume">
      <?php the_content();?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
</main>
<?php get_footer();?>
