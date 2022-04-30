<?php

function include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'include_custom_jquery');

function load_javascript() {
    wp_enqueue_script( 'owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'));
    wp_register_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', '', 1, true);
    wp_enqueue_script('custom-js');
}
add_action('wp_enqueue_scripts', 'load_javascript');

function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/custom-style.css' );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Poppins:wght@400;500&display=swap' );
	wp_enqueue_style( 'fa', 'https://use.fontawesome.com/releases/v6.1.1/css/all.css' );
    wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Add menus
add_theme_support('menus');
add_theme_support( 'custom-logo' );

// Register menus
register_nav_menus(
    array(
        'main-menu' => 'Main Menu',
        'footer-menu-1' => 'Footer Menu 1',
        'footer-menu-2' => 'Footer Menu 2',
    )
);

// Add a widget
register_sidebar(
    array(
        'name' => 'Sidebar',
        'id' => 'page-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    )
);

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Add custom link to wp_nav_menu
add_filter('wp_nav_menu_items', 'add_custom_link', 10, 2);
function add_custom_link($items, $args){
    if( $args->theme_location == 'main-menu' ){
        $items = $items . '<li><a target="_blank" class="btn" title="Rezerwacja" href="https://booksy.com/pl-pl/105037_zanett-beauty-spa_salon-kosmetyczny_8820_krakow"><span>Rezerwacja</span></a></li>';
    }
    return $items;
}

// Add breadcrumbs
function get_breadcrumb() {
    echo '<i class="fa-solid fa-house"></i><a href="'.home_url().'" rel="nofollow">Strona główna</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}