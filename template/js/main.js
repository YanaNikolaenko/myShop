(function ($) {
    "use strict";

    /*[ Load page ]
    ===========================================================*/
    $(".animsition").animsition({
        inClass: 'fade-in',
        outClass: 'fade-out',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        loading: true,
        loadingParentElement: 'html',
        loadingClass: 'animsition-loading-1',
        loadingInner: '<div data-loader="ball-scale"></div>',
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: ['animation-duration', '-webkit-animation-duration'],
        overlay: false,
        overlayClass: 'animsition-overlay-slide',
        overlayParentElement: 'html',
        transition: function (url) {
            window.location.href = url;
        }
    });

    /*[ Back to top ]
    ===========================================================*/
    var windowH = $(window).height() / 2;

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > windowH) {
            $("#myBtn").css('display', 'flex');
        } else {
            $("#myBtn").css('display', 'none');
        }
    });

    $('#myBtn').on("click", function () {
        $('html, body').animate({scrollTop: 0}, 300);
    });

////////////////////////////////////////////////////////////////////////////////////////
    $(".js-show-header-dropdown").on('click', function (e) {

        if ($(this).parent().find('.header-dropdown').hasClass('login-dropdown') && !($(this).parent().find('.header-dropdown2').hasClass('register-dropdown show-header-dropdown'))) {
            $(this).parent().find('.header-dropdown').toggleClass('show-header-dropdown');
            $('.cart-dropdown').removeClass("show-header-dropdown");
        }
        else if($(this).parent().find('.header-dropdown').hasClass('cart-dropdown'))
        {
            $(this).parent().find('.header-dropdown').toggleClass('show-header-dropdown');
            $('.login-dropdown').removeClass("show-header-dropdown");
            $('.register-dropdown').removeClass("show-header-dropdown");
        }
        else if ($(this).parent().find('.header-dropdown2').hasClass('register-dropdown show-header-dropdown'))
        {
            $(this).parent().find('.header-dropdown2').removeClass('show-header-dropdown');
        }
    });


    $(".login-button").on('click', function (e) {
        $('.login-dropdown').toggleClass("show-header-dropdown");
        $('.register-dropdown').removeClass("show-header-dropdown");
    });

    $(".register-button").on('click', function (e) {
        $('.login-dropdown').removeClass("show-header-dropdown");
        $('.register-dropdown').toggleClass("show-header-dropdown");
    });



//     $(window).on("click", function () {
//         for (var i = 0; i < menu.length; i++) {
//             $(menu[i]).parent().find('.header-dropdown').removeClass("show-header-dropdown");
//             $(menu[i]).parent().find('.header-dropdown2').removeClass("show-header-dropdown");
//         }
//     });



    /*[ Fixed Header ]
    ===========================================================*/
    var posWrapHeader = $('.topbar').height();
    var header = $('.container-menu-header');

    $(window).on('scroll', function () {

        if ($(this).scrollTop() >= posWrapHeader) {
            $('.header1').addClass('fixed-header');
            $(header).css('top', -posWrapHeader);

        } else {
            var x = -$(this).scrollTop();
            $(header).css('top', x);
            $('.header1').removeClass('fixed-header');

            $('.fixed-header2').find('.login-dropdown').removeClass("show-header-dropdown");
            $('.fixed-header2').find('.register-dropdown').removeClass("show-header-dropdown");
            $('.fixed-header2').find('.cart-dropdown').removeClass("show-header-dropdown");
        }

        if ($(this).scrollTop() >= 200 && $(window).width() > 992) {
            $('.fixed-header2').addClass('show-fixed-header2');
            $('.header2').css('visibility', 'hidden');

            //на странице шоп если из середины страницы проскроллить вверх
            $('.header1').find('.login-dropdown').removeClass("show-header-dropdown");
            $('.header1').find('.register-dropdown').removeClass("show-header-dropdown");
            $('.header1').find('.cart-dropdown').removeClass("show-header-dropdown");

        } else {
            $('.fixed-header2').removeClass('show-fixed-header2');
            $('.header2').css('visibility', 'visible');
            $('.topbar2').find('.login-dropdown').removeClass("show-header-dropdown");
            $('.topbar2').find('.register-dropdown').removeClass("show-header-dropdown");
            $('.topbar2').find('.cart-dropdown').removeClass("show-header-dropdown");

            //если проскроллить на мобильной версии, то все выпадашки спрячутся
            $('.wrap_header_mobile').find('.login-dropdown').removeClass("show-header-dropdown");
            $('.wrap_header_mobile').find('.register-dropdown').removeClass("show-header-dropdown");
            $('.wrap_header_mobile').find('.cart-dropdown').removeClass("show-header-dropdown");
        }


    });

    /*[ Show menu mobile ]
    ===========================================================*/
    $('.btn-show-menu-mobile').on('click', function () {
        $(this).toggleClass('is-active');
        $('.wrap-side-menu').slideToggle();
    });

    var arrowMainMenu = $('.arrow-main-menu');

    for (var i = 0; i < arrowMainMenu.length; i++) {
        $(arrowMainMenu[i]).on('click', function () {
            $(this).parent().find('.sub-menu').slideToggle();
            $(this).toggleClass('turn-arrow');
        })
    }

    $(window).resize(function () {
        if ($(window).width() >= 992) {
            if ($('.wrap-side-menu').css('display') == 'block') {
                $('.wrap-side-menu').css('display', 'none');
                $('.btn-show-menu-mobile').toggleClass('is-active');
            }
            if ($('.sub-menu').css('display') == 'block') {
                $('.sub-menu').css('display', 'none');
                $('.arrow-main-menu').removeClass('turn-arrow');
            }
        }
    });


    /*[ remove top noti ]
    ===========================================================*/
    $('.btn-romove-top-noti').on('click', function () {
        $(this).parent().remove();
    })


    /*[ Block2 button wishlist ]
    ===========================================================*/
    $('.block2-btn-addwishlist').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('block2-btn-towishlist');
        $(this).removeClass('block2-btn-addwishlist');
        $(this).off('click');
    });

    /*[ +/- num product ]
    ===========================================================*/
    $('.btn-num-product-down').on('click', function (e) {
        e.preventDefault();
        var numProduct = Number($(this).next().val());
        if (numProduct > 1) $(this).next().val(numProduct - 1);
    });

    $('.btn-num-product-up').on('click', function (e) {
        e.preventDefault();
        var numProduct = Number($(this).prev().val());
        $(this).prev().val(numProduct + 1);
    });


    /*[ Show content Product detail ]
    ===========================================================*/
    $('.active-dropdown-content .js-toggle-dropdown-content').toggleClass('show-dropdown-content');
    $('.active-dropdown-content .dropdown-content').slideToggle('fast');

    $('.js-toggle-dropdown-content').on('click', function () {
        $(this).toggleClass('show-dropdown-content');
        $(this).parent().find('.dropdown-content').slideToggle('fast');
    });


    /*[ Play video 01]
    ===========================================================*/
    var srcOld = $('.video-mo-01').children('iframe').attr('src');

    $('[data-target="#modal-video-01"]').on('click', function () {
        $('.video-mo-01').children('iframe')[0].src += "&autoplay=1";

        setTimeout(function () {
            $('.video-mo-01').css('opacity', '1');
        }, 300);
    });

    $('[data-dismiss="modal"]').on('click', function () {
        $('.video-mo-01').children('iframe')[0].src = srcOld;
        $('.video-mo-01').css('opacity', '0');
    });

})
(jQuery);