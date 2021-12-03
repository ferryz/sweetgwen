<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sweetgwendoline
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>Site design by <a href="http://gchristman.com/">Greg Christman</a>, development by <a href="http://michaelferry.com/">Michael Ferry</a>.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- .site-inner -->
</div><!-- #page -->

 <div class="global-footer" role="complementary">
 	<div class="footer-brand">
 		<?php if (is_active_sidebar('footer-3')) : ?>
		<div class="footer-logo">
			<?php dynamic_sidebar('footer-3'); ?>
		</div>
	<?php endif; ?>
	<?php if (is_active_sidebar('footer-4')) : ?>
		<div class="footer-social">
			<?php dynamic_sidebar('footer-4'); ?>
		</div>
	<?php endif; ?>
 	</div>
 	
	<?php if (is_active_sidebar('footer-1')) : ?>
		<div class="footer-menu">
			<?php dynamic_sidebar('footer-1'); ?>
		</div>
	<?php endif; ?>
	
	<?php if (is_active_sidebar('footer-2')) : ?>
		<div class="footer-copyright">
			<?php dynamic_sidebar('footer-2'); ?>
		</div>
	<?php endif; ?>
 </div>

<div class="overlay overlay--age-gate overlay--disabled">
	<div class="modal modal--age-gate">
		<div class="modal__content">
			<img src="/wp-content/themes/sweetgwendoline/img/loop-top-left.png" class="corner-loop corner-loop--top-left" alt="Corner Loop">
			<img src="/wp-content/themes/sweetgwendoline/img/loop-top-right.png" class="corner-loop corner-loop--top-right" alt="Corner Loop">
			<img src="/wp-content/themes/sweetgwendoline/img/loop-bot-right.png" class="corner-loop corner-loop--bottom-right" alt="Corner Loop">
			<img src="/wp-content/themes/sweetgwendoline/img/loop-bot-left.png" class="corner-loop corner-loop--bottom-left" alt="Corner Loop">
			<div class="modal__content-inner">
				<h2 class="age-gate__heading"><small>Bievenue To</small> <span>Sweet Gwendoline</span> French Gin</h2>
				<h3 class="age-gate__subheading">Are You of Legal Drinking Age?</h3>
				<div class="age-gate__buttons">
					<a href="#" class="age-gate__yes" data-legal-age="true">Yes</a>
					<a href="#" class="age-gate__no" data-legal-age="false">No</a>
				</div>
				<p class="age-gate__notice" style="display: none;">Must be of legal drinking age to proceed.</p>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
