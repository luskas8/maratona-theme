<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maratona
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
<div id="page" class="container-fluid site">
	<div class="header-bg">
		<header id="masthead" class="site-header container-sm">
			<div class="logo">
				<img
					src="./wp-content/themes/maratona-theme/images/unisantos-azul.png"
					alt="Logo unisantos azul"
				>
			</div>

			<input id="toggle" type="checkbox">

			<label class="toggle-container" for="toggle">
			
				<span class="button button-toggle"></span>
			</label>

			<nav class="nav">
				<a class="nav-item active" href="">a maratona</a>
				<a class="nav-item" href="">inscrições</a>
				<a class="nav-item" href="">programação</a>
				<a class="nav-item" href="">ambiente computacional</a>
			</nav>

			<ul>
				<li class="active"><a href="#">a maratona</a></li>
				<li><a href="#">inscrições</a></li>
				<li><a href="#">programação</a></li>
				<li><a href="#">ambiente computacional</a></li>
			</ul>
		</header><!-- #masthead -->
		<div class="subscribe">
			<div class="image-block">
				<img
					src="./wp-content/themes/maratona-theme/images/maratona-logo-2.png"
					alt="Logo maratona de programação"
				>
			</div> <!-- .image-block -->
			<a href="#">INSCREVA-SE</a>
		</div> <!-- .subscribe -->
	</div>
