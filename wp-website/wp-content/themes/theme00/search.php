<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package theme00
 */

get_header();
?>
<script>
$(".blog").addClass("active");
$(".navbar-nav").addClass("mr-auto");
$(".navbar-nav").removeClass("ml-auto");
$(".search-m").removeClass("d-none");
</script>

<div class="container-fluid">
	<div class="row mx-5 px-5">
		<div class="col-8 mt-4">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title mb-4">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'theme00' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

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

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
 </div>

<div class="col-4">
	  <?php get_sidebar(); ?>
</div>
</div>
</div>

<?php

get_footer();
