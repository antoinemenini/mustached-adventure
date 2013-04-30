<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?php the_title(); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php bloginfo("template_url"); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="top-block visible-desktop"></div>
        <div class="container" id="container_global">
        <div class="row" id="header">
            <div class="span12">
                <div id="header-content">
                    <?php bloginfo('name'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span8">
                <div id="content">
                    