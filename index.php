<?php get_header(); ?>
	<div class="container">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-lg-8">
				<div class="post-content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="blog-post">	
					<a class="over" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title( '<h1>', '</h1>' ); ?></a>
					<?php get_template_part( 'post', 'meta' ); ?>
					
					<a class="over" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php get_template_part( 'image', 'feature' ); ?></a>

					<?php the_excerpt(); ?>
					
					<a class="btn btn-default pull-right" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More</a>	
					<div class="clearfix"></div>				
					<hr />
					</div>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
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
