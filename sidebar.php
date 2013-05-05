</div>
</div>
<div class="span4">
<div id="sidebar">


<?php get_search_form(); ?>


<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
</div>
</div>
</div>