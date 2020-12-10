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
    <?php $sticky = get_option('sticky_posts');
    $args = array(
            'posts_per_page' => 1,
            'post__in' => $sticky,
            'ignore_sticky_posts' => 1
    );
    $posts = new WP_Query($args);
    if (isset($sticky[0])) {
        ?>
    <article class="grid60" id="first">
        <h2><?= $posts->posts[0]->post_title ?></h2>
        <p><?= $posts->posts[0]->post_excerpt ?></p>
        <a class="wp-block-button__link has-text-color has-background" href="<?=the_permalink()?>" target="_blank" rel="noreferrer noopener">Lire la suite</a>
    </article>
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
    <article class="grid60">
        <div class="side">
            <h2><?=the_title()?></h2>
            <p> <?= the_excerpt(); ?> </p>
        </div>
        <div class="side">
            <?php
            the_post_thumbnail();
        ?>
            <a class="wp-block-button__link has-text-color has-background" href="<?=the_permalink()?>" style="background-color:#fc611f;color:#1247ce" target="_blank" rel="noreferrer noopener">Lire la suite</a>
        </div>
    </article>

    <?php
       
    endwhile;
    wp_reset_postdata();

?>

</main><!-- #primary -->

<?php
get_footer();
