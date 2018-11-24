<?php
/* Template Name: Enquetes Page */
?>
<?php get_header();?>
<main id="content" class="enquetes">

<div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-3">
        <aside id="filters">
          <h2 class="filters__title">
            Filtres
          </h2>
          <div class="filters-type__title">
            Popularité
          </div>
          <div class="filters-popular">
            <div class="filters-popular-item">
              <input type="radio" id="popular-views" name="popular">
              <label for="popular-views">Vues</label>
            </div>
            <div class="filters-popular-item">
              <input type="radio" id="popular-liked" name="popular">
              <label for="popular-liked">Aimées</label>
            </div>
          </div>
          <div class="filters-type__title">
            Catégories
          </div>
          <div class="filters-cat">
            <div class="filters-cat-item">
              <input type="checkbox" id="cat-energy" name="cat">
              <label for="cat-energy">Énergies</label>
            </div>
            <div class="filters-cat-item">
              <input type="checkbox" id="cat-environment" name="cat">
              <label for="cat-environment">Environnement</label>
            </div>
          </div>
        </aside>
      </div>
      <div class="col-12 col-md-8">
        <section id="enquetes">
          <div class="container-fluid">
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
                 <a href="<?php the_permalink();?>" alt=" <?php the_title();?>">
                 <div class="col-12 col-md-6">
                <div class="card">
                <img src="<?php the_field('enquete_background_image');?>" class="card__image">

                  <h2 class="card__title"><?php the_title();?></h2>
                  <div class="card__resume">
                    <?php the_excerpt();?></div>
                  <div class="card__more">
                    <a href="<?php the_permalink();?>" class="button-primary">Lire la suite</a>
                  </div>
                </div>
              </div> </a>
          <?php }}else{
            echo "no result";}
         ?>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>
