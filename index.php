<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Komaruga
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!--our code-->
			<div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1" id="carouselcontainer">
                <h1 class="text-center">COROUSEL IMAGES</h1>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="wp-content/themes/komaruga/images/photo1.jpg" alt="........">
                            <div class="carousel-caption">
                                Come talk with us! If you are interested in developing an idea, or working with a faculty, student, or external partner on a project relating to assistive and adaptive technology, please be in touch: abilitylab@nyu.edu.
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="wp-content/themes/komaruga/images/photo2.jpg" alt="........">
                            <div class="carousel-caption">
                               ''
                            </div>
                        </div>
                        
                        <div class="item">
                            <img class="img-responsive" src="wp-content/themes/komaruga/images/photo5.jpg" alt="........">
                            <div class="carousel-caption">
                                ''
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="wp-content/themes/komaruga/images/photo4.jpg" alt="........">
                            <div class="carousel-caption">
                                ''
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="wp-content/themes/komaruga/images/photo6.jpg" alt="........">
                            <div class="carousel-caption">
                                ''
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="wp-content/themes/komaruga/images/photo7.jpg" alt="........">
                            <div class="carousel-caption">
                               ''
                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="wp-content/themes/komaruga/images/photo8.jpg" alt="........">
                            <div class="carousel-caption">
                               ''
                            </div>
                        </div>
                            <div class="item">
                            <img class="img-responsive" src="wp-content/themes/komaruga/images/photo9.jpg" alt="........">
                            <div class="carousel-caption">
                              ''
                            </div>

                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
<div>
  </div>
   </div>
   <div id="text">
    <p><strong>Come talk with us!</strong> If you are interested in developing an idea, or working with a faculty, student, or external</br> partner on a project relating to assistive and adaptive technology, please be in touch: <strong><a href="mailto:abilitylab@nyu.edu">abilitylab@nyu.edu</a></strong>"."</p>
    <h1>ABOUT</h1>
    <p>The ABILITY Lab is an interdisciplinary research space dedicated to the development</br> of adaptive and assistive technologies. The Lab is open to NYU students and faculty of all fields </br>looking to create inclusive systems, design human-centered projects, and further intellectual </br> clinical research around areas of ability.</br>

Projects incubated at the Lab are intended to be ongoing, multi-disciplinary, and client-facing, with a strong</br> emphasis on open source practices, partnerships with NYC-based advocacy groups and agencies, and service</br> learning opportunities for students across NYU.</p>


			<!--end-->

		<!--<?php //if ( have_posts() ) : ?>

			<?php //i//f ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php //single_post_title(); ?></h1>
				</header>
			<?php //endif; ?>

			<?php /* Start the Loop */ ?>
			<?php //while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					//get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php //endwhile; ?>-->

			<?php //the_posts_navigation(); ?>

		<?php //else : ?>

			<?php //get_template_part( 'template-parts/content', 'none' ); ?>

		<?php //endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
