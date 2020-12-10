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

<<<<<<< HEAD
<main class="actualite">
    <?php get_template_part('template-parts/content', 'actualite'); ?>
</main><!-- #primary -->
=======
	<main id="primary" class="site-main">

	<?php $sticky = get_option('sticky_posts');
	$args = array(
			'posts_per_page' => 1,
			'post__in' => $sticky,
			'ignore_sticky_posts' => 1
	);
	$posts = new WP_Query($args);
	if (isset($sticky[0])) {
		?>
	<h2><?= $posts->posts[0]->post_title ?></h2>
	<p><?= $posts->posts[0]->post_content ?></p>
	<?php
	}

	$args = array(
			'posts_per_page' => 4,
			'post__not_in' => $sticky,
			"cat" => 1,

	);

	$query = new WP_Query($args);
		while ($query -> have_posts()) :
			$query->the_post();
	?>
	<h2><?=the_title()?></h2>
	<span>Posté le <?= get_the_date(); ?>, par <?= get_the_author(); ?></span>
	<p> <?= the_excerpt(); ?> </p>
	<a href="<?=the_permalink()?>" rel="bookmark">Lire la suite</a>

<?php
       
    endwhile;
    wp_reset_postdata();
    $args = array(
        'post__not_in' => $sticky,
        "cat" => 1,

    );
    $query = new WP_Query($args);

?>

	</main><!-- #primary -->
>>>>>>> 5395feeae555be609bd9261e8f0053f4ebf76435

<?php
get_footer();
