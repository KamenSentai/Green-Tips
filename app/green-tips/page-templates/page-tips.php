<?php
/* Template Name: Tips Page */
?>
<?php get_header();?>
<main id="content" class="tips">

  <div class="popup-tips">
    <div class="popup-tips-content">
      <div class="popup-close">
        <img src="<?php echo THEME_URL; ?>/assets/images/popup-close.png" alt="Close popup">
      </div>
      <div class="popup-tips-container">
        <div class="popup-tips-top">
          <h2 class="popup-tips-top__title">
            Réduire l'opacité de ses document avant impression
          </h2>
          <div class="popup-tips-top-more">
            <span></span>
              <span></span>
            <span></span>
          </div>
        </div>
        <p class="popup-tips__resume">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magnam quidem labore magni, reprehenderit dolor in doloremque odit expedita aliquam. Voluptate quis beatae maxime numquam tempore blanditiis hic, perspiciatis obcaecati?
          <br /><br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magnam quidem labore magni, reprehenderit dolor in doloremque odit expedita aliquam. Voluptate quis beatae maxime numquam tempore blanditiis hic, perspiciatis obcaecati?
          <br /><br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magnam quidem labore magni, reprehenderit dolor in doloremque odit expedita aliquam. Voluptate quis beatae maxime numquam tempore blanditiis hic, perspiciatis obcaecati?
          <br /><br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magnam quidem labore magni, reprehenderit dolor in doloremque odit expedita aliquam. Voluptate quis beatae maxime numquam tempore blanditiis hic, perspiciatis obcaecati?
          <br /><br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magnam quidem labore magni, reprehenderit dolor in doloremque odit expedita aliquam. Voluptate quis beatae maxime numquam tempore blanditiis hic, perspiciatis obcaecati?
          <br /><br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magnam quidem labore magni, reprehenderit dolor in doloremque odit expedita aliquam. Voluptate quis beatae maxime numquam tempore blanditiis hic, perspiciatis obcaecati?
          <br /><br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magnam quidem labore magni, reprehenderit dolor in doloremque odit expedita aliquam. Voluptate quis beatae maxime numquam tempore blanditiis hic, perspiciatis obcaecati?
        </p>
        <div class="popup-tips__image"></div>
      </div>
    </div>
  </div>

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
        <?php $tips = array(
         'post_type' => 'tips'
         );
         $the_query = new WP_Query( $tips );
         if($the_query -> have_posts())
         {
             while($the_query -> have_posts())
             {
                 $the_query -> the_post();
                 ?>
                  <div class="card-tips">
                    <div class="card-tips-top">
                      <h2 class="card-tips-top__title">
                      <?php the_title();?>
                      </h2>
                      <div class="card-tips-top-more">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                    <p class="card-tips__resume">
                    <?php the_field('tips_main_content');?>
                    </p>
                    <div class="card-tips__image">
                    <?php
                 $image = get_field('tips_image');
                 $size = 'tips_tl';
                     if( $image ) {
                         echo wp_get_attachment_image( $image, $size );
                     }?>
                     </div></div>
                  <?php
                  }
                  }else{
                 ?>


                  <?php
             echo "no result";
         } ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>
