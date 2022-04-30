<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title();?></title>

    <?php wp_head();?>

</head>
<body <?php body_class();?>>

<div class="main">

    <header class="header">
        <div class="top-bar big-container">
            <div class="col-1">
                <div class="item">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:791734343">791 734 343</a>
                </div>
                <div class="item">
                    <i class="fa-regular fa-envelope"></i>
                    <a href="mailtobiuro@zanettbeautyspa.pl">biuro@zanettbeautyspa.pl</a>
                </div>
            </div>
            <div class="col-2">
                <div class="item">
                    <i class="fa-regular fa-clock"></i>
                    <p>Pon-Pt 9:00-21:00</p>
                </div>
                <div class="item">
                    <a target="_blank" href="https://pl-pl.facebook.com/zanettbeautyspa/"><i class="fa-brands fa-facebook"></i></a>
                    <a target="_blank" href="https://www.instagram.com/zanett_beauty_spa/"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="navbar big-container">
            <div class="logo">
                <?php the_custom_logo();?>
            </div>
            <nav class="nav-items">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'nav-menu',
                        'add_li_class'  => 'nav-link'
                    )
                );?>
            </nav>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </header>