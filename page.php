<?php get_header(); ?>
	<div class="container">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-lg-8">
				<div class="post-content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_title( '<h1>', '</h1>' ); ?>
					<?php get_template_part( 'image', 'feature' ); ?>

					<?php the_content(); ?>
					
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>

				</div>
				</div>
				<div class="col-lg-3 col-lg-push-1">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
