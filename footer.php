<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
  
				<svg class="footer-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
					<polygon class="svg--sm" fill="darkslategrey" points="0,0 30,100 65,21 90,100 100,75 100,100 0,100"/>
					<polygon class="svg--lg" fill="darkslategrey" points="0,0 15,100 33,21 45,100 50,75 55,100 72,20 85,100 95,50 100,80 100,100 0,100" />
				</svg>
				
				<section class="footer-info-logo">
				
					<div class="footer-info">
						<div class="footer-number">236 986 4124</div>
						<div class="footer-email">jeff.liknes@gmail.com</div>
						<div class="footer-resume">
							<a href="http://localhost:8888/design-by-jeff/wp-content/uploads/2019/04/Jeff-Liknes-Resume.pdf">Resume</a>
						</div>
					</div>

					<div class="footer-logo-container">
						<a class="footer-logo-anchor" href="<?php bloginfo( 'url' ); ?>">
							<img class="footer-logo" src="<?= get_template_directory_uri(); ?>/assets/designlogonew.svg" alt="Logo"/></a>	
					</div>
				</section>
			
				<div class="copyright">	&copy; Liknes 2019</div>

				
				</div><!-- .site-info -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
