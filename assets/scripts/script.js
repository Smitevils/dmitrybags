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
});