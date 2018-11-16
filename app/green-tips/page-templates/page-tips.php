<?php 
/* Template Name: Tips Page */ 
?>
<?php get_header();?>
<main id:"content">

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
                <?php the_title();?> 
                <?php the_field('tips_main_content');?>
                <?php the_field('tips_impact_energetique');?>
                <?php the_field('tips_tags');?>
                <?php 
                $image = get_field('tips_image');
                $size = 'medium'; // (thumbnail, medium, large, full or custom size), creer dans les includes la taille que tu as besoin
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                ?>
        <?php }}else{
            echo "no result";
        } ?> 

</main>
<?php get_footer();?>