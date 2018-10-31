<?php

namespace Climate;

\Climate\Autoloader::register();

use \Climate\Controllers as CC;

?>

<?php get_header(); ?>

<?php $index = new CC\Template('autoload'); ?>

<?php get_footer(); ?>