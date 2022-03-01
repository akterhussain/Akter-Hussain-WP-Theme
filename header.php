<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Akter_Hussain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-6 col-xl-4">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->
				</div><!-- .col-xl-4 -->
				<div class="col-6 col-xl-8">
					<div class="primary-menu">
						<nav class="akter-navigation">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'primary_menu'
							) );
							?>
						</nav><!-- .akter-navigation -->
					</div><!-- rimary-menu -->
					</div><!--search-area -->
				</div><!-- .col-xl-8 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- .header-section -->