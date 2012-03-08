<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<footer>
	
        <section class="external">
            <div class="busta">
            <div class="col box learn">
							<h2>Get Email updates on Living Docs and Mozilla</h2>
              	<div class="update-me">                    
                	<form action="https://donate.mozilla.org/page/s/mozilla-living-docs-email-updates" method="post">
                  	<div id="email-field">                            	
                       <label for="email">Email</label>
                       <input id="email" name="email" class="update-me-input field" required type="email" value="" placeholder="Your Email Address">
                     </div>
                     
	                   <div class="row" id="privacy-field">
						            <input type="checkbox" required name="custom-890" id="custom-890" value="1">
						            <label for="custom-890">I agree to the <a href="http://www.mozilla.org/about/policies/privacy-policy.html">Privacy Policy</a></label>
						          	<!--</label>-->
										 </div>	


											<input type="submit" class="update-me-btn btn" value="Sign me up!">
                  </form>  



                      
            		</div>
            </div>
            <div class="col box tweet">
            	
            <script 
						 src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js" 
						 type="text/javascript">
						</script>
						<script type="text/javascript" charset="utf-8">
						getTwitters("tweet", { 
						  id: "livingdocs", 
						  count: 1, 
						  enableLinks: true, 
						  ignoreReplies: true, 
						  clearContents: true,
						  template: '"%text%" <a href="http://twitter.com/%user_screen_name%/statuses/%id%/">%time%</a>'
						});
						</script>
						
                <h2>Follow and Tweet</h2>

                <div id="tweet">
		
						 			<p>Please wait while our updates load</p>
						 			<p><a href="http://twitter.com/livingdocs">If you can't wait - check out what we've been tweeting</a></p>
								</div>	
								
								<a href="https://twitter.com/livingdocs" class="twitter-follow-button" data-show-count="false">Follow @livingdocs</a>
						 		/ 		<a href="https://twitter.com/mozilla" class="twitter-follow-button" data-show-count="false">@mozilla</a>

            </div>
            <div class="col box mozilla">
                <h2>Connect with Mozilla</h2>
                <ul class="news-list">
                    <li><a href="http://www.mozilla.org/about/mission.html">Learn about Mozilla's mission</a></li>
                    <li><a href="https://donate.mozilla.org/page/contribute/protect-the-web/">Join Mozilla</a></li>
                    <li><a href="http://www.facebook.com/mozilladrumbeat/">Like us on Facebook</a></li>
                </ul>
            </div>
            </div>
        	</div><!-- /.footer .wrapper -->
        </section>

</footer><!-- /.footer -->

<script src="<?php bloginfo('template_directory'); ?>/js/tabzilla.js"></script>

</body>
</html>

<?php wp_footer(); ?>

</body>
</html>