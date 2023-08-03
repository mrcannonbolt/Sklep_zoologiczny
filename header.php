<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zoologiczny
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'zoologiczny' ); ?></a>

	<div class="container">
		<div class="row">
				<div class="left_box_header col-md-2"></div>
				<div class="left_up_header col-md-7">
				<h1><i class="bi bi-truck"></i> Darmowa dostawa od 150zł</h1>
				</div>

				<div class="right_up_header col-md-2">
					<a href="https://www.facebook.com/">
							<i class="bi bi-facebook"></i>
						</a>

						<a class="allegro" href="https://www.allegro.pl/">
							allegro
						</a>
				</div>
		</div>
	</div>

	<header id="masthead" class="site-header">

		<div class="container down_header pt-2 pb-2">
			
			<div class="row align-items-center justifice-content-center">

				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start pb-2">
					<?php the_custom_logo(); ?>
				</div>

				<div class="col-md-5">
					<?php aws_get_search_form( true ); ?>
				</div>

				<div class="col cart d-flex justify-content-end align-items-center">
				<a href='<?php echo wc_get_cart_url(); ?>'><img src="<?php echo get_template_directory_uri(); ?>/img/header/koszyk.png" class="px-1" style="width:3rem"></a>
				<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d produkt', '%d Produktów', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>
				<div class="col-md-2 header-icons">
					<a href="<?php echo get_bloginfo('wpurl')?>/my-account">
						<div class="account_header">
							<img src="<?php echo get_template_directory_uri(); ?>/img/header/konto.png" class="px-2" style="width:3rem">
						</div>
					</a>
					<a href="<?php echo get_bloginfo('wpurl')?>/favorite">
						<div class="account_header">
							<img src="<?php echo get_template_directory_uri(); ?>/img/header/serce.png" class="px-2" style="width:3rem">
						</div>
					</a>
				</div>

			</div>

		</div>
	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation">
		<div class="container d-flex justify-content-center">

			<div class="row">
				<div class="col-12 d-flex justify-content-center">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'zoologiczny' ); ?></button>
			</div>

			<div class="col-12 text-center">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</div>
		</div>

	</nav><!-- #site-navigation -->
