<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!--<a class="navbar-brand" href="#">Project name</a>-->
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'navbar-nav nav', 'container' => false ) ); ?>
<!--				<ul class="nav navbar-nav">-->
<!--					<li><a href="#">Помощь</a></li>-->
<!--					<li><a href="#">О нас</a></li>-->
<!--					<li><a href="#">Новости</a></li>-->
<!--					<li><a href="#">Соглашение</a></li>-->
<!--					<li><a href="#">Контакты</a></li>-->
<!--					<li><a href="#">Вакансии</a></li>-->
<!--				</ul>-->
			<ul class="nav navbar-nav navbar-right">
				<li class="enter"><a href="#">Вход</a></li>
				<li class="register"><a href="#">Регистрация</a></li>
			</ul>

		</div>
	</div>
</nav>