'use strict';

jQuery(document).ready(function ($) {
    if ($('#map').length > 0) {
        var init = function init() {
            myMap = new ymaps.Map("map", {
                center: [59.962115, 30.317611],
                zoom: 17
            });
            myMap.container.fitToViewport();

            myPlacemark = new ymaps.Placemark([59.962115, 30.317611], {
                hintContent: 'БалканскийГурман'
            }, {
                preset: 'islands#redDotIcon'
            });

            myMap.geoObjects.add(myPlacemark);
            myMap.behaviors.disable('scrollZoom');
        };

        ymaps.ready(init);
        var myMap, myPlacemark;
    }
});
'use strict';

jQuery(document).ready(function ($) {
    $('.modal-blur').click(function (e) {
        this.blur();
        e.preventDefault();
    });
});
'use strict';

jQuery(document).ready(function ($) {
    $(window).load(function () {
        setTimeout(function () {
            $('.preloader').fadeOut('slow', function () {});
        }, 2000);
    });
});
'use strict';

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
    });
});