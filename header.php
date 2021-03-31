<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-4w4
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'theme-4w4' ); ?></a>

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
			$theme_4w4_description = get_bloginfo( 'description', 'display' );
			if ( $theme_4w4_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $theme_4w4_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	<section class='carrousel'>
		
		
		
	<div><img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4388/4388962.svg?token=exp=1617219186~hmac=d7ad194383b7515986153f5317639992" alt="kebab Icône gratuit" title="kebab Icône gratuit" class="loaded">
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4388/4388960.svg?token=exp=1617219186~hmac=19bea31d35eff12fc96eac91d6e1fdd8" alt="des légumes Icône gratuit" title="des légumes Icône gratuit" class="loaded">
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4388/4388969.svg?token=exp=1617219186~hmac=833819838559775735b8046709427ed4" alt="kebab Icône gratuit" title="kebab Icône gratuit" class="loaded">
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4388/4388959.svg?token=exp=1617219186~hmac=140591457cbd8d89ec818fd96bfa9c5d" alt="goûter Icône gratuit" title="goûter Icône gratuit" class="loaded">
	</div>
	<div>
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4389/4389003.svg?token=exp=1617219186~hmac=58a308d21a54dd38c827f45191b1898e" alt="bifteck Icône gratuit" title="bifteck Icône gratuit" class="loaded">
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4388/4388981.svg?token=exp=1617219186~hmac=bdb51b875cbedc964f746a9b0e94a1d3" alt="fast food Icône gratuit" title="fast food Icône gratuit" class="loaded">
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4388/4388992.svg?token=exp=1617219186~hmac=248e9e977aada3c1fa2f55a522bc30a1" alt="pizza Icône gratuit" title="pizza Icône gratuit" class="loaded">
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4389/4389896.svg?token=exp=1617219186~hmac=0a26ba8956ceb92ded30b9bf4f3114f9" alt="petit-déjeuner Icône gratuit" title="petit-déjeuner Icône gratuit" class="loaded">
	</div>
	<div>
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4388/4388985.svg?token=exp=1617219711~hmac=6ea4e2ac35e86e3e11b85288cd01643a" alt="la crème glacée Icône gratuit" title="la crème glacée Icône gratuit" class="loaded">
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4389/4389887.svg?token=exp=1617219711~hmac=992d7ba011c517ae776be5b3b4f732fe" alt="crêpes Icône gratuit" title="crêpes Icône gratuit" class="loaded">
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4389/4389913.svg?token=exp=1617219711~hmac=0bd99f588346cd93879d169f9e425f26" alt="gâteau Icône gratuit" title="gâteau Icône gratuit" class="loaded">
	<img width="180" height="180" src="https://www.flaticon.com/svg/vstatic/svg/4389/4389930.svg?token=exp=1617219711~hmac=d21112a9eebcab21f671bd1fbe117c42" alt="des céréales Icône gratuit" title="des céréales Icône gratuit" class="loaded">
	</div>
	</section>
	
	<article class="boutonsMenu">
	<button id="un"></button>
	<button id="deux"></button>
	<button id="trois"></button>
	</article>
	


		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="https://s2.svgbox.net/hero-outline.svg?ic=switch-horizontal&color=000000" width="32" height="32"></button>
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
