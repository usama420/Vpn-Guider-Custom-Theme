<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package vpn-guider
 */

get_header();
?>

	<main id="primary" class="site-main search-results">

		<?php if ( have_posts() ) : ?>

			<div class="page-header">
				<div class="container">
					<h1 class="page-title">
						<?php
						printf( esc_html__( 'Search Results for: %s', 'vpn-guider' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</div>
			</div><!-- .page-header -->
			<div class="container">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
	</main><!-- #main -->
<?php
get_footer();
