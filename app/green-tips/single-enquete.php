<?php get_header();?>
<main id="content" class="">
<?php if ( have_posts() ) :?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_terms( $post->ID, 'tags', '', ' / ' );?>
<?php echo get_the_date();?>
<?php the_title();?>
<?php echo get_the_author();?>
<?php the_content();?>
<?php endwhile; endif; ?> 
</main>
<?php get_footer();?>