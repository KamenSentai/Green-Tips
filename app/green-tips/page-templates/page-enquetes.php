<?php
/* Template Name: Enquetes Page */
?>
<?php get_header();?>
<main id="content" class="enquetes">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-3">
      <aside id="filters">
      <h2 class="filters__title">Filtres</h2>
      <div class="filters-type__title">Tags</div>
      <div class="filters-cat">
        <?php wp_nav_menu_no_ul_filter_enquetes();?>
      </div>
    </aside>
      </div>
      <div class="col-12 col-md-8">
        <section id="enquetes">
          <div class="container-fluid">
            <div class="row cards-list">
              <?php $enquetes = array(
                'post_type' => 'enquete',
                'posts_per_page' => 6,
              );
              $the_query = new WP_Query( $enquetes );
              $max_page  = $the_query->max_num_pages;
              $width_in_row = 6;
              include LAYOUTS_PATH . '/card.php';
              ?>
            </div>
            <?php if ($max_page > 1): ?>
              <div class="collection-more">
                <a href="#" class="button-primary button-primary--sub" data-posts="enquetes" data-pagination="1" data-pages="<?= $max_page; ?>">Voir plus</a>
              </div>
            <?php endif; ?>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>
