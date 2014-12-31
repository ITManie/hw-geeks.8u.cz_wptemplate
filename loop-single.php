<?php
$rubrika = get_the_category();
?>
<header><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></header>
<div>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>">Přečíst více</a>
</div>
<footer>
    <p>Publikováno: <?php the_time('d.m.Y'); ?> | 
        Autor: <?php the_author_posts_link(); ?> | 
        Rubrika: <a href="<?php get_category_link($rubrika[0]->term_id); ?>"><?= $rubrika[0]->cat_name; ?></a></p>
</footer>