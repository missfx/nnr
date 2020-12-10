<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>

<main class="actualite">
    <?php get_template_part('template-parts/content', 'actualite'); ?>
</main><!-- #primary -->

<?php
get_footer();
