<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>

	<main id="primary" class="site-main">

	<?php
	if ( have_posts() ) : ?>

		
		<p>HEY</p>

		<?php
		

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

	</main><!-- #primary -->

<?php
get_footer();
