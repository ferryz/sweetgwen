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
				<form class="age-gate__form">
					<div class="age-gate__month">
						<select id="age-gate-select--month" class="form-item form-select">
							<option value="" selected disabled>Month</option>
							<option value="00">January</option>
							<option value="01">February</option>
							<option value="02">March</option>
							<option value="03">April</option>
							<option value="04">May</option>
							<option value="05">June</option>
							<option value="06">July</option>
							<option value="07">August</option>
							<option value="08">September</option>
							<option value="09">October</option>
							<option value="10">November</option>
							<option value="11">December</option>
						</select>
					</div>
					<div class="age-gate__day">
						<select id="age-gate-select--day" class="form-item form-select">
							<option value="" selected disabled>Day</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
					</div>
					<div class="age-gate__year">
						<input id="age-gate-input--year" class="form-item form-input" type="number" maxlength="4" inputmode="numeric" pattern="[0-9]*" placeholder="Year">
					</div>
					<div class="age-gate__submit">
						<input id="age-gate-input--submit" class="form-item form-submit" type="button" value="Enter">
					</div>
				</form>
				<p class="age-gate__notice" style="display:none;">Must be 21 or older to proceed.</p>
				<h3 class="age-gate__subheading">Verify Your Age <em class="amp">&amp;</em> Come On In<em>!</em></h3>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
