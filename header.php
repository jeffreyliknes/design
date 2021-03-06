<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro|Nunito:600|Oxygen+Mono" rel="stylesheet">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<!-- <div class="site-branding">
					
				</div>.site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<div class="logo-container">
						<a class="logo-anchor" href="<?php bloginfo( 'url' ); ?>">
							<img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/designlogonew.svg" alt="Logo"/></a>
					</div>
					
					<div class="info-divider">
						<div class="number">
							<a class="anchor-header" href="tel:+12369864124"><div class="info-divider-centered"><span class="number-span">phone </span><br>236 986 4124</div></a>
						</div>
						<div class="email">
							<a class="anchor-header" href="mailto:jeff.liknes@gmail.com"><div class="info-divider-centered"><span class="email-span">email </span><br>jeff.liknes@gmail.com</div></a>
						</div>
						<div class="linkedin">
							<a class="anchor-header" href="https://www.linkedin.com/in/jeff-liknes-798951175/"><div class="info-divider-centered"><span class="linkedin-span"> linkedin  </span><br>Jeff Liknes</div></a>
						</div>
						<div class="github">
							<a class="anchor-header" href="https://github.com/jeffreyliknes?tab=repositories"><div class="info-divider-centered"><span class="github-span">github </span><br>jeffreyliknes</div></a>
						</div>
					</div>
				
					<div class="brushstroke">
					</div>
					
			</header>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			
			

			<div id="content" class="site-content">
