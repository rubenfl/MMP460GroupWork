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
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

        <script>
            $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>


				<div class="container-fluid"><!--start container fluid-->
    <h1>PEOPLE</h1>
     <div class="push row"><!--start push up-->
                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/people1.jpg" data-toggle="lightbox" data-gallery="people" data-title="John Schimmel" data-footer="ADJUNCT FACULTY,</BR>CO-FOUNDER OF DIYABILITY</br>JohnSchimmel teaches classes related to assistive technology. He is also the co-founder of Diyability an organization focused on empowering people with and without disabilities to make their world more accessible through workshops and projects utilizing accessible tools and software.</br>TishSchool of the Arts, Interactive Telecommunications Program"><img src="https://wpmmp.bmcc.cuny.edu/~rfernand/wp-content/themes/komaruga/images/people1.jpg" alt="project 1"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/people2.jpg" data-toggle="lightbox" data-gallery="people" data-title="Claire Kearney-Volpe" data-footer="ABILITY LAB</BR>RESEARCH FELLOW</BR> Claire Kearney-Volpe is an art therapist, researcher, designer and maker interested in the participatory development of technologies for promoting health and well-being.</br>Tisch School of the Arts,</br>Interactive Telecommunications Program"> <img src="images/people2.jpg" alt="project 2"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/people3.jpg" data-toggle="lightbox" data-gallery="people" data-title="Luke Dubois" data-footer="CO-DIRECTOR/ASSOCIATE</br> PROFESSOR OF INTEGRATED</br> DIGITAL MEDIA</br>
                        R. Luke Dubois is a composer, artist, and perfomer who explores the temporal, verbal, and visual structures of cultural and personal ephemera.</br>An active visual and musical collaborator, Dubois is the co-author of Jitter, a software suite for the real-time manipulation of matrix data developed by San Francisco-based software company Cycling'74.</br>NYU Engineering, Integrated Digital Media"> <img src="images/people3.jpg" alt="project 3"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/people4.jpg" data-toggle="lightbox" data-gallery="people" data-title="Anita Perr" data-footer="CLINICAL ASSOCIATE</br>PROFESSOR OF OCCUPATIONAL THERAPY</br> Anita Perr, PHD, ATP, FAOTA, is an occupational therapist with experiense in seating and wheeled mobility and the use of assistive technology to enhance participation in client-selected activities.</br> prior to joining the Departament of Occupational Therapy at NYU's Steinhardt School, Anita worked in Occupational Therapy and Rehab Engineering.</br> Steinhardt Occupational Therapy"> <img src="images/people4.jpg" alt="project 4"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/people5.jpg" data-toggle="lightbox" data-gallery="people" data-title="Allan Goldstein" data-footer="LECTURER, DISABILITY STUDIES</br>Allan Goldstein
        NYU Engineering, Technology, Culture and Society
        Senior Lecturer Allan B. Goldstein is thrilled to be part of the Ability Lab team. Both in his experimental learning course partnering with community agencies,Disability Studies, and his play reading course designed for the soe, Steam and Theatre, he invites students to participate in their education through discussion of readings, videos and personal experience."> <img src="images/people5.jpg" alt="project 5"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/people6.jpg" data-toggle="lightbox" data-gallery="people" data-title="Beth Rosenberg" data-footer="NYU Engineering & TechKids Unlimited</br>
          Beth Rosenberg is the founder of Tech Kids Unlimited and is an educator, writer and project manager with over 20 years of experience in the fields of culture, access/special needs and technology."> <img src="images/people6.jpg" alt="project 6"> </a>
                </div>

                <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
                    <a href="images/people7.jpg" data-toggle="lightbox" data-gallery="projects" data-title="Marianne Petit" data-footer="7. Participatory Design Roadmap</br>Claire Kearney Volpe, Interactive Telecommunications Program</br>Deborah Cohen, Occupational Therapy Consultant</br>Throughout the semester, Claire will be creating three participatory design projects with people with disabilities. The projects themselves will change and grow out of continuous collaboration. The ultimate goal of this project is to document the process of designing assistive technologies in full collaboration with end users, as a kind of road map for future design/engineering students."> <img src="images/people7.jpg" alt="project 7"> </a>
                </div>
        <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
<div id="links">
    <p> <strong>University Collaborators</strong></p>
        <br>
<a title="Occupational Therapy" href="http://steinhardt.nyu.edu/ot/" target="_blank">Occupational Therapy (Steinhardt)</a>
<br>
<a title="Integrated Digital Media" href="http://engineering.nyu.edu/academics/programs/integrated-digital-media-ms" target="_blank">Integrated Digital Media (Engineering)</a>
<br>
<a title="Interactive Telecommunications Program" href="http://itp.nyu.edu/itp/" target="_blank">Interactive Telecommunications Program (Tisch)</a>
<br>
<a title="Technology, Culture, and Society" href="http://engineering.nyu.edu/academics/departments/tcs" target="_blank">Technology, Culture, and Society (Engineering)</a>
<br>
<a title="Department of Communicative Sciences and Disorders" href="http://steinhardt.nyu.edu/csd/" target="_blank">Department of Communicative Sciences and Disorders (Steinhardt)</a>
<br>
<a title="NYU Council for the Study of Disability" href="http://www.nyu.edu/disability.council/" target="_blank">NYU Council for the Study of Disability</a>
        </div>
    </div>
        <div class="col-xs-10 col-xs-offset-2 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-0">
            <div id="links2">
            <p><strong>Partnering Organizations</strong></p>
    <br>
<a title="AT&T" href="http://http://connectability.devpost.com" target="_blank">AT&T</a>
    <br>

<a title="United Cerebral Palsy" href="http://ucp.org/" target=”_blank”>United Cerebral Palsy</a>
    <br>
    <a title="Adaptive Design Association" href="http://www.adaptivedesign.org" target="_blank">Adaptive Design Association</a>
    <br>
    <a title="DIY Ability" href="http://diyability.org" target="_blank">DIY Ability</a>
    <br>
    <a title="Tech Kids Unlimited" href="http://www.techkidsunlimited.org" target="_blank">Tech Kids Unlimited</a>
            </div>
        </div>
    </div><!--end push up-->
</div><!--end container fluid-->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
