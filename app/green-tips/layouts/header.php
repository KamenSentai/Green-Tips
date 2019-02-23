<div class="popup-publish-tips">
  <div class="popup-publish-tips-content">
    <div class="popup-close">
      <img src="<?php echo THEME_URL; ?>/assets/images/popup-close.png" alt="Close popup">
    </div>
    <div class="popup-publish-tips-infos">
      <div class="title">
        Publier un tips
      </div>
      <div class="form-acf">
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post(); ?>
          <?php  acf_form(array(
                            'post_id'=> 'new_post',
                            'field_groups' => array('group_5bebf9cf8c52f'),
                            'post_title'	=> true,
                            'html_updated_message'	=> '<div id="message" class="updated"><p>%s</p></div>',
                            'updated_message'    => 'Merci pour votre participation! Votre tips sera publié prochainement',
                            'submit_value'	=> 'Postez votre tips',
                            'new_post'		=> array(
                                'post_type'		=> 'tips',
                                'post_status'	=> 'publish'
                            )
		                    ));
                       }
        }
                        ?>
      </div>
    </div>
  </div>
</div>

<header id="header">
  <div class="top-bar">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-12 col-md-3">
          <div class="logo">
            <a href="<?php echo get_home_url(); ?>">
              <img src="<?php echo THEME_URL; ?>/assets/images/logo.svg">
            </a>
          </div>
        </div>
        <div class="col-12 col-md-auto">
          <nav>
            <ul>
              <?php wp_nav_menu_no_ul_header(); ?>
              <li class="push">
                <button href="#" class="button-primary open-popup-publish-tips">
                  Publier un tips
                </button>
              </li>
            </ul>
          </nav>
          <!-- <nav>
            <ul>
              <li class="active">
                <a href="#">Accueil</a>
              </li>
              <li>
                <a href="#">Tips</a>
              </li>
              <li>
                <a href="#">Enquêtes</a>
              </li>
              
            </ul>
          </nav> -->
        </div>
      </div>
    </div>
  </div>
</header>
