<?php

define('THEME_PATH',       get_template_directory()       );
define('INCLUDES_PATH',    THEME_PATH . '/includes'       );
define('LAYOUTS_PATH',     THEME_PATH . '/layouts'        );
define('THEME_URL',        get_template_directory_uri()   );
define('CSS_URL',          THEME_URL  . '/styles'         );
define('JS_URL',           THEME_URL  . '/scripts'        );
define('IMAGES_URL',       THEME_URL  . '/assets/images'  );
define('FAVICONS_URL',     THEME_URL  . '/assets/favicons');
define('ADMIN_IMAGES_URL', IMAGES_URL . '/admin'          );

foreach (glob(THEME_PATH . '/includes/*.php') as $file ) {
    include_once $file;
}