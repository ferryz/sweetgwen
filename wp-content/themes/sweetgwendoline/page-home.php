<?php

/* Template Name: Homepage */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="delight">
			<h2>Delight</h2>
		</div>
		<div class="bewitch">
			<h2>Bewitch</h2>
		</div>

		<div class="buy-now">
			<a href="<?php the_field('thirstie', 'option'); ?>" title="Buy Now">
				<span>Buy Now</span>
			</a>
		</div>

		<div class="quote">
			<div class="quote__inner">
				<q>The Freedom to say what we like, wear what we like, and to amuse ourselves as like, in our own <em>Sweet Way</em>.</q>
				<cite>&mdash; J.W.</cite>
			</div>
		</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-home', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
