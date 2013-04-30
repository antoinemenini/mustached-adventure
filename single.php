<?php 
get_header();
if (have_posts()) :
while (have_posts()) : the_post(); ?>
<article class="post">
    <header class="entry-header">
        <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        </h1>
    </header>
    <div class="entry-content">
       <?php the_content() ?>
    </div>
    <div class="entry-comments">
        <?php comments_template(); ?>
    </div>
</article>
<?php endwhile;
endif;
get_sidebar();
get_footer(); ?>