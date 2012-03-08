<?php
/*
Template Name: Events
*/
?>

<?php get_header('events'); ?>


<div class="content">
	<div class="top-gradient"></div>

	<div class="wrapper clearfix">
		
		<div class="single-post events block clearfix">
			
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="banner">
						<h3><?php the_title(); ?></h3>
					</div>
					<!--
					<div class="event-dates left">
						<?php echo upcoming_events(); ?>
					</div>
					-->
					<div class="calendar-container left">
						<?php the_content(); ?>
					</div>
					
					<div class="right" style="margin-top: 15px; width: 300px;">
					<video width="300px" controls="controls"><source src="http://videos.mozilla.org/serv/webmademovies/itvs/itvsedit.mp4" type="video/mp4"/><source src="http://videos.mozilla.org/serv/webmademovies/itvs/itvsedit.webm" type="video/webm"/>Your browser doesn't support the video tag</video><br>
					<span class="fancy">What does a Living Docs event look like? Watch this video from one of our previous events</span></div>


				<?php endwhile; ?>

			<?php else : ?>

				<p>Sorry, no posts matched your criteria.</p>
				
			<?php endif; ?>
			
		</div>
		

		
	</div><!-- /.content .wrapper -->
	
	<div class="bottom-gradient"></div>
</div><!-- /.content -->


<?php get_footer(); ?>