<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Komaruga
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--our code-->
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>komaruga</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://path/to/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="gallery.js"></script> 


<!--end-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--our code-->
	<div id="logo">
				<img class="img-responsive" src="wp-content/themes/komaruga/images/logo2.jpg">
			</div>
				<nav>
	<ul>
		<li><a href="http://abilitylab.nyu.edu/" rel="home"><span style="color:#FFFFFF;">NYU's</span></a></li>
		<li><a href="https://wpmmp.bmcc.cuny.edu/~rfernand/" rel="home"><span style="color:#FFFFFF;">Home</span></a></li>
		<li><a href=" https://wpmmp.bmcc.cuny.edu/~rfernand/?page_id=147">People</a></li>
		<li><a href=""><span style="color:#FFFFFF;">Projects</span></a></li>
		<li><a href=""><span style="color:#FFFFFF;">Student Resources</span></a></li>
		<li><a href=""><span style="color:#FFFFFF;">Programs</span></a></li>
		<li><a href=""><span style="color:#FFFFFF;">Events</span></a></li>
		
		</ul>
	</nav>
	<!--end-->
<!--<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'komaruga' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<!--<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'komaruga' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
