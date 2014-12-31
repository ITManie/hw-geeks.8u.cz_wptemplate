<?php get_header(); ?>
<div class="zprava">Archív webových stránek - <?php the_time('F') . ' ' . the_time('Y'); ?></div>
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
