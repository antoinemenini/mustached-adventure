<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<article class="post">
    <header class="entry-header">
        <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        </h1>
    </header>
    <div class="entry-content">
       <?php the_content() ?>
    </div>
</article>

<?php endwhile; ?>
<?php else : ?>
<!-- Si il n'y a pas de Post, j'affiche cette partie -->
<?php endif; ?>