<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Living Docs
 */
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/tabzilla.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.1.7.1.min.js"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="icon" type="image/png" href="http://livingdocs.org/favicon.png">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

	<script> 
		$(document).ready(function(){
	   		
   		$('.project-list li').hover(function(){
				$(".project-list-info", this).stop().css('display', 'block');
			}, 
			function() {
				$(".project-list-info", this).stop().css('display', 'none');
			});
			
	 	});
	</script>
	
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div class="header" style="border-top: 2px solid #fff;">
	<a href="http://www.mozilla.org/" id="tabzilla">mozilla</a>
	
	<div class="wrapper">
		<h1 class="left"><a href="/index.php"><span>Living Docs</span></a></h1>




			<nav id="access" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->
	
	</div><!-- /.header .wrapper -->
</div><!-- /.header -->

<div class="sub-header">
	<div class="wrapper">
		<p class="left"><a href="/events"><span class="dotted">EVENTS</span></a>, <a href="/projects"><span class="dotted">PROJECTS</span></a> AND <a href="/code"><span class="dotted">CODE</span></a> TO<br /> 
		BRING OPEN INNOVATION TO DOCUMENTARY<br />
		<a href="about" class="left fancy"><span class="dotted">Find Out More </span><span class="yellow">&gt;</span></a></p>
		<ul class="right">
				<li><p>Partners:</p></li>
				<li><a href="http://mozilla.org"><img src="<?php bloginfo('template_directory'); ?>/images/partner_mozilla.png" alt="Mozilla" /></a></li>
				<li><a href="http://itvs.org"><img src="<?php bloginfo('template_directory'); ?>/images/partner_itvs.png" alt="ITVS" /></a></li>
				<li><a href="http://www.tribecafilminstitute.org/"><img src="<?php bloginfo('template_directory'); ?>/images/partner_tribeca.png" alt="Tribeca Film Institute" /></a></li>
				<li><a href="http://bavc.org"><img src="<?php bloginfo('template_directory'); ?>/images/partner_bavc.png" alt="BAVC" /></a></li>
				<li><a href="http://www.centerforsocialmedia.org/"><img src="<?php bloginfo('template_directory'); ?>/images/partner_assoc.png" alt="Assoc" /></a></li>
		</ul>
	</div><!-- /.sub-header .wrapper -->
</div><!-- /.sub-header -->