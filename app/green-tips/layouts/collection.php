<section id="collection">
  <h3 class="others__title">Voir les dernières enquêtes</h3>
  <div class="container">
    <div class="row">
      <?php
      $enquetes = array(
        'post_type' => 'enquete'
      );
      $the_query = new WP_Query( $enquetes );
      $width_in_row = 4;
      include LAYOUTS_PATH . '/card.php';
      ?>
    </div>
  </div>
</section>
