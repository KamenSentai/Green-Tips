<section id="collection">
  <h3 class="others__title">Voir les dernières enquêtes</h3>
  <div class="container">
    <div class="row collection">
      <?php
      $enquetes = array(
        'post_type' => 'enquete',
        'posts_per_page' => 3,
      );
      $the_query = new WP_Query( $enquetes );
      $max_page  = $the_query->max_num_pages;
      $width_in_row = 4;
      include LAYOUTS_PATH . '/card.php';
      ?>
    </div>
    <?php if ($max_page > 1): ?>
      <div class="collection-more">
        <a href="#" id="button-collection" class="button-primary button-primary--sub" data-pagination="1" data-pages="<?= $max_page; ?>">Voir plus</a>
      </div>
    <?php endif; ?>
  </div>
</section>
