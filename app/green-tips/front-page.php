<?php get_header(); ?>

<main id="content">

  <?php

  $tipsday = array(
    'post_type'      => 'tips',
    'posts_per_page' => 1,
  );
  $the_query = new WP_Query( $tipsday );

  include LAYOUTS_PATH . '/popup-tips.php';

  include LAYOUTS_PATH . '/jumbotron.php';
  include LAYOUTS_PATH . '/tips_day.php';
  include LAYOUTS_PATH . '/slider.php';
  include LAYOUTS_PATH . '/collection.php';

  ?>

</main>

<?php get_footer(); ?>
