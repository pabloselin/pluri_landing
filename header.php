<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pluriversidad_landing
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'pluri_landing' ); ?></a>

	<header id="masthead" class="site-header">
		<h1 class="site-title align-center"><?php bloginfo('name');?></h1>
		<div class="augsquare">
			<span id="timing"></span>
		</div>
	</header><!-- #masthead -->
	<script>
		const timing = document.getElementById("timing");
		timing.innerText = parseFloat(window.performance.timing.responseEnd);
	</script>
