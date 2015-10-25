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
});