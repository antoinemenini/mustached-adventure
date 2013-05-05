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
            <?php 
            $defaultMenu = array(
                'theme_location'  => 'header-menu',
                'menu'            => 'headerMenu', 
                'container'       => 'div', 
                'container_class' => 'menu', 
                'container_id'    => '',
                'menu_class'      => 'menu', 
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
            ); ?>
            <div class="span12">
                <div id="header-content">
                    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    <?php 
                    wp_nav_menu( $defaultMenu );
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span8">
                <div id="content">
                    