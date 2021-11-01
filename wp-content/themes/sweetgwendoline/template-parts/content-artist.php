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
		<h1 class="entry-title"><span>The</span> Artist</h1>

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

	<div class="entry-wrapper entry-wrapper--mobile">
		<?php if(get_field('content_mobile')): ?>
			<div class="entry-content entry-content--mobile">
				<?php the_field('content_mobile'); ?>
			</div><!-- .entry-content--mobile -->
		<?php endif; ?>
		<?php if(get_field('slideshow_mobile')): ?>
			<div class="slideshow slideshow--mobile">
				<div class="swiper swiper--mobile">
					<div class="swiper-wrapper">
						<?php if( have_rows('slideshow_mobile') ): ?>
							<?php
								while(have_rows('slideshow_mobile')): the_row(); 
				        $image = get_sub_field('image');
				        echo '<div class="swiper-slide">' . wp_get_attachment_image( $image, 'full' ) . '</div>';
				      ?>
					    <?php endwhile; ?>
				    <?php endif; ?>
			  	</div><!-- .swiper-wrapper -->
			  	<div class="swiper-pagination swiper-pagination--mobile"></div>
		  	</div><!-- .swiper--mobile -->
			</div><!-- .slideshow--mobile -->
		<?php endif; ?>
	</div><!-- .entry-wrapper--mobile -->

	<div class="entry-wrapper entry-wrapper--desktop">
		<?php if(get_field('content_desktop')): ?>
			<div class="entry-content entry-content--desktop">
				<?php the_field('content_desktop'); ?>
			</div><!-- .entry-content--desktop -->
		<?php endif; ?>

		<?php if(get_field('slideshow_desktop')): ?>
			<?php if(get_field('slideshow_desktop')): ?>
			<div class="slideshow slideshow--desktop">
				<div class="swiper swiper--desktop">
					<div class="swiper-wrapper">
						<?php if( have_rows('slideshow_desktop') ): ?>
							<?php
								while(have_rows('slideshow_desktop')): the_row(); 
				        $image = get_sub_field('image');
				        echo '<div class="swiper-slide">' . wp_get_attachment_image( $image, 'full' ) . '</div>';
				      ?>
					    <?php endwhile; ?>
				    <?php endif; ?>
			  	</div><!-- .swiper-wrapper -->
			  	<div class="swiper-pagination swiper-pagination--desktop"></div>
		  	</div><!-- .swiper--desktop -->
		  	<div class="button--slider button--prev button--desktop-prev"><svg class="arrow-left" width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 1L1 8.5L11 16" stroke="#212221" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
			  <div class="button--slider button--next button--desktop-next"><svg class="arrow-right" width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.00002L11 8.50002L1 16" stroke="#212221" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
			</div><!-- .slideshow--desktop -->
		<?php endif; ?>
		<?php endif; ?>
	</div><!-- .entry-wrapper--desktop -->

	<footer class="entry-footer">
		<?php sweetgwendoline_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
