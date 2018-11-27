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
          <div class="filters-type__title">Popularité</div>
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
          <div class="filters-type__title">Catégories</div>
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
        <?php
        $tips = array(
          'post_type' => 'tips'
        );
        $the_query = new WP_Query( $tips );
        ?>
        <?php if($the_query -> have_posts()): ?>
          <?php while($the_query -> have_posts()): ?>
            <?php $the_query -> the_post(); ?>
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
