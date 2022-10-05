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
	<nav id="main-menu">
		<?php wp_nav_menu(array('theme_location' => 'menu-1'));?>
	</nav>	
	<header id="masthead" class="site-header">
		<h1 class="site-title align-center"><img class="main-logo" src="<?php bloginfo('template_url');?>/img/plurilogo_text.svg" alt="<?php bloginfo('title');?>"></h1>
	
	</header><!-- #masthead -->
	