<?php acf_form_head(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> data-home="<?= get_home_url(); ?>">
    <div class="page">
    <?php include 'layouts/header.php'; ?>
