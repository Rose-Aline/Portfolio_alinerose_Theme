<?php
function init_my_custom()
{
    register_post_type(
        'equipes',
        array(
            'label' => 'equipes',
            'labels' => array(
                'name' => 'Equipes',
                'singular_name' => 'Equipes',
                'all_items' => 'Toutes les Equipes',
                'add_new_item' => 'Ajouter une Equipe',
                'edit_item' => 'Éditer une équipe',
                'new_item' => 'Nouvelle équipe',
                'view_item' => 'Voir les équipes',
                'search_items' => 'Rechercher parmi les équipes',
                'not_found' => 'Aucune équipe trouvée',
                'not_found_in_trash' => 'Aucune équipe dans la corbeille'
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

// vignettes
add_theme_support( 'post-thumbnails' );

//ajouter une nouvelle zone de menu à mon thème
function register_my_menu(){
    register_nav_menus( array(
        'header-menu' => __( 'Menu De Tete'),
        'footer-menu'  => __( 'Menu De Pied'),
    ) );
}
add_action( 'init', 'register_my_menu', 0 );



