<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- <script src="http://localhost:1337/livereload.js"></script> -->
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title('');
	// wp_title( '|', true, 'right' );

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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
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
	<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

<div class="spanning-bar spanning-bar--unconstrained-menu">
	<nav id="access" role="navigation" class="outer-wrapper">
		<div class="inner-wrapper">
			<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
			<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
			<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
			<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
			<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
	</nav><!-- #access -->
	<a class="starburst hidden" id="acquisition" href="https://docs.google.com/forms/d/1aK-l2gfEnm983fKw8aSJzEyNiChaVuDKfgTc-YdU4kw/viewform">
	  <span class="starburst__text">
	    WERDE JETZT <strong>GAMESTAGE-</strong> MITGLIED!
	  </span>
	  <span class="starburst__foreground"></span>
	  <span class="starburst__background"></span>
	</a>
</div>


<div id="page" class="hfeed outer-wrapper">

	<header id="branding" role="banner">

			<hgroup class="inner-wrapper">
				<h1 id="site-title">
					<span>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
								title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
								rel="home" class="image-link--logo">
								<?php
								  $post = $wp_query->get_queried_object();
									if(isset($post)) {
								    if($post->post_name === 'tu-felix-austria-lude') {
								    ?>
								    <img class="image-link" alt="GameStage@AEC Logo"
												src="<?php echo get_stylesheet_directory_uri(); ?>/img/gamestage-2.png" >
								    <?php
								  	} else if($post->post_name === 'gamestageraumschiff') {
								  	?>
										<img class="image-link" alt="GameStage@Raumschiff Logo"
												src="<?php echo get_stylesheet_directory_uri(); ?>/img/gamestage-raumschiff.png" >
								  	<?php
								  	} else {
								  	?>
										<img class="image-link" alt="GameStage@AEC Logo"
												src="<?php echo get_stylesheet_directory_uri(); ?>/img/gamestage.png" >
								  	<?php
								  	}
								  }
							  ?>
						</a>
					</span>
				</h1>
				<!-- <h2 id="site-description"><?php // bloginfo( 'description' ); ?></h2> -->
			</hgroup>

	</header><!-- #branding -->

	<div id="main">
