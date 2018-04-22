jQuery(document).ready(function ($) {
    var slide = $('.hall__slide');
    var menuLink = $('.hall__link');

    $(slide[1]).hide();

    menuLink.click(function (e) {
            e.preventDefault();
            if (!$(this).is('.hall__link--active')) {
                $(".hall__menu>a.hall__link--active").removeClass("hall__link--active");
                $(this).addClass("hall__link--active");
                var index = $(this).data('index');
                if (index === 0) {
                    $(slide[1]).fadeOut(function () {
                        $(slide[0]).css("display", "flex").fadeIn();
                    });
                } else {
                    $(slide[0]).fadeOut(function () {
                        $(slide[1]).css("display", "flex").fadeIn();
                    });
                }
            }
        }
    );
});
