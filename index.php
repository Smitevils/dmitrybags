<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dmitry Bags</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/styles/welcome/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/welcome/main.css">
</head>
<body id="main">
	<div class="main__backing--black"></div>
	<div id="#video_bg">
		<video id="video_bg" autoplay="autoplay" muted="muted" loop="loop">
			<source src="assets/video/video.mp4" type="video/mp4"></source>
			<source src="assets/video/video.webm" type="video/webm"></source>
			<source src="assets/video/video.ogv" type="video/ogg"></source>
		</video>
	</div>
	<header>
		<!-- Логотип -->
		<a href="#" class="main__logo">
			<img src="assets/img/logos/logo-white.png" alt="logo">
		</a>
		<!-- /Логотип -->
		<div class="main__wrap-ror-mobile clearfix">
			<!-- Мобильная шапка с мини лого и кнопкой меню -->
			<div class="main__mobile-header">
				<a href="#" class="main__mobile-header__logo">
					<img src="assets/img/logos/logo-white-mini.png" alt="logo mini">
				</a>
				<!-- Бутерброд -->
				<a href="#" class="main__mobile-header__hamburger"></a>
				<!-- /Бутерброд -->
			</div>
			<!-- /Мобильная шапка с мини лого и кнопкой меню -->
			<!-- Меню главной страницы -->
			<div class="main__menu-wrap">
				<div class="main__menu">
					<ul>
						<li><a href="#">Каталог</a></li>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Отзывы</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</div>
			</div>
			<!-- /Меню главной страницы -->
			<!-- Поиск -->
			<div class="main__search">
				<input type="text" placeholder="Поиск...">
				<div class="main__search--button"></div>
			</div>
			<!-- /Поиск -->
		</div>
	</header>
	<main>
		<!-- Центральный контент -->
		<div class="main__center-content clearfix">
			<div class="main__center-content--map"></div>
			<div class="main__center-content__title">
				<h1>
					<span>сумки</span><br>из Европы и<br>аксессуары
				</h1>
			</div>
			<div class="main__center-content__list">
				<ul>
					<li>
						<a href="#">сумки</a>
					</li>
					<li>
						<a href="#">куртки</a>
					</li>
					<li>
						<a href="#">женская одежда</a>
					</li>
					<li>
						<a href="#">аксессуары</a>
					</li>
					<li>
						<a href="#">спорт</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /Центральный контент -->
	</main>
	<footer>
		<address>
			<p>
				Мы находимся по адресу: г. Санкт-Петербург, ул. Красных тюленей д. 32<br>
				График работы: пн-пт: c 10:00 до 21:00, сб. вс. - выходной<br>
			</p>
			<h4>8 (800) 455 44 31</h4>
		</address>
	</footer>
	<!-- Социальные кнопки -->
	<div class="main__social">
		<ul>
			<li>
				<a href="#">
					<img src="assets/img/social/fb.png" alt="Рассказать в facebook">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="assets/img/social/vk.png" alt="Рассказать в VK">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="assets/img/social/tw.png" alt="Рассказать в twitter">
				</a>
			</li>
		</ul>
	</div>
	<!-- /Социальные кнопки -->
	<!-- Скрипты -->
	<!-- JQ -->
	<script src="assets/scripts/jquery-2.1.4.min.js"></script>
	<script src="assets/scripts/script.js"></script>
</body>
</html>