<?php
get_header();
if (have_posts()) :
    while (have_posts()) : the_post();
        $rubrika = get_the_category();
        ?>
        <header><?php the_title(); ?></header>
        <div><?php the_content(); ?></div>
        <footer>
            <p>Publikováno: <?php the_time('d.m.Y'); ?> | 
                Autor: <?php the_author_posts_link(); ?> | 
                Rubrika: <a href="<?php get_category_link($rubrika[0]->term_id); ?>"><?= $rubrika[0]->cat_name; ?></a></p>
        </footer>
        <?php
    endwhile;
endif;
get_sidebar();
get_footer();
