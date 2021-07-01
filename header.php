<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php 
    //All that's needed for favicon.  Nothing in the current documentation.  Unbefuckinglievable.
    wp_site_icon(); ?>

    <?php wp_head(); ?>

    <style>
        section.hero,
        footer{
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255, 0, 255, 0.5)), to(rgba(255, 0, 255, 0.5))), url("<?php echo get_theme_mod('banner_image'); ?>");
            background-image: linear-gradient(rgba(255, 0, 255, 0.5), rgba(255, 0, 255, 0.5)), url("<?php echo get_theme_mod('banner_image'); ?>");
        }
        
    </style>
</head>
<body <?php body_class(); ?>>

<nav>
    <?php if(the_custom_logo()) : ?>

        <?php the_custom_logo(); ?>

    <?php endif; ?>
    <!-- <ul>
        <li>Page 1</li>
        <li>Page 2</li>
        <li>Page 3</li>
    </ul> -->

    <?php

    wp_nav_menu([
        'theme_location'    =>  'primary'
    ]);

    ?>

    <form action="" action="<?php echo home_url(); ?>">
        <input type="text" name="s" placeholder="Search">
    </form>
</nav>