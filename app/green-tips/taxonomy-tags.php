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
        <?php
        ?>
        <?php if(have_posts()): ?>
          <?php while(have_posts()): ?>
            <?php the_post(); 
            
             ?>
            <div class="card-tips" data-id="<?php the_id();?>"> 
              <div class="card-tips-top">
                <h2 class="card-tips-top__title">
                  <?php the_title();?>
                </h2>
              </div>
              <p class="card-tips__resume">
                <?php
                $field = get_field('tips_main_content');
                $field = preg_replace(
                  '#((https?|ftp)://(\S*?\.\S*?))([\s)\[\]{},;"\':<]|\.\s|$)#i',
                  "<a href=\"$1\" target=\"_blank\">$3</a>$4",
                  $field
                );
                $words = explode(' ', $field);
                $numberWords = 50;
                for ($i = 0; $i < $numberWords; $i++) {
                  echo $words[$i];
                  if ($i == $numberWords) {
                    echo '...';
                  } else {
                    echo ' ';
                  }
                }
                ?>
              </p>
            </div>
          <?php endwhile; ?>
        <?php else: echo "no result"; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>

</main>
<?php get_footer();?>
