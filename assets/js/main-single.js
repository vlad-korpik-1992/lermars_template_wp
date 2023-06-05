$(document).ready(function() {
    $('.menu__btn').on('click', function (e) {
        e.preventDefault();
		$('.menu__btn').toggleClass('menu__btn--active');
        $('.header--single__list').toggleClass('header__menu__list--active');
    });
})