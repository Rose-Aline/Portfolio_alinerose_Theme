<?php
function init_my_custom()
{
    // Register the custom post type "Projets"
    register_post_type(
        'projets',
        array(
            'label' => 'Projets',
            'labels' => array(
                'name' => 'Projets',
                'singular_name' => 'Projet',
                'all_items' => 'Tous les Projets',
                'add_new_item' => 'Ajouter un Projet',
                'edit_item' => 'Éditer un projet',
                'new_item' => 'Nouveau projet',
                'view_item' => 'Voir les projets',
                'search_items' => 'Rechercher parmi les projets',
                'not_found' => 'Aucun projet trouvé',
                'not_found_in_trash' => 'Aucun projet dans la corbeille'
            ),
            'public' => true,
            'capability_type' => 'post',
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'has_archive' => true
        )
    );
}
add_action('init', 'init_my_custom');

// Add support for post thumbnails
add_theme_support( 'post-thumbnails' );

// Register navigation menus
function register_my_menu(){
    register_nav_menus( array(
        'header-menu' => __( 'Menu De Tête'),
        'footer-menu'  => __( 'Menu De Pied'),
        'footer-social' => __( 'Footer Social Menu'),
    ) );
}
add_action( 'init', 'register_my_menu', 0 );

function theme_setup() {
    add_theme_support('menus');
    register_nav_menu('header-menu', 'Header Menu');
}

add_action('after_setup_theme', 'theme_setup');
