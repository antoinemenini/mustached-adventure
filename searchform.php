<form method="get" id="form" action="<?php bloginfo('url'); ?>/">
    <input type="text" class="left-search-input" value="<?php the_search_query(); ?>" name="s" id="s"/>
    <input type="submit" value="Rechercher" class="btn" id="submit"/>
</form>