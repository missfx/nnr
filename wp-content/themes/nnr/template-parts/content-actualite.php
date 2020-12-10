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
    <?php the_title();?>
    <h2><?= $posts->posts[0]->post_title ?></h2>
    <p><?= $posts->posts[0]->post_excerpt ?></p>
    <a class="wp-block-button__link has-text-color has-background" href="<?=the_permalink()?>" style="background-color:#fc611f;color:#1247ce" target="_blank" rel="noreferrer noopener">Lire la suite</a>
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
        <?php the_post_thumbnail('medium');?>
        <a class="wp-block-button__link has-text-color has-background" href="<?=the_permalink()?>" style="background-color:#fc611f;color:#1247ce" target="_blank" rel="noreferrer noopener">Lire la suite</a>
    </div>
</article>

<?php
       
    endwhile;
    wp_reset_postdata();
    $args = array(
        'post__not_in' => $sticky,
        "cat" => 1,

    );
    $query = new WP_Query($args);

?>
