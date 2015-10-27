<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dmitry Bags</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/styles/site/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/site/main.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/site/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/modules/slickSlider/slick.css">
</head>
<body>
	<div class="header__wrap">
		<div class="page-container">
			<header>
				<div class="header__logo">
					<a href="#">
						<img src="assets/img/logos/logo-black.png" class="header-logo" alt="logo">
					</a>
				</div>
				<div class="header__menu animated">
					<ul>
						<li class="hamburger-logo">
							<a href="#">
								<img src="assets/img/logos/logo-black.png" alt="logo">
							</a>
						</li>
						<li>
							<a href="#" class="active">Каталог</a>
						</li>
						<li>
							<a href="#">О компании</a>
						</li>
						<li>
							<a href="#">Отзывы</a>
						</li>
						<li>
							<a href="#">Контакты</a>
						</li>
					</ul>
				</div>
				<div class="header__buttons">
					<div class="header__liked-container">
						<div class="header__liked-btn">
							<div class="quantity">5</div>
						</div>
					</div>
					<div class="header__search-container">
						<div class="header__search-btn"></div>
					</div>
					<div class="header__basket-container">
						<div class="header__basket-btn">
							<i></i>
							<span>корзина</span>
							<div class="quantity">5</div>
						</div>
					</div>
				</div>
				<div class="hamburger"></div>
			</header>
		</div>
	</div>
	<main>
		<div class="page-container clearfix">
			<!-- slider -->
			<div id="big-main-slider" class="slider-main">
				<!-- slide 1 -->
				<div class="slider-main__slide">
					<div class="slider-main__slide-content" style="background: url(assets/img/slider/1.jpg) no-repeat center; background-size: cover;">
						<div class="slider-main__slide-title clearfix">
							<h1>AGLINI ALPO</h1>
						</div>
						<div class="slider-main__slide-group">
							<a href="#">кошелек</a>
						</div>
					</div>
				</div>
				<!-- /slide 1 -->
				<!-- slide 2 -->
				<div class="slider-main__slide">
					<div class="slider-main__slide-content" style="background: url(assets/img/slider/2.jpg) no-repeat center; background-size: cover;">
						<div class="slider-main__slide-title clearfix">
							<h1>PRADA</h1>
						</div>
						<div class="slider-main__slide-group">
							<a href="#">сумка</a>
						</div>
					</div>
				</div>
				<!-- /slide 2 -->
			</div>
			<!-- /slider -->
		</div>
		<!-- / -->
		<div class="page-container">
			<div class="main-stock">
				<div class="row">
					<div class="col-xs-4 col-sm-4 col-lg-4">
						<!-- stock block -->
						<a href="#">
							<div class="main-stock__block main-stock__block__color-yellow">
								<div class="main-stock__block__img" style="background: url(assets/img/stock/stock-1.png) no-repeat center; background-size: cover;"></div>
								<div class="main-stock__block__title">
									<h1>MANERO</h1>
								</div>
								<div class="main-stock__block__text">
									<h4>
										<span>-10%</span><br>
										на всю<br>
										продукцию
									</h4>
								</div>
							</div>
						</a>
						<!-- /stock block -->
					</div>
					<div class="col-xs-4 col-sm-4 col-lg-4">
						<!-- stock block -->
						<a href="#">
							<div class="main-stock__block main-stock__block__color-blue">
								<div class="main-stock__block__img" style="background: url(assets/img/stock/stock-2.png) no-repeat center; background-size: cover;"></div>
								<div class="main-stock__block__title">
									<h1>MANERO</h1>
								</div>
								<div class="main-stock__block__text">
									<h4>
										<span>-10%</span><br>
										на всю<br>
										продукцию
									</h4>
								</div>
							</div>
						</a>
						<!-- /stock block -->
					</div>
					<div class="col-xs-4 col-sm-4 col-lg-4">
						<!-- stock block -->
						<a href="#">
							<div class="main-stock__block main-stock__block__color-pink">
								<div class="main-stock__block__img" style="background: url(assets/img/stock/stock-3.png) no-repeat center; background-size: cover;"></div>
								<div class="main-stock__block__title">
									<h1>MANERO</h1>
								</div>
								<div class="main-stock__block__text">
									<h4>
										<span>-10%</span><br>
										на всю<br>
										продукцию
									</h4>
								</div>
							</div>
						</a>
						<!-- /stock block -->
					</div>
				</div>
			</div>
		</div>
		<!-- / -->
		<div class="page-container">
			<div class="main__brands clearfix">
				<div class="main__brands-title">
					<h2>бренды</h2>
				</div>
				<div class="main__brands-slider">
					<div id="main-brands-slider" class="brands-slider">
						<div class="brands-slider-container"><h5>Fengi</h5></div>
						<div class="brands-slider-container"><h5>Moschino</h5></div>
						<div class="brands-slider-container"><h5>Arcadia</h5></div>
						<div class="brands-slider-container"><h5>Renato Angi</h5></div>
						<div class="brands-slider-container"><h5>Crimea</h5></div>
						<div class="brands-slider-container"><h5>Moschino</h5></div>
						<div class="brands-slider-container"><h5>Arcadia</h5></div>
						<div class="brands-slider-container"><h5>Crimea</h5></div>
					</div>
				</div>
			</div>
		</div>
		<!-- / -->
		<!-- main catalog -->
		<div class="page-container">
			<div class="main__catalog">
				<div class="main__catalog__sort">
					<span>Сортировка по цене:</span>
					<select>
						<option value="Цвету">Цвету</option>
						<option value="Цене">Цене</option>
						<option value="Бренду">Бренду</option>
					</select>
				</div>
				<div class="main__catalog__container clearfix">
					<!-- / -->
					<div class="main__catalog__item-block">
						<!-- hit -->
						<div class="main__catalog__item-block__hit"></div>
						<!-- /hit -->
						<div class="main__catalog__item-block__title">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<h4>
									сумка мужская michael cors
								</h4>
							</a>
							<!-- /Ссылка на карточку товара -->
						</div>
						<div class="main__catalog__item-block__img-container">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<img src="assets/img/goods/item-1.jpg" alt="">
							</a>
							<!-- /Ссылка на карточку товара -->
							<!-- / -->
							<a href="#">
								<div class="main__catalog__item-block__like"></div>
							</a>
							<!-- / -->
						</div>
						<div class="main__catalog__item-block__price">
							<h3>16 567 -</h3>
						</div>
						<div class="main__catalog__item-block__button">
							<div class="catalog__btn_1">в корзину</div>
						</div>
					</div>
					<!-- / -->
					<!-- / -->
					<div class="main__catalog__item-block">
						<!-- new -->
						<div class="main__catalog__item-block__new"></div>
						<!-- /new -->
						<div class="main__catalog__item-block__title">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<h4>
									сумка мужская michael cors
								</h4>
							</a>
							<!-- /Ссылка на карточку товара -->
						</div>
						<div class="main__catalog__item-block__img-container">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<img src="assets/img/goods/item-2.jpg" alt="">
							</a>
							<!-- /Ссылка на карточку товара -->
							<!-- / -->
							<a href="#">
								<div class="main__catalog__item-block__like"></div>
							</a>
							<!-- / -->
						</div>
						<div class="main__catalog__item-block__price">
							<h3>16 567 -</h3>
						</div>
						<div class="main__catalog__item-block__button">
							<div class="catalog__btn_1">в корзину</div>
						</div>
					</div>
					<!-- / -->
					<!-- / -->
					<div class="main__catalog__item-block">
						<div class="main__catalog__item-block__title">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<h4>
									сумка мужская michael cors
								</h4>
							</a>
							<!-- /Ссылка на карточку товара -->
						</div>
						<div class="main__catalog__item-block__img-container">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<img src="assets/img/goods/item-3.jpg" alt="">
							</a>
							<!-- /Ссылка на карточку товара -->
							<!-- / -->
							<a href="#">
								<div class="main__catalog__item-block__like"></div>
							</a>
							<!-- / -->
						</div>
						<div class="main__catalog__item-block__price">
							<h3>16 567 -</h3>
						</div>
						<div class="main__catalog__item-block__button">
							<div class="catalog__btn_1">в корзину</div>
						</div>
					</div>
					<!-- / -->
					<!-- / -->
					<div class="main__catalog__item-block">
						<div class="main__catalog__item-block__title">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<h4>
									сумка мужская michael cors
								</h4>
							</a>
							<!-- /Ссылка на карточку товара -->
						</div>
						<div class="main__catalog__item-block__img-container">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<img src="assets/img/goods/item-4.jpg" alt="">
							</a>
							<!-- /Ссылка на карточку товара -->
							<!-- / -->
							<a href="#">
								<div class="main__catalog__item-block__like"></div>
							</a>
							<!-- / -->
						</div>
						<div class="main__catalog__item-block__price">
							<h3>16 567 -</h3>
						</div>
						<div class="main__catalog__item-block__button">
							<div class="catalog__btn_1">в корзину</div>
						</div>
					</div>
					<!-- / -->
					<!-- / -->
					<div class="main__catalog__item-block">
						<div class="main__catalog__item-block__title">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<h4>
									сумка мужская michael cors
								</h4>
							</a>
							<!-- /Ссылка на карточку товара -->
						</div>
						<div class="main__catalog__item-block__img-container">
							<!-- Ссылка на карточку товара -->
							<a href="#">
								<img src="assets/img/goods/item-5.jpg" alt="">
							</a>
							<!-- /Ссылка на карточку товара -->
							<!-- / -->
							<a href="#">
								<div class="main__catalog__item-block__like"></div>
							</a>
							<!-- / -->
						</div>
						<div class="main__catalog__item-block__price">
							<h3>16 567 -</h3>
						</div>
						<div class="main__catalog__item-block__button">
							<div class="catalog__btn_1">в корзину</div>
						</div>
					</div>
					<!-- / -->
				</div>
				<!--  -->
				<div class="main__catalog__btn-wrap">
					<div class="load__btn">загрузить еще</div>
				</div>
			</div>
		</div>
		<!-- /main catalog -->
	</main>
	<footer>
		<div class="page-container">
			<!-- кнопка и соц сети -->
			<div class="row">
				<div class="col-lg-6">
					<div class="footer__btn_1">
						добавиться в группу вконтакте
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social-links-container">
						<ul>
							<li>
								<a href="#">
									<img src="assets/img/icons/fb.png" alt="facebook">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/img/icons/vk.png" alt="vkontakte">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/img/icons/tw.png" alt="twitter">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /кнопка и соц сети -->
			<!-- адрес, график, телефон -->
			<div class="row">
				<div class="col-md-12 col-lg-5">
					<p class="adress">
						Мы находимся по адресу: ул. Красных тюленей д. <span>32</span>
					</p>
				</div>
				<div class="col-md-12 col-lg-5">
					<p class="graph">
						График работы: пн-пт: c <span>10:00</span> до <span>21:00</span>, сб. вс. - выходной
					</p>
				</div>
				<div class="col-md-12 col-lg-2">
					<p class="phone">
						<span>
							<a href="tel:8 (800) 455 44 31">8 (800) 455 44 31</a>
						</span>
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Скрипты -->
	<!-- JQ -->
	<script src="assets/scripts/jquery-2.1.4.min.js"></script>
	<script src="assets/modules/slickSlider/slick.min.js"></script>
	<script src="assets/scripts/script.js"></script>
</body>
</html>