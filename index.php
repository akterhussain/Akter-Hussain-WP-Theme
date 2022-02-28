<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Akter_Hussain
 */
?>

<?php
if ( is_home() ) :
    get_header( 'home' );
else :
    get_header();
endif;
?>

<main class="home-page">
	<div class="container">
		<div class="col-12">
			<div class="home-content">
				<div class="home-photo">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/akter_photo.png" alt="">
				</div>
				<div class="home-logo">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/akter_logo.png" alt="">
				</div>
				<div class="home-text">
					<p>Experienced full-stack developer specializing in WordPress, PHP, SQL, MySQL, Boostrap, Responsive HTML, Web Apps, Photoshop Design, Illustrator arts, javaScript, jQuery, HTML5, and CSS3.</p>
				</div>
				<div class="home-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'home_menu'
					) );
				?>
				</div>						
			</div>
		</div>
	</div>
</main>

<?php
if ( is_home() ) :
    get_footer( 'home' );
else :
    get_footer();
endif;
?>
