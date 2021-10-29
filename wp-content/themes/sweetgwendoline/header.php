<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sweetgwendoline
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<img src="/wp-content/themes/sweetgwendoline/img/loop-top-left.png" class="corner-loop corner-loop--top-left" alt="Corner Loop">
	<img src="/wp-content/themes/sweetgwendoline/img/loop-top-right.png" class="corner-loop corner-loop--top-right" alt="Corner Loop">
	<img src="/wp-content/themes/sweetgwendoline/img/loop-bot-right.png" class="corner-loop corner-loop--bottom-right" alt="Corner Loop">
	<img src="/wp-content/themes/sweetgwendoline/img/loop-bot-left.png" class="corner-loop corner-loop--bottom-left" alt="Corner Loop">
<div class="site-inner">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sweetgwendoline' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$sweetgwendoline_description = get_bloginfo( 'description', 'display' );
			if ( $sweetgwendoline_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $sweetgwendoline_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="buy-now">
			<a href="<?php the_field('thirstie', 'option'); ?>" class="button button--buy-now" title="Buy Now!">
				<div class="small">
					<svg width="57" height="34" viewBox="0 0 57 34" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect y="3.64062" width="57" height="29.3906" rx="14.6953" fill="#E64B38"/>
						<path d="M43.2132 21.4657C43.7547 21.4657 44.1252 21.1237 44.2677 20.6107C44.7237 19.1572 45.0942 17.7322 45.5787 16.3072C46.3482 13.9702 47.2317 11.7188 48.1152 9.43875C48.1437 9.26775 48.1722 9.12525 48.1722 8.95425C48.1722 8.29875 47.6307 7.81425 46.9752 7.81425C46.4622 7.81425 46.1487 8.12775 45.9492 8.55525C45.2652 10.0657 41.9877 19.2997 41.9877 20.3542C41.9877 21.0097 42.5577 21.4657 43.2132 21.4657ZM42.0732 23.7172C41.0757 23.7172 40.2492 24.6292 40.2492 25.5982C40.2492 26.5388 40.7907 27.2798 41.7882 27.2798C42.8712 27.2798 43.5837 26.3393 43.5837 25.3132C43.5837 24.3727 43.0137 23.7172 42.0732 23.7172Z" fill="#212221"/>
						<path d="M28.2618 16.1391C28.2816 16.3122 28.2661 16.4878 28.2162 16.6542C28.1664 16.8206 28.0834 16.974 27.9728 17.1044C27.8622 17.2348 27.7264 17.3392 27.5744 17.4107C27.4224 17.4822 27.2577 17.5192 27.091 17.5192C26.9244 17.5192 26.7596 17.4822 26.6076 17.4107C26.4556 17.3392 26.3199 17.2348 26.2092 17.1044C26.0986 16.974 26.0156 16.8206 25.9658 16.6542C25.916 16.4878 25.9004 16.3122 25.9201 16.1391V7.97089H23.2795V15.5655C23.2725 15.9859 23.3453 16.4036 23.4935 16.7944C23.6417 17.1851 23.8625 17.5413 24.1432 17.8422C24.4099 18.1429 24.734 18.3818 25.0944 18.5434C25.4548 18.7051 25.8436 18.7859 26.2357 18.7807C26.6233 18.7887 27.008 18.7091 27.3634 18.5471C27.7189 18.3851 28.0367 18.1447 28.2951 17.8422C28.5794 17.5433 28.8038 17.1879 28.9549 16.7969C29.1061 16.4059 29.181 15.9873 29.1753 15.5655V7.97089H28.2618V16.1391Z" fill="#F9F4E2"/>
						<path d="M19.4299 12.5158C19.7984 12.3014 20.1013 11.9991 20.3087 11.6389C20.516 11.2787 20.6204 10.8732 20.6117 10.4627C20.6114 10.1343 20.5409 9.80944 20.4045 9.50777C20.268 9.2061 20.0683 8.93397 19.8177 8.70791C19.577 8.47452 19.2897 8.28912 18.9726 8.16256C18.6556 8.03601 18.3151 7.97084 17.9712 7.97089H12.8196L12.4688 8.67281H14.3152V18.0785H12.8565L12.5057 18.7805H17.7312C18.1995 18.7901 18.6651 18.7096 19.0999 18.5437C19.5346 18.3779 19.9295 18.1301 20.2608 17.8153C20.5985 17.5107 20.8663 17.143 21.0475 16.7353C21.2286 16.3276 21.3191 15.8888 21.3133 15.4463C21.3062 14.8532 21.1309 14.2728 20.806 13.7664C20.4811 13.2599 20.0184 12.8461 19.4669 12.5685L19.4299 12.5158ZM19.6515 17.1309C19.4186 17.3752 19.1333 17.5689 18.8147 17.6991C18.4961 17.8293 18.1518 17.8929 17.8051 17.8855H17.3619V8.84829H17.9712C18.1947 8.84556 18.4163 8.88618 18.6227 8.96764C18.829 9.0491 19.0158 9.16971 19.1714 9.32209C19.3388 9.46575 19.4716 9.642 19.5608 9.83883C19.65 10.0357 19.6935 10.2485 19.6884 10.4627C19.6884 11.7262 17.842 12.4983 17.842 12.4983C18.5308 12.7901 19.1568 13.2007 19.6884 13.7091C20.1374 14.191 20.3695 14.8211 20.3347 15.4639C20.3571 15.7827 20.3114 16.1025 20.2003 16.404C20.0892 16.7056 19.9151 16.9827 19.6884 17.2187" fill="#F9F4E2"/>
						<path d="M39.7583 7.97089L37.3917 11.2809L34.8265 7.97089H31.1411L35.6033 13.7634L31.9902 18.7812H33.1644L40.9687 7.97089H39.7583Z" fill="#F9F4E2"/>
						<path d="M24.7714 20.7468C24.2848 20.7432 23.808 20.8843 23.4016 21.152C22.9952 21.4198 22.6774 21.8022 22.4887 22.2508C22.2999 22.6994 22.2487 23.194 22.3414 23.6718C22.4341 24.1496 22.6667 24.589 23.0095 24.9345C23.3524 25.2799 23.7901 25.5157 24.2672 25.612C24.7443 25.7083 25.2392 25.6607 25.6892 25.4753C26.1392 25.2899 26.524 24.975 26.7948 24.5706C27.0656 24.1662 27.2101 23.6904 27.2101 23.2037C27.2125 22.8819 27.1512 22.5629 27.0297 22.2649C26.9082 21.9669 26.729 21.6959 26.5023 21.4675C26.2756 21.2391 26.006 21.0579 25.7089 20.9342C25.4118 20.8105 25.0932 20.7468 24.7714 20.7468ZM24.7714 24.6597C24.4759 24.6779 24.1818 24.6068 23.9273 24.4555C23.6727 24.3042 23.4697 24.0797 23.3445 23.8114C23.2194 23.543 23.178 23.2432 23.2256 22.951C23.2733 22.6588 23.4079 22.3877 23.6118 22.173C23.8157 21.9584 24.0796 21.8101 24.369 21.7475C24.6584 21.6849 24.9599 21.7109 25.2343 21.8222C25.5087 21.9334 25.7432 22.1247 25.9074 22.3711C26.0715 22.6175 26.1577 22.9077 26.1546 23.2037C26.1594 23.3902 26.1275 23.5757 26.0606 23.7498C25.9937 23.9239 25.8932 24.0831 25.7647 24.2183C25.6363 24.3535 25.4824 24.4621 25.312 24.5378C25.1415 24.6135 24.9579 24.6549 24.7714 24.6597Z" fill="#212221"/>
						<path d="M26.2275 26.6433H23.2792V27.6261H26.2275V26.6433Z" fill="#212221"/>
						<path d="M37.4805 20.2518L35.2494 25.2108L33.089 19.764L30.8225 25.2108L28.733 20.2518H27.2102L30.8402 28.6089L33.0536 23.2272L35.1785 28.6089L39.0033 20.2518H37.4805Z" fill="#212221"/>
						<path d="M20.0227 26.1315L14.4343 19.764V28.9674H15.7252V23.2242L21.3136 29.5916V20.4418H20.0227V26.1315Z" fill="#212221"/>
					</svg>
				</div>
				<div class="big">
					<svg width="116" height="35" viewBox="0 0 116 35" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_998:86635)">
						<path d="M17.1387 35C12.5932 35 8.23389 33.1563 5.01975 29.8744C1.80561 26.5925 0 22.1413 0 17.5C0 12.8587 1.80561 8.40752 5.01975 5.12563C8.23389 1.84374 12.5932 0 17.1387 0H98.8613C103.407 0 107.766 1.84374 110.98 5.12563C114.194 8.40752 116 12.8587 116 17.5C116 22.1413 114.194 26.5925 110.98 29.8744C107.766 33.1563 103.407 35 98.8613 35H17.1387Z" fill="#E64B38"/>
						<path d="M18.8151 31.9851C16.9018 32.0739 14.9907 31.765 13.1973 31.0771C11.404 30.3892 9.7655 29.3365 8.38086 27.9827C6.99621 26.6289 5.89412 25.002 5.14118 23.2003C4.38823 21.3986 4 19.4595 4 17.5C4 15.5405 4.38823 13.6014 5.14118 11.7997C5.89412 9.99797 6.99621 8.37109 8.38086 7.01728C9.7655 5.66348 11.404 4.61084 13.1973 3.92293C14.9907 3.23502 16.9018 2.92612 18.8151 3.01489H98.4691C102.113 3.18395 105.553 4.78392 108.073 7.48189C110.594 10.1799 112 13.7681 112 17.5C112 21.2319 110.594 24.8201 108.073 27.5181C105.553 30.2161 102.113 31.816 98.4691 31.9851H18.8151Z" stroke="#212221" stroke-width="0.621587" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M24.3893 16.044C24.9799 15.6824 25.4655 15.1724 25.7979 14.5648C26.1302 13.9572 26.2976 13.2733 26.2836 12.5809C26.2832 12.027 26.1702 11.479 25.9514 10.9701C25.7326 10.4613 25.4126 10.0022 25.0108 9.62094C24.6249 9.22726 24.1644 8.91453 23.6561 8.70106C23.1479 8.48759 22.6021 8.37767 22.0509 8.37775H13.7926L13.2302 9.56173H16.1902V25.427H13.8519L13.2895 26.611H21.6661C22.4169 26.6273 23.1632 26.4915 23.8601 26.2117C24.557 25.9319 25.1901 25.5139 25.7212 24.983C26.2625 24.4691 26.6918 23.8489 26.9822 23.1613C27.2725 22.4737 27.4176 21.7334 27.4084 20.9871C27.397 19.9866 27.116 19.0077 26.5951 18.1534C26.0742 17.2991 25.3326 16.6011 24.4484 16.1328L24.3893 16.044ZM24.7444 23.8286C24.3711 24.2406 23.9136 24.5674 23.4029 24.787C22.8922 25.0066 22.3403 25.1138 21.7845 25.1014H21.0741V9.85772H22.0509C22.4091 9.85312 22.7644 9.92163 23.0952 10.059C23.426 10.1965 23.7253 10.3999 23.9748 10.6569C24.2431 10.8992 24.456 11.1965 24.599 11.5285C24.742 11.8605 24.8118 12.2195 24.8036 12.5809C24.8036 14.712 21.8437 16.0144 21.8437 16.0144C22.9479 16.5067 23.9514 17.1992 24.8036 18.0568C25.5233 18.8696 25.8953 19.9324 25.8396 21.0167C25.8754 21.5544 25.8022 22.0939 25.6242 22.6025C25.4461 23.1112 25.167 23.5786 24.8036 23.9766" fill="#F9F4E2"/>
						<path d="M40.1657 22.2603C40.2009 22.5552 40.1732 22.8543 40.0844 23.1377C39.9956 23.4211 39.8477 23.6824 39.6505 23.9045C39.4533 24.1266 39.2113 24.3044 38.9404 24.4262C38.6695 24.5479 38.376 24.6109 38.079 24.6109C37.782 24.6109 37.4883 24.5479 37.2174 24.4262C36.9465 24.3044 36.7046 24.1266 36.5074 23.9045C36.3102 23.6824 36.1623 23.4211 36.0735 23.1377C35.9847 22.8543 35.957 22.5552 35.9921 22.2603V8.34863H31.2859V21.2836C31.2734 21.9995 31.403 22.7109 31.6672 23.3764C31.9314 24.042 32.325 24.6486 32.8251 25.1611C33.3006 25.6733 33.8781 26.0801 34.5205 26.3554C35.1629 26.6307 35.8557 26.7683 36.5545 26.7594C37.2454 26.7732 37.931 26.6375 38.5645 26.3616C39.198 26.0857 39.7644 25.6762 40.2249 25.1611C40.7317 24.652 41.1315 24.0467 41.4009 23.3808C41.6704 22.7149 41.8039 22.0018 41.7937 21.2836V8.34863H40.1657V22.2603Z" fill="#F9F4E2"/>
						<path d="M59.2285 8.34863L55.351 13.9133L51.1479 8.34863H45.1096L52.4207 18.0868L46.5008 26.5227H48.4248L61.2117 8.34863H59.2285Z" fill="#F9F4E2"/>
						<path d="M81.9004 10.1839C81.1088 10.178 80.3334 10.4074 79.6724 10.8429C79.0114 11.2784 78.4946 11.9004 78.1876 12.63C77.8806 13.3596 77.7973 14.164 77.9481 14.9411C78.0989 15.7182 78.4771 16.4329 79.0348 16.9947C79.5924 17.5565 80.3043 17.9401 81.0803 18.0967C81.8562 18.2532 82.6611 18.1759 83.393 17.8743C84.1249 17.5728 84.7508 17.0606 85.1912 16.4029C85.6316 15.7451 85.8667 14.9714 85.8667 14.1798C85.8706 13.6564 85.7709 13.1375 85.5733 12.6529C85.3757 12.1682 85.0842 11.7275 84.7155 11.356C84.3468 10.9846 83.9082 10.6898 83.4251 10.4886C82.9419 10.2874 82.4237 10.1839 81.9004 10.1839ZM81.9004 16.5478C81.4197 16.5775 80.9413 16.4617 80.5274 16.2157C80.1134 15.9696 79.7832 15.6045 79.5796 15.1681C79.3761 14.7317 79.3087 14.2441 79.3862 13.7688C79.4638 13.2935 79.6826 12.8526 80.0143 12.5035C80.346 12.1543 80.7751 11.9132 81.2458 11.8114C81.7164 11.7096 82.2069 11.7519 82.6532 11.9328C83.0995 12.1137 83.4809 12.4248 83.7479 12.8256C84.0149 13.2264 84.155 13.6983 84.15 14.1798C84.1578 14.483 84.1058 14.7848 83.997 15.0679C83.8882 15.3511 83.7248 15.61 83.5158 15.8299C83.3069 16.0498 83.0567 16.2264 82.7795 16.3496C82.5023 16.4727 82.2036 16.5401 81.9004 16.5478Z" fill="#212221"/>
						<path d="M84.1821 20.2755H79.6238V21.8739H84.1821V20.2755Z" fill="#212221"/>
						<path d="M103.688 10.2421L99.958 19.2699L96.3469 9.35413L92.5582 19.2699L89.0654 10.2421H86.5199L92.5878 25.4562L96.2877 15.6588L99.8396 25.4562L106.233 10.2421H103.688Z" fill="#212221"/>
						<path d="M73.9985 19.6848L63.8755 9.11786V24.3911H66.2138V14.8601L76.3368 25.4271V10.2426H73.9985V19.6848Z" fill="#212221"/>
					</g>
					<defs>
					<clipPath id="clip0_998:86635">
					<rect width="116" height="34.9865" fill="white"/>
					</clipPath>
					</defs>
					</svg>
				</div>
			</a>
		</div><!-- .buy-now -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e( 'Menu', 'sweetgwendoline' ); ?></span></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
