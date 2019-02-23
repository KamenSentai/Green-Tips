<?php if($the_query -> have_posts()): ?>
  <?php while($the_query -> have_posts()): ?>
    <?php $the_query -> the_post(); ?>
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
<?php wp_reset_postdata(); ?>