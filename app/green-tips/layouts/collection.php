<section id="collection">
<h3 class="others__title">
    Voir les dernières enquêtes
  </h3>
  <div class="container">
    <div class="row">
      <!-- <div class="col-12 col-md-4">
        <div class="card">
          <img src="<?= IMAGES_URL; ?>/test.jpg" class="card__image">
          <h2 class="card__title">Pékin, ville vapeur sautée</h2>
          <p class="card__resume">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia recusandae minus aliquid ratione, saepe distinctio molestias temporibus magni laboriosam enim optio excepturi accusantium minima eligendi qui nam? Libero, sunt possimus.</p>
          <div class="card__more">
            <a href="#" class="button-primary">Lire la suite</a>
          </div>
        </div>
      </div> -->
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
                 <a href="<?php the_permalink();?>" alt=" <?php the_title();?>">
                <img src="<?php the_field('enquete_background_image');?>" class="card__image">
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
</section>
