<?php get_header();?>
<main id="content" class="enquete">
<?php if ( have_posts() ) :?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="header">
<img src="<?= IMAGES_URL; ?>/test.jpg" class="header__bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
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
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-11 col-md-8">
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
      <div class="col-12 col-md-4">
          <div class="card">
            <div class="card__image"></div>
            <h2 class="card__title">Pékin, ville vapeur sautée</h2>
            <p class="card__resume">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae minus aliquid ratione, saepe distinctio molestias temporibus magni laboriosam enim optio excepturi accusantium minima eligendi qui nam? Libero, sunt possimus.</p>
            <div class="card__more">
              <a href="#" class="button-primary">Lire la suite</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-md-4">
          <div class="card">
            <div class="card__image"></div>
            <h2 class="card__title">Pékin, ville vapeur sautée</h2>
            <p class="card__resume">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae minus aliquid ratione, saepe distinctio molestias temporibus magni laboriosam enim optio excepturi accusantium minima eligendi qui nam? Libero, sunt possimus.</p>
            <div class="card__more">
              <a href="#" class="button-primary">Lire la suite</a>
            </div>
          </div>
      </div>
      <div class="col-12 col-md-4">
          <div class="card">
            <div class="card__image"></div>
            <h2 class="card__title">Pékin, ville vapeur sautée</h2>
            <p class="card__resume">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae minus aliquid ratione, saepe distinctio molestias temporibus magni laboriosam enim optio excepturi accusantium minima eligendi qui nam? Libero, sunt possimus.</p>
            <div class="card__more">
              <a href="#" class="button-primary">Lire la suite</a>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
</main>
<?php get_footer();?>
