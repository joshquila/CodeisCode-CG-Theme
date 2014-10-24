<?php get_header(); ?>

<div id="page" class="block clear">
	
	<div id="border"></div>

	<div class="container">

		
		<div id="content" class="clearfix">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
					<article>
						<h2><?php the_title(); ?></h2>
			
						<div class="post-content page-content">
							<?php the_content(); ?>
							<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
						</div><!--.post-content .page-content -->
					</article>
		
				</div><!--#post-# .post-->
		
			<?php endwhile; ?>
		</div><!--#content-->



	</div>
</div>


<?php get_footer(); ?>
