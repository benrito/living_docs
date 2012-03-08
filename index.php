<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Living_Docs
 */

get_header(); ?>


<div class="content">
	<div class="top-gradient"></div>

	<div class="wrapper clearfix">
		
		<div class="block">
			
					<?php query_posts( 'cat=3' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<?php
					$category = get_the_category(); 
					?>
					<?php	if ($category[0]->cat_name == 'Announcement') {?>
							
							
							
								<div class="single-post block clearfix">
								
									<div class="corner-date"><span class="fancy"><?php the_time('F jS') ?></span></div>
								
									<div class="blog-info announcement">
										<p><?php the_excerpt(); ?></p>
									</div>								
							</div>
					<?php } else {?>
					
							<div class="single-post block clearfix">
								<div class="blog-feature-img left">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								</div>
								
								<div class="corner-date"><span class="fancy"><?php the_time('F jS') ?></span></div>
								
									<div class="blog-info right">
										<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
										<p><?php the_excerpt(); ?></p>
									</div>								
							</div>
					
						<?php }	?>
					<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
		

		
	</div><!-- /.content .wrapper -->
	
	<div class="bottom-gradient"></div>
</div><!-- /.content -->


<?php get_footer(); ?>