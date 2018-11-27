<?php get_header();?>
<main id="content" class="enquete">
<?php if ( have_posts() ) :?>
<?php while ( have_posts() ) : the_post(); 
setPostViews(get_the_ID());?>
<div class="header">
<img src="<?php the_field('enquete_background_image');?>" class="header__bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <div class="header-top">
          <div class="header-top__badge">
          <?php the_terms( $post->ID, 'enquetestags', '', ' / ' );?>
          </div>
          <div class="header-top__date">
          <?php echo get_the_date();?>
          </div>
        </div>
        <h1 class="header__title">
        <?php the_title();?>
        </h1>
        <div class="header__infos">
          Par <?php echo get_the_author();?> | <?php echo getPostViews(get_the_ID()); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-11 col-md-10">
      <div class="resume">
      <?php the_content();?>
      </div>
    </div>
  </div>
  <h3 class="others__title">
    Voir d'autres enquêtes
  </h3>
  <div class="container">
    <div class="row">
    <?php $enquetes = array(
            'post_type' => 'enquete'
         );
         $the_query = new WP_Query( $enquetes );
         if($the_query -> have_posts())
         {
             while($the_query -> have_posts())
            {
                 $the_query -> the_post();
                 ?>
                 <div class="col-12 col-md-4">
                 <div class="card">
                 <a href="<?php the_permalink();?>" alt=" <?php the_title();?>"><img src="<?php the_field('enquete_background_image');?>" class="card__image">
            </a>
<div class="card-infos">
                  <h2 class="card__title"><?php the_title();?></h2>
                  <div class="card__resume">
                    <?php the_excerpt();?></div>
                  <div class="card__more">
                    <a href="<?php the_permalink();?>" class="button-primary">Lire la suite</a>
                  </div>
                </div>
            </div>
              </div>
          <?php }}else{
            echo "no result";}
         ?>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
</main>
<?php get_footer();?>
