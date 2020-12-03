<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>
	
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">Oups ! Cette page n'existe pas.</h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>On dirait qu'il n'y a rien à l'adresse indiquée, essayez en recherchant autre chose...</p>

				<?php get_search_form(); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #primary -->

<?php
get_footer();
