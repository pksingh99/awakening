<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-8 columns" role="main">
	<div id="primary" class="site-content">
	<div id="content" role="main">	
		<h2><?php _e('Search Results for', 'reverie'); ?> "<?php echo get_search_query(); ?>"</h2>
	
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('custom_pagination') ) { custom_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>
		</div><!-- #content -->
	</div><!-- #primary -->	
	</div>
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>