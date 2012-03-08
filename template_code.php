<?php
/*
Template Name: Code
*/
?>

<?php get_header('code'); ?>


<div class="content">
	<div class="top-gradient"></div>

	<div class="wrapper clearfix">
		
		<div class="single-post code block clearfix">
			
			<div class="banner">
				<h3><?php the_title(); ?></h3>
			</div>
			<table cellspacing="0" cellpadding="0" class="code-table">
			<?php query_posts( 'cat=4' ); ?>
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<tr>
						<td class="code-thumbnail">
							<?php the_post_thumbnail(); ?>
						</td>
						<td class="code-info">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<?php $code_meta = get_post_meta($post->ID, 'code', true); 
							if ($code_meta) { ?>
							
								<a class="see-repo" href="<?php echo $code_meta; ?>" target="_blank">SEE REPO <span class="yellow">&gt;</span></a>
							
							<?php } ?>
						</td>
					</tr>

				<?php endwhile; ?>

			<?php else : ?>

				<p>Sorry, no posts matched your criteria.</p>
				
			<?php endif; ?>

		</table>
		</div>
		

		
	</div><!-- /.content .wrapper -->
	
	<div class="bottom-gradient"></div>
</div><!-- /.content -->


<?php get_footer(); ?>