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
                    <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/programs1.jpg">
    			<p class="text-center">TKU teaches technology to kids who learn differently. This 501(c) 3 not-for-profit technology-based educational organization is designed for kids ages 7 to 18 with special needs. The program runs out of the ABILITY Lab during lively Sunday afternoons and regular “TechKids Camps” during the summer and school breaks. The students learn how to become makers of media, creating digital games, shooting and editing video, and learning how to create 3D models, among other things. They are empowered to create and develop ideas, and bring those skills home and back to school. NYU students and faculty help facilitate the classes, as counselors and digital media instructors.</p>
    		</div>
    		</div>
    		<div class="col-xs-12 col-sm-4 col-sm-offset-0">
    			<div id="colom2">
                    <h3 class="text-center">PROGRAM 2</h3>
                    <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/programs2.jpg">
    			<p class="text-center">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
    		</div>
    		</div>
    		<div class="col-xs-12 col-sm-4 col-sm-offset-0">
    			<div  id="colom3">
                    <h3 class="text-center">PROGRAM 3</h3>
                    <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/potential.jpg">
    			<p class="text-center">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
    	
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
