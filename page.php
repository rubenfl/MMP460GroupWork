<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Komaruga
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="container-fluid">
      <div class="row" id="people">
        <div id="body">
    		<div class="col-xs-12 col-sm-4 col-sm-offset-0">
    			<div id="colom1">
                    <h3 class="text-center">PROGRAM</h3>
                    <img class="img-responsive" src="images/programs1.jpg">
    			<p class="text-center">TKU teaches technology to kids who learn differently. This 501(c) 3 not-for-profit technology-based educational organization is designed for kids ages 7 to 18 with special needs. The program runs out of the ABILITY Lab during lively Sunday afternoons and regular “TechKids Camps” during the summer and school breaks. The students learn how to become makers of media, creating digital games, shooting and editing video, and learning how to create 3D models, among other things. They are empowered to create and develop ideas, and bring those skills home and back to school. NYU students and faculty help facilitate the classes, as counselors and digital media instructors.</p>
    		</div>
    		</div>
    		<div class="col-xs-12 col-sm-4 col-sm-offset-0">
    			<div id="colom2">
                    <h3 class="text-center">PROGRAM</h3>
                    <img class="img-responsive" src="images/programs2.jpg">
    			<p class="text-center">TKU teaches technology to kids who learn differently. This 501(c) 3 not-for-profit technology-based educational organization is designed for kids ages 7 to 18 with special needs. The program runs out of the ABILITY Lab during lively Sunday afternoons and regular “TechKids Camps” during the summer and school breaks. The students learn how to become makers of media, creating digital games, shooting and editing video, and learning how to create 3D models, among other things. They are empowered to create and develop ideas, and bring those skills home and back to school. NYU students and faculty help facilitate the classes, as counselors and digital media instructors.</p>
    			
    		</div>
    		</div>
    		<div class="col-xs-12 col-sm-4 col-sm-offset-0">
    			<div  id="colom3">
                    <h3 class="text-center">PROGRAM</h3>
                    <img class="img-responsive" src="images/potential.jpg">
    			<p class="text-center">TKU teaches technology to kids who learn differently. This 501(c) 3 not-for-profit technology-based educational organization is designed for kids ages 7 to 18 with special needs. The program runs out of the ABILITY Lab during lively Sunday afternoons and regular “TechKids Camps” during the summer and school breaks. The students learn how to become makers of media, creating digital games, shooting and editing video, and learning how to create 3D models, among other things. They are empowered to create and develop ideas, and bring those skills home and back to school. NYU students and faculty help facilitate the classes, as counselors and digital media instructors.</p>
    	
    		</div>
    		</div>
    		</div>
    	</div>
    </div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
