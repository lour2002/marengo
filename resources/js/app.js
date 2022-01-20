import ScrollMagic from 'scrollmagic';
require('slick-carousel/slick/slick');

const BREAKPOINTS = {
    SM: 414,
    MD: 768,
    LG: 1024,
    XL: 1280,
}



$(() => {
    const winWidth = $(window).width();
    const $body = $('.page__body');

    // 18+
    const age_verification = localStorage.getItem('age_verification');

    if (age_verification !== '1') {
        $body.addClass('--active-modal');
        $('.js-age-verification').addClass('--show');

        $('.js-age-verification .js-btn').on('click', function() {
            if ($(this).data('value') === 'yes') {
                $('.js-age-verification').removeClass('--show');
                $body.removeClass('--active-modal');
                localStorage.setItem('age_verification', 1)
            } else {
                location.href = 'https://www.google.com/'
            }
        })
    }

    const headerEl = document.querySelector('header.header');

    // init controller
    const controller = new ScrollMagic.Controller();

    // create a scene
    new ScrollMagic.Scene({
        reverse: true,
        offset: 1
    })
        .on('enter', (event) => {
            headerEl.querySelector('.header__drinks').classList.add('xl:justify-center');
            headerEl.classList.add('bg-white');
        })
        .on('leave', () => {
            headerEl.querySelector('.header__drinks').classList.remove('xl:justify-center');
            headerEl.classList.remove('bg-white');
        })
        .addTo(controller); // assign the scene to the controller

    if (winWidth >= BREAKPOINTS.MD) {
        const $coctailsContainer = $('#coctails');
        const $productsContainer = $('#products');
        const coctails = $('.js-slick-coctails').slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            prevArrow: $coctailsContainer.find('.js-slick-prev'),
            nextArrow: $coctailsContainer.find('.js-slick-next'),
            responsive: [
                {
                    breakpoint: BREAKPOINTS.LG,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
            ]

        });

        const skues = $('.js-slick-sku').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            rows: 2,
            prevArrow: $productsContainer.find('.js-slick-prev'),
            nextArrow: $productsContainer.find('.js-slick-next'),
            responsive: [
                {
                    breakpoint: BREAKPOINTS.LG,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
            ]
        })
    }

    // Events

    const $mobMenu = $('.js-mob-menu');

    $('.js-mob-menu__btn').on('click', () => {
        const $drinksBtns = $(headerEl.querySelector('.header__drinks'));

        $mobMenu.hasClass('--active') ? $mobMenu.removeClass('--active') : $mobMenu.addClass('--active');
        $drinksBtns.hasClass('md:hidden') ? $drinksBtns.removeClass('md:hidden') : $drinksBtns.addClass('md:hidden');
    })

    if (winWidth < BREAKPOINTS.XL) {
        $('.js-show-sku-info').on('click', function (e) {
            $body.addClass('--active-modal');

            const $container = $(this).parents('.list-drinks__info-wrap');

            $container.addClass('--active');
            $(this).siblings('.close').one('click', () => {
                $container.removeClass('--active');
                $body.removeClass('--active-modal');
            })
        })
    }


});