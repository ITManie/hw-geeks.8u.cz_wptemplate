<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
    <label class="screen-reader-text" for="s">Hledat výraz:</label>
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" >
    <input type="submit" id="searchsubmit" value="Hledat" >
</form>