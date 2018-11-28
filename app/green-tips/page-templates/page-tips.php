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
        <div class="cards-list">
          <?php
          $tips = array(
            'post_type' => 'tips',
            'posts_per_page' => 6,
          );
          $the_query = new WP_Query( $tips );
          $max_page  = $the_query->max_num_pages;
          include LAYOUTS_PATH . '/card-tips.php';
          ?>
          <?php if ($max_page > 1): ?>
            <div class="collection-more">
              <a href="#" class="button-primary button-primary--sub" data-posts="tips" data-pagination="1" data-pages="<?= $max_page; ?>">Voir plus</a>
            </div>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</main>

<?php get_footer();?>
