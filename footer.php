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
						<div class="footer-resume">
							<a class="anchor-footer" href="http://localhost:8888/design-by-jeff/wp-content/uploads/2019/04/Jeff-Liknes-Resume.pdf"><div class="footer-info-divider-centered">Resume</a></div>
						</div>
						<div class="footer-number">
							<a class="anchor-footer" href="tel:+12369864124"><div class="footer-info-divider-centered"><span class="number-span">phone </span><br>236 986 4124</div></a>
						</div>
						<div class="footer-email">
							<a class="anchor-footer" href="mailto:jeff.liknes@gmail.com"><div class="footer-info-divider-centered"><span class="email-span">email </span><br>jeff.liknes@gmail.com</div></a>
						</div>
						<div class="footer-linkedin">
							<a class="anchor-footer" href="https://www.linkedin.com/in/jeff-liknes-798951175/"><div class="footer-info-divider-centered"><span class="linkedin-span"> linkedin  </span><br>Jeff Liknes</div></a>
						</div>
						<div class="footer-github">
							<a class="anchor-footer" href="https://github.com/jeffreyliknes?tab=repositories"><div class="footer-info-divider-centered"><span class="github-span">github </span><br>jeffreyliknes</div></a>
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
