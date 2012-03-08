<?php
/*
Template Name: Bare
*/
?>

<?php get_header('home'); ?>


<div class="content">
	<div class="top-gradient"></div>
	<div class="wrapper clearfix">
		<div class="about block clearfix">	
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="banner" style="margin-top: -120px;">
						<h3><?php the_title(); ?></h3>
					</div>
					<div class="blog-main-img">
						<img src="<?php echo get_post_meta($post->ID, 'picture', true); ?>" alt="" />
					</div>
					
						<?php the_content(); ?>


				<?php endwhile; ?>

			<?php else : ?>

				<p>Sorry, no posts matched your criteria.</p>
				
			<?php endif; ?>
			
		</div>
		

		
	</div><!-- /.content .wrapper -->
	
	<div class="bottom-gradient"></div>
</div><!-- /.content -->


<?php get_footer(); ?>