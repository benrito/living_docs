<?php
/**
 * The Home template file.
 *
 * @package WordPress
 * @subpackage living_docs
 */
?>
<?php get_header('home'); ?>


<div class="content">
	<div class="top-gradient"></div>

	<div class="wrapper clearfix">
		<h2 class="frontpagecaps">Blog</h2>
		<div class="main-content block">
			<div class="banner">
				<h4>BLOG</h4>
			</div>
			<?php dynamic_content_gallery(); ?>
		</div>



		
		<div class="left column clearfix">
			<h2 class="frontpagecaps">Featured Projects</h2>
			<a href="projects" class="more-projects">MORE PROJECTS <span class="yellow">></span></a>
			<?php
			global $post;
			$args = array( 'numberposts' => 2, 'category' => 6 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
				<div class="featured-projects block">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<div class="banner">
							<h3><?php the_title(); ?></h3>
					</div>					
				</div>
			<?php endforeach; ?>
		</div>
		
		<div class="right column clearfix">
			<h2 class="frontpagecaps">Get Involved</h2>
			<div class="get-involved block">
				<ul class="sign-up">
					
					<form action="https://donate.mozilla.org/page/s/mozilla-living-docs-email-updates" method="post">
						<li class="first"><label for="email">YOUR EMAIL:</label>
							<input id="email" name="email" required type="email" value="" width="266px">
						</li>
						<li class="privacy-policy-box"><label></label>
							<input type="checkbox" required name="custom-890" id="custom-890" value="1">
						  I agree to the <a href="http://www.mozilla.org/about/policies/privacy-policy.html">Privacy Policy</a>
						</li>
						<li><label></label>
							<input type="submit" tabindex="20" accesskey="b" class="submit" value="Sign Up" />
						</li>
					</form>
				</ul>
			<p class="sign-up-desc"> </p>

				<div class="banner">
						<h3>Upcoming Events</h3>
				</div>
				
					<div class="home-events clearfix">
						<?php echo upcoming_events(); ?>
						<ul class="more-events">
							<li>
								<a href="events">More Events <span class="yellow">&gt;</span></a>
							</li>
						</ul>
					</div>
			</div>
		</div>
		
	</div><!-- /.content .wrapper -->
	
	<div class="bottom-gradient"></div>
</div><!-- /.content -->


<?php get_footer(); ?>