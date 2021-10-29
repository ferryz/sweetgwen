<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sweetgwendoline
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><span>The</span> Muse</h1>

		<?php
		/*
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		*/

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				sweetgwendoline_posted_on();
				sweetgwendoline_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php sweetgwendoline_post_thumbnail(); ?>

	<div class="entry-wrapper">
		<div class="magazines">
			<div class="bizarre-mag no4">
				<img src="/wp-content/themes/sweetgwendoline/img/bizarre-no4.jpg" srcset="/wp-content/themes/sweetgwendoline/img/bizarre-no4@2x.jpg 500w" alt="Bizarre Issue No 4">
			</div>

			<div class="bizarre-mag no7">
				<img src="/wp-content/themes/sweetgwendoline/img/bizarre-no7.jpg" srcset="/wp-content/themes/sweetgwendoline/img/bizarre-no7@2x.jpg 500w" alt="Bizarre Issue No 7">
			</div>

			<div class="bizarre-mag no9">
				<img src="/wp-content/themes/sweetgwendoline/img/bizarre-no9.jpg" srcset="/wp-content/themes/sweetgwendoline/img/bizarre-no9@2x.jpg 500w" alt="Bizarre Issue No 9">
			</div>

			<div class="bizarre-mag no19">
				<img src="/wp-content/themes/sweetgwendoline/img/bizarre-no19.jpg" srcset="/wp-content/themes/sweetgwendoline/img/bizarre-no19@2x.jpg 500w" alt="Bizarre Issue No 19">
			</div>
		</div>

		<div class="entry-content">
			<div class="gwen-whip">
				<img src="/wp-content/themes/sweetgwendoline/img/muse-snap.svg" class="snap" alt="Whip crack" />
				<img src="/wp-content/themes/sweetgwendoline/img/muse-whip.png" class="gwen" alt="Sweet Gwendoline with whip" />
				<img src="/wp-content/themes/sweetgwendoline/img/muse-whip-alt.png" class="gwen alt" alt="Sweet Gwendoline with whip" />
			</div>

			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sweetgwendoline' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			?>

			<?php

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sweetgwendoline' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<div class="entry-supplemental">
			<div class="frame">
				<div class="frame-inner">
					<?php the_field('framed_content'); ?>
				</div>
				<a href="<?php the_field('thirstie', 'option'); ?>" class="buy-now" title="Buy Now"><img src="/wp-content/themes/sweetgwendoline/img/buy-now-circle.svg" alt="Buy Now" /></a>
			</div>
		</div><!-- .entry-supplemental -->
</div><!-- .entry-wrapper -->

	<footer class="entry-footer">
		<?php sweetgwendoline_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
