<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Velocity by HTML5 UP</title>
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>"/>
    </head>

<body <?php body_class(); ?>>

    <div id="page-wrapper">
        <!-- Header -->
        <header id="header" class="wrapper">
            <!-- Logo -->
            <div id="logo">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <p><?php bloginfo('description'); ?></p>
            </div>
            <!-- Nav -->
            <nav id="nav">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'menu_class'     => 'nav-menu',
                        'container' => 'ul',
                    ));
                ?>
            </nav>
        </header>