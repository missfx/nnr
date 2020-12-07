<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gutenberg-starter-theme
 */

get_header(); ?>

	<main id="primary" class="site-main">

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>
			<div class="entry-content">

				<header class="header alignfull">
					<h1><?php the_title(); ?></h1>
				</header>

				<div class="page-content">
					<?php the_content(); ?>

					<p class="published-date">Publié le <?php the_date(); ?></p>

					<div class="share">
						<ul>
							<li>Partager :</li>
							<li><a href="#">&rarr; Linkedin</a></li>
							<li><a href="#">&rarr; Twitter</a></li>
							<li><a href="#">&rarr; Facebook</a></li>
							<li><a href="#">&rarr; Copier l'url</a></li>
						</ul>
					</div>
				</div>

			</div>
		</article>

	<?php endwhile; ?>
	

	</main>

<?php
get_footer();
