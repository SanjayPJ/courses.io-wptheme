<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
				<?php
				the_archive_title( '<h1 class="page-title pb-2">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

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
