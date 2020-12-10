<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gutenberg-starter-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-404.css">
<<<<<<< HEAD
<<<<<<< HEAD
	<link rel="icon" type="image/png" href=" <?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
=======
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-article.css">
>>>>>>> 101e3b1402a5c996cd0fb32c0fff0c23b5337e48
=======
	<link rel="icon" type="image/png" href=" <?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
>>>>>>> 5395feeae555be609bd9261e8f0053f4ebf76435

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<<<<<<< HEAD
		<header id="masthead" class="site-header">
			<div class="site-branding">
				NNR
			</div>

			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav>
		</header>

=======
	<header id="masthead" class="site-header">
		<div class="site-branding">
			NNR
		</div>

		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				));
			?>
		</nav>

		<div class="menu-wrap">
			<input type="checkbox" class="toggler">
			<div class="hamburger"><div></div></div>
				<div class="menu">
					<div>
						<div>
						<ul>
							<li><a href="#">À propos</a></li>
							<li><a href="#">Manifeste</a></li>
							<li><a href="#">Ressources</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
						</div>
					</div>
			</div>
		</div>
	</header>
>>>>>>> 5395feeae555be609bd9261e8f0053f4ebf76435
