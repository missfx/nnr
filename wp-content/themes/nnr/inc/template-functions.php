<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package gutenberg-starter-theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gutenberg_starter_theme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'gutenberg_starter_theme_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function gutenberg_starter_theme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'gutenberg_starter_theme_pingback_header' );
add_action( 'init', 'register_my_cpt_membres', 10 );
function register_my_cpt_membres() {
register_post_type( "membres", array (
    'labels' =>
    array (
    'name' => 'membres',
    'singular_name' => 'membre',
    'add_new' => 'Ajouter',
    'add_new_item' => 'Ajouter une nouvelle membre',
    'edit_item' => 'Modifier le membre',
    'new_item' => 'Nouvelle membre',
    'view_item' => 'Voir l membre',
    'search_items' => 'Chercher un membre',
    'not_found' => 'Aucun membre trouvé',
    'not_found_in_trash' => 'Aucun membre trouvé dans la corbeille',
    'parent_item_colon' => 'membre parent:',
    ),
    'description' => '',
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'map_meta_cap' => true,
    'capability_type' => 'post',
    'public' => true,
    'hierarchical' => false,
    'rewrite' =>
    array (
        'slug' => 'liste-membres',
        'with_front' => true,
        'pages' => true,
        'feeds' => true,
    ),
    'has_archive' => true,
    'query_var' => 'membres',
    'supports' =>
    array (
        0 => 'title',
        1 => 'editor',
        3 => 'thumbnail'
    ),
    'show_ui' => true,
    'menu_position' => 30,
    'menu_icon' => false,
    'can_export' => true,
    'show_in_nav_menus' => true,
    'show_in_menu' => true,
    )
    );
}


/**
 * Custom Post Type pour les événements
 */
function register_my_cpt_evenement() {
    register_post_type( "evenements", array (
        'labels' =>
            array (
                'name' => 'Evénements',
                'singular_name' => 'Evénement',
                'add_new' => 'Ajouter',
                'add_new_item' => 'Ajouter un nouveau événement',
                'edit_item' => 'Modifier l\'événements',
                'new_item' => 'Nouveau événement',
                'view_item' => 'Voir l\'événement',
                'search_items' => 'Chercher un événement',
                'not_found' => 'Aucun événement trouvé',
                'not_found_in_trash' => 'Aucun événements trouvé dans la corbeille',
                'parent_item_colon' => 'événement parent:',
            ),
            'description' => '',
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'map_meta_cap' => true,
            'capability_type' => 'post',
            'public' => true,
            'hierarchical' => false,
            'rewrite' =>
            array (
                'slug' => 'liste-evenements',
                'with_front' => true,
                'pages' => true,
                'feeds' => true,
            ),
            'has_archive' => true,
            'query_var' => 'evenements',
            'supports' =>
            array (
                0 => 'title',
                1 => 'editor',
                3 => 'thumbnail'
            ),
            'show_ui' => true,
            'menu_position' => 30,
            'menu_icon' => false,
            'can_export' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
        )
    );
}
add_action( 'init', 'register_my_cpt_evenement', 11 );