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
		<h1 class="entry-title"><span class="in-our">In Our</span> <span>Glass</span></h1>
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

	<div class="entry-content">
		<!-- <a href="<?php the_field('thirstie', 'option'); ?>" class="buy-now" title="Buy Now"><img src="/wp-content/themes/sweetgwendoline/img/buy-now-circle.svg" alt="Buy Now" /></a> -->
		
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

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sweetgwendoline' ),
				'after'  => '</div>',
			)
		);
		?>

		<?php if( have_rows('drink') ): ?>
			<div class="drink-lineup">
				<?php while( have_rows('drink') ): the_row(); 
	        $image = get_sub_field('image');
	        $i++;
	        ?>
	        <div class="drink">
	        	<a href="#" data-slide="<?php print $i ?>"><?php echo wp_get_attachment_image( $image, 'full' ); ?></a>
	        </div>
		    <?php endwhile; ?>
	  	</div>
    <?php endif; ?>

		<?php if( have_rows('drink') ): ?>
			<div class="overlay overlay--disabled">
				<div class="modal modal--drinks">
					<div class="modal__inner">
						<div class="modal-close">
							<svg class="close" width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L26.7143 25" stroke="#212221"/><path d="M0.999998 25L26.7143 1" stroke="#212221"/></svg>
						</div>
						<div class="swiper drinks">
					    <div class="swiper-wrapper">
					    <?php while( have_rows('drink') ): the_row(); 
					        $image = get_sub_field('image');
					        ?>
					        <div class="drink swiper-slide">
					            <div class="drink__image">
					            	<?php echo wp_get_attachment_image( $image, 'full' ); ?>	
					            </div>
					            <div class="drink__content">
					            	<h2 class="title">
					            		<?php the_sub_field('title'); ?>
					            	</h2>
					            	<div class="ingredients">
					            		<h3>Ingredients</h3>
					            		<?php the_sub_field('ingredients'); ?>
					            	</div>
					            	<div class="instructions">
					            		<?php the_sub_field('instructions'); ?>
					            	</div>
					          	</div>
					        </div>
					    <?php endwhile; ?>
					    </div>
					    <div class="swiper-pagination"></div>
					  </div><!-- .swiper -->
					  <div class="button--slider button--prev"><svg class="arrow-left" width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 1L1 8.5L11 16" stroke="#212221" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
			  		<div class="button--slider button--next"><svg class="arrow-right" width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1.00002L11 8.50002L1 16" stroke="#212221" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
					</div><!-- .modal__inner -->
				</div><!-- .modal -->
			</div><!-- .overlay -->
		<?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sweetgwendoline_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
