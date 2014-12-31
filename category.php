<?php get_header(); ?>
<div class="zprava">Články z rubriky - <?php single_cat_title(); ?></div>
<article>
<?php
if (have_posts()) {
    while (have_posts()) : the_post();
        get_template_part('loop', 'single');
    endwhile;
}
    ?>
</article>
<?php
get_sidebar();
get_footer();
