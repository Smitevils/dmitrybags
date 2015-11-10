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
						<a href="#">Избранное</a>
					</li>
				</ul>
			</div>
			<!-- /Блок Хлебных Кроек -->
			<!-- Избранное -->
			<div class="fovorites-container">
				<div class="fovorites__title">
					<h3>Избранное</h3><div class="add-cheched-btn">добавить отмеченное в корзину</div>
				</div>
				<div class="fovorites__table">
					<table>
						<!-- блок -->
						<tr>
							<td>
								<input type="checkbox"><label class="favorites-checkbox"></label>
							</td>
							<td>
								<img src="assets/img/goods/item-1.jpg" alt="bag">
							</td>
							<td>
								<h3 class="favorites-table-name">сумка женская baldinini</h3>
							</td>
							<td>
								<h2 class="favorites-table-price">
									9 467 -
								</h2>
							</td>
							<td>
								<div class="add-favorites-btn">
									добавить в корзину
								</div>
							</td>
							<td>
								<div class="favorites-delite-btn"></div>
							</td>
						</tr>
						<!-- /блок -->
						<!-- блок -->
						<tr>
							<td>
								<input type="checkbox"><label class="favorites-checkbox"></label>
							</td>
							<td>
								<img src="assets/img/goods/item-1.jpg" alt="bag">
							</td>
							<td>
								<h3 class="favorites-table-name">сумка женская baldinini</h3>
							</td>
							<td>
								<h2 class="favorites-table-price">
									9 467 -
								</h2>
							</td>
							<td>
								<div class="add-favorites-btn">
									добавить в корзину
								</div>
							</td>
							<td>
								<div class="favorites-delite-btn"></div>
							</td>
						</tr>
						<!-- /блок -->
					</table>
				</div>
			</div>
			<!-- /Избранное -->
		</div>
	</main>
	<?php include "footer.php" ?>
	<!-- Скрипты -->
	<!-- JQ -->
	<script src="assets/scripts/jquery-2.1.4.min.js"></script>
	<script src="assets/modules/slickSlider/slick.min.js"></script>
	<script src="assets/scripts/script.js"></script>
</body>
</html>