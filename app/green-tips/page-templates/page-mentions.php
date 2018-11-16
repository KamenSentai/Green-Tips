<?php 
/* Template Name: Legal Mentions */ 
?>
<?php get_header();?>
<main id:"content">

<?php if(have_posts()){
        while(have_posts()){
          the_post();
          ?>
          <?php the_title(); ?>
          <?php the_content(); ?> 
        <?php }
}
?>
</main>
<?php get_footer();?>