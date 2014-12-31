<?php get_header(); ?>
<div>Výsledky vyhledávání - <?php the_search_query(); ?></div>
<?php
if (have_posts()) {
    while (have_posts()) : the_post();
        get_template_part('loop', 'single');
    endwhile;
}
get_sidebar();
get_footer();
