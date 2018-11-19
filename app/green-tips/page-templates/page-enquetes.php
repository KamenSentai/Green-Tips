<?php
/* Template Name: Enquetes Page */
?>
<?php get_header();?>
<main id="content" class="enquetes">
<?php $enquetes = array(
            'post_type' => 'enquete'
         );
         $the_query = new WP_Query( $enquetes );
         if($the_query -> have_posts())
         {
             while($the_query -> have_posts())
            {
                 $the_query -> the_post();
                 ?>
                 <?php the_title();?>
                 <a href="<?php the_permalink();?>"> link </a>
                
         <?php }}else{
           echo "no result";
        } ?>

</main>
<?php get_footer();?>
