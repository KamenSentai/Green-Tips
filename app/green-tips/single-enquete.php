<?php get_header();?>
<main id="content" class="enquete">

<div class="header">
<img src="<?= IMAGES_URL; ?>/test.jpg" class="header__bg">
  <div class="container">
    <div class="header-top">
      <div class="header-top__badge">
        Enquêtes
      </div>
      <div class="header-top__date">
        10/10/2018
      </div>
    </div>
    <h1 class="header__title">
      Présentation orale : Do/Don’t
      pour améliorer tes soutenances
      en DUT MMI
    </h1>
    <div class="header__infos">
      Par Florian | 1000 vues | Aucun commentaire
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-11 col-md-7">
      <div class="resume">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo a, modi dignissimos ea, omnis, placeat ducimus suscipit voluptas fugit amet incidunt. Quisquam, maxime! Velit aliquam similique ex obcaecati temporibus dignissimos?
        <br /><br />Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo a, modi dignissimos ea, omnis, placeat ducimus suscipit voluptas fugit amet incidunt. Quisquam, maxime! Velit aliquam similique ex obcaecati temporibus dignissimos?
        <br /><br />Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo a, modi dignissimos ea, omnis, placeat ducimus suscipit voluptas fugit amet incidunt. Quisquam, maxime! Velit aliquam similique ex obcaecati temporibus dignissimos?
        <br /><br />Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo a, modi dignissimos ea, omnis, placeat ducimus suscipit voluptas fugit amet incidunt. Quisquam, maxime! Velit aliquam similique ex obcaecati temporibus dignissimos?
        <br /><br />Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo a, modi dignissimos ea, omnis, placeat ducimus suscipit voluptas fugit amet incidunt. Quisquam, maxime! Velit aliquam similique ex obcaecati temporibus dignissimos?
        <br /><br />Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo a, modi dignissimos ea, omnis, placeat ducimus suscipit voluptas fugit amet incidunt. Quisquam, maxime! Velit aliquam similique ex obcaecati temporibus dignissimos?
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


<?php //if ( have_posts() ) :?>
<?php //while ( have_posts() ) : the_post(); ?>
<?php //the_terms( $post->ID, 'tags', '', ' / ' );?>
<?php //echo get_the_date();?>
<?php //the_title();?>
<?php //echo get_the_author();?>
<?php //the_content();?>
<?php //endwhile; endif; ?>
</main>
<?php get_footer();?>
