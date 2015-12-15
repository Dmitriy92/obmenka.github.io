<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div class="container-fluid container-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-3 hidden-xs text-left bottom-logo">
				<h1>LOGO</h1>
				<h5>© Copyright 2015</h5>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 text-left bottom-help">
				<p><a href="#">Помощь</a></p>
				<p><a href="#">О нас</a></p>
				<p><a href="#">Контакты</a></p>
				<p><a href="#">Новости</a></p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 text-left bottom-course">
				<p><a href="#">Курсы обмена валют</a></p>
				<p><a href="#">Партнерская программа</a></p>
				<p><a href="#">Бонусная система</a></p>
				<p><a href="#">Уведомление об ответственности</a></p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3 hidden-xs text-center bottom-img">
				<p><img src="<?php bloginfo('template_url') ?>/img/right-bottom1.png"></p>
				<p><img src="<?php bloginfo('template_url') ?>/img/right-bottom2.png"></p>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bottom-social">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
			<img src="<?php bloginfo('template_url') ?>/img/webmoney.png">
			<p>Принимаем Webmoney</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
			<img src="<?php bloginfo('template_url') ?>/img/webmoney.png">
			<p>Принимаем Webmoney</p>
		</div>
		<div class="col-lg-4 col-lg-offset-2  col-md-4 col-md-offset-2 col-sm-6 text-left">
			<p class="we-in-social">Мы в соцсетях:</p>
			<a href="#" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-vk fa-stack-1x"></i>
                </span>
			</a>
			<a href="#" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x"></i>
                </span>
			</a>
			<a href="#" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-circle-o fa-stack-1x"></i>
                </span>
			</a>
			<a href="#" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square fa-stack-2x"></i>
                    <i class="fa fa-google-plus fa-stack-1x"></i>
                </span>
			</a>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
