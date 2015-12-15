<?php
/**
 * Template Name: home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package obmenka
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
					<img src="<?php bloginfo('template_url') ?>/img/logo-privat.png" class="dropdown-toggle form-button form-left" data-toggle="dropdown">
					<ul class="dropdown-menu pull-right form-logos1">
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#qiwi-min-max">
								<img class="logo-qiwi" src="<?php bloginfo('template_url') ?>/img/logo-qiwi.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#sber-min-max">
								<img class="logo-sber" src="<?php bloginfo('template_url') ?>/img/logo-sber.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#privat-min-max">
								<img class="logo-privat" src="<?php bloginfo('template_url') ?>/img/logo-privat.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#mastercard-min-max">
								<img class="logo-mastercard" src="<?php bloginfo('template_url') ?>/img/logo-mastercard.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#web-min-max">
								<img class="logo-web" src="<?php bloginfo('template_url') ?>/img/logo-web.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#yandex-min-max">
								<img class="logo-yandex" src="<?php bloginfo('template_url') ?>/img/logo-yandex.png">
							</button>
						</li>
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
							<input id="input-top" name="buttondropdown" class="form-control form-input" value="100.00" type="text">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle form-button" data-toggle="dropdown">
									<img class="form-img1" src="<?php bloginfo('template_url') ?>/img/logo-privat.png" height="25px" width="25px"> <span class="valuta-top">UAH</span> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right form-logos1">
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#qiwi-min-max">
											<img class="logo-qiwi" src="<?php bloginfo('template_url') ?>/img/logo-qiwi.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#sber-min-max">
											<img class="logo-sber" src="<?php bloginfo('template_url') ?>/img/logo-sber.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#privat-min-max">
											<img class="logo-privat" src="<?php bloginfo('template_url') ?>/img/logo-privat.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#mastercard-min-max">
											<img class="logo-mastercard" src="<?php bloginfo('template_url') ?>/img/logo-mastercard.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#web-min-max">
											<img class="logo-web" src="<?php bloginfo('template_url') ?>/img/logo-web.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#yandex-min-max">
											<img class="logo-yandex" src="<?php bloginfo('template_url') ?>/img/logo-yandex.png">
										</button>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<p class="change-refresh">
					<span class="fa-stack fa-2x button-swap">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-refresh fa-stack-1x"></i>
					</span>
					</p>
					<p class="change-third-paragraph">На</p>
					<div class="form-group">
						<div class="input-group change-group">
							<input id="input-down" name="buttondropdown" class="form-control form-input" value="2476.00" type="text">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle form-button" data-toggle="dropdown">
									<img class="form-img2" src="<?php bloginfo('template_url') ?>/img/logo-web.png" height="25px" width="25px"> <span class="valuta-bottom">WMZ</span> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right form-logos2">
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#qiwi-min-max">
											<img class="logo-qiwi" src="<?php bloginfo('template_url') ?>/img/logo-qiwi.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#sber-min-max">
											<img class="logo-sber" src="<?php bloginfo('template_url') ?>/img/logo-sber.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#privat-min-max">
											<img class="logo-privat" src="<?php bloginfo('template_url') ?>/img/logo-privat.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#mastercard-min-max">
											<img class="logo-mastercard" src="<?php bloginfo('template_url') ?>/img/logo-mastercard.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#web-min-max">
											<img class="logo-web" src="<?php bloginfo('template_url') ?>/img/logo-web.png">
										</button>
									</li>
									<li>
										<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#yandex-min-max">
											<img class="logo-yandex" src="<?php bloginfo('template_url') ?>/img/logo-yandex.png">
										</button>
									</li>
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
				<div class="input-group-btn take-right">
					<img src="<?php bloginfo('template_url') ?>/img/logo-web.png" class="dropdown-toggle form-button form-right" data-toggle="dropdown">
					<ul class="dropdown-menu pull-right form-logos2">
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#qiwi-min-max">
								<img class="logo-qiwi" src="<?php bloginfo('template_url') ?>/img/logo-qiwi.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#sber-min-max">
								<img class="logo-sber" src="<?php bloginfo('template_url') ?>/img/logo-sber.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#privat-min-max">
								<img class="logo-privat" src="<?php bloginfo('template_url') ?>/img/logo-privat.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#mastercard-min-max">
								<img class="logo-mastercard" src="<?php bloginfo('template_url') ?>/img/logo-mastercard.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#web-min-max">
								<img class="logo-web" src="<?php bloginfo('template_url') ?>/img/logo-web.png">
							</button>
						</li>
						<li>
							<button data-container="body" data-trigger="hover focus" data-toggle="popover" data-placement="top" data-contentwrapper="#yandex-min-max">
								<img class="logo-yandex" src="<?php bloginfo('template_url') ?>/img/logo-yandex.png">
							</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

	<div id="qiwi-min-max" style="display: none;">
		<div class="min-max">
			<table>
				<tbody>
				<tr>
					<td></td>
					<td>Минимальный лимит</td>
					<td>Максимальный лимит</td>
				</tr>
				<tr>
					<td>
						<button>RUR</button>
					</td>
					<td>100.00 RUR</td>
					<td>10000.00 RUR</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div id="sber-min-max" style="display: none;">
		<div class="min-max">
			<table>
				<tbody>
				<tr>
					<td></td>
					<td>Минимальный лимит</td>
					<td>Максимальный лимит</td>
				</tr>
				<tr>
					<td>
						<button>RUB</button>
					</td>
					<td>200.00 RUB</td>
					<td>15000.00 RUB</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div id="privat-min-max" style="display: none;">
		<div class="min-max">
			<table>
				<tbody>
				<tr>
					<td></td>
					<td>Минимальный лимит</td>
					<td>Максимальный лимит</td>
				</tr>
				<tr>
					<td>
						<button>UAH</button>
					</td>
					<td>100.00 UAH</td>
					<td>10000.00 UAH</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div id="mastercard-min-max" style="display: none;">
		<div class="min-max">
			<table>
				<tbody>
				<tr>
					<td></td>
					<td>Минимальный лимит</td>
					<td>Максимальный лимит</td>
				</tr>
				<tr>
					<td>
						<button>UAH</button>
					</td>
					<td>100.00 UAH</td>
					<td>10000.00 UAH</td>
				</tr>
				<tr>
					<td>
						<button>RUR</button>
					</td>
					<td>100.00 RUR</td>
					<td>10000.00 RUR</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div id="web-min-max" style="display: none;">
		<div class="min-max">
			<table>
				<tbody>
				<tr>
					<td></td>
					<td>Минимальный лимит</td>
					<td>Максимальный лимит</td>
				</tr>
				<tr>
					<td>
						<button class="button-wmz">WMZ</button>
					</td>
					<td>100.00 WMZ</td>
					<td>5000.00 WMZ</td>
				</tr>
				<tr>
					<td>
						<button class="button-wmr">WMR</button>
					</td>
					<td>200.00 WMR</td>
					<td>6000.00 WMR</td>
				</tr>
				<tr>
					<td>
						<button class="button-wmu">WMU</button>
					</td>
					<td>300.00 WMU</td>
					<td>7000.00 WMU</td>
				</tr>
				<tr>
					<td>
						<button class="button-wme">WME</button>
					</td>
					<td>400.00 WME</td>
					<td>8000.00 WME</td>
				</tr>
				<tr>
					<td>
						<button class="button-wmb">WMB</button>
					</td>
					<td>500.00 WMB</td>
					<td>9000.00 WMB</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div id="yandex-min-max" style="display: none;">
		<div class="min-max">
			<table>
				<tbody>
				<tr>
					<td></td>
					<td>Минимальный лимит</td>
					<td>Максимальный лимит</td>
				</tr>
				<tr>
					<td>
						<button>RUR</button>
					</td>
					<td>150.00 RUR</td>
					<td>12000.00 RUR</td>
				</tr>
				</tbody>
			</table>
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
		<li><img src="<?php bloginfo('template_url') ?>/img/logo-qiwi.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo-sber.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo-privat.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo-mastercard.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo-web.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo-yandex.png" height="58" width="62"></li>
		<li><img src="<?php bloginfo('template_url') ?>/img/logo-cash.png" height="58" width="62"></li>
	</ul>
</div>

<?php
get_sidebar();
get_footer();
