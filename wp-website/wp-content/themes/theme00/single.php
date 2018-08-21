<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<script>
		$("#comment").addClass("form-control");
		$(".submit").addClass("btn btn-success");
		$("label").addClass("d-none");
		</script>
    	 </div>

<div class="col-4">
	  <?php get_sidebar(); ?>
</div>
</div>
</div>


<?php
get_footer();
