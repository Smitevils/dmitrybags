$(document).ready(function() {
	$('a.main__mobile-header__hamburger').click(function(event) {
		event.preventDefault();
		$(this).toggleClass('active');
		if($('a.main__mobile-header__hamburger').hasClass('active')) {
			$('.main__menu-wrap').css('display', 'block');
			$('.main__search').css('display', 'block');
		} else {
			$('.main__menu-wrap').css('display', 'none');
			$('.main__search').css('display', 'none');
		}
	});
});

/* Основной сайт (без первой страницы) */

$(document).ready(function() {
	//
	$('.hamburger').on('click', function(event) {
		event.preventDefault();
		$('.header__menu').toggleClass('active fadeInDown');
	});
	//
	/* Запускаем большой рекламный слайдер */
	if ( $('div').is('#big-main-slider') ) {
		$('#big-main-slider').slick({
			dots: false,
			arrows: true,
			infinite: true,
			speed: 100,
			slidesToShow: 1,
			//prevArrow: '.slider-main__slide-prev',
			//nextArrow: '.slider-control.next',
			adaptiveHeight: true
		});
	}
	/* Запускаем слайдер по брендам */
	if ( $('div').is('#main-brands-slider') ) {
		$('#main-brands-slider').slick({
			dots: false,
			arrows: true,
			infinite: true,
			speed: 100,
			slidesToShow: 5,
			//prevArrow: '.slider-main__slide-prev',
			//nextArrow: '.slider-control.next',
			adaptiveHeight: true,
			responsive: [
				{
					breakpoint: 1400,
					settings: {
					dots: false,
					arrows: true,
					infinite: true,
					speed: 100,
					slidesToShow: 3
					}
				},
				{
					breakpoint: 1000,
					settings: {
					dots: false,
					arrows: true,
					infinite: true,
					speed: 100,
					slidesToShow: 1
					}
				}
			]
		});
	}
	/* Запускаем слайдер фото товара*/
	if ( $('div').is('#phodo-preview') ) {
		$('#phodo-preview').slick({
			dots: false,
			arrows: false,
			infinite: true,
			speed: 100,
			slidesToShow: 5,
			//centerMode: true,
			//centerPadding: '10px',
			adaptiveHeight: true,
			responsive: [
				{
					breakpoint: 1480,
					settings: {
						slidesToShow: 4,
					}
				},
				{
					breakpoint: 1240,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 700,
					settings: {
						slidesToShow: 2,
					}
				}
			]
		});
	}
	/* like */
	$('.main__catalog__item-block__like').on('click', function(event) {
		event.preventDefault();
		$(this).addClass('active');
		$(this).removeClass('animation-pop');
		$(this).hide();
		$(this).addClass('animation-pop');
		$(this).show();
		//
		$('.header__liked-btn').find('.quantity').removeClass('animation-pop');
		$('.header__liked-btn').find('.quantity').hide();
		$('.header__liked-btn').find('.quantity').addClass('animation-pop');
		$('.header__liked-btn').find('.quantity').show();
	});
	/* pull in basket */
	$('.catalog__btn_1').on('click', function(event) {
		event.preventDefault();
		$(this).addClass('active');
		$('.header__basket-btn').find('.quantity').removeClass('animation-pop');
		$('.header__basket-btn').find('.quantity').hide();
		$('.header__basket-btn').find('.quantity').addClass('animation-pop');
		$('.header__basket-btn').find('.quantity').show();
	});
	/* выбор картинки превью */
	$('#phodo-preview .product-card__photo-block__preview-img-container').click(function(event) {
		event.preventDefault();
		$('#phodo-preview .product-card__photo-block__preview-img-container').removeClass('active');
		$(this).addClass('active');
	});
	/* выбираем цвет на карточке товара */
	$('.product-card .product-card__choise-color').click(function(event) {
		event.preventDefault();
		$('.product-card .product-card__choise-color').removeClass('active');
		$(this).addClass('active');
	});
	/* кнопка в корзину на карточке товара */
	$('.card-in-basket-btn').click(function(event) {
		event.preventDefault();
		$(this).toggleClass('active');
		$('.header__basket-btn').find('.quantity').removeClass('animation-pop');
		$('.header__basket-btn').find('.quantity').hide();
		$('.header__basket-btn').find('.quantity').addClass('animation-pop');
		$('.header__basket-btn').find('.quantity').show();
	});
	/* кнопка в избранное в карточке товара */
	$('.card-like').click(function(event) {
		event.preventDefault();
		$(this).toggleClass('active')
		$('.header__liked-btn').find('.quantity').removeClass('animation-pop');
		$('.header__liked-btn').find('.quantity').hide();
		$('.header__liked-btn').find('.quantity').addClass('animation-pop');
		$('.header__liked-btn').find('.quantity').show();
	});
	/* табы корзины */
	/*
	
	*/
	/* этапы оформления заказа */
	var step = 1;
	function checkStep() {
		$('.basket__step-content').css('display', 'none');
		$('.basket__step-content').css('display', 'none');
		$('.basket__step-content[data-basket-content="'+step+'"]').css('display', 'block');
		$('a[data-basket-step]').removeClass('active')
		$('a[data-basket-step="'+step+'"]').addClass('active');
		if (step == 3) {
			$('.basket-next-step').hide();
			$('.basket-finish-step').show();
		} else {
			$('.basket-next-step').show();
			$('.basket-finish-step').hide();
		}
	}
	checkStep();
	$('.basket-next-step').click(function(event) {
		event.preventDefault();
		step = step + 1;
		checkStep();
	});
	$('a[data-basket-step]').click(function(event) {
		event.preventDefault();
		$('a[data-basket-step]').removeClass('active')
		$(this).addClass('active')
		var x = $(this).attr('data-basket-step');
		step = x;
		$('.basket__step-content[data-basket-content]').hide();
		$('.basket__step-content[data-basket-content="'+x+'"]').show();
		checkStep();
	});
	//
	// Избранное - чекбоксы
	function favoritesCheckBox() {
		//var parent = $(this).parent()
		
	}
	$('.favorites-checkbox').click(function() {
		favoritesCheckBox()
		$(this).toggleClass('checked');
		var parent = $(this).parent();
		parent.find('input[type="checkbox"]').click();
	});

	/// поиск

	$('.header__search-btn').click(function() {
		$('.search-container').css('display', 'block');
		$('.search-container').css('opacity', '1');
		$('.site-search').focus();
	});
	$('i.close').click(function() {
		$('.search-container').css('display', 'none');
		$('.search-container').css('opacity', '0');
	});

	///* object fit */ 
	objectFit.polyfill({
		selector: 'img', // this can be any CSS selector
		fittype: 'cover', // either contain, cover, fill or none
		disableCrossDomain: 'true' // either 'true' or 'false' to not parse external CSS files.
	});

	////



});