<?php
/**
 * Template Name: Right Sidebar Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akter_Hussain
 */

get_header();
?>

<div class="content-section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
				<main class="main-section">
					<div class="row">
						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								
								// Template for page content
								get_template_part( 'template-parts/content', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								
							endwhile;

						endif;
						?>
					</div><!-- .row -->
				</main><!-- .main-section -->
			</div><!-- col-cl-8 -->
			<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
				<aside class="home-sidebar">
					<?php 
						// Function for right sidebar
						dynamic_sidebar('right-sidebar');
					?>
				</aside><!-- .home-sidebar -->
			</div><!-- col-cl-4 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-section -->

<?php
get_footer();
