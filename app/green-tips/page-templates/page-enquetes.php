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
            <div class="row">
              <?php $enquetes = array(
                'post_type' => 'enquete',
              );
              $the_query = new WP_Query( $enquetes );
              $width_in_row = 6;
              include LAYOUTS_PATH . '/card.php';
              ?>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>
