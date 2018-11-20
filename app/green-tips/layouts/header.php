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
    acf_form_head();
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
            <img src="<?php echo THEME_URL; ?>/assets/images/logo.svg">
          </div>
        </div>
        <div class="col-12 col-md-auto">
          <nav>
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
              <li class="push">
                <button href="#" class="button-primary open-popup-publish-tips">
                  Publier un tips
                </button>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
