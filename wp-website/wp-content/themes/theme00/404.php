<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme00' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'theme00' ); ?></p>
					<div class="mt-5">
					<?php
					the_widget( 'WP_Widget_Recent_Posts' );
					?>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

    	 </div>

<div class="col-4">
	  <?php get_sidebar(); ?>
</div>
</div>
</div>

<?php
get_footer();
