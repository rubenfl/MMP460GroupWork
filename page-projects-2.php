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

				 <div class="container-fluid"><!--start container fluid-->
                     <h1>PROJECTS</h1>
            <div class="col-xs-12 col-sm-4 col-sm-offset-0">
            <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/projects4.jpg">
        </div>
        <div class="col-xs-12 col-sm-4 col-sm-offset-0">
            <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/project2.jpg">
        </div>
        <div class="col-xs-12 col-sm-4 col-sm-offset-0">
            <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/projects2.jpg">
        </div>
            <div class="col-xs-12 col-xs-offset-0">
            <p>The ABILITY Lab is interested in supporting collaborative projects that may take longer than a single semester.
If you are interested in developing an idea, or working with a faculty, student, or external partner on a project relating to assistive and adaptive technology, please be in touch: <a href="mailto:abilitylab@nyu.edu">abilitylab@nyu.edu</a>.
<strong>Take a look at some of the projects happening in the Lab:</strong></p>
</div>
<div class="col-xs-12 col-xs-offset-0">
<h1>Winning Projects:</h1>
</div>

            <div class="push row">
                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/projects1.jpg" data-toggle="lightbox" data-gallery="projects" data-title="First Place" data-footer="1. Cooking Adaptations</br>
                    Zoe Logan, Interactive Telecommunications Program</br>
Grace Kim, Occupational Therapist Consultant</br>
This project will result in a series of open source, 3D printable kitchen adaptations to empower home chefs with upper limb mobility limitations. The final prototypes will be determined after a series of user tests and kitchen trials."><img src="images/projects1.jpg" alt="project 1"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/projects2.jpg" data-toggle="lightbox" data-gallery="projects" data-title="Second Place" data-footer="2. Portable Wheelchair Ramp</br>Amanda Gelb, Interactive Telecommunications Program</br>Deborah Cohen, Occupational Therapy Consultant</br>The goal of this project is to design a portable, low-cost ramp solution that can accommodate a few different stair scenarios and be deployed easily and autonomously by a user. Gelb is drawing on the experiences of furniture designers, mechanical engineers, power and manual wheelchair users and a host of other collaborators."> <img src="images/projects2.jpg" alt="project 2"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/projects3.jpg" data-toggle="lightbox" data-gallery="projects" data-title="Third Place" data-footer="3. START App (Speech Therapists App for /R/ Therapy)</br>Helen Carey, Integrated Digital Media and Dalit Shalom, Interactive Telecommunications Program</br>Dina Shulman, Occupational Therapy Consultant</br>This project is an ongoing collaboration between the Byun Lab and the ABILITY Lab. The long-term goal of START is a mobile application-based research tool and treatment platform for biofeedback therapy in /r/ misarticulation.The objective for this semester are to continue to build out the GUI for the START app in collaboration with the spectral analysis, phonetic template development, and SLP clinician teams to create an effective user interface which highlights the novel algorithmic developments from the Byun Lab researchers, while providing a user-friendly environment from which clinicians can initiate biofeedback therapy."> <img src="images/projects3.jpg" alt="project 3"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/projects4.jpg" data-toggle="lightbox" data-gallery="projects" data-title="Fourth Place" data-footer="4. Sensory Steps Balance Game</br>Ayanna Seals, Integrated Digital Media</br>Dina Shulman, Occupational Therapy Consultant</br>This game is being designed in collaboration with Strivright, the Auditory Oral School of New York. The game is being created for pre-school children with cochlear implants to improve balance and coordination. The project utilizes a Kinect and the design engine, Unity to create a game that recognizes the specific movements of the children. The children will move and hold specific poses to create entertaining sounds and actions on a projection screen."> <img src="images/projects4.jpg" alt="project 4"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/projects5.jpg" data-toggle="lightbox" data-gallery="projects" data-title="Fifth Place" data-footer="5. MMMuO (Movement Meditation Music Object)</br>Diana Castro, Integrated Digital Media</br>Grace Kim, Occupational Therapy Consultant</br>This project involves the development, creation, and testing of an MMMuO, an interactive object that generates meditative states through music. This is intended for people practicing intentional mindfulness for anxiety relief/general wellness."> <img src="images/projects5.jpg" alt="project 5"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/projects6.jpg" data-toggle="lightbox" data-gallery="projects" data-title="Sixth Place" data-footer="6. Silophon</br>Dalit Shalom, Interactive Telecommunications Program</br>Juranee Termnuwong, Occupational Therapy Consultant</br>Silophon is an assistive instrument/toy designed to create a positive experience of sound, specifically for children with autism. Silophon is designed to look like the classic xylophone, crafted with felt, allowing the user to play by hitting the keys with their hands or soft mallets, and also allowing the user to control the level of volume. This phase of development includes testing the instrument with users."> <img src="images/projects6.jpg" alt="project 6"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/projects7.jpg" data-toggle="lightbox" data-gallery="projects" data-title="Seventh Place" data-footer="7. Participatory Design Roadmap</br>Claire Kearney Volpe, Interactive Telecommunications Program</br>Deborah Cohen, Occupational Therapy Consultant</br>Throughout the semester, Claire will be creating three participatory design projects with people with disabilities. The projects themselves will change and grow out of continuous collaboration. The ultimate goal of this project is to document the process of designing assistive technologies in full collaboration with end users, as a kind of road map for future design/engineering students."> <img src="images/projects7.jpg" alt="project 7"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/projects8.jpg" data-toggle="lightbox" data-gallery="projects" data-title="Potential Projects" data-footer="Interactive Balance and Mobility Game (Strivright)</br>Sensory Room Items (Strivright)</br>StaRt (NYU CSD)</br>Tech for People with Mild Concussion (Keledy Kenkel)</br>Speech to Text App for people who are Deaf (Melina- in Buenos Aires)</br>Mechanism for holding/using phone (Frances)</br>Mechanism for holding/using tablet for reading (Frances)</br>Diagramming Tool for people who are blind (Chancey Fleet-NYPL)</br>Wheelchair re-righting system (Matt Welt)</br>Just Move It (Lirong Liu)- either separate or as part of interactive balance and mobility gameTell Us Abey– updating and adapting communication device for child with severe mobility limitations and inability to speak. (family)</br>Color blindness solutions for classroom learning/presentation accessibility (Cassidy)"> <img src="images/projects8.jpg" alt="project 8"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/project11.jpg" data-toggle="lightbox" data-gallery="projects" data-title="Ongoing Projects" data-footer="p5.speech:</br>An open-source extension to the p5.js creative coding platform to allow for easy access to HTML5 Audio Speech Synthesis and WebKit Speech Recognition.</br>Kinect + Stroke Rehab</br>A project with NYU’s Hospital for Joint Disease that incorporates the Microsoft Kinect’s joint detection in game-play developed from adapted stroke rehab exercises.Processing and P5.js and Accessible Code LearningA study of learning and coding for people with low-vision and blindness. This project incorporates an analysis of existing code learning platforms, stakeholder/expert interviews and a proposed accessibility redesign of Processing.org and P5JS.org learning modules and IDEs."> <img src="images/project11.jpg" alt="project 9"> </a>
                </div>
            </div><!--end push up-->
<div class="col-xs-12 col-sm-4 col-sm-offset-0">
    <h2>POTENTIAL PROJECTS<h2>
        <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/projects2.jpg">
<div id="main">
    <ul>
        <li>Interactive Balance and Mobility Game (<a href="http://www.strivright.org/">Strivright</a>)</li>
        <li>Sensory Room Items (<a href="http://www.strivright.org/">Strivright</a>)</li>
        <li><a href="http://steinhardt.nyu.edu/csd/">StaRt</a> (NYU CSD)</li>
        <li>Tech for People with Mild Concussion (<a href="https://twitter.com/keledy">Keledy Kenkel</a>)</li>
        <li>Speech to Text App for people who are Deaf (Melina- in Buenos Aires)</li>
        <li>Mechanism for holding/using phone (Frances)</li>
        <li>Mechanism for holding/using tablet for reading (Frances)</li>
        <li>Diagramming Tool for people who are blind (<a href="https://www.youtube.com/watch?v=Mt7GV1UfQ4A">Chancey Fleet-NYPL</a>)</li>
        <li>Wheelchair re-righting system (Matt Welt)</li>
        <li>Just Move It (Lirong Liu)- either separate or as part of interactive balance and mobility game</li>
        <li><a href="http://www.tellusabey.com/index.php/about/">Tell Us Abey</a>– updating and adapting communication device for child with severe mobility limitations and inability to speak. (family)</li>
        <li>Color blindness solutions for classroom learning/presentation accessibility (Cassidy)</li>
    </ul>
        </div>
            </div>
<div class="col-xs-12 col-sm-4 col-sm-offset-0">
    <h2>ONGOING PROJECTS<h2>
        <div id="ongoing">
            <p><a href="http://abilitylab.nyu.edu/p5.js-speech/" target="_blank">p5.speech:<br></a>
An open-source extension to the 
<a style="line-height: 1.5;" href="http://p5js.org" target="_blank">p5.js</a>creative coding platform to allow for easy access to HTML5 Audio Speech Synthesis and WebKit Speech Recognition.</br>
<a href="http://abilitylab.nyu.edu/?page_id=645">Kinect + Stroke Rehab</a>
A project with NYU’s Hospital for Joint Disease that incorporates the Microsoft Kinect’s joint detection in game-play developed from adapted stroke rehab exercises.</br>
<a href="http://processing.org" target="_blank">Processing and P5.js and Accessible Code Learning</a>
A study of learning and coding for people with low-vision and blindness. This project incorporates an analysis of existing code learning platforms, stakeholder/expert interviews and a proposed accessibility redesign of Processing.org and P5JS.org learning modules and IDEs.</br>
<a title="Biofeedback App" href="http://www.nyu.edu/about/news-publications/nyu-stories/making-speech-visible.html" target="_blank">Biofeedback for /r/ sounds:</a>
Researchers at the Byun Lab at NYU are studying the way biofeedback–in this case real-time visual feedback about a user’s vocalizations–can help users correct atypical speech patterns that are otherwise difficult to perceive. Students in the Ability Lab are working with the Byun Lab to create an app that give this real-time biofeedback. Updates from December 2014</br>
<a title="Wheelchair Umbrella Development Blog" href="http://thedrywheelchair.tumblr.com/" target="_blank"><strong>Umbrella for motorized wheelchair users</strong></a>
NYU graduate students in collaboration with clients at United Cerebral Palsy of New York City are designing a fully accessible and collapsable umbrella for motorized wheelchair users—a product which is not already available on the market, despite an obvious and frequently cited need for it.</br>
<a title="Working document for music player" href="http://www.instructables.com/id/Motor-Skills-Learning-Music-Box/" target="_blank"><strong>Music player for practicing fine motor skills:</strong></a>
In collaboration with the <a title="Adaptive Design Association" href="http://www.adaptivedesign.org" target="_blank">Adaptive Design Association</a>, NYU graduate students developed a music player that incentivizes practicing fine motor skills. Information about how to download the app and detailed DIY instructions can be found on <a title="Instructables Motor Skills Music Box" href="http://www.instructables.com/id/Motor-Skills-Learning-Music-Box/" target="_blank">Instructables</a>.</br>
<a title="Sensory Steps: Developing Assistive Tech Fall, 2014" href="http://abilitylab.nyu.edu/?page_id=387" target="_blank"><strong>Sensory room for school for children with hearing loss:</strong></a>
In collaboration with the <a href="http://www.strivright.org/">auditory oral school </a> of NY, graduate students are developing elements for a sensory room and music room for young children. The current project under development is a game to help the children with cochlear implants develop balance. The game is being created using Unity and Kinect.</br>
<a title="GyroCafe" href="http://abilitylab.nyu.edu/?page_id=384" target="_blank">GyroCafe</a>
Inspired by a patient, students began designing a tray that attaches to a walker and doesn’t tip out food.</br>
<a title="Monkey Vine Game" href="http://abilitylab.nyu.edu/?page_id=350" target="_blank">Monkey Vine: Game to Increase Working Memory</a>
This computer game was designed to help young students (age 7-10) develop their working memory.</br>
Check out some additional projects that won the <a title="ABILITY Lab Access Design Competition Winners" href="http://abilitylab.nyu.edu/?page_id=237">Access Design Competition</a>.</p>
    </div>
</div>
<div class="col-xs-12 col-sm-4 col-sm-offset-0">
    <h2>ACCESS DESIGN COMPETITION WINNERS</h2>
        <img class="img-responsive" src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/projects10.jpg">
            <p>We are thrilled to announce the winners of our <strong>2015 ABILITY Lab Access Design Competition.</strong> In January, 2015, we selected seven student projects that fulfill the Lab’s mission with well-conceived ideas, close collaboration with users, and open-source practices.
We have also given awards to four outstanding students in Occupational Therapy to support the designers/engineers on their projects. The teams have just begun meeting. Check back for updates throughout the semester!</p>
        </div>
    </div><!--end container fluid-->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
