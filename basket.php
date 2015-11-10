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
	<link rel="stylesheet" type="text/css" href="assets/modules/objectFit/polyfill.object-fit.css">
</head>
<body>
	<?php include "header.php" ?>
	<main>
		<div class="page-container">
			<!-- Блок Хлебных Кроек -->
			<div class="breadcrumbs-container">
				<ul class="breadcrumbs">
					<li>
						<a href="main.php">Каталог</a>
					</li>
					<li>
						<a href="#">Корзина</a>
					</li>
				</ul>
			</div>
			<!-- /Блок Хлебных Кроек -->
			<!-- Basket -->
			<div class="basket-page">
				<div class="basket__steps-container">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4 col-lg-4 basket__step">
								<a href="#" data-basket-step="1">Корзина</a>
							</div>
							<div class="col-md-4 col-lg-4 basket__step">
								<a href="#" data-basket-step="2" class="active">данные покупателя</a>
							</div>
							<div class="col-md-4 col-lg-4 basket__step">
								<a href="#" data-basket-step="3">Доставка и оплата</a>
							</div>
						</div>
					</div>
				</div>
				<div class="basket__content">
					<div class="basket__step-content basket__step-1-content clearfix" data-basket-content="1">
						<table class="basket-table clearfix">
							<!-- Заголовок таблицы -->
							<tr>
								<th>товар</th>
								<th></th>
								<th>цена</th>
								<th>количество</th>
								<th>итого</th>
								<th></th>
							</tr>
							<!-- /Заголовок таблицы -->
							<!-- Товар в корзине -->
							<tr>
								<td>
									<img src="assets/img/goods/item-1.jpg" alt="bag">
								</td>
								<td>сумка женская baldinini</td>
								<td>9 467 -</td>
								<td>
									<div class="basket-counter-wrap">
										<div class="basket-counter-minus">-</div>
										<div class="basket-counter">1</div>
										<div class="basket-counter-plus">+</div>
									</div>
								</td>
								<td>9 467 -</td>
								<td>
									<div class="basket-delite"></div>
								</td>
							</tr>
							<!-- /Товар в корзине -->
							<!-- Товар в корзине -->
							<tr>
								<td>
									<img src="assets/img/goods/item-1.jpg" alt="bag">
								</td>
								<td>сумка женская baldinini</td>
								<td>9 467 -</td>
								<td>
									<div class="basket-counter-wrap">
										<div class="basket-counter-minus">-</div>
										<div class="basket-counter">1</div>
										<div class="basket-counter-plus">+</div>
									</div>
								</td>
								<td>9 467 -</td>
								<td>
									<div class="basket-delite"></div>
								</td>
							</tr>
							<!-- /Товар в корзине -->
						</table>
						
					</div>
					<div class="basket__step-content basket__step-2-content clearfix" data-basket-content="2">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4">
									<p>имя и фамилия</p>
									<input type="text" class="input-1" placeholder="Например, Игорь Владимирович">
									<p>телефон</p>
									<input type="text" class="input-1" placeholder="Например, 8 (921) 544-56-71">
									<p>email</p>
									<input type="text" class="input-1" placeholder="Например, igor@mail.ru">
								</div>
								<div class="col-md-4">
									<p>город</p>
									<input type="text" class="input-1" placeholder="Например, Ростов">
									<p>индекс</p>
									<input type="text" class="input-1" placeholder="197456">
									<p>улица</p>
									<input type="text" class="input-1" placeholder="Например, улица Красных тюленей">
									<p>номер дома</p>
									<input type="text" class="input-1" placeholder="Например, улица Красных тюленей">
									<p>квартира</p>
									<input type="text" class="input-1" placeholder="Например, улица Красных тюленей">
								</div>
								<div class="col-md-4">
									<p>Примечание</p>
									<textarea placeholder="Например, Привезите мне мой телевизор быстрее!"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="basket__step-content basket__step-3-content clearfix" data-basket-content="3">
						<h4>Выберите способ доставки</h4>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4">
									<input type="radio" name="delivery" id="step3-checkbox-1"><label for="step3-checkbox-1"></label>
									<span>Самовывоз</span>
									<p>
										3 больших кармана на молнии. Вместительная и удобная сумка – незаменимая вещь в каждом женском гардеробе. Теплый цвет и универсальная форма делают данную сумку уместной для любого Вашего образа. С женской сумкой Baldinini Вы точно станете королевой любого мероприятия. 3 больших кармана на молнии.
									</p>
								</div>
								<div class="col-md-4">
									<input type="radio" name="delivery" id="step3-checkbox-2"><label for="step3-checkbox-2"></label>
									<span>Самовывоз</span>
									<p>
										3 больших кармана на молнии. Вместительная и удобная сумка – незаменимая вещь в каждом женском гардеробе. Теплый цвет и универсальная форма делают данную сумку уместной для любого Вашего образа. С женской сумкой Baldinini Вы точно станете королевой любого мероприятия. 3 больших кармана на молнии.
									</p>
								</div>
								<div class="col-md-4">
									<input type="radio" name="delivery" id="step3-checkbox-3"><label for="step3-checkbox-3"></label>
									<span>Самовывоз</span>
									<p>
										3 больших кармана на молнии. Вместительная и удобная сумка – незаменимая вещь в каждом женском гардеробе. Теплый цвет и универсальная форма делают данную сумку уместной для любого Вашего образа. С женской сумкой Baldinini Вы точно станете королевой любого мероприятия. 3 больших кармана на молнии.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="basket__result clearfix">
					<ul>
						<li>
							<h2>общая сумма</h2>
						</li>
						<li>
							<h2 class="cost">28 401 -</h2>
						</li>
						<li>
							<p>доставка не включена</p>
						</li>
					</ul>
					<div class="basket-next-step">Продолжить</div>
					<div class="basket-finish-step">Оформить</div>
				</div>
			</div>
			<!-- /Basket -->
		</div>
	</main>
	<?php include "footer.php" ?>
	<!-- Скрипты -->
	<!-- JQ -->
	<script src="assets/scripts/jquery-2.1.4.min.js"></script>
	<script src="assets/modules/slickSlider/slick.min.js"></script>
	<script src="assets/modules/objectFit/polyfill.object-fit.min.js"></script>
	<script src="assets/scripts/script.js"></script>
</body>
</html>