<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);
/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

$sticky = get_option('sticky_posts');
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
