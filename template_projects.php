<?php
/*
Template Name: Projects
*/
?>

<?php get_header('projects'); ?>


<div class="content">
	<div class="top-gradient"></div>

	<div class="wrapper clearfix">
		
		<div class="project-list-container">
			
		
			<ul class="project-list">
					<?php query_posts( 'cat=6' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
						
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<div class="project-list-info">
									<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
									<p><?php the_excerpt(); ?></p>
								</div>
							</li>		
	
	
					<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
						
	
			</ul>
		</div>
		
	</div><!-- /.content .wrapper -->
	
	<div class="bottom-gradient"></div>
</div><!-- /.content -->


<?php get_footer(); ?>