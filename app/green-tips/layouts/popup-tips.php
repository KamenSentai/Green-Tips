<div class="popup-tips">
  <?php if($the_query -> have_posts()): ?>
    <?php while($the_query -> have_posts()): ?>
      <?php $the_query -> the_post(); ?>
      <?php if($id == get_the_id()): ?>
        <div class="popup-tips-content">
          <div class="popup-close">
            <img src="<?php echo THEME_URL; ?>/assets/images/popup-close.png" alt="Close popup">
          </div>
          <div class="popup-tips-infos">
            <div class="popup-tips-top">
              <h2 class="popup-tips-top__title">
                <?php the_title(); ?>
              </h2>
            </div>
            <div class="popup-tips__resume">
              <?= helper_url_regex(get_field('tips_main_content')); ?>
            </div>
            <div class="popup-tips__image">
              <?php
              $image = get_field('tips_image');
              $size = 'large';
              if( $image ) echo wp_get_attachment_image( $image, $size );
              else echo "<img src=\"" . IMAGES_URL . "/logo.svg\">";
              ?>
            </div>
          </div>
        </div>
      <?php endif;?>
    <?php endwhile; ?>
  <?php else: echo "no result"; ?>
  <?php endif; ?>
</div>
<?php wp_reset_postdata(); ?>
