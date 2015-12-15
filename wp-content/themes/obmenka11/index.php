<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container header-logo">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-6 text-left">
			<h1 class="logo-img">LOGO</h1>
		</div>
		<div class="col-lg-3 col-lg-push-6  col-md-3 col-md-push-6 col-sm-6 text-right">
			<h5 class="enter-social">Войти под аккаунтом соцсетей</h5>
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
		<div class="col-lg-6 col-lg-pull-3 col-md-6 col-md-pull-3 col-sm-12 text-center">
			<h4>Любые операции с электронными валютами</h4>
		</div>
	</div>
</div>
<div class="container">
	<nav>
		<ul class="nav nav-justified">
			<li><a  class="active" href="#">Обмен</a></li>
			<li><a href="#">Курсы обмена валют</a></li>
			<li><a href="#">Партнерская программа</a></li>
			<li><a href="#">Бонусная система</a></li>
		</ul>
	</nav>
</div>
<div class="container-fluid change">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-2 hidden-xs">
				<p>Отдаю</p>
				<!--<img src="img/take.png">-->
				<div class="input-group-btn take-left">
					<img src="<?php bloginfo('template_url') ?>/img/logo1.png" class="dropdown-toggle form-button form-left" data-toggle="dropdown">
					<ul class="dropdown-menu pull-right form-logos1">
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo1.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo2.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo3.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo4.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo5.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo6.png"></a></li>
					</ul>
				</div>
				<img class="change-arrow-left hidden-sm" src="<?php bloginfo('template_url') ?>/img/arrow.png">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-8">
				<div class="change-inline">
					<input class="change-input" type="checkbox" name="option">
					<p class="change-second-paragraph">с учетом комиссии</p>
					<p class="change-first-paragraph">Я меняю</p>
					<div class="form-group">
						<div class="input-group change-group">
							<input id="buttondropdown" name="buttondropdown" class="form-control form-input" value="100.00" type="text">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle form-button" data-toggle="dropdown">
									<img class="form-img1" src="<?php bloginfo('template_url') ?>/img/logo1.png" height="25px" width="25px"> WMZ <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right form-logos1">
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo1.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo2.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo3.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo4.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo5.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo6.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<p class="change-refresh">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-refresh fa-stack-1x"></i>
                        </span>
					</p>
					<p class="change-third-paragraph">На</p>
					<div class="form-group">
						<div class="input-group change-group">
							<input id="buttondropdown1" name="buttondropdown" class="form-control form-input" value="2476.00" type="text">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle form-button" data-toggle="dropdown">
									<img class="form-img2" src="<?php bloginfo('template_url') ?>/img/logo2.png" height="25px" width="25px"> UAH <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right form-logos2">
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo1.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo2.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo3.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo4.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo5.png"></a></li>
									<li><a><img src="<?php bloginfo('template_url') ?>/img/logo6.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<h5 class="text-center">Лимит по выбранной валюте: 9000.00 UAH</h5>
					<div class="text-center"><button class="change-button">ОБМЕНЯТЬ</button></div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-2 hidden-xs">
				<p class="change-get">Получаю</p>
				<img class="change-arrow-right hidden-sm" src="<?php bloginfo('template_url') ?>/img/arrow.png">
				<!--<img src="img/get.png">-->
				<div class="input-group-btn">
					<img src="<?php bloginfo('template_url') ?>/img/logo2.png" class="dropdown-toggle form-button form-right" data-toggle="dropdown">
					<ul class="dropdown-menu pull-right form-logos2">
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo1.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo2.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo3.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo4.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo5.png"></a></li>
						<li><a><img src="<?php bloginfo('template_url') ?>/img/logo6.png"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6 text-left">
			<div class="banners banner-1">
				<h4>Акция - приведи друга!</h4>
				<p>Приведи друзей на сайт и получай процент от их операций</p>
				<a href="#">Узнать подробности</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 text-left">
			<div class="banners banner-2">
				<h4>Обмен wmz на wmu - самый выгодный курс!</h4>
				<p>Нашли лучше? Обращайтесь к нам - мы предложим более выгодные условия.</p>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 text-left">
			<div class="banners banner-3">
				<button>Оставить отзыв</button>
				<a class="ban3-first-link" href="#">Отзывы</a>
				<p class="ban3-first-paragraph">Виктор:</p>
				<p class="ban3-second-paragraph">Всё отлично. Меняю деньги здесь уже больше года. Сервис на уровне. С новым дизайном, наверное алгор...</p>
				<a class="ban3-second-link" href="#">Подробнее</a>
				<p class="ban3-third-paragraph">02 октября 2014, 18:44</p>
			</div>
		</div>
	</div>
</div>
<div class="container text-left strong-sides">
	<h3>Преимущества нашего сервиса</h3>
	<p>- Проводится автоматический обмен вебмани и других валют друг на друга, максимально оперативно и без задержек;</p>
	<p>- Интерфейс интуитивно понятен. Чтобы произвести обмен электронных валют, достаточно ввести сумму и подтвердить транзакцию;</p>
	<p>- Приветливая служба поддержки, которая всегда поможет разобраться со всеми тонкостями платежных систем и нюансами их обмена;</p>
	<p>- Минимальня комиссия по сравнению с другими сервисами.</p>
</div>
<div class="container text-left partners">
	<h3>Мы работаем с</h3>
	<span class="glyphicon glyphicon-chevron-left nav-clients-left" aria-hidden="true"></span>
	<span class="glyphicon glyphicon-chevron-right nav-clients-right" aria-hidden="true"></span>

	<ul id="flexiselDemo1">
		<li><img src="<?php bloginfo('template_url') ?>/img/logo1.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo2.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo3.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo4.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo5.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo6.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo7.png" height="58" width="62"></li>
	</ul>
</div>

<?php get_footer(); ?>
