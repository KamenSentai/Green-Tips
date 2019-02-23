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
              <?php
              $width_in_row = 6;
              ?>
              <?php if(have_posts()): ?>
              <?php while(have_posts()): ?>
                <?php the_post(); ?>
                <div class="col-12 col-md-<?= $width_in_row; ?>">
                  <div class="card">
                    <a href="<?php the_permalink();?>" alt=" <?php the_title();?>">
                      <img src="<?php the_field('enquete_background_image');?>" class="card__image">
                    </a>
                    <div class="card-infos">
                      <div class="card-content">
                      <h2 class="card__title"><?php the_title();?></h2>
                        <div class="card__resume">
                          <?php the_excerpt();?>
                        </div>
                        </div>
                      <a href="<?php the_permalink();?>" class="button-primary">Lire la suite</a>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php else: echo "no result";?>
            <?php endif; ?>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>
