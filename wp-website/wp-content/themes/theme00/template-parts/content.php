<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme00
 */

?>

<div class="card mb-4">
	<img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">
	<div class="card-body">
	<div class="">
		<?php the_tags('<span class="badge badge-light">', '</span><span class="badge badge-light ml-1">', '</span>') ?>
		</div>
		<h2 class="card-title"><?php the_title( '<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>' ); ?></h2>
		<div class="text-muted">
		<div class="entry-meta">
		
		<?php
		theme00_posted_on();
		theme00_posted_by();
		?>
		</div><!-- .entry-meta -->
		</div>
			<p class="card-text"><?php the_excerpt(); ?></p>
		</div>
	</div>
