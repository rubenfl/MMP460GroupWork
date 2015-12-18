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
      <!--start codes-->
      <div class="container-fluid">
        <h1 class="text-center">EVENTS</h1>
        <div class="col-xs-12 col-sm-5 col-sm-offset-1">
          <h2>Upcoming Events:</h2>
          
<!--start posts-->
 <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

        <?php the_title(); ?>
        <?php the_content();?>


        <?php endwhile; // End of the loop. ?>
      <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; ?>

      <?php rewind_posts();?>

      
      <?php $args = array('post_type' => 'Add_event'); ?>

      <?php $latest = new WP_Query($args); ?>
      <?php while( $latest->have_posts() ) : $latest->the_post(); ?>
      <div class="addEvent">
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
      <?php endwhile; ?>
<!--end-->
        </div>
        <div class="col-xs-12 col-sm-5 col-sm-offset-1">
          <h2>Past Events:</h2>
          <!--new codes-->
          <p><strong>Tech@NYU and A11NYC Present: Building Accessible Websites</strong>
When: November 16th, 2015
Where: NYU Leslie eLab (16 Washington Pl.)
6-7:30pm
</p>
<p>
Most people can’t live without the internet., which is fine because they don’t have to. It’s easy when at the click of a mouse, the world can be ‘at your fingertips.’ However, this applies to those that can use a mouse …. and see the screen … and hear the audio – in other words, if you don’t have a disability of any kind.”
</br>
Things tend to work differently when you’re disabled. Come out and learn how people with disabilities use the web and what you can do to make your websites more accessible!
</br>
New York City is home to virtually every type of person and every type of company on earth. A11YNYC exists to advance digital accessibility and inclusive design. Their goal is to bring together NYC’s accessibility community to share ideas, best practices, and our experiences. If you’re interested in accessibility and inclusive design then come to this event and learn more about this group.
<strong>Free pizza!</strong></p>
<p><strong>Accessible Web Development Workshop</strong>
</br>(OPEN TO NYU STUDENTS)</p>

<p>Learn how to design, test, and build accessible UI’s with HTML5, Sass/CSS, and JavaScript, demonstrated by designers and developers at <a title="https://thoughtbot.com/" href="https://thoughtbot.com/" target="_blank">thoughtbot</a>.</br>
In the process, learn about types of disabilities, motivations for accessibility, best practices, testing tools, and accessible UI libraries.</p>

<p>Join us and become a better developer! Accessibility overlaps with other best practices such as mobile web design, device independence, multi-modal interaction, usability, design for older users, and search engine optimization.
</p>
<p><strong>Ability Lab, rm 803 (in MAGNET)</br>
2 MetroTech Center</strong></br>
Brooklyn, NY 11201
</p>
<p><strong>Saturday, November 21st</br>
and Sunday, November 22nd</strong></br>
11:00am-4pm</br>
For Registration, email abilitylab@nyu.edu</p>
          <!--end-->
          <p><strong>The Andrew Heiskell Library’s Community, Culture, and Technology Fair!</br>
 Saturday, October 17 from 10:00 AM to 4:00 PM Andrew Heiskell Library</strong></p>

<p>Andrew Heiskell Library as it transforms into a hub for representatives from New York’s great cultural institutions, premier museums, sports programs, technology vendors, and community groups, all focusing on offerings for people who are blind, visually impaired, or physically disabled. Hear VIP speakers, enjoy hands-on art, meet reps from helpful organizations, explore tools for independent living, try out assistive technology with our tech coaches, and get a goodie bag while supplies last.
</p>
<p><strong>Diversability Unplugged: Ask Me Anything, Two Perspectives on Womanhood and Disability
Wednesday, October 21, 6:30-8:30
In Good Company, 16 W 23rd St (4th Floor)</strong></br>
Space is limited so reserve your spot today: http://diversabilityama.eventbrite.com
</br>
Xian is a teacher and speaker who has cerebral palsy. Alex is a senior associate consultant at the Taproot Foundation who has muscular dystrophy. Ask anything you want! Questions can be submitted anonymously. This is a great opportunity to better educate yourself about Xian, Alex, and disability.
</br>
<strong>We try to include all the relevant events we know about. If we’re missing something, be in touch! (abilitylab@nyu.edu)</strong>
</br>
<strong>Sara Hendren</strong></br>
Sara teaches socially-engaged design practices, adaptive and assistive technology design, and disability studies for engineers-in-training in her role as assistant professor at <a href="http://www.olin.edu/" target="_blank">Olin College.</a> She also writes and edits <a href="http://ablersite.org/" target="_blank">Abler</a>.</p>
<img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/events2.jpg">
<p><strong>Friday, October 2</br>
4pm – 5:30pm</br>
NYU Magnet – 2 MetroTech Center,</br>
8th Floor, Brooklyn</strong></p>
<p>July & August: <a title="TechKids unlimited" href="http://www.techkidsunlimited.org/register/" target="_blank">TechKids Unlimited</a>Summer Sessions.</p>
  <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/events1.jpg">
  <p>We’re thrilled to announce the launch of the <a title="Connect Ability Challenge" href="http://connectability.challengepost.com/" target="_blank">Connect Ability Challenge</a> AT&T will be giving away $100,000 in cash prizes to teams of developers, designers, and thinkers to develop accessible technology solutions together with people with disabilities.
Read about some of the highlights from the <a title="Creators Project Connect Ability hackathon" href="http://thecreatorsproject.vice.com/en_uk/blog/better-living-through-contraptions-dispatches-from-the-nyu-connect-ability-hackathon" target="_blank">Connect Ability Hackathon</a> we hosted in April.
More press about the competition in <a title="Fast Company" href="http://m.fastcompany.com/3044652/most-creative-people/atts-challenge-to-developers-inventive-apps-for-the-disabled" target="_blank">Fast Company!</a></p>

<p>May 21: <a title="Arts Ed Tech Talk" href="http://www.meetup.com/ArtsEdTechNYC/events/221329795/" target="_blank">ArtsEdTech Talk</a> at Apple Store, Soho</p>

<p>June 24: Deadline for submissions for <a title="Connect ability challenge" href="http://connectability.challengepost.com/" target="_blank">Connect Ability Challenge<br>
</a></p>

<p>July & August: <a title="TechKids unlimited" href="http://www.techkidsunlimited.org/register/" target="_blank">TechKids Unlimited</a> Summer Sessions</p>

<p>Tuesday, July 7: <a href="http://abilitylab.nyu.edu/?page_id=443">Panel Discussion Assistive Technology in the Next 25 Years</a> 3:00-4:30pm</p>
 

<p>Monday, July 13: <a href="http://abilitylab.nyu.edu/?page_id=422">Lights! Camera! Access! 2.0</a> “Think Tanks”
Livestreaming for the Welcome and Keynote Addresses
1:00-2:30 pm
July 27th: AT&T NYU Connect Ability Challenge Awards Announcement. View Livestream <a href="http://connectability.challengepost.com/details/livestream">here</a>.</p>

        </div>
      </div>
      <!--end-->



      

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
