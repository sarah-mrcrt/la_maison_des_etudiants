<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package La_maison_des_étudiants
 */

?>

		<footer>
			<header class="container">
				<h2>Nous retrouver.</h2>
				<div class="flex">
					<article class="col-5">
						<h3>Suivez-nous</h3>
						<div>
							<ul>
								<li><a href="" aria-label="Behance" rel="noopener" target="_blank">Facebook</a></li>
								<li><a href="" aria-label="Instagram" rel="noopener nofollow" target="_blank">Instagram</a>
								<li><a href="" aria-label="Twitter" rel="noopener" target="_blank">Twitter</a></li>
							</ul>
							<ul>
								<li><a href="" aria-label="Linkedin" rel="noopener" target="_blank">Linkedin</a>
								</li>
								<li><a href="" aria-label="Vimeo" rel="noopener" target="_blank">Vimeo</a></li>
							</ul>
						</div>
					</article>

					<article class="col-7">
						<h3>Contactez-nous</h3>
						<address>
							Par mail
							<a href="mailto:hello@maisondesetudiants.fr" aria-label="Mail" rel="noopener"
								target="_blank">hello@maisondesetudiants.fr</a>
							, par téléphone
							<a href="tel:+0600000000" rel="noopener">06.xx.xx.xx.xx</a>
							, en vrai
							<a href="#">Avenue Michel Rondet, 59135 Wallers</a>
						</address>
					</article>
				</div>
			</header>

			<article class="sites-info">
				<a href="#">Mentions légales</a>
				<!-- ICI METTRE PHP -->
				<p>© <?php echo get_bloginfo( 'name' ); ?> | 2022</p>
			</article>
		</footer><!-- #colophon -->
		</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>