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
                'edit_item' => 'Modifier les événements',
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
            'rewrite'    => array( 'slug' => 'liste-evenements' ), // my custom slug
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
            'taxonomies' => array(
                /* 'post_tag', */ // Etiquette
                'cat-evenement'
            ) // Add Category and Post Tags support
        )
    );
}
add_action( 'init', 'register_my_cpt_evenement', 11 );


//TODO Ajout d'une taxonomy (etiquette) du nom "cat-evenement" pour les événements
register_taxonomy('cat-evenement', array('evenement'), array(
    'hierarchical' => true,
      'labels' => array(
          'name' => __( 'cat-evenement' ),
          'singular_name' => __( 'cat-evenement' ),
          'search_items' =>  __( 'Rechercher une cat-evenement' ),
          'all_items' => __( 'Toutes les cat-evenement' ),
          'edit_item' => __( 'Editer les cat-evenement' ),
          'update_item' => __( 'Mettre à jour la cat-evenement' ),
          'add_new_item' => __( 'Ajouter une nouvelle cat-evenement' ),
          'new_item_name' => __( 'Nom de la nouvelle cat-evenement' ),
          'menu_name' => __( 'cat-evenement' ),
      ),
      'rewrite' => array(
          'slug' => 'cat-evenement',
          'with_front' => true,
          'hierarchical' => true,
          'show_admin_column' => true,
          'show_ui' => true,
      ),
    )
  );

// FILTER
function get_liste_cpt_sidebar() {?>
    <aside>
        <h3 class="widget-title"></h3>
        <form id="liste_cpt" method="get" name="liste_cpt">
         <?php 
            $select = wp_dropdown_pages('show_option_none=Sélection%20bibliothèque&depth=1&sort_column=menu_order&echo=0');
            $select = preg_replace("#]*)>#", "", $select);
            echo $select;
         ?>
        <noscript>
        <input type="submit" name="submit" value="view" />
        </noscript>
        </form>
    </aside>
<?php
}
?>
    