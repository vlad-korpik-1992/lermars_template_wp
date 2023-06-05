$(document).ready(function() {
    $('.about__box__column__items').on('click', function (e) {
        e.preventDefault();
        let elem = e.target;
		let id = '1' + elem.getAttribute('id');
        $('.about__box__item__inner').removeClass('about__box__item__inner--active');
		jQuery("#"+id).addClass('about__box__item__inner--active');	
    });
	$('.menu__btn').on('click', function (e) {
        e.preventDefault();
		$('.menu__btn').toggleClass('menu__btn--active');
        $('.header__menu__list').toggleClass('header__menu__list--active');
		$('.header--single__list').toggleClass('header__menu__list--active');
    });
    $('.services__box').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		rows: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		infinite: false
	});
	$('.shortlist__box').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		rows: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		infinite: false
	});
	$('.rivals__box').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		rows: 1,
		arrows: true,
		dots: false,
		autoplay: false,
		adaptiveHeight: true,
		infinite: false
	});
	$('.partners__box').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		rows: 1,
		arrows: true,
		dots: false,
		autoplay: true,
		infinite: false,
		responsive: [
		  {
			breakpoint: 767,
			settings: {
			  slidesToShow: 3
			}
		  },
		  {
			breakpoint: 575,
			settings: {
			  slidesToShow: 2
			}
		  },
		]
	});
});