<?php
/*
Template Name: User Submit
*/
acf_form_head();?>
<?php get_header();?>
<main id:"content">
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post(); ?>
                        <?php  $options = array('post_id'=> 'new_post',
                            'field_groups' => array('group_5bebf9cf8c52f'), //Ceci fait afficher les différents champs créés avec ACF
                            'post_title'	=> false,
                            'html_updated_message'	=> '<div id="message" class="updated"><p>%s</p></div>',
                            'updated_message'    => 'Merci pour votre participation! Votre tips sera publié prochainement',
                            'submit_value'	=> 'Postez votre tips'
		                    );
                        acf_form($options);}
        }
                        ?>           
</main>
<?php get_footer(); ?>
