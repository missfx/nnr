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

add_action( ‘init’, ‘register_my_cpt_membres’, 10 );
function register_my_cpt_membres() {
register_post_type( “membres”, array (
    ‘labels’ =>
    array (
    ‘name’ => ‘membres’,
    ‘singular_name’ => ‘membre’,
    ‘add_new’ => ‘Ajouter’,
    ‘add_new_item’ => ‘Ajouter une nouvelle membre’,
    ‘edit_item’ => ‘Modifier le membre’,
    ‘new_item’ => ‘Nouvelle membre’,
    ‘view_item’ => ‘Voir l membre’,
    ‘search_items’ => ‘Chercher un membre’,
    ‘not_found’ => ‘Aucun membre trouvé’,
    ‘not_found_in_trash’ => ‘Aucun membre trouvé dans la corbeille’,
    ‘parent_item_colon’ => ‘membre parent:’,
    ),
    ‘description’ => ‘’,
    ‘publicly_queryable’ => true,
    ‘exclude_from_search’ => false,
    ‘map_meta_cap’ => true,
    ‘capability_type’ => ‘post’,
    ‘public’ => true,
    ‘hierarchical’ => false,
    ‘rewrite’ =>
    array (
        ‘slug’ => ‘liste-membres’,
        ‘with_front’ => true,
        ‘pages’ => true,
        ‘feeds’ => true,
    ),
    ‘has_archive’ => true,
    ‘query_var’ => ‘membres’,
    ‘supports’ =>
    array (
        0 => ‘title’,
        1 => ‘editor’,
        3 => ‘thumbnail’
    ),
    ‘show_ui’ => true,
    ‘menu_position’ => 30,
    ‘menu_icon’ => false,
    ‘can_export’ => true,
    ‘show_in_nav_menus’ => true,
    ‘show_in_menu’ => true,
    )
    );
}