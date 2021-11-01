<?php

/* Template Name: Memoirs */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-memoirs', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<?php
		$display_posts = get_field('post_shortcode');

		if($display_posts) {
	    echo do_shortcode($display_posts);
		} else {
			// fallback shortcode
		  //echo do_shortcode('[display-posts image_size="full" include_excerpt="true" include_excerpt_dash="false" excerpt_length="500" excerpt_more="Read More" excerpt_more_link="true" wrapper="div" wrapper_class="posts" posts_per_page="5" pagination="true"]');
		}
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
