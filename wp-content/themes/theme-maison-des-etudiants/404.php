<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package zefdrg
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="section-hero">
			<figure>
					<img class="article-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/erreur-404.jpg' ); ?>" alt="Erreur 404">
				<figcaption>
					<h1>Erreur 404</h1>
					<p>Oups ! Cette page ne peut pas être trouvée.</p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a>
				</figcaption>
			</figure>
		</section>

	</main><!-- #main -->

<?php
get_footer();
