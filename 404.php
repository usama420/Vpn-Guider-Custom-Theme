<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vpn-guider
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="not-found">
			<div class="page-header">
				<div class="container">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'vpn-guider' ); ?></h1>
				</div>
			</div><!-- .page-header -->

			<div class="error-404">
				<div class="container">
					<h2><?php esc_html_e( 'Error 404', 'vpn-guider' ); ?></h2>
					<p>Oops! The page you were trying to reach can not be found!</p>
				</div>
			</div>
		</section>

	</main>

<?php
get_footer();
