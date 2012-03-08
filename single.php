<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="content">
	<div class="top-gradient"></div>

	<div class="wrapper clearfix">
		
		<div class="single-post block projects clearfix">
			
			<?php
        if ( have_posts() ) { the_post(); rewind_posts(); }
        if ( in_category(6) ) {?>
        	
        <!-- Template for Single Project Page -->
        
        <?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				



					<div class="banner">
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					</div>
					
					<div class="project-big-image left">
						<img src="<?php echo get_post_meta($post->ID, 'picture', true); ?>" alt="" />
					</div>
					
					<div class="write-up right">
						<h2>About <?php the_title(); ?></h2>
						
						<?php the_content(); ?>
						
						<ul>
							<?php $facebook_meta = get_post_meta($post->ID, 'facebook', true); 
							if ($facebook_meta) { ?>
							
								<li><a href="<?php echo $facebook_meta; ?>" target="_blank">FACEBOOK <span class="yellow">&gt;</span></a></li>
							
							<?php } ?>
							<?php $twitter_meta = get_post_meta($post->ID, 'twitter', true); 
							if ($twitter_meta) { ?>
							
								<li><a href="<?php echo $twitter_meta; ?>" target="_blank">TWITTER <span class="yellow">&gt;</span></a></li>
							
							<?php } ?>
							<?php $trailer_meta = get_post_meta($post->ID, 'trailer', true);
							if ($trailer_meta) { ?>
							
								<li><a href="<?php echo $trailer_meta; ?>" target="_blank">WATCH TRAILER <span class="yellow">&gt;</span></a></li>
							
							<?php } ?>
							
							<?php $versions = get_post_meta($post->ID, 'versions', false);
							if ($versions) { ?>
							
					
								<li><a href="#">VERSIONS <span class="yellow">&gt;</span></a>
									<ul>
										<?php foreach($versions as $version) {
											echo '<li>'.$version.'</li>';
										} ?>
									</ul>
								</li>
						
							
							<?php } ?>
						</ul>
					</div>
					<?php endwhile; ?>

			<?php else : ?>

				<p>Sorry, no posts matched your criteria.</p>
				
			<?php endif; ?>
					
					<div  class="h-divider left">
						<img src="<?php bloginfo('template_directory'); ?>/images/bg_h_divider.jpg" alt="Horizontal Divider" />
					</div>
						
					<div class="see-code bucket left">
						<h2>See Code</h2>
						<?php $code_meta = get_post_meta($post->ID, 'code', true); 
						if ($code_meta) { ?>
						<ul>
							<li>
								<a href="<?php echo $code_meta; ?>" target="_blank">GitHub</a>
							</li>
						</ul>
					<?php } ?>
					</div>
					<div class="bucket left">
						<h2>Get Involved</h2>
						<?php $gis = get_post_meta($post->ID, 'get-involved', false); 
						if ($gis) { ?>
						<ul>
							<?php foreach($gis as $gi) {
								echo '<li>'.$gi.'</li>';
							} ?>
						</ul>
					<?php } ?>
					</div>
					<div class="news bucket left">
						<h2>Blogs</h2>
							<?php $orig_post = $post;
							global $post;
							$tags = wp_get_post_tags($post->ID);
							if ($tags) {
								$tag_ids = array();
								foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
								$args=array(
									'tag__in' => $tag_ids,
									'post__not_in' => array($post->ID),
									'posts_per_page'=>5, // Number of related posts that will be shown.
									'caller_get_posts'=>1
								);
								$my_query = new wp_query( $args );
								if( $my_query->have_posts() ) {

									echo '<ul>';

									while( $my_query->have_posts() ) {
										$my_query->the_post(); ?>

										<li><a href="<?php the_permalink(); ?>"><?php the_time('F jS') ?> &mdash; <?php the_title(); ?></a></li>
									<? }
									echo '</ul>';
									}
								}
							$post = $orig_post;
							wp_reset_query(); ?>
					</div>





      <?php  }
        else { ?>	
        <!-- Single Page Teplate for the rest -->	
        <?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<div class="banner blog">
					<h3><?php the_title(); ?></h3>
					<h4>BLOG &nbsp;| &nbsp;<span class="fancy"><?php the_time('F jS, Y') ?></span>
				</div>
				
				<div class="blog-main-img">
					<img src="<?php echo get_post_meta($post->ID, 'picture', true); ?>" alt="" />
				</div>
				
					<?php the_content(); ?>


				<?php endwhile; ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.'); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
				<?php endif; ?>
      <?php  }
    	?>
			

			
		</div>
		
	</div><!-- /.content .wrapper -->
	
	<div class="bottom-gradient"></div>
</div><!-- /.content -->

<?php get_footer(); ?>









