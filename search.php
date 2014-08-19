<?php get_header(); ?>
	<div class="container">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-lg-8">
				<div class="post-content">
					<h1>Search results for <span class="key-word">"<?php echo esc_html( get_search_query( false ) ); ?>"</span></h1>
					<hr />
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_title( '<h2>', '</h2>' ); ?>
					<?php get_template_part( 'image', 'feature' ); ?>

					<?php the_excerpt(); ?>

					<a class="btn btn-default pull-right" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a>	
					<div class="clearfix"></div>				
					<hr />
					
					<?php endwhile; else: ?>
						<p><?php _e('Oh Boy! Looks like we have not written anything about this...'); ?></p>
					<?php endif; ?>
										<?php
						echo custom_pagination();
					?>
				</div>
				</div>
				<div class="col-lg-3 col-lg-push-1">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
